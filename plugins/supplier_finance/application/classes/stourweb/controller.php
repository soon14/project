<?php
/**
 * User: Netman
 * Date: 14-3-27
 * Time: 下午9:53
 */

class Stourweb_Controller extends Controller {

  // 用户数据赋值
   public $_data = array();
   public $params = array();
    /*
     * before
     */
   public function before()
   {
       $params = $this->request->param('params');
       $this->params = $this->analyze_param($params);

       $controller = $this->request->controller();
       $action = $this->request->action();
       $second_action=$this->params['action'];
       $this->assign('webname',Common::get_sys_para('cfg_webname'));
       $this->assign('logo',Common::get_sys_para('cfg_logo'));
       $this->assign('cmsurl',URL::site());

   }

   /*
    * 显示模板
    * @param string $tpl,模板名
    * */
   public function display($tpl)
   {
	    $file = $GLOBALS['cfg_default_templet'].$GLOBALS['cfg_client_device'].'/'.$tpl;

       $view = Stourweb_View::factory($file);

       foreach($this->_data as $key=>$value)
       {
           //$view->set($key,$value);
           $view->set_global($key,$value);
       }

       $this->response->body($view->render());


   }

  /*
   * 模板赋值,控制器赋值
   * @param string $key
   * @param string $value
   * */
   public function assign($key,$value)
   {

       $this->_data[$key] = $value;

   }
    /*
  * 变量值分析器
  * @param string $param
  * */
    public function analyze_param($param)
    {

        $arr = explode('/',$param);

        $out = array();
        for($i = 0;isset($arr[$i]) ;$i=$i+1)
        {
           if($i % 2 ==0)
           {
               $key = $arr[$i];
               $value= isset($arr[$i+1]) ? $arr[$i+1] : 0;
               $out[$key] = $value;
           }

        }
        return $out;

    }


} 