<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Class Controller_Tuan 团购
 */
class Controller_Tuan extends Stourweb_Controller
{
    private $_typeid = 13;
    private $appId;
    private $appSecret;

    public function before()
    {
        parent::before();
        $this->appId = 'wxdf8497303505ae0d';
        $this->appSecret = 'ed95f4a2529b5b39f886e3df0e0511bd';
        $signPackage = $this->GetSignPackage();
        //var_dump($signPackage);exit;
        $this->assign('signPackage',$signPackage);
        $this->assign('typeid', $this->_typeid);
        $this->assign('channelname', Model_Nav::get_channel_name($this->_typeid));
    }
    /**
     * 答题活动
     */
    public function action_index()
    {
        //结果页面
        $openid = Cookie::get('openid');
        if(empty($openid)){
            $this->action_book();
        }else{
            //把图片转化为数据
           //答题处理
            $this->assign('name', $name);
            $this->assign('nameshare', $nameshare);
            $this->assign('arr', $arr);
            $this->assign('percent', $percent);
        }
        $this->display('tuan/askresult');
        /*$seoinfo = Model_Nav::get_channel_seo($this->_typeid);
         $this->assign('seoinfo', $seoinfo);
         $this->display('tuan/index');*/
        //显示结果页面
    }
    /**
     * 相似度活动
     */
    public function action_xsd_index()
    {
        //结果页面
        $openid = Cookie::get('openid');
        if(empty($openid)){
            $this->action_book();
        }else{
            //把图片转化为数据
            $shareid = $_GET['shareid'];
            $arr = explode('-',base64_decode($shareid));
            if($arr[0] >= 80){
                $nameshare = "两人相似度".$arr[0]."%，你以后不要再叫爸了——叫哥";
                $name = "你以后不要再叫爸了——叫哥";
                $percent = $arr[0];
            }elseif($arr[0] >= 60 && $arr[0] < 80){
                $nameshare = "两人相似度".$arr[0]."%，恭喜你省掉了DNA鉴定的费用了";
                $name = "恭喜你省掉了DNA鉴定的费用了";
                $percent = $arr[0];
            }elseif($arr[0] >= 40 && $arr[0] < 60){
                $nameshare = "两人相似度".$arr[0]."%，你一定是分别遗传了你父母长相的50%";
                $name = "你一定是分别遗传了你父母长相的50%";
                $percent = $arr[0];
            }elseif($arr[0] >= 10 && $arr[0] < 40){
                $nameshare = "两人相似度".$arr[0]."%，别着急，你可能长得像你妈";
                $name = "别着急，你可能长得像你妈";
                $percent = $arr[0];
            }else{
                $nameshare = "两人相似度".$arr[0]."%，要不你把隔壁老王的照片放上去再看看";
                $name = "要不你把隔壁老王的照片放上去再看看";
                $percent = $arr[0];
            }
            $this->assign('name', $name);
            $this->assign('nameshare', $nameshare);
            $this->assign('arr', $arr);
            $this->assign('percent', $percent);
        }
        $this->display('tuan/askresult');
       /*$seoinfo = Model_Nav::get_channel_seo($this->_typeid);
        $this->assign('seoinfo', $seoinfo);
        $this->display('tuan/index');*/
        //显示结果页面
    }
    public function getConfidence($baseImage,$compareImage){
        //获取单个faceid
        $baseFaceId1 = $this->getFaceId($baseImage);
        $faceIdObj1 = json_decode($baseFaceId1);
        $faceId1 =$faceIdObj1[0]->faceId;
        $baseFaceId2 = $this->getFaceId($compareImage);
        $faceIdObj2 = json_decode($baseFaceId2);
        $faceId2 =$faceIdObj2[0]->faceId;
        $url = "https://api.projectoxford.ai/face/v1.0/verify";
        $jsonArr['faceId1'] = $faceId1;
        $jsonArr['faceId2'] = $faceId2;
        $return = $this->curlrequest($url, $jsonArr,'POST');
        $returnObj = json_decode($return);
        $pecent = $returnObj->confidence;
        $confidence = round($pecent/0.5,2);
        if($confidence > 1 || $confidence ==1){
            $per = 100;
        }else{
            $per = $confidence*100;
        }
        $postStr = $per.'-'.$baseImage.'-'.$compareImage;
        $first = base64_encode($postStr);
        return $first;
    }
    //单个face的id值
    public function getFaceId($imageUrl){
        $url = "https://api.projectoxford.ai/face/v1.0/detect?returnFaceId=true&returnFaceLandmarks=false";
        $jsonArr['url'] = $imageUrl;
        $return = $this->curlrequest($url, $jsonArr,'POST');
        return $return;
    }
    //创建facelist
  /*  public function createList($listName,$userData,$faceListId){
        $url = 'https://api.projectoxford.ai/face/v1.0/facelists/'.$faceListId;
        $jsonArr['name'] = $listName;//facelist名称
        $jsonArr['userData'] = $userData;//用户自定义数据
        $return = $this->curlrequest($url, $jsonArr,'PUT');
        return $return;
    }
    //添加到facelist
    public function addList($imageUrl,$faceListId){
        $url = "https://api.projectoxford.ai/face/v1.0/facelists/".$faceListId."/persistedFaces";
        $jsonArr['url'] = $imageUrl;
        $return = $this->curlrequest($url, $jsonArr,'POST');
        return $return;
    }*/
    function curlrequest($url,$data,$method){
        $headers = array(
            "Content-type:application/json",
            "Ocp-Apim-Subscription-Key:ee6439577eca40ffb7fea9c26a36228a"
        );
        $dataJson = json_encode($data);
        $ch = curl_init(); //初始化CURL句柄
        curl_setopt($ch, CURLOPT_URL, $url); //设置请求的URL
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,1); //设为TRUE把curl_exec()结果转化为字串，而不是直接输出
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method); //设置请求方式
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
        //curl_setopt($ch,CURLOPT_HTTPHEADER,array("X-HTTP-Method-Override: $method","Content-type:application/json","Ocp-Apim-Subscription-Key:ee6439577eca40ffb7fea9c26a36228a"));//设置HTTP头信息
        curl_setopt($ch, CURLOPT_POSTFIELDS, $dataJson);//设置提交的字符串
        $document = curl_exec($ch);//执行预定义的CURL
        if(!curl_errno($ch)){
            $info = curl_getinfo($ch);
           // echo 'Took ' . $info['total_time'] . ' seconds to send a request to ' . $info['url'];
        } else {
            echo 'Curl error: ' . curl_error($ch);
        }
        curl_close($ch);
        return $document;
    }

    /**
     * 添加得分记录
     * @param $useTime
     * @param $rightNum
     * @param $type
     * @param $openid
     * @return bool
     */
    protected function action_addresult($useTime,$rightNum,$openid){
        //判断是否是最高成绩
        $sql = "SELECT rightnum,usetime,ctime,useno,chanceno FROM sline_activity_user WHERE openid = '$openid'";
        $result_arr = DB::query(1, $sql)->execute()->as_array();
        $result = $result_arr[0];
        $ctime = time();
        $rs_arr = array();
        if(empty($result)){
            $chanceno = 3;
            $useno = 1;
            list($insert_id, $total_rows) = DB::insert('activity_user', array('openid', 'chanceno', 'rightnum', 'usetime', 'ctime', 'useno'))
                ->values(array($openid,$chanceno,$rightNum,$useTime,$ctime,$useno))
                ->execute();
            $rs_arr['ctime'] = $ctime;
            $rs_arr['usetime'] = $useTime;
            $rs_arr['rightnum'] = $rightNum;
            $current_arr = $this->action_getpercent($rightNum,$useTime);
            $rs_arr['best_rank'] = $current_arr['rank'];
            $rs_arr['current_rank'] = $current_arr['rank'];
            $rs_arr['num'] = $current_arr['num'];
            $rs_arr['percent'] = $current_arr['percent'];
            $rs_arr['designation'] = $current_arr['designation'];
            return $rs_arr;
        }else{
                //按得分,按答题花费时间
                if($rightNum > $result['rightnum'] || $rightNum == $result['rightnum'] && $useTime < $result['usetime']){
                    $query = DB::query(Database::UPDATE,"UPDATE sline_activity_user SET rightnum =$rightNum,usetime = $useTime,ctime = $ctime WHERE openid ='$openid'");
                    $query->execute();
                    $rs_arr['ctime'] = $ctime;
                    $rs_arr['usetime'] = $useTime;
                    $rs_arr['rightnum'] = $rightNum;
                    $current_arr = $this->action_getpercent($rightNum,$useTime);
                    $rs_arr['best_rank'] = $current_arr['rank'];
                    $rs_arr['current_rank'] = $current_arr['rank'];
                    $rs_arr['num'] = $current_arr['num'];
                    $rs_arr['percent'] = $current_arr['percent'];
                    $rs_arr['designation'] = $current_arr['designation'];
                    return $rs_arr;
                }else{
                    $rs_arr['ctime'] = $ctime;
                    $rs_arr['usetime'] = $useTime;
                    $rs_arr['rightnum'] = $rightNum;
                    $current_arr = $this->action_getpercent($rightNum,$useTime);
                    $best_arr = $this->action_getpercent($result['rightnum'],$result['usetime']);
                    $rs_arr['best_rank'] = $best_arr['rank'];
                    $rs_arr['current_rank'] = $current_arr['rank'];
                    $rs_arr['num'] = $current_arr['num'];
                    $rs_arr['percent'] = $current_arr['percent'];
                    $rs_arr['designation'] = $current_arr['designation'];
                    return $rs_arr;
                }
        }
    }
    /**
     * 处理显示百分比和前面人数
     * @param $uid
     * @return array
     *
     */
    protected function action_getpercent($rightnum,$usetime){
        //所有用户最好记录
        $sql = "SELECT rightnum,usetime,ctime,useno FROM sline_activity_user";
        $allResultScore = DB::query(1, $sql)->execute()->as_array();
        //总记录数
        $total = count($allResultScore);
        //当前的名次
        $current_arr = $this->getCurrent($rightnum,$usetime);
        //战胜的百分比
        $current = $current_arr[0]['currentnum'];
        $num = ($current+1)/$total*100;
        if($num == 100){
            $designation = '清华潜力股';
        }else if($num >=80){
            $designation = '小学学霸';
        }else if($num >=60){
            $designation = '小学学渣';
        }else{
            $designation = '留级专业户';
        }
        $winPercent = round($num).'%';

        $paiMing = $total-$current;
        $resultArr = array(
            'rank' => $paiMing,
            'num' => $num,
            'designation' => $designation,
            'percent' => $winPercent
        );
        return $resultArr;
    }
    public function getALLResult(){
        $sql = "select a.*,b.ChatNick,b.headimgurl from sline_activity_user a LEFT JOIN sline_wxusermanage b on a.openid=b.openid ORDER BY rightnum DESC,CONVERT(`a`.`usetime`,DECIMAL(10,2))  ASC,useno ASC,ctime ASC LIMIT 0,100";
        $result = DB::query(1, $sql)->execute()->as_array();
        return $result;
    }
    public function getCurrent($rightnum,$usetime){
        $sql = 'select count(*) as currentnum from sline_activity_user  where rightnum <'.$rightnum.' OR (rightnum = '.$rightnum.' AND usetime > '.$usetime.')';
        $result = DB::query(1, $sql)->execute()->as_array();
        return $result;
    }
    /**
     * 团购列表
     */
    public function action_list()
    {
        $data = $this->getALLResult();
        $this->assign('list', $data);
        $this->display('tuan/rand_list');
/*        $uri = $this->request->param('params');
        $data = $this->_explode_url($uri);
        $destname = $data['destPy'] != 'all' ? ORM::factory('destinations')->where("pinyin='{$data['destPy']}'")->find()->get('kindname') : '目的地';
        //获取seo信息
        $seo = Model_Tuan::search_seo($data['destPy']);
        $this->assign('seoinfo', $seo);
        $this->assign('destpy', $data['destPy']);
        $this->assign('status', $data['status']);
        $this->assign('destname', $destname);
        $this->assign('attrid', $data['attrId']);
        $this->assign('page', $data['page']);
        $this->assign('sorttype', $data['sorttype']);
        $this->assign('keyword', $data['keyword']);
        $this->display('tuan/list');*/
    }

    /**
     * 团购搜索
     */
    public function action_search()
    {
        $this->display('tuan/search');
    }

    /**
     * 分隔URL参数 tuan/destPy-status-attrId-page?sorttype&keyword
     * @return mixed
     */
    private function _explode_url($uri)
    {
        $params = explode('-', str_replace('/', '-', Common::remove_xss($uri)));
        $count = count($params);
        if ($count == 0)
        {
            exit;
        }
        switch ($count)
        {
            case 1:
                $data['status'] = $data['attrId'] = 0;
                list($data['destPy']) = $params;
                break;
            case 2:
                $data['attrId'] = 0;
                list($data['destPy'], $data['status']) = $params;
                break;
            case 3:
                list($data['destPy'], $data['status'], $data['attrId']) = $params;
                break;
            case 4:
                list($data['destPy'], $data['status'], $data['attrId'], $data['page']) = $params;
                break;
        }
        //分页
        $data['page'] = empty($data['page']) ? 1 : $data['page'];
        //关键字
        $data['keyword'] = empty($_GET['keyword']) ? '' : $_GET['keyword'];
        //排序
        $data['sorttype'] = empty($_GET['sorttype']) ? 0 : $_GET['sorttype'];
        return $data;
    }

    /**
     * AJAX 获取团购列表数据
     */
    public function action_ajax_tuan_data()
    {
        $openid = Cookie::get('openid');
        if(empty($openid)){
            //$this->action_book();
            echo 1;
        }else {
            $baseImage = "http://www.aitto.net/".$_POST['img_l'];
            $compareImage = "http://www.aitto.net/".$_POST['img_r'];
            $rs = $this->getConfidence($baseImage,$compareImage);
            if(empty($rs)){
                echo 0;
            }else{
                echo json_encode($rs);
            }
        }
       /* $uri = $this->request->param('params');
        $uri = $this->_explode_url($uri);
        $data = Model_Tuan::list_data($uri);
        foreach ($data as &$v)
        {
            $v['url'] = Common::get_web_url($v['webid']) . "/tuan/show_{$v['aid']}.html";
            $v['litpic'] = Common::img($v['litpic'],620,408);
            $v['sellnum'] = Model_Member_Order::get_sell_num($v['id'], $this->_typeid) + intval($v['bookcount']);
            $v['discount'] = $v['price'] == $v['sellprice'] ? '不打' : round($v['price'] / $v['sellprice'], 2) * 10;
        }
        echo Product::list_search_format($data, $uri['page']);*/
    }

    /**
     * 团购详情
     */
    public function action_show()
    {
        $openid = Cookie::get('openid');
        if(empty($openid)){
            $this->action_book();
            //$this->display('tuan/show');
        }else{
            /*$query = DB::query(Database::UPDATE,"UPDATE sline_activity_user SET chanceno = chanceno-1,useno = useno+1 WHERE openid ='$openid'");
            $query->execute();*/
            $this->display('tuan/show_dati');
        }
        //$this->action_showResult();
/*        $aid = Common::remove_xss($this->request->param('aid'));
        //子站内容显示
        if (isset($_GET[webid]))
        {
            $GLOBALS['sys_webid'] = Common::remove_xss(Arr::get($_GET, 'webid'));
        }
        $row = Model_Tuan::tuan_detail($aid);
        //点击率加一
        Product::update_click_rate($aid, $this->_typeid);
        //评论次数
        $row['commentnum'] = Model_Comment::get_comment_num($row['id'], $this->_typeid);
        $row['satisfyscore'] = Model_Comment::get_score($row['id'], $this->_typeid, $row['satisfyscore'], $row['commentnum']);//满意度
        //销售数量
        $row['sellnum'] = Model_Member_Order::get_sell_num($row['id'], $this->_typeid) + intval($row['virtualnum']);
        //产品图片
        $row['piclist'] = Product::pic_list($row['piclist']);
        //折扣
        $row['discount'] = round($row['price'] / $row['sellprice'], 2) * 10;
        $extend_info = Model_Tuan::tuan_extend($row['id']);
        $seoInfo = Product::seo($row);
        $this->assign('info', $row);
        $this->assign('seoinfo', $seoInfo);
        $this->assign('extendinfo', $extend_info);
        $this->display('tuan/show');*/
    }

    /**
     * 团购预订
     */
    public function action_book()
    {
        $openid = Cookie::get('openid');
        if(empty($openid)){
            if($_GET['code']){
                $openid = $this->action_getOpenid($_GET['code']);
                $isPayAttion = $this->action_checkOpenid($openid);
                $this->assign('isAttion',$isPayAttion);
/*                if($isPayAttion == 1){
                    $this->action_Answer($openid);
                }else{
                    //跳转提示关注页面
                    //header("Location:http://mp.weixin.qq.com/s?__biz=MzIxOTIzODM0Ng==&mid=100000333&idx=1&sn=0b49ea72b961ee573642eb87fa3c27e9#rd");
                    $this->assign('isAttion',$isPayAttion);
                }*/

            }else{
                $ret_url = urlencode('http://www.aitto.net/phone/tuan/book/id/3');
                $url = 'https://open.weixin.qq.com/connect/oauth2/authorize?appid=wxdf8497303505ae0d&redirect_uri='.$ret_url.'&response_type=code&scope=snsapi_base&state=STATE#wechat_redirect';
                header('Location:'.$url);
            }
        }else{
            $this->action_Answer($openid);
            $isPayAttion = $this->action_checkOpenid($openid);
            $this->assign('isAttion',$isPayAttion);
/*            if($isPayAttion == 1){
                $this->action_Answer($openid);
            }else{
                //跳转提示关注页面
                $this->assign('isAttion',$isPayAttion);
                //header("Location:http://mp.weixin.qq.com/s?__biz=MzIxOTIzODM0Ng==&mid=100000333&idx=1&sn=0b49ea72b961ee573642eb87fa3c27e9#rd");
            }*/
        }
        //$this->display('tuan/activity');
        $this->display('tuan/show_dati');

    }
    //答题活动
    public function action_Answer($openid){
        //答题人数
       $sql = "select count(`openid`) as peoplenum from `sline_activity_user`";
        $peoplenum = DB::query(1, $sql)->execute()->as_array();
        $this->assign('peoplenum',$peoplenum[0]['peoplenum']);
        //查询剩余答题次数
        $sql = "select chanceno,sharenum from `sline_activity_user` where openid='".$openid."'";
        $chancenoArr = DB::query(1, $sql)->execute()->as_array();
        $this->assign('chanceno',$chancenoArr);
        //var_dump($chancenoArr);待测试，先添加数据再说
        //var_dump($peoplenum);
        //--------------------------------
        $this->appId = 'wxdf8497303505ae0d';
        $this->appSecret = 'ed95f4a2529b5b39f886e3df0e0511bd';
        $signPackage = $this->GetSignPackage();
        //var_dump($signPackage);exit;
        $this->assign('signPackage',$signPackage);
        //--------------------------------*/
        //显示
       // $this->display('tuan/activity');
    }
    //注册新用户模式活动20160509
    public function action_OldBook(){
        //--------------------------------
        $this->appId = 'wxdf8497303505ae0d';
        $this->appSecret = 'ed95f4a2529b5b39f886e3df0e0511bd';
        $signPackage = $this->GetSignPackage();
        //var_dump($signPackage);exit;
        $this->assign('signPackage',$signPackage);
        //--------------------------------
        $userinfo = Common::session('member');
        //要求预订前必须登陆
        /*        if (!empty($GLOBALS['cfg_login_order']) && empty($userinfo['mid']))
                {
                    $this->request->redirect(Common::get_main_host().'/phone/member/login?redirecturl=' . urlencode(Common::get_current_url()));
                }*/
        $productid = Common::remove_xss($this->params['id']);
        $info = ORM::factory('tuan', $productid)->as_array();
        $info['price'] = Currency_Tool::price($info['price']);
        $info['sellprice'] = Currency_Tool::price($info['sellprice']);
        $info['dingjin'] = Currency_Tool::price($info['dingjin']);
        $info['litpic'] = Common::img($info['litpic'], 150, 90);
        $this->assign('info', $info);
        $this->assign('userinfo', $userinfo);
        $member = Common::session('member');
        if (!empty($member))
        {
            $memberMsg = Model_Member::get_member_byid($member['mid']);
            $this->assign('member', $memberMsg);
        }
        //查看是否已经到达限制数量1
        $isBuy = $this->action_isBuy($memberMsg['mobile']);
        $this->assign('isBuy', $isBuy[0]['status']);
        $this->display('tuan/book');
    }
    public function action_checkOpenid($openid){
        $sql = "select id from `sline_wxusermanage` where isCancel = 1 AND openId='$openid'";
        $ar = DB::query(1, $sql)->execute()->as_array();
        return empty($ar) ? 2 : 1;
    }
    //获取code
    public function action_getCode(){
        $ret_url = urlencode('http://www.aitto.net/phone/tuan/book/id/3');
        $url = 'https://open.weixin.qq.com/connect/oauth2/authorize?appid=wxdf8497303505ae0d&redirect_uri='.$ret_url.'&response_type=code&scope=snsapi_base&state=STATE#wechat_redirect';
        header('Location:'.$url);
    }
    //获取openid
    public function action_getOpenid($code)
    {
      $getMsgUrl = 'https://api.weixin.qq.com/sns/oauth2/access_token?appid=wxdf8497303505ae0d&secret=ed95f4a2529b5b39f886e3df0e0511bd&code='.$code.'&grant_type=authorization_code';
      $data = json_decode(file_get_contents($getMsgUrl),true);
      $openid = $data['openid'];
      $expires =  mktime().time()+60*60*24*30 ;
      Cookie::set('openid',$openid,$expires);
      return $openid;
    }
    //验证是否购买过产品
    public function action_isBuy($phone){
        $sql = "SELECT status FROM `sline_member_order` WHERE typeid = 13 AND linktel='$phone'";
        $ar = DB::query(1, $sql)->execute()->as_array();
        return $ar;
    }
    /**
     * 团购订单
     */
    public function action_create()
    {
        $refer_url = $_SERVER['HTTP_REFERER'] ? $_SERVER['HTTP_REFERER'] : $this->cmsurl;
        //联系人
        //$linkman = '1元冲5元话费活动';
        $linkman = Arr::get($_POST, 'linkman');
        //手机号
        $linktel = Arr::get($_POST, 'linktel');
        //身份证
        $linkidcard = Arr::get($_POST, 'linkidcard');
        //备注信息
        $remark = Arr::get($_POST, 'remark');
        //产品id
        $id = Arr::get($_POST, 'productid');
        //预订数量
        $dingnum = Arr::get($_POST, 'dingnum');
        $isBuy = $this->action_isBuy($linktel);
        if ($isBuy == 0)
        {
            Common::message(array('message' => __("您好，不能重复购买"), 'jumpUrl' => $refer_url));
        }else{
            //验证部分
            $validataion = Validation::factory($_POST);
            $validataion->rule('linktel', 'not_empty');
            $validataion->rule('linktel', 'phone');
            $validataion->rule('linkman', 'not_empty');
            $validataion->rule('dingnum', 'regex', array(':value', '/^[1-9]+$/'));
            if (!$validataion->check())
            {
                $error = $validataion->errors();
                $keys = array_keys($validataion->errors());
                Common::message(array('message' => __("error_{$keys[0]}_{$error[$keys[0]][0]}"), 'jumpUrl' => $refer_url));
            }
            //二次验证
            $info = Model_Tuan::tuan_detail_id(intval($id));
            if ($info['paytype'] == '3')//这里补充一个当为二次确认时,修改订单为未处理状态.
            {
                $info['status'] = 0;
            } else
            {
                $info['status'] = 1;
            }
            //合并生成订单
            $ordersn = Product::get_ordersn((string)$this->_typeid);
            $rand = rand(1111,9999);
            $ordersn = $ordersn.$rand;
            $arr = array(
                'ordersn' => $ordersn,
                'webid' => 0,
                'typeid' => $this->_typeid,
                'productautoid' => $id,
                'productaid' => $info['aid'],
                'productname' => $info['title'],
                'litpic' => $info['litpic'],
                'price' => $info['price'],
                'childprice' => $info['childprice'],
                'jifentprice' => $info['jifentprice'],
                'jifenbook' => $info['jifenbook'],
                'jifencomment' => $info['jifencomment'],
                'paytype' => $info['paytype'],
                'dingjin' => $info['dingjin'],
                'usedate' => $info['usedate'],
                'departdate' => $info['departdate'],
                'addtime' => time(),
                'memberid' => null,
                'dingnum' => $dingnum,
                'childnum' => 0,
                'oldprice' => 0,
                'oldnum' => 0,
                'linkman' => $linkman,
                'linktel' => $linktel,
                'linkidcard' => $linkidcard,
                'suitid' => 0,
                'remark' => $remark,
                'status' => $info['status'] ? $info['status'] : 0,
                'usejifen' => $_POST['usejifen'] != 0 ? 1 : 0 //积分抵现
            );
            //添加订单,跳转支付
            if (Product::add_order($arr))
            {
                $sql = "SELECT id FROM `sline_member_order` WHERE ordersn='$ordersn'";
                $ar = DB::query(1, $sql)->execute()->as_array();
                if ($info['status'] == 1)
                {
                    $html = Common::payment_from(array('ordersn' => $ordersn));
                    if ($html)
                    {
                        echo $html;
                    }
                } else
                {
                    $url = Common::get_web_url($info['webid']) . '/pub/paystatus/?sign=13';
                    $this->request->redirect($url);
                }
            }
        }

    }
    public function getSignPackage() {
        $jsapiTicket = $this->getJsApiTicket();

        // 注意 URL 一定要动态获取，不能 hardcode.
        $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
        $url = "$protocol$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

        $timestamp = time();
        $nonceStr = $this->createNonceStr();

        // 这里参数的顺序要按照 key 值 ASCII 码升序排序
        $string = "jsapi_ticket=$jsapiTicket&noncestr=$nonceStr&timestamp=$timestamp&url=$url";

        $signature = sha1($string);

        $signPackage = array(
            "appId"     => $this->appId,
            "nonceStr"  => $nonceStr,
            "timestamp" => $timestamp,
            "url"       => $url,
            "signature" => $signature,
            "rawString" => $string
        );
        return $signPackage;
    }

    private function createNonceStr($length = 16) {
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        $str = "";
        for ($i = 0; $i < $length; $i++) {
            $str .= substr($chars, mt_rand(0, strlen($chars) - 1), 1);
        }
        return $str;
    }

    private function getJsApiTicket() {
        // jsapi_ticket 应该全局存储与更新，以下代码以写入到文件中做示例
        $data = json_decode($this->get_php_file("jsapi_ticket.php"));
        if ($data->expire_time < time()) {
            $accessToken = $this->getAccessToken();
            // 如果是企业号用以下 URL 获取 ticket
            // $url = "https://qyapi.weixin.qq.com/cgi-bin/get_jsapi_ticket?access_token=$accessToken";
            $url = "https://api.weixin.qq.com/cgi-bin/ticket/getticket?type=jsapi&access_token=$accessToken";
            $res = json_decode($this->httpGet($url));
            $ticket = $res->ticket;
            if ($ticket) {
                $data->expire_time = time() + 7000;
                $data->jsapi_ticket = $ticket;
                $this->set_php_file("jsapi_ticket.php", json_encode($data));
            }
        } else {
            $ticket = $data->jsapi_ticket;
        }

        return $ticket;
    }

    private function getAccessToken() {
        // access_token 应该全局存储与更新，以下代码以写入到文件中做示例
        $data = json_decode($this->get_php_file("access_token.php"));
        if ($data->expire_time < time()) {
            // 如果是企业号用以下URL获取access_token
            // $url = "https://qyapi.weixin.qq.com/cgi-bin/gettoken?corpid=$this->appId&corpsecret=$this->appSecret";
            $url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=$this->appId&secret=$this->appSecret";
            $res = json_decode($this->httpGet($url));
            $access_token = $res->access_token;
            if ($access_token) {
                $data->expire_time = time() + 7000;
                $data->access_token = $access_token;
                $this->set_php_file("access_token.php", json_encode($data));
            }
        } else {
            $access_token = $data->access_token;
        }
        return $access_token;
    }

    private function httpGet($url) {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_TIMEOUT, 500);
        // 为保证第三方服务器与微信服务器之间数据传输的安全性，所有微信接口采用https方式调用，必须使用下面2行代码打开ssl安全校验。
        // 如果在部署过程中代码在此处验证失败，请到 http://curl.haxx.se/ca/cacert.pem 下载新的证书判别文件。
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, true);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, true);
        curl_setopt($curl, CURLOPT_URL, $url);

        $res = curl_exec($curl);
        curl_close($curl);

        return $res;
    }

    private function get_php_file($filename) {
        return trim(substr(file_get_contents($filename), 15));
    }
    private function set_php_file($filename, $content) {
        $fp = fopen($filename, "w");
        fwrite($fp, "<?php exit();?>" . $content);
        fclose($fp);
    }
}