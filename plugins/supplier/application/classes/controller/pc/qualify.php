<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 供应商资质验证
 *
 */
class Controller_PC_Qualify extends Stourweb_Controller
{

    private $_id = NULL;
    private $_user_info = NULL;

    public function before()
    {
        parent::before();
        //登陆状态判断
        $this->_id = Cookie::get('st_supplier_id');
        if(empty($this->_id))
        {
            $this->request->redirect('pc/login');
        }
        else
        {
            $this->_user_info = Model_Supplier::get_supplier_byid($this->_id);
            $this->assign('userinfo',$this->_user_info);
        }
    }
    //资质验证首页
    public function action_index()
    {
        $this->display("qualify/index");
    }
    //资质验证步骤
    public function action_step()
    {
        //供应商分类
        $kindlist = Model_Supplier_Kind::get_kind_list();
        $this->assign('kindlist',$kindlist);
        $qualify_data = unserialize($this->_user_info['qualification']);//获取序列化数据
        $isfirstupdate = Common::session('isfirstupdate');
        $this->assign('isfirstupdate',$isfirstupdate);
        $this->assign('qd',$qualify_data);
        $this->display("qualify/step");
    }

    //上传图片
    public function action_ajax_upload_litpic()
    {

        $filedata = Arr::get($_FILES,'filedata');
        $storepath = UPLOADPATH.'/supplier/';
        if(!file_exists($storepath))
        {
            mkdir($storepath);
        }
        $filename = uniqid();
        $out = array();
        if(move_uploaded_file($filedata['tmp_name'], $storepath.$filename.$filedata['name']))
        {
            $out['status'] = 1;
            $out['litpic'] = '/uploads/supplier/'.$filename.$filedata['name'];
        }
        else
        {
            $out['status'] = 0;
        }
        echo json_encode($out);

    }

    //保存资质
    public function action_ajax_save_qualify()
    {
        $arr = array();
        foreach($_POST as $k=>$v)
        {
            $arr[$k] = Common::remove_xss($v);
        }
        $m = ORM::factory('supplier',$this->_id);
        if($m->verifystatus==0)
        {
            Common::session('isfirstupdate',1);
        }
        else
        {
            Common::session('isfirstupdate',-1);
        }

        $qualify = serialize($arr);
        $m->qualification = $qualify;
        $m->verifystatus = 1;
        $out = array();
        $m->save();
        if($m->saved())
        {
            $out['status'] = 1;
            $out['msg']='资料提交成功，我们将在1个工作日内完成审核，请耐心等待！';
        }
        else
        {
            $out['status'] = 0;
        }

        echo json_encode($out);
    }

    //重新验证
    public function action_ajax_reverify()
    {
        $model = ORM::factory('supplier',$this->_id);
        $model->verifystatus = 1;
        $model->save();
        if($model->saved())
        {
            echo json_encode(array('status'=>true,'msg'=>'提交成功'));
        }
        else
        {
            echo json_encode(array('status'=>false,'msg'=>'提交失败'));
        }


    }










}