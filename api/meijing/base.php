<?php
include('Crypt3Des.php');

/**
 * Class Base
 *  测试系统：
    登录地址：http://preview1.mjld.com.cn/
    接口地址：http://preview1.mjld.com.cn:8022/Outer/InterfaceV3/请求方法名
    用户名：jkcsdl03
    密码：123456
    加密Key：b30b4fccaa8649dc88e0d4f3
    商户ID：a1406682dac447608ac2fd4bf04d3859
    测试商品编号1
    用这个账号吧
 */
class Base{
    /**
     * 查询地区（SelectAreaList）
     * 合作伙伴用来向平台查询地区列表信息。
     */
    private $businessid;
    private $key;
    private $user;
    private $password;
    function __construct() {
        $this->businessid = 'ef45c6c609fa493984e3dd4ffe524fc4';
        $this->key = '8d05d410d841420c939f9017';
        $this->user = 'yunzhihui';
        $this->password = '123456';
    }
    public function selectAreaList(){
        $time = date('YmdHis', time());
        $content = '<?xml version="1.0" encoding="UTF-8"?><Body><timeStamp>'.$time.'</timeStamp><user>'.$this->user.'</user><password>'.$this->password.'</password><ParentId>0</ParentId></Body>';
        $this->weTo('SelectAreaList',$content);
    }

    /**
     * @param $outBackId 代理商退单号
     * @param $orderid   UTS订单编号
     * @return array|mixed
     * 退单，不能退部分订单
     */
    public function refundByOrderID($outBackId,$orderid){//RefundByOrderID
        $time = date('YmdHis', time());
        $content = '<?xml version="1.0" encoding="UTF-8"?>
                    <Body>
                          <timeStamp>'.$time.'</timeStamp>
                          <user>'.$this->user.'</user>
                          <password>'.$this->password.'</password>
                          <RefundPart>false</RefundPart>
                          <outBackId>'.$outBackId.'</outBackId>
                          <orderid>'.$orderid.'</orderid>
                    </Body>';
        $responseArr = $this->weTo('RefundByOrderID',$content);
        return $responseArr;
    }
    /**
     * @param $goodsId 商品id
     * @param $num     数量
     * @param $order_note 订单备注
     * @param $forecasttime 预定时间【产品详情里IsReserve=True时，需传递该时间；IsReserve=False时，必须保留该值为空】
     * @param $outOrderId 代理商订单编号
     * @param $phone 客户电话【必填】
     * @param $guest_name 客户名
     * @param $identityno 证件号
     * @param $consignee 收货地址(收货人)
     * @param $address 收货地址(具体地址)
     * @param $zipcode 收货地址(邮编)
     * @param $isR 是否实名制 1 实名制  0 非实名制
     * 必填值：user、password、goodsId、num、outOrderId
     */
    public function submitOrder($goodsId,$num,$order_note,$forecasttime,$outOrderId,$phone,$guest_name,$identityno,$consignee,$address,$zipcode,$isR=0,$meberInfo=array()){
        $time = date('YmdHis', time());
        $clientInfos = '';
        if($isR == 1){
            //实名制节点信息
            /**Gender 【男(默认):0,女:1】
             * AgeType 类型【成人(默认)：0，儿童：1，婴儿：2】
             * CredentialType 证件类型【传递证件编号转成十进制后的数字，证件编号见“查询产品详情接口中‘可以实名认证的证件’字段”】
             * CredentialID 证件号
             */
            foreach($meberInfo as $key =>$value){
                $clientInfos .= '<ClientInfo>
                            <Name>$value["Name"]</Name>
                            <Gender>$value["Gender"]</Gender>
                            <AgeType>$value["AgeType"]</AgeType>
                            <Phone>$value["Phone"]</Phone>
                            <CredentialType>$value["CredentialType"]</CredentialType>
                            <CredentialID>$value["CredentialID"]</CredentialID>
                          </ClientInfo>';
            }

        }
        $content = '<?xml version="1.0" encoding="UTF-8"?>
                    <Body>
                          <timeStamp>'.$time.'</timeStamp>
                          <user>'.$this->user.'</user>
                          <password>'.$this->password.'</password>
                          <goodsId>'.$goodsId.'</goodsId>
                          <num>'.$num.'</num>
                          <order_note>'.$order_note.'</order_note >
                          <forecasttime>'.$forecasttime.'</forecasttime >
                          <outOrderId>'.$outOrderId.'</outOrderId>
                          <ClientInfos>'.$clientInfos.'</ClientInfos>
                          <customerinfo>
                            <phone>'.$phone.'</phone>
                            <guest_name>'.$guest_name.'</guest_name>
                            <identityno>'.$identityno.'</identityno>
                            <consignee>'.$consignee.'</consignee>
                            <address>'.$address.'</address>
                            <zipcode>'.$zipcode.'</zipcode>
                        </customerinfo>
                    </Body>';
        $responseArr = $this->weTo('SubmitOrder',$content);
        return $responseArr;
    }

