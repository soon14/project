<?php defined('SYSPATH') or die('No direct script access.');
class Controller_Index extends Stourweb_Controller{

    // 现在 为 河北旅游 的  appid  和secret
    private $appId = 'wxdf8497303505ae0d';

    private $appSecret = 'ed95f4a2529b5b39f886e3df0e0511bd';

    public function before()
    {
        parent::before();
        $action = $this->request->action();
        $this->assign('action', $action);

        //分享用到的参数
        $signPackage = $this->GetSignPackage();
        $this->assign('signPackage',$signPackage);
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

        //获取栏目名称与开启状态
        $channel = Model_Nav::get_all_channel_info();
        $this->assign('channel',$channel);
        $this->assign('seoinfo',$seoinfo);

        $keyword =Common::remove_xss(Arr::get($_GET,"keyword"));

        $this ->assign('keyword',$keyword);
        //$this->display('index');
        $this->display('index/newindex');
    }
    public function action_search(){

        $this->display("index/search");
    }
    public function  action_ajax_get_line_spot_mitao(){
        $page  = Common::remove_xss(Arr::get($_GET,"page"));
        $urlParam = $this->request->param('params');
        $page  = !empty($page) ? $page :  1;
        $limit  = 10;
        $offset =  (intval($page)-1)*$limit;

        $keyword =Common::remove_xss(Arr::get($_GET,"keyword"));
        $where ="id>0 ";
        if(!empty($keyword)){
               $where .= " and title like '%$keyword%'";
        }
        //  获取 门票
        $sql = "select * from `spot_line_mitao` where $where order by displayorder asc limit $offset,$limit";

        $arr = DB::query(1, $sql)->execute()->as_array();
        $data = self::data_handle($arr);
        $arr =Product::list_search_format1($data,$page,10);
       echo $arr;
    }

    public  function data_handle($arr){
            if(empty($arr)){
                 return array();
            }
           foreach ($arr as $k =>&$v ) {
               //  门票
               if($v['typeid']==5){

                   $spotInfo  =  ORM::factory("spot",$v['id'])->as_array();
                   $v['lng']  =$spotInfo['lng'];
                   $v['lat']  =$spotInfo['lat'];
                   $v['litpic']=$spotInfo['litpic'];
                   $priceArr = Model_Spot::get_minprice($v['id']);
                   $v['sellprice'] = $priceArr['sellprice'];//挂牌价]

                   $v['price'] = !empty($priceArr['price']) ? $priceArr['price'] : '电询';//最低价
                     if(!empty($spotInfo['kindlist'])) {
                         $v['kindlist'] = Model_Spot::get_mdd($spotInfo['kindlist']);
                     }
                   $v['url'] = Common::get_web_url($v['webid']) . "/spots/show_{$v['aid']}.html";
                   $v['attrlist'] = Model_Spot::spot_attr($spotInfo['attrid']);//属性列表.
                   $v['greate']   = Model_Spot::get_greate($v['attrlist']);

                   $v['ticketinfo']=Model_Spot::get_ticketinfo($v['id']);
                   //扩展字段信息
                   $extend_info  = Model_Spot::get_extend_info($v['id']);

                   $v['biaoqian'] =$extend_info['e_biaoqian'];
               }
               else if($v['typeid']==106){
                   $mitaoInfo  =  ORM::factory("mitao",$v['id'])->as_array();
                   $v['price'] = Model_mitao::get_minprice($v['id']);
                   $v['price'] = Currency_Tool::price($v['price']);
                   $v['attrlist'] = Model_mitao::line_attr($mitaoInfo['attrid']);
                   $v['act_time'] = $mitaoInfo['act_time'];
                   $v['linedate1'] = Model_mitao::line_date($v['id']);//新加  封冀蜀
                   $v['commentnum'] = Model_Comment::get_comment_num($v['id'],106); //评论次数
                   $v['sellnum'] = Model_Member_Order::get_sell_nums($v['id'],106)+intval($v['bookcount']); //销售数量
                   $v['url'] = Common::get_web_url($mitaoInfo['webid']) . "/mitaos/show_{$v['aid']}.html";
                   $v['litpic'] = Common::img($mitaoInfo['litpic']);
                   $v['piclist']= Product::pic_list($mitaoInfo['piclist']);
                   $v['newlitpic'] =$v['piclist'][1][0];

                   $v['attrname1'] =$v['attrlist'][0]['attrname'];
                   $v['attrname2'] =$v['attrlist'][1]['attrname'];
                   $v['ticketinfo']= Model_Mitao::get_mitao_suit($v['id']);
                   $v['now_time']   =time();//新加  fengjishu
                   //截止报名日期
                   $v['linebefore'] = strtotime($mitaoInfo['act_time'])*1-86400*$mitaoInfo['linebefore'];

                   $v['cha_time']   = time()-strtotime($v['linedate1']['endtime1'])*1;//新加  封冀蜀

               }
               else if($v['typeid']==1){
                   // 自驾
                   $linesInfo  =  ORM::factory("line",$v['id'])->as_array();
                   $v['price'] = Model_Line::get_minprice($v['id']);
                   $v['price'] = Currency_Tool::price($v['price']);
                   $v['attrlist'] = Model_Line::line_attr($linesInfo['attrid']);
                   $v['linedate'] = $linesInfo['linedate'];
                   //$v['startcity'] = Model_Startplace::start_city($v['startcity']);
                   $v['linedate1'] = Model_Line::line_date($v['id']);//新加  封冀蜀
                  // $v['commentnum'] = Model_Comment::get_comment_num($v['id'],1); //评论次数
                  // $v['satisfyscore'] = Model_Comment::get_score($v['id'], 1, $v['satisfyscore'], $v['commentnum']);//满意度
                   $v['sellnum'] = Model_Member_Order::get_sell_num($v['id'],1)+intval($linesInfo['bookcount']); //销售数量
                   $v['stock']   = Model_line::get_stock($v['id'])*1;//获得库存
                   $v['url'] = Common::get_web_url($linesInfo['webid']) . "/lines/show_{$v['aid']}.html";
                   $v['litpic'] = Common::img($linesInfo['litpic']);
                   $v['piclist']= Product::pic_list($linesInfo['piclist']);
                   $v['newlitpic'] =$v['piclist'][1][0];
                   $v['title'] = Common::cutstr_html($v['title'], 40);
                   $v['ticketinfo']= Model_line::get_line_suit($v['id']);
                   $v['now_time'] =time();//
                   //截止报名日期
                   $v['linebefore'] = strtotime($linesInfo['linedate'])*1-86400*$linesInfo['linebefore'];

                   $v['cha_time'] =time()-strtotime($v['linedate1']['endtime1'])*1;//新加  封冀蜀

               }

          }
        return $arr;

    }


    public function getSignPackage() {
        $jsapiTicket = $this->getJsApiTicket();

        // 注意 URL 一定要动态获取，不能 hardcode.
        $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
        $url = "$protocol$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

        $timestamp = time();
        $nonceStr = $this->createNonceStr();

        // 这里参数的顺序要按照 key 值 ASCII 码升序排序
        $string = "jsapi_ticket=$jsapiTicket&noncestr=$nonceStr&timestamp=$timestamp&url=$url";

        $signature = sha1($string);

        $signPackage = array(
            "appId"     => $this->appId,
            "nonceStr"  => $nonceStr,
            "timestamp" => $timestamp,
            "url"       => $url,
            "signature" => $signature,
            "rawString" => $string
        );
        return $signPackage;
    }

    private function createNonceStr($length = 16) {
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        $str = "";
        for ($i = 0; $i < $length; $i++) {
            $str .= substr($chars, mt_rand(0, strlen($chars) - 1), 1);
        }
        return $str;
    }

    private function getJsApiTicket() {
        // jsapi_ticket 应该全局存储与更新，以下代码以写入到文件中做示例
        $data = json_decode($this->get_php_file("jsapi_ticket.php"));
        if ($data->expire_time < time()) {
            $accessToken = $this->getAccessToken();
            // 如果是企业号用以下 URL 获取 ticket
            // $url = "https://qyapi.weixin.qq.com/cgi-bin/get_jsapi_ticket?access_token=$accessToken";
            $url = "https://api.weixin.qq.com/cgi-bin/ticket/getticket?type=jsapi&access_token=$accessToken";
            $res = json_decode($this->httpGet($url));
            $ticket = $res->ticket;
            if ($ticket) {
                $data->expire_time = time() + 7000;
                $data->jsapi_ticket = $ticket;
                $this->set_php_file("jsapi_ticket.php", json_encode($data));
            }
        } else {
            $ticket = $data->jsapi_ticket;
        }

        return $ticket;
    }

    private function getAccessToken() {
        // access_token 应该全局存储与更新，以下代码以写入到文件中做示例
        $data = json_decode($this->get_php_file("access_token.php"));
        if ($data->expire_time < time()) {
            // 如果是企业号用以下URL获取access_token
            // $url = "https://qyapi.weixin.qq.com/cgi-bin/gettoken?corpid=$this->appId&corpsecret=$this->appSecret";
            $url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=$this->appId&secret=$this->appSecret";
            $res = json_decode($this->httpGet($url));
            $access_token = $res->access_token;
            if ($access_token) {
                $data->expire_time = time() + 7000;
                $data->access_token = $access_token;
                $this->set_php_file("access_token.php", json_encode($data));
            }
        } else {
            $access_token = $data->access_token;
        }
        return $access_token;
    }

    private function httpGet($url) {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_TIMEOUT, 500);
        // 为保证第三方服务器与微信服务器之间数据传输的安全性，所有微信接口采用https方式调用，必须使用下面2行代码打开ssl安全校验。
        // 如果在部署过程中代码在此处验证失败，请到 http://curl.haxx.se/ca/cacert.pem 下载新的证书判别文件。
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, true);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, true);
        curl_setopt($curl, CURLOPT_URL, $url);

        $res = curl_exec($curl);
        curl_close($curl);

        return $res;
    }

    private function get_php_file($filename) {
        return trim(substr(file_get_contents($filename), 15));
    }
    private function set_php_file($filename, $content) {
        $fp = fopen($filename, "w");
        fwrite($fp, "<?php exit();?>" . $content);
        fclose($fp);
    }


}