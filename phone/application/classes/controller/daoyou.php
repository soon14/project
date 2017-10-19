<?php

defined('SYSPATH') or die('No direct script access.');

/**
 * Class Controller_Customize
 * 私人定制控制器
 */
class Controller_Daoyou extends Controller_Tongyong
{
    protected $typeid = 18;
    protected $pinyin = "daoyou";
    public function before()
    {
        parent::before();
    }
}