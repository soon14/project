<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Index extends Stourweb_Controller{



    private  $_typeid = 0;

    private  $_cache_key = '';

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

        $this->assign('indexpage',1);

        $this->assign('typeid',$this->_typeid);



    }

    //首页

    public function action_index()

    {



        //seo信息

        $seoinfo = array(

            'seotitle' => $GLOBALS['cfg_indextitle'],

            'keyword' => $GLOBALS['cfg_keywords'],

            'description' => $GLOBALS['cfg_description']

        );
        $admin =  trim($_GET['feng']);


        $channel = Model_Nav::get_all_channel_info();

        $this->assign('channel',$channel);

        $this->assign('seoinfo',$seoinfo);

        $all_raiders     = Model_Article::get_hbTravels("37",5);// 河北全攻略
        //获取攻略123 ...日游 的属性
        $dayattr  = Model_Article::get_article_dayattr();

        $this ->assign('dayattr',$dayattr);
        $this ->assign('all_raiders',$all_raiders);

        $templet = Product::get_use_templet('index');

        if(empty($templet))

        {
           if($admin=='feng'){

               $templet ='index/index_5';

           }else{

               $templet = !empty($GLOBALS['cfg_index_templet']) ? 'index/'.str_replace(".htm",'',$GLOBALS['cfg_index_templet']) : 'index/index_1';

           }
        }
        //
       // if($admin=='feng') {
            $this->display('index/index_2017');
//        }else{
//            $this->display('index/index_2');
//
//        }
        //$this->display('index/index_2');

        //缓存内容

        $content = $this->response->body();

        Common::cache('set',$this->_cache_key,$content);



    }

















}