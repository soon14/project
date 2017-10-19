<?php

/**
 * Class Controller_Index
 */
class Controller_Index extends Stourweb_Controller
{
    //客服配置文件
    private  $_kefu_config_file = NULL;

    private  $_conf = array();
    //初始化设置
    public function before()
    {
        $this->_kefu_config_file = BASEPATH.'/data/config.qq.kefu.php';
        $this->_init_conf();
        parent::before();
    }
    //首页
    public function action_index()
    {

        if($this->_conf['display'] == 1 && !empty($this->_conf['templet']))
        {
            $m = new Model_Qq_Kefu();
            $group = $m->get_qq();
            //全局变量获取
            $glb = ORM::factory('sysconfig')->where('webid=0')->get_all();
            $this->assign('group',$group);
            $this->assign('conf',$this->_conf);
            $this->assign('Glb',$glb);
            $this->display($this->_conf['templet']);
        }


    }

    /**
     * 初始化参数
     */
    private function _init_conf()
    {
        if(file_exists($this->_kefu_config_file))
        {
            include_once($this->_kefu_config_file);
            $this->_conf['pos'] = $pos;
            $this->_conf['posh'] = $posh;
            $this->_conf['post'] = $post;
            $this->_conf['display'] = $display;
            $this->_conf['phonenum'] = $phonenum;
            $this->_conf['templet'] = 'tpl'.$qqcl;


        }
        else
        {
            exit();
        }
    }

 

  
}