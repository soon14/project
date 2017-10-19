<?php defined('SYSPATH') or die('No direct script access.');
class Controller_Mycache extends Stourweb_Controller{

    public function action_index() {
        $mychache = Cache::instance("my");
        $content = Common::http("http://www.baidu.com");
        $mychache->set("name",$content);
        echo "OK";
    }

    public function action_name() {
        $mychache= Cache::instance("my");
        $name = $mychache->get("name");
        echo $name;
    }



}