    /**
     * @param $content  xml内容
     * @param $action   方法
     * @return $arr 数据信息
     * 我们向第三方请求方法以及数据的处理
     * 2016/7/26 16：54  tanyichao
     */
    private function weTo($action,$content){
        $rsArr = array();
        $crypt3DesObj = new Crypt3Des($this->key);
        $content3DES = $crypt3DesObj ->encrypt($content);
        //var_dump($content3DES);exit;
        $rs = $this->curlPost($action,$content3DES);
        $rsArr = $this->xmlToArray($rs);//xml数据处理成php数组
        $xmlContent = $crypt3DesObj ->decrypt($rsArr['body']);
        $rsArr['body'] = $this->xmlToArray($xmlContent)['Body'];
        return $rsArr;
    }

    public function toWe(){
        $xml = $_POST['xml'];
        $businessid = $_POST['businessid'];
        $this->toWeLog($_POST);
        if(empty($xml) || $businessid!=$this->businessid){
            exit(0);
        }
        $rsArr = array();
        $crypt3DesObj = new Crypt3Des($this->key);
        $xmlContent = $crypt3DesObj ->decrypt($xml);
        $rsArr = $this->xmlToArray($xmlContent);
        return $rsArr;
    }

    /**
     * 记录第三方传输过来的数据
     * 传输ip，参数，时间
     */
    private function toWeLog($arr){
        $ymd = date('Ymd');
        $ymdhis = date('Y-m-d H:i:s');
        $filename = 'api/meijing/logs/'.$ymd.'.txt';
        $param = '';
        if(!empty($arr)){
            foreach($arr as $key=>$value){
                $param .= $key.':'.$value.',';
            }
        }

        $content = "访问ip:".$_SERVER['REMOTE_ADDR']."\n访问时间 ".$ymdhis."\n 参数：".$param;
        file_put_contents($filename,$content, FILE_APPEND);
    }
    private function xmlToArray($xml){
        //禁止引用外部xml实体
        libxml_disable_entity_loader(true);
        $xmlstring = simplexml_load_string($xml, 'SimpleXMLElement', LIBXML_NOCDATA);
        $val = json_decode(json_encode($xmlstring),true);
        return $val;
    }

    /**
     * curl post 方法
     */
    private function curlPost($action,$content){
        $postArr = array(
            'businessid'=>$this->businessid,
            'content'=>urlencode($content)
        );
        $url = "http://outer.mjld.com.cn/Outer/InterfaceV3/".$action;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch,CURLOPT_ENCODING ,'utf-8');
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (compatible; MSIE 5.01; Windows NT 5.0)');
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_AUTOREFERER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postArr);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $tmpInfo = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'Errno'.curl_error($ch);
        }
        curl_close($ch);
        return $tmpInfo;
    }
}
/*$testObj = new Base();
$rs = $testObj->refundByOrderID('05391830796522', '725171');
var_dump($rs);exit;*/
//提交订单测试通过
/*$goodsId='1';
$num='3';
$order_note='测试订单多个商品';
$forecasttime='2016-7-27 13:56';
$outOrderId='20167271356';
$phone='15930186552';
$guest_name='檀轶超';
$identityno='130133198805023456';
$consignee='檀轶超';
$address='河北石家庄';
$zipcode='051530';
$rs = $testObj->submitOrder($goodsId,$num,$order_note,$forecasttime,$outOrderId,$phone,$guest_name,$identityno,$consignee,$address,$zipcode,$isR=0,$meberInfo=array());
var_dump($rs);exit;*/