<?php defined('SYSPATH') or die('No direct script access.');
class Controller_Daoyou extends Controller_TongYong{

    private $typeid = '#typeid#';
    private $pinyin = '#pinyin#';
    public function before()
    {
        $GLOBALS['typeid'] = $this->typeid;
        $GLOBALS['module_pinyin'] = $this->pinyin;
        parent::before();
    }
    //首页
    public function action_index()
    {
         parent::action_index();
    }
    //详细页
    public function action_show()
    {

        parent::action_show();

    }
    //列表页
    public function action_list()
    {
        parent::action_list();
    }

    //团购预订
    public function action_book()
    {
        parent::action_book();
    }

    //保存订单
    public function action_create()
    {
        parent::action_create();
    }



}