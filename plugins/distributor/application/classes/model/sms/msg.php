<?php
defined('SYSPATH') or die('No direct access allowed.');

class Model_Sms_Msg extends ORM
{
    /*
     * 获取短信模板
     */
    public function message_template($msgtype)
    {
        $info = DB::select()->from('sms_msg')->where("msgtype='{$msgtype}'")->execute()->current();
        return $info['msg'];
    }

    /*
     * 发送短信
     */
    public function send_message($phone,$code, $content, $prefix = '')
    {
        require(VENDORPATH . 'msg.class.php');
        Common::session('msg_code',null);
        $prefix = common::get_sys_para('cfg_webname');
        $msg = new Msg(Common::get_sys_para('cfg_sms_username'),Common::get_sys_para('cfg_sms_password'));
        $status = $msg->sendMsg($phone, $prefix, $content);
        $status = json_decode($status);
        if($status->Success){
            Common::session('msg_code', $code);
            Common::session('msg_phone', $phone);
        }
        return $status->Success;
    }
}