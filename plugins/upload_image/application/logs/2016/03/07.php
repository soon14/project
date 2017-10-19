<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-03-07 09:59:42 --- ERROR: ErrorException [ 1 ]: Class 'Model_Sysconfig' not found ~ APPPATH\classes\common.php [ 566 ]
2016-03-07 09:59:42 --- STRACE: ErrorException [ 1 ]: Class 'Model_Sysconfig' not found ~ APPPATH\classes\common.php [ 566 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2016-03-07 10:00:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2016-03-07 10:00:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\v5\plugins\upload_image\index.php(133): Kohana_Request->execute()
#3 {main}
2016-03-07 10:09:25 --- ERROR: ErrorException [ 1 ]: Call to undefined method Common::cache_config() ~ APPPATH\bootstrap.php [ 168 ]
2016-03-07 10:09:25 --- STRACE: ErrorException [ 1 ]: Call to undefined method Common::cache_config() ~ APPPATH\bootstrap.php [ 168 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2016-03-07 10:12:27 --- ERROR: ErrorException [ 1 ]: Call to undefined method Common::cache_web_list() ~ APPPATH\bootstrap.php [ 170 ]
2016-03-07 10:12:27 --- STRACE: ErrorException [ 1 ]: Call to undefined method Common::cache_web_list() ~ APPPATH\bootstrap.php [ 170 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2016-03-07 10:12:49 --- ERROR: ErrorException [ 1 ]: Call to undefined method Common::get_main_prefix() ~ APPPATH\bootstrap.php [ 172 ]
2016-03-07 10:12:49 --- STRACE: ErrorException [ 1 ]: Call to undefined method Common::get_main_prefix() ~ APPPATH\bootstrap.php [ 172 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2016-03-07 10:13:30 --- ERROR: View_Exception [ 0 ]: The requested view default/pub could not be found ~ APPPATH\classes\stourweb\view.php [ 281 ]
2016-03-07 10:13:30 --- STRACE: View_Exception [ 0 ]: The requested view default/pub could not be found ~ APPPATH\classes\stourweb\view.php [ 281 ]
--
#0 D:\web\v5\plugins\upload_image\application\classes\stourweb\view.php(157): Stourweb_View->set_filename('default/pub')
#1 D:\web\v5\plugins\upload_image\application\classes\stourweb\view.php(30): Stourweb_View->__construct('default/pub', Array)
#2 D:\web\v5\plugins\upload_image\application\classes\stourweb\view.php(586): Stourweb_View::factory('default/pub', Array)
#3 D:\web\v5\plugins\upload_image\application\cache\tplcache\default\image\upload_view.php(6): Stourweb_View::template('pub')
#4 D:\web\v5\plugins\upload_image\application\classes\stourweb\view.php(72): include('D:\web\v5\plugi...')
#5 D:\web\v5\plugins\upload_image\application\classes\stourweb\view.php(373): Stourweb_View->capture('D:\web\v5\plugi...', Array)
#6 D:\web\v5\plugins\upload_image\application\classes\stourweb\controller.php(58): Stourweb_View->render()
#7 D:\web\v5\plugins\upload_image\application\classes\controller\image.php(63): Stourweb_Controller->display('image/upload_vi...')
#8 [internal function]: Controller_Image->action_upload_view()
#9 D:\web\v5\core\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Image))
#10 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#12 D:\web\v5\plugins\upload_image\index.php(133): Kohana_Request->execute()
#13 {main}
2016-03-07 10:22:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/wjj_ico.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2016-03-07 10:22:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/wjj_ico.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\v5\plugins\upload_image\index.php(133): Kohana_Request->execute()
#3 {main}
2016-03-07 10:22:23 --- ERROR: ErrorException [ 1 ]: Call to undefined method Common::getConfig() ~ APPPATH\classes\controller\image.php [ 89 ]
2016-03-07 10:22:23 --- STRACE: ErrorException [ 1 ]: Call to undefined method Common::getConfig() ~ APPPATH\classes\controller\image.php [ 89 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2016-03-07 10:23:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/wjj_ico.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2016-03-07 10:23:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/wjj_ico.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\v5\plugins\upload_image\index.php(133): Kohana_Request->execute()
#3 {main}
2016-03-07 10:23:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/wjj_ico.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2016-03-07 10:23:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/wjj_ico.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\v5\plugins\upload_image\index.php(133): Kohana_Request->execute()
#3 {main}
2016-03-07 10:23:22 --- ERROR: ErrorException [ 1 ]: Call to undefined method Common::getConfig() ~ APPPATH\classes\controller\image.php [ 89 ]
2016-03-07 10:23:22 --- STRACE: ErrorException [ 1 ]: Call to undefined method Common::getConfig() ~ APPPATH\classes\controller\image.php [ 89 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2016-03-07 10:25:41 --- ERROR: ErrorException [ 1 ]: Call to undefined method Common::getConfig() ~ APPPATH\classes\controller\image.php [ 38 ]
2016-03-07 10:25:41 --- STRACE: ErrorException [ 1 ]: Call to undefined method Common::getConfig() ~ APPPATH\classes\controller\image.php [ 38 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2016-03-07 10:25:43 --- ERROR: ErrorException [ 1 ]: Call to undefined method Common::getConfig() ~ APPPATH\classes\controller\image.php [ 38 ]
2016-03-07 10:25:43 --- STRACE: ErrorException [ 1 ]: Call to undefined method Common::getConfig() ~ APPPATH\classes\controller\image.php [ 38 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2016-03-07 10:26:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/wjj_ico.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2016-03-07 10:26:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/wjj_ico.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\v5\plugins\upload_image\index.php(133): Kohana_Request->execute()
#3 {main}
2016-03-07 10:26:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/wjj_ico.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2016-03-07 10:26:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/wjj_ico.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\v5\plugins\upload_image\index.php(133): Kohana_Request->execute()
#3 {main}
2016-03-07 10:48:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/wjj_ico.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2016-03-07 10:48:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/wjj_ico.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\v5\plugins\upload_image\index.php(133): Kohana_Request->execute()
#3 {main}
2016-03-07 10:48:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/wjj_ico.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2016-03-07 10:48:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/wjj_ico.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\v5\plugins\upload_image\index.php(133): Kohana_Request->execute()
#3 {main}
2016-03-07 11:08:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/wjj_ico.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2016-03-07 11:08:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/wjj_ico.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\v5\plugins\upload_image\index.php(133): Kohana_Request->execute()
#3 {main}
2016-03-07 11:08:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/wjj_ico.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2016-03-07 11:08:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/wjj_ico.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\v5\plugins\upload_image\index.php(133): Kohana_Request->execute()
#3 {main}
2016-03-07 11:15:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/wjj_ico.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2016-03-07 11:15:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/wjj_ico.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\v5\plugins\upload_image\index.php(133): Kohana_Request->execute()
#3 {main}
2016-03-07 11:17:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/wjj_ico.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2016-03-07 11:17:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/wjj_ico.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\v5\plugins\upload_image\index.php(133): Kohana_Request->execute()
#3 {main}
2016-03-07 11:17:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/wjj_ico.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2016-03-07 11:17:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/wjj_ico.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\v5\plugins\upload_image\index.php(133): Kohana_Request->execute()
#3 {main}
2016-03-07 11:23:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/wjj_ico.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2016-03-07 11:23:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/wjj_ico.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\v5\plugins\upload_image\index.php(133): Kohana_Request->execute()
#3 {main}
2016-03-07 12:02:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/wjj_ico.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2016-03-07 12:02:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/wjj_ico.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\v5\plugins\upload_image\index.php(133): Kohana_Request->execute()
#3 {main}
2016-03-07 12:02:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/wjj_ico.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2016-03-07 12:02:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/wjj_ico.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\v5\plugins\upload_image\index.php(133): Kohana_Request->execute()
#3 {main}