<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Mobile extends Stourweb_Controller
{
    /*
     * 手机设置总控制器
     * */
    public function before()
    {
        parent::before();
        $configinfo = ORM::factory('sysconfig')->getConfig(0);
        if (!isset($configinfo['cfg_mobile_version']))
        {
            $configinfo['cfg_mobile_version'] = 0;
        }

        $this->assign('config', $configinfo);
        $this->assign('parentkey', $this->params['parentkey']);
        $this->assign('itemid', $this->params['itemid']);
    }

    /*
     * 手机端配置首页
     * */
    public function action_index()
    {
        $this->display('stourtravel/mobile/index');
    }

    /*
     * 系统配置
     * */
    public function action_sys()
    {
        $this->display('stourtravel/mobile/sys');
    }

    /*
    * 手机导航配置操作部分
     * -------------------------------
     * ----------------------------
    * */
    public function action_nav()
    {
        $this->display('stourtravel/mobile/nav');
    }

    /*
   * 手机导航获取(ajax)
   * */
    public function action_ajax_getnav()
    {
        $sql = "SELECT a.id,a.issystem,a.linktype, a.isopen,a.shortname,a.url";
        $sql .= ",b.m_title,b.m_ico,b.m_displayorder,b.m_isopen,b.m_url FROM sline_nav a ";
        $sql .= "LEFT JOIN sline_m_nav b ON a.id=b.navid WHERE a.webid=0 AND a.pid=0 ORDER BY ifnull(b.m_displayorder,9999) ASC,a.displayorder ASC ";
        $arr = DB::query(1, $sql)->execute()->as_array();
        $out = array();
        foreach ($arr as $row)
        {
            $isopen = $row['m_isopen'] ? $row['m_isopen'] : 0;
            $openstatus = $isopen ? Common::getIco('show') : Common::getIco('hide');
            $issystem = $row['linktype'];
            $editcls = $issystem ? "readonly='true'" : '';
            $ar = array();
            $ar['navname'] = $row['m_title'] ? $row['m_title'] : $row['shortname'];
            $ar['displayorder'] = $row['m_displayorder'] == 9999 ? '' : $row['m_displayorder'];
            $ar['isopen'] = $isopen;
            $ar['ico'] = $row['m_ico'] ? $row['m_ico'] : '';
            $ar['linkurl'] = $row['m_url'] ? $row['m_url'] : $row['url'];
            $ar['openstatus'] = $openstatus;
            $ar['issystem'] = $row['linktype'];
            $ar['id'] = $row['id'];
            $ar['editcls'] = $editcls;
            $out[] = $ar;
        }
        echo json_encode(array('list' => $out));
    }

    /*
     * 保存手机导航
     * */
    public function action_ajax_savenav()
    {
        $model = new Model_Nav();
        $model->save_mobile_nav($_POST);
        echo json_encode(array('status' => true));
    }

    /*
     *删除导航
     * */
    public function  action_ajax_delnav()
    {
        $navid = Arr::get($_GET, 'id');
        $model = ORM::factory('nav', $navid);
        $model->delete();
        $out = array();
        if (!$model->loaded())
        {
            $o = ORM::factory('m_nav')->where("navid=$navid")->find();
            $o->delete();
            if (!$o->loaded())
            {
                $out['status'] = true;
            }
            else
            {
                $out['status'] = false;
            }
        }
        else
        {
            $out['status'] = false;
        }
        echo json_encode($out);
    }

    /*
     * 导航ICO图标配置
     * */
    public function action_dialog_ico()
    {
        $navid = $this->params['id'];
        $info = ORM::factory('m_nav')->where("navid=$navid")->find()->as_array();
        $this->assign('info', $info);
        $this->display('stourtravel/mobile/ico');
    }

    /*
     *
     * ico保存
     * */
    public function action_ajax_ico_save()
    {
        $litpic = Arr::get($_POST, 'litpic');
        $id = Arr::get($_POST, 'id');
        $flag = false;
        if ($id)
        {
            $m = ORM::factory('m_nav', $id);
            $m->m_ico = $litpic;
            $m->save();
            if ($m->saved())
                $flag = true;
        }
        echo json_encode(array('status' => $flag));
    }
}