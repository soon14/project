<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Advertise5x extends Stourweb_Controller
{
    /*
     * 广告总控制器
     * */
    public static $rollAd = array(
        'IndexSpotRollingAd',
        'HotelRollingAd',
        'PerformRollingAd',
        'ProductRollingAd',
        'SelftripRollingAd',
        'SpotRollingAd',
        'SpotSuitAd',
        'IndexRollingAd',
        'LineRollingAd',
        'NewsRollingAd'
    );

    public function before()
    {
        parent::before();
        //系统版本
        $version = Model_Sysconfig::system_version();
        if ($version['cfg_pc_version'] == 0 && $version['cfg_mobile_version'] == 0)
        {
            $this->request->redirect('/advertise/index/parentkey/sale/itemid/1');
        }
        $this->assign('parentkey', $this->params['parentkey']);
        $this->assign('itemid', $this->params['itemid']);
        $this->assign('weblist', Common::getWebList());
        $this->assign('isfive', $version['cfg_pc_version'] > 0 && $version['cfg_mobile_version'] > 0);
    }

    /**
     * 广告列表
     */
    public function action_index()
    {
        $action = is_null($this->params['action']) ? 'null' : $this->params['action'];
        switch ($action)
        {
            case 'null':
                $this->assign('position', $this->ads_position());
                $this->display('stourtravel/advertise5x/list');
                break;
            case 'read':
                $start = Arr::get($_GET, 'start');
                $limit = Arr::get($_GET, 'limit');
                $keyword = Arr::get($_GET, 'keyword');
                $prefix = Arr::get($_GET, 'adtype');
                $webid = Arr::get($_GET, 'webid');
                $sort = json_decode(Arr::get($_GET, 'sort'), true);
                $ismobile = Arr::get($_GET, 'ismobile');
                $where = !empty($webid) ? "a.webid={$webid}" : 'a.webid=0';
                if (!empty($keyword))
                {
                    $keyword=preg_replace('~^c_~','0_',$keyword);
                    $keyword=preg_replace('~^s_~','1_',$keyword);
                    $where .= " and (a.position like '%{$keyword}%' or a.custom_label like '%{$keyword}%') or adId='{$keyword}'";
                }
                $order = 'order by p.id asc,a.is_system asc,a.number asc';
                $where .= !empty($prefix) ? " and a.prefix='{$prefix}'" : '';
                if (strlen($ismobile)>0)
                {
                    $ispc=$ismobile==1?0:1;
                    $where .= " and a.is_pc='{$ispc}'";
                }
                $sql = "select a.*,p.kindname,concat(a.is_system,'_',a.prefix,'_',a.number) as adId from sline_advertise_5x as a left join sline_page as p on a.prefix=p.pagename having {$where} {$order} limit {$start},{$limit}";
                $total = DB::query(Database::SELECT, "select a.*,p.kindname,concat(a.is_system,'_',a.prefix,'_',a.number) as adId from sline_advertise_5x as a left join sline_page as p on a.prefix=p.pagename having {$where}")->execute()->as_array();
                $list = DB::query(Database::SELECT, $sql)->execute()->as_array();
                $newlist = array();
                foreach ($list as $k => $v)
                {
                    $v['prefix'] = (int)$v['is_system'] == 1 ? 's_' . $v['prefix'] : 'c_' . $v['prefix'];
                    $v['webid']=Model_Advertise_5x::site($v['webid']);
                    $adsrc = unserialize($v['adsrc']);
                    $adlink = unserialize($v['adlink']);
                    $adname = unserialize($v['adname']);
                    $adorder = unserialize($v['adorder']);
                    $newlist[] = $v;
                    if (is_array($adsrc))
                    {
                        foreach ($adsrc as $adk => $adv)
                        {
                            $add = array();
                            $add['id'] = 'ad_' . $v['id'] . $adk;
                            $add['ad_id'] = $v['id'];
                            $add['ad_src'] = $adv;
                            $add['ad_index'] = $adk;
                            if (is_array($adlink))
                            {
                                $add['ad_link'] = $adlink[$adk];
                            }
                            if (is_array($adname))
                            {
                                $add['ad_name'] = $adname[$adk];
                            }
                            if (is_array($adorder))
                            {
                                $add['ad_order'] = $adorder[$adk];
                            }
                            $newlist[] = $add;
                        }
                    }
                }
                $result['total'] = count($total);
                $result['lists'] = $newlist;
                $result['success'] = true;
                echo json_encode($result);
                break;
            case 'delete':
                $rawdata = file_get_contents('php://input');
                $data = json_decode($rawdata);
                $id = $data->id;
                if (is_numeric($id))
                {
                    $sql = "delete from sline_advertise_5x where id={$id} and is_system='0'";
                    DB::query(Database::DELETE, $sql)->execute();

                }else{
                    //删除广告图片
                    $index=$data->ad_index;
                    $id = $data->ad_id;
                    $data = DB::select()->from('advertise_5x')->where('id', '=', $id)->execute()->current();
                    $adorder=unserialize($data['adorder']);
                    $adname=unserialize($data['adname']);
                    $adlink=unserialize($data['adlink']);
                    $adsrc=unserialize($data['adsrc']);
                    if(isset($adorder[$index])){
                        unset($adorder[$index]);
                    }
                    if(isset($adname[$index])){
                        unset($adname[$index]);
                    }
                    if(isset($adlink[$index])){
                        unset($adlink[$index]);
                    }
                    if(isset($adsrc[$index])){
                        unset($adsrc[$index]);
                    }
                    //序列化
                    $adorder=serialize($adorder);
                    $adname=serialize($adname);
                    $adlink=serialize($adlink);
                    $adsrc=serialize($adsrc);
                    DB::update('advertise_5x')->set(
                        array(
                            'adorder'=>$adorder,
                            'adname'=>$adname,
                            'adlink'=>$adlink,
                            'adsrc'=>$adsrc)
                    )->where('id','=',$id)->execute();
                }
                break;
        }
    }

    public function action_update()
    {
        $id = Arr::get($_POST, 'id');
        $field = Arr::get($_POST, 'field');
        $index = Arr::get($_POST, 'index');
        $val = Arr::get($_POST, 'val');
        $data = DB::select()->from('advertise_5x')->where('id', '=', $id)->execute()->current();
        $rows=0;
        if (!empty($data))
        {
            switch ($field)
            {
                case  'ad_order':
                    $ad_order=unserialize($data['adorder']);
                    if(!$ad_order){
                        $ad_order=array();
                    }
                    $ad_order[$index]=$val;
                    $ad_order=serialize($ad_order);
                    $rows=DB::update('advertise_5x')->set(array('adorder'=>$ad_order))->where('id','=',$id)->execute();
                    break;
            }
        }
        echo $rows>0?'ok':'no';
    }

    /**
     * 添加广告
     */
    public function action_add()
    {
        //手机版广告
        $title = isset($this->params['mobile']) ? '添加手机广告' : '添加广告';
        $this->assign('action', 'add');
        $this->assign('title', $title);
        $this->assign('issystem', $this->params['issystem']);
        $this->assign('ismobile', $this->params['ismobile']);
        $this->assign('position', $this->ads_position());
        $this->display('stourtravel/advertise5x/edit');
    }

    /**
     * 修改广告
     */
    public function action_edit()
    {
        $id = $this->params['id'];
        $info = DB::query(Database::SELECT, "select a.*,p.kindname from sline_advertise_5x as a left join sline_page as p on a.prefix=p.pagename having a.id={$id}")->execute()->as_array();
        $adsrc = unserialize($info[0]['adsrc']);
        $adname = unserialize($info[0]['adname']);
        $adlink = unserialize($info[0]['adlink']);
        $adorder = unserialize($info[0]['adorder']);
        //==============fengjsihu 09.06
        $admdd    = unserialize($info[0]['admdd']);
        $adtime   = unserialize($info[0]['adtime']);
        //==============fengjishu 09.06
       // echo  3333;exit;
        $image = array();
        foreach ($adsrc as $k => $r)
        {
            $image[] = array($adsrc[$k], $adname[$k], $adlink[$k], $adorder[$k],$admdd[$k],$adtime[$k]);
        }
        $info = $info[0];
        $info['image'] = $image;
        $info['tag_prefix'] = $info['is_system'] > 0 ? 's_' : 'c_';
        $info['sign'] = $info['tag_prefix'] . $info['prefix'] . '_' . $info['number'];
        $info['kindlist_arr'] = Model_Destinations::getKindlistArr($info['kindlist']);
        $this->assign('info', $info);
        $this->assign('action', 'edit');
        $this->assign('title', '修改广告');
        $this->assign('position', $this->ads_position());

        $this->display('stourtravel/advertise5x/edit');
    }

    /**
     * 获取广告定位
     * @return array
     */
    private function ads_position()
    {
        $data = DB::query(Database::SELECT, 'select * from sline_page where pid=0')->execute()->as_array();
        foreach ($data as $k => $v)
        {
            $data[$k]['sub'] = DB::query(Database::SELECT, "select * from sline_page where pid={$v['id']}")->execute()->as_array();
        }
        return $data;
    }

    /**
     * 获取广告位标示
     */
    public function action_ajax_number()
    {
        $prefix = Arr::get($_POST, 'prefix');
        $issystem = Arr::get($_POST, 'is_system');
        $ispc = Arr::get($_POST, 'is_pc');
        $webid = Arr::get($_POST, 'webid');
        $sql = "select number from sline_advertise_5x where webid={$webid} and  prefix='{$prefix}' and is_system='{$issystem}' and is_pc='{$ispc}' order by number desc limit 1";
        $num = DB::query(Database::SELECT, $sql)->execute()->as_array();
        $num = empty($num) ? 1 : ($num[0]['number'] + 1);
        echo $num;
    }

    /**
     * ajax保存广告
     */
    public function action_ajax_save()
    {
        $status = false;
        $_POST['kindlist'] = implode(',', $_POST['kindlist']);
        $_POST['adsrc'] = serialize($_POST['adsrc']);
        $_POST['adlink'] = serialize($_POST['adlink']);
        $_POST['adname'] = serialize($_POST['adname']);
        $_POST['adorder'] = serialize($_POST['adorder']);
        //==============fengjishu 09.06
        $_POST['admdd']   = serialize($_POST['admdd']);
        $_POST['adtime']  = serialize($_POST['adtime']);
        //==============fengjishu 09.06
        $action = $_POST['action'];
        $id = $_POST['id'];
        unset($_POST['action']);
        unset($_POST['id']);//var_dump($_POST,array_keys($_POST),array_values($_POST));
        if ($action == 'add' && empty($id))
        {
            $result = DB::insert('advertise_5x', array_keys($_POST))->values(array_values($_POST))->execute();
            if (is_array($result))
            {
                $id = $result[0];
                $status = true;
            }
        }
        else
        {
            $sql = array();
            unset($_POST['is_system']);
            foreach ($_POST as $k => $v)
            {
                array_push($sql, $k . "='{$v}'");
            }
            $sql = implode(',', $sql);
            $sql = "UPDATE `sline_advertise_5x` SET {$sql} WHERE `id` = {$id}";
            $result = DB::query(3, $sql)->execute();
            if ($result)
            {
                $status = true;
            }
        }
        echo json_encode(array('status' => $status, 'productid' => $id));
    }

    /**
     * ajax 切换广告位显示状态
     */
    public function action_ajax_statu()
    {
        $statu = (int)$_GET['statu'];
        $id = $_GET['id'];
        if ($statu > 1 || $statu < 0)
        {
            exit('0');
        }
        $rows = DB::update('advertise_5x')->set(array('is_show' => "$statu"))->where("id={$id}")->execute();
        echo $rows > 0 ? true : false;
    }

    /**
     * 自定义标签位检测
     */
    public function action_ajax_custom()
    {
        $custom = $_POST['custom_label'];
        $sql = "select * from sline_advertise_5x where custom_label='{$custom}' limit 1";
        $arr = DB::query(1, $sql)->execute()->current();
        if (empty($arr))
        {
            $msg = 1;
        }
        else
        {
            $msg = isset($_POST['id']) && $_POST['id'] == $arr['id'] ? 1 : 0;
        }
        echo $msg;
    }
}