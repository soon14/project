<?php defined('SYSPATH') or die('No direct script access.');
class Controller_Photo extends Stourweb_Controller{
    /*
     * 相册总控制器
     * */

    private $typeid = 6;
    private $_cache_key = '';
    public function before()
    {
        parent::before();
        //检查缓存
        $this->_cache_key = Common::get_current_url();
        $html = Common::cache('get',$this->_cache_key);
        $genpage = Common::remove_xss(Arr::get($_GET,'genpage'));
        if(!empty($html) && empty($genpage))
        {
            echo $html;
            exit;
        }
        $channelname = Model_Nav::get_channel_name($this->typeid);
        $this->assign('typeid', $this->typeid);
        $this->assign('channelname', $channelname);
    }

    //首页
    public function action_index()
    {
        $this->request->redirect('photos/all');
    }
    //详细页
    public function action_show()
    {

        $aid = Common::remove_xss($this->request->param('aid'));
        $info = Model_Photo::photo_detail($aid);
        $seoInfo = Product::seo($info);
        //点击率加一
        Product::update_click_rate($aid, $this->typeid);
        //picture
        $piclist = Model_Photo::photo_picture($info['id']);
        foreach ($piclist as &$v)
        {
            if (empty($v['description']))
            {
                $v['description'] = $info['content'];
            }
            $v['bigpic'] = !empty($v['bigpic']) ? $v['bigpic'] : $v['litpic'];

        }
        $info['piclist'] = $piclist;
        //属性列表
        $info['attrlist'] = Model_Photo::photo_attr($info['attrid']);
        //点评数
        $info['commentnum'] = Model_Comment::get_comment_num($info['id'], $this->typeid);
        //图标
        $info['iconlist'] = Product::get_ico_list($info['iconlist']);

        //目的地上级
        if($info['finaldestid']>0)
        {
            $predest = Product::get_predest($info['finaldestid']);
            $this->assign('predest',$predest);
        }
        //扩展字段信息
        $extend_info = Model_Photo::photo_extend($info['id']);
        $this->assign('seoinfo',$seoInfo);
        $this->assign('info', $info);
        $this->assign('extendinfo',$extend_info);
        $this->display('photo/show');
        //缓存内容
        $content = $this->response->body();
        Common::cache('set',$this->_cache_key,$content);


    }
    //列表页
    public function action_list()
    {
        //参数值获取
        $destPy = $this->request->param('destpy');
        $sign = $this->request->param('sign');
        $attrId = $this->request->param('attrid');
        $p = intval($this->request->param('p'));
        $attrId = !empty($attrId) ? $attrId : 0;

        $destPy = $destPy ? $destPy : 'all';
        $pagesize = 12;
        $keyword = Common::remove_xss(Arr::get($_GET,'keyword'));


        $route_array = array(
            'controller' => $this->request->controller(),
            'action' => $this->request->action(),
            'destpy' => $destPy,
            'attrid' => $attrId,
        );
        //$start_time=microtime(true); //获取程序开始执行的时间

        $out = Model_Photo::search_result($route_array,$keyword,$p,$pagesize);
        $pager = Pagination::factory(
            array(

                'current_page' => array('source' => 'route', 'key' => 'p'),
                'view'=>'default/pagination/search',
                'total_items' => $out['total'],
                'items_per_page' => $pagesize,
                'first_page_in_url' => false,
            )
        );
        //配置访问地址 当前控制器方法

        $pager->route_params($route_array);
        $destId = $destPy=='all' ? 0 : ORM::factory('destinations')->where("pinyin='$destPy'")->find()->get('id');
        $destId = $destId ? $destId : 0;
        //目的地信息
        $destInfo = array();
        $preDest = array();
        if($destId)
        {
            $destInfo = ORM::factory('destinations',$destId)->as_array();
            $preDest = Model_Destinations::get_prev_dest($destId);
        }
        //$end_time=microtime(true);

        //$total=$end_time-$start_time; //计算差值

        $chooseitem = Model_Photo::get_selected_item($route_array);
        $searchTitle = Model_Photo::gen_seotitle($route_array);
        $this->assign('destid',$destId);
        $this->assign('destinfo',$destInfo);
        $this->assign('predest',$preDest);
        $this->assign('list',$out['list']);
        $this->assign('chooseitem',$chooseitem);
        $this->assign('searchtitle',$searchTitle);
        $this->assign('param',$route_array);
        $this->assign('currentpage',$p);
        $this->assign('pageinfo',$pager);
        $this->display('photo/list');
        //缓存内容
        $content = $this->response->body();
        Common::cache('set',$this->_cache_key,$content);
    }

    public function action_ajax_add_focus()
    {
        if(!$this->request->is_ajax())exit();

        $productid = Common::remove_xss(Arr::get($_POST,'productid'));
        $m = ORM::factory('photo',$productid);
        $m->favorite = intval($m->favorite)+1;

        $m->save();
        if($m->saved())
        {
            echo 1;
            exit;
        }
    }










}