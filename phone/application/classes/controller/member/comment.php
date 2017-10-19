<?php defined('SYSPATH') or die('No direct script access.');
/** * Class Controller_Member_Comment * 用户评论 */
class Controller_Member_Comment extends Stourweb_Controller{
    /**     * 前置操作     */
    public function before()
    {
        parent::before();
        $this->member = Common::session('member');
        if (empty($this->member))
        {
            Common::message(array('message' => __('unlogin'), 'jumpUrl' => $this->cmsurl . 'member/login'));
        }    }
    /**     * 评论视图     */
    public function action_index()
    {
        $id = Common::remove_xss($_GET['id']);
        $row = Model_Member_Order::get_order_detail($id);
        $this->assign('info', $row);
        $this->display('member/order_comment');
    }
    /**     * 写入评论     */
    public function action_save()
    {
        $id = Common::remove_xss($_GET['id']);
        $_POST = Common::remove_xss($_POST);
          //通过订单号码检测是否id是否合法
                 $row = DB::select()->from('member_order')->where("id={$id}")->execute()->current();
                     //var_dump($row);
                          if (empty($row) || $row['ordersn'] != $_POST['orderid'])
                          {
                              $referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : $this->cmsurl . 'member/order/list';
                              Common::message(array('message' => __('noallow'), 'jumpUrl' => $referer));
                          }
           //写入评论
        $_POST['addtime'] = time();
        $_POST['memberid'] = $this->member['mid'];
        $_POST['isshow'] = 1;
        list(, $row) = DB::insert('comment', array_keys($_POST))->values(array_values($_POST))->execute();
        if ($row > 0)
        {
             //赠送积分,写入积分日志
                     Model_Member::operate_jifen($this->member['mid'], $row['jifencomment'], 2);
            Product::add_jifen_log($this->member['mid'], "评论赠送积分{$row['jifencomment']}分", $row['jifencomment'], 2);
                     //更改订单状态
                          DB::update('member_order')->set(array('ispinlun' => 1))->where("id={$id}")->execute();
            Common::message(array('message' => __('success_comment'), 'jumpUrl' => $this->cmsurl . 'member/order/list'));
        }
        else
        {
            Common::message(array('message' => __('error_comment'), 'jumpUrl' => $_SERVER['HTTP_REFERER']));
        }
    }
}