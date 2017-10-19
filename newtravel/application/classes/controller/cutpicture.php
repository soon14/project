<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 微信公众号开发
 * Class Controller_Weixin
 */
class Controller_Cutpicture extends Stourweb_Controller
{

    private  $parentkey = null;
    private  $itemid = null;
    private  $cutpid;  //  哪期活动的数据
    private  $admin;
    public function before()
    {
        parent::before();

        $sql              = "SELECT * FROM `sline_weblist`";
        $weblist          = DB::query(1,$sql)->execute()->as_array();

        //  ishidden  =0隐藏/ ishidden = 1 展示  哪期活动数据；


        $this ->cutpid  = Arr::get($_GET,'cutpid');

        $session = Session::instance();
        $this->admin = ORM::factory('admin', $session->get('userid'))->get('username');
        $this->assign('username',$this->admin);
        $this->assign('weblist',$weblist[0]);
        $this->assign('parentkey', $this->params['parentkey']);

    }

    public function action_index()
    {

        $action=$this->params['action'];

        $param = $this->params['action'];
        $right = array(
            'read'=>'slook',
            'save'=>'smodify',
            'addsub'=>'sadd',
            'delete'=>'sdelete',
            'update'=>'smodify'
        );
        $user_action = $right[$param];
        if(!empty($user_action)) {
            Common::getUserRight('usernav', $user_action);

        }


        $attrtable = 'startplace';//当前操作表

        if(empty($action))
    {
        $this->display('stourtravel/cutpicture/index');
    }
        else if($action=='read')
        {


            $node=Arr::get($_GET,'node');
            $list=array();
            if($node=='root')//属性组根
            {
                $list=ORM::factory('cutpicture')->get_all();

//                $Sql = "select count(*) as dd from `sline_cutpicture_user` where cutpid=$list[0][id]";
//
//                $list['usercount'] = DB::query(1,$Sql)->execute()->get('dd');


                $list[]=array(
                    'leaf'=>true,
                    'id'=>'0add',
                    'activity_name'=>'<button class="dest-add-btn df-add-btn" onclick="addSub(0)">添加</button>',
                    'allowDrag'=>false,
                    'allowDrop'=>false,
                   // 'litpic'=>'add',
                    'displayorder'=>'add'
                );
            }
            else //子级
            {
                $list=ORM::factory('cutpicture')->where('pid','=',$node)->get_all();
                foreach($list as $k=>$v)
                {
                    //$list[$k]['leaf']=true;
                    $list[$k][]=array(
                        'leaf'=>true,
                        'id'=>$node.'add',
                        'kindname'=>'<button class="dest-add-btn df-add-btn" onclick="addSub('.$list[$k]['id'].')">添加</button>',
                        'allowDrag'=>false,
                        'allowDrop'=>false,
                        'litpic'=>'add',
                        'displayorder'=>'add'
                    );
                }
                $list[]=array(
                    'leaf'=>true,
                    'id'=>$node.'add',
                    'kindname'=>'<button class="dest-add-btn df-add-btn" onclick="addSub('.$node.')">添加</button>',
                    'allowDrag'=>false,
                    'allowDrop'=>false,
                    'litpic'=>'add',
                    'displayorder'=>'add'
                );
            }

            echo json_encode(array('success'=>true,'text'=>'','children'=>$list));
        }
        else if($action=='addsub')//添加子级
        {
            $pid=Arr::get($_POST,'pid');
            $model=ORM::factory('cutpicture');
           // $model->pid=$pid;
            $model->activity_name="自定义";
            $model->displayorder='9999';
            $model->save();

            if($model->saved())
            {
                $model->reload();
                echo json_encode($model->as_array());
            }
        }
        else if($action=='save') //保存修改
        {
            $rawdata=file_get_contents('php://input');
            $field=Arr::get($_GET,'field');

            $data=json_decode($rawdata);
            $id=$data->id;
            if($field)
            {
                $model=ORM::factory('cutpicture',$id);
                if($model->id)
                {

                    $model->$field=$data->$field;
                    $model->save();
                    if($model->saved())
                        echo 'ok';
                    else
                        echo 'no';
                }
            }

        }
        else if($action=='drag') //拖动
        {
            $moveid=Arr::get($_POST,'moveid');
            $overid=Arr::get($_POST,'overid');
            $position=Arr::get($_POST,'position');
            $movemodel=ORM::factory($attrtable,$moveid);
            $overmodel=ORM::factory($attrtable,$overid);
            if($position=='append')
            {
                $movemodel->pid=$overid;
            }
            else
            {
                $movemodel->pid=$overmodel->pid;
            }
            $movemodel->save();
            if($movemodel->saved())
                echo 'ok';
            else
                echo 'no';


        }

        else if($action=='delete')//属性删除
        {
            $rawdata=file_get_contents('php://input');
            $data=json_decode($rawdata);
            $id=$data->id;
            if(!is_numeric($id))
            {
                echo json_encode(array('success'=>false));
                exit;
            }
            $model=ORM::factory('cutpicture',$id);
            $model->delete();

        }
        else if($action=='update')//更新操作
        {
            $id=Arr::get($_POST,'id');
            $field=Arr::get($_POST,'field');
            $val=Arr::get($_POST,'val');
            $model=ORM::factory('cutpicture',$id);
            if($model->id)
            {
                $model->$field=$val;
                $model->save();
                if($model->saved())
                    echo 'ok';
                else
                    echo 'no';
            }
        }

    }
    //参赛用户 人员
    public function action_partUser(){

        $acid    = $this ->cutpid;
       // $acid   = empty($acid) ?$this ->cutpid :  $acid ;
        $useropenid   = Arr::get($_GET,'openid');

        $pagesize = 20;

        $page     = $_GET['page'] ? $_GET['page'] : 1;

        $istakeprize  = trim($_GET['paysource']);

      //  echo $istakeprize;exit;
        $offset   = ceil($page-1)*$pagesize;

        $searchKey  = $_GET['searchKey'] ;

        $sql =  "SELECT * FROM `sline_cutPicture_user` ";
        if(!empty($acid)&& empty($useropenid)){
            $sql  .= " where cutpid=$acid ";
        }elseif(empty($acid)&&!empty($useropenid)){
            $sql  .= " where openid='$useropenid' ";
        }elseif(empty($acid)&&empty($useropenid)){

            $sql  .= " where cutpid>0 ";

        }else{
            $sql .= " where id>0 ";
        }


       if($istakeprize=='0'){
           $sql .= " and istakeprize=$istakeprize ";
       }elseif($istakeprize=='1'){
           $sql .= " and istakeprize=$istakeprize ";
       }

        if(!empty($searchKey)){
             $sql .=" and (id='$searchKey' or nickname like '%$searchKey%' or phone='$searchKey' or phone like '%$searchKey%' ) ";
        }

        $sql .= " ORDER BY addtime asc ";
        $sql .= " limit $offset,$pagesize";

        $re = DB::query(1,$sql)->execute()->as_array();
        //计算总数
        $totalSql = "SELECT count(*) as dd ".strchr($sql," FROM");
        $totalSql = str_replace(strchr($totalSql,"ORDER BY"),'', $totalSql);//去掉order by


        $totalN = DB::query(1,$totalSql)->execute()->get('dd');
        $totalNum = $totalN ? $totalN : 0;

        $total  =  $totalNum;

        $totalPage = ceil($total/$pagesize)*1;

        foreach ($re as &$v){

              $userinfo         =  $this->getheadurl($v['openid']);

              $v['headimgurl']  =  $userinfo['headimgurl'];

              $v['nickname']    =  empty($userinfo['nickname'])? $v['nickname'] : $userinfo['nickname'] ;

              $v['isgz']        =  $userinfo['is_gz'];

        }
        $paysources   =array('0'=>'未领奖','1'=>'已领奖');

        $this  ->assign("cutpid",$acid);

        $this  ->assign('paysources',$paysources);
        $this  ->assign('get',$_GET);
        $this ->assign('page',$page);
        $this  ->assign('totalPage',$totalPage);
        $this->assign('info', $re);

        $this->display('stourtravel/cutpicture/user');


    }
    /*
        * 导入 excel
        */
    public function  action_writeExcel()
    {
        $message = array();

        $filedata = Arr::get($_FILES,'file_stu');

        // 获得文件名
        $filename = $filedata['name'];
        $file_types = explode('.',$filename);
        $file_type  = $file_types[count($file_types)-1];
        if(strtolower($file_type)!='xls'){
            echo '请上传正确格式文件';
        }

        $file_size  = ceil($filedata['size']*1/1000000);
        if($file_size>3){
            echo '文件太大';
        }

        //获得 文件的临时存储地址
        $file_tem_name  =$filedata['tmp_name'];

        include_once'public/vendor/Classes/PHPExcel.php';

        include_once 'public/vendor/Classes/PHPExcel/IOFactory.php';

        include_once 'public/vendor/Classes/PHPExcel/Reader/Excel5.php';
        header("Content-type:text/html;charset=utf-8");

        $objReader=PHPExcel_IOFactory::createReader('Excel5');//use excel2007 for 2007 format

        $file_url   =  $file_tem_name;

        $objPHPExcel=$objReader->load($file_url);//$file_url即Excel文件的路径

        $sheet=$objPHPExcel->getSheet(0);//获取第一个工作表


        $highestRow=$sheet->getHighestRow();//取得总行数

        $highestColumn=$sheet->getHighestColumn(); //取得总列数
        //循环读取excel文件,读取一条,插入一条

        $s  =array();
        for($j=3;$j<=$highestRow;$j++){//从第一行开始读取数据
            $str='';
            for($k='A';$k<=$highestColumn;$k++){            //从A列读取数据
                //这种方法简单，但有不妥，以'\\'合并为数组，再分割\\为字段值插入到数据库,实测在excel中，如果某单元格的值包含了\\导入的数据会为空
                $str.=$objPHPExcel->getActiveSheet()->getCell("$k$j")->getValue().'\\';//读取单元格
            }
            //explode:函数把字符串分割为数组。
            $strs=explode("\\",$str);

            $s[$j-2] =$strs;

            $sql="INSERT INTO `sline_cutPicture_user`(`cutpid`,`nickname`,`phone`,`remark`,`istakeprize`) ";

            $sql.= "VALUES ('{$strs[0]}','{$strs[1]}','{$strs[2]}','{$strs[3]}','{$strs[4]}')";

            DB::query(1,$sql)->execute();

        }

        //  echo json_encode($s);exit;
        echo  "<br/>导入成功....<a href='javascript:' onclick='history.go(-1)'>返回上个页面</a>";

    }
    /*
     * 获取 微信 头像
     */
   public  function  getheadurl($openid)
   {

       $sql = "SELECT * FROM `bbs_hjbox_users` WHERE openid='$openid'";

       $ar =DB::query(1,$sql)->execute()->as_array();

       return $ar[0];

   }

   public  function  action_changestatus(){

           $id  = trim($_POST['id']);
          $time  =date('Y-m-d H:i:s',time());
          $sql          ="UPDATE `sline_cutPicture_user` SET `istakeprize`=1,`take_time`='$time' WHERE id='$id'";
          $s            = DB::query(1,$sql)->execute();
          $file   = fopen('change_cutpicture.txt','a+');


           if($s==1){
              $message  =array('msg'=>'修改成功','status'=>1);
               fwrite($file,$time.'修改了编号为'.$id."的参赛者的领奖装态：修改成功"."\r\n");
               fclose($file);
           }else{
              $message  =array('msg'=>'修改失败','status'=>0);
               fwrite($file,$time.'修改了编号为'.$id."的参赛者的领奖装态：修改失败"."\r\n");
               fclose($file);
           }
           echo json_encode($message);

   }
    /*
     * 导出数据
     */

    public function action_genexcel()

    {
        include_once'public/vendor/Classes/PHPExcel.php';

        $acid    = $this ->cutpid;//  哪期 活动

        $sta = trim($_GET['status']);//是否 兑换

        $istake =trim($_GET['istake']);// 是否 领奖

        $sql =  "SELECT * FROM `sline_cutPicture_user` ";
        if(!empty($acid)) {
            $sql .= " where cutpid=$acid ";
        }else{
            $sql .= " where cutpid>0 ";
        }


            if($istake=='0'){
                $sql .= " and istakeprize='$istake' ";
            }elseif($istake=='1'){
                $sql .= " and istakeprize='$istake' ";
            }
        $sql .= " order by id asc ";


        $arr = DB::query(1,$sql)->execute()->as_array();

        $table = "<table><tr>";

        $table .= "<td>昵称</td>";

        $table .= "<td>预留手机号</td>";

        $table .= "<td>编号</td>";

        $table .= "<td>参与时间</td>";

        if($istake=='0'){
            $table .= "<td>是否领奖</td>";
        }elseif($istake=='1'){
            $table .= "<td>是否领奖</td>";
            $table .= "<td>领奖日期</td>";
        }


        $table .= "</tr>";



        foreach ($arr as &$row)

        {
            $userinfo           =  $this->getheadurl($row['openid']);

            $row['nickname']     =  $userinfo['nickname'];

            $order = $row;

            $table .= "<tr>";

            $table .= "<td>{$row['nickname']}</td>";

            $table .= "<td>{$row['phone']}</td>";

            $table .= "<td>{$row['id']}</td>";

            $table .= "<td>".date("Y-m-d H:i:s",$row['addtime'])."</td>";

                if($istake=='0'){
                    $table .= "<td>未领奖</td>";
                }elseif($istake=='1'){
                    $table .= "<td>已领奖</td>";
                    $table .= "<td>{$row['take_time']}</td>";
                }


            $table .= "</tr>";

        }

        $table .= "</table>";

        $filename = date('Ymdhis');

        header('Pragma:public');

        header('Expires:0');

        header('Content-Type:charset=utf-8');

        header('Cache-Control:must-revalidate,post-check=0,pre-check=0');

        header('Content-Type:application/force-download');

        header('Content-Type:application/vnd.ms-excel');

        header('Content-Type:application/octet-stream');

        header('Content-Type:application/download');

        header('Content-Disposition:attachment;filename=' . $filename . ".xls");

        header('Content-Transfer-Encoding:binary');

        if (empty($arr))

        {

            echo iconv('utf-8', 'gbk', $table);

        }

        else

            echo $table;

        exit();

    }
    /*
       *  导出数据  可以导出头像
       */
    public function  action_genexcel_litpic(){
        include_once'public/vendor/Classes/PHPExcel.php';

        $excel = new PHPExcel();
        $objDrawing = new PHPExcel_Worksheet_Drawing();


        /*设置文本对齐方式*/
        $excel->getDefaultStyle()->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
        $excel->getDefaultStyle()->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
        $objActSheet = $excel->getActiveSheet();

        $letter = array('A','B','C','D','E','F','G','H','I','J','K','L','M');
        /*设置表头数据*/
        $tableheader = array('昵称', '手机号', '编号', '参与时间','截图');

        /*填充表格表头*/
        for($i1 = 0;$i1 < 5;$i1++) {
            $excel->getActiveSheet()->setCellValue("$letter[$i1]1","$tableheader[$i1]");
        }

        $acid    = $this ->cutpid;//  哪期 活动
       // 哪期活动
       $_act =  ORM::factory('cutPicture',$acid)->as_array();
        $act_name = $_act['activity_name'];
        $sta = trim($_GET['status']);//是否 兑换

        $offset = !empty($_GET['offset'])  ? trim($_GET['offset'])*1 : 0;//

        $row    = !empty($_GET['row'])  ? trim($_GET['row'])*1 : 300;//

        $istake =trim($_GET['istake']);// 是否 领奖

        $sql =  "SELECT * FROM `sline_cutPicture_user` ";
        if(!empty($acid)) {
            $sql .= " where cutpid=$acid ";
        }else{
            $sql .= " where cutpid>0 ";
        }


        if($istake=='0'){
            $sql .= " and istakeprize='$istake' ";
        }elseif($istake=='1'){
            $sql .= " and istakeprize='$istake' ";
        }
        $sql .= " order by id asc limit {$offset},{$row}";
      //  $sql .= " order by id asc limit {$offset},{$row}";


        $arr = DB::query(1,$sql)->execute()->as_array();

        $data = array();

        foreach ($arr as $k =>&$row)

        {
            $userinfo           =  $this->getheadurl($row['openid']);
            $data[$k][0]      =  !empty($userinfo['nickname']) ? $userinfo['nickname'] : '没有昵称';
            //$data[$k]['litpic']        =  $userinfo['headimgurl'];
            $data[$k][1]          =  !empty($row['phone']) ? $row['phone'] : '空';
            $data[$k][2]            =  $row['id'];
            $data[$k][3]       =  date("Y-m-d H:i:s",$row['addtime']);
            $data[$k][4]       =   "..".$row['userimg'];
        }
        /*填充表格内容*/
        for ($i = 0;$i < count($data);$i++) {
            $j = $i + 2;


            $p = $i;
            /*向每行单元格插入数据*/
            for ($row = 0;$row < count($data[$i]);$row++) {


                /*设置表格宽度*/
                if($row<(count($data[$i]) -1 )) {
                    $objActSheet->getColumnDimension("$letter[$row]")->setAutoSize(true);;
                }else{
                    $objActSheet->getColumnDimension("$letter[$row]")->setWidth(15);
                }


                /*设置表格高度*/
                $excel->getActiveSheet()->getRowDimension($j)->setRowHeight(100);
                if ($row == (count($data[$i]) -1 )) {

                    /*实例化插入图片类*/
                    $objDrawing = new PHPExcel_Worksheet_Drawing();
                    /*设置图片路径*/
                    $objDrawing->setPath($data[$i][$row]);
                    /*设置图片高度*/
                  //  $objDrawing->setHeight(100);
                    $objDrawing->setWidthAndHeight(150,130);
                    /*设置图片要插入的单元格*/
                    $objDrawing->setCoordinates("$letter[$row]$j");
                    /*设置图片所在单元格的格式*/
                    $objDrawing->setOffsetX(110);
                    $objDrawing->setRotation(20);
                    $objDrawing->getShadow()->setVisible(true);
                    $objDrawing->getShadow()->setDirection(50);
                    $objDrawing->setWorksheet($excel->getActiveSheet());
                    continue;
                }
                $excel->getActiveSheet()->setCellValue("$letter[$row]$j",$data[$i][$row]);
            }
        }

        $write = new PHPExcel_Writer_Excel5($excel);
        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control:must-revalidate, post-check=0, pre-check=0");
        header("Content-Type:application/force-download");
        header("Content-Type:application/vnd.ms-execl");
        header("Content-Type:application/octet-stream");
        header("Content-Type:application/download");
        header("Content-Disposition:attachment;filename=".$act_name.".xls");
        header("Content-Transfer-Encoding:binary");
        $write->save('php://output');
        exit;
    }

    public function  action_checkip(){
        header("Content-type: text/html; charset=utf-8");
        $admin =$this->admin;
         if(empty($admin)){

             $url = 'www.aitto.net/newtravel/index';
             echo "<script>window.location.href=".$url."</script>";
         }else{
             if($admin=='feng'){

                 $sql  ="SELECT `openid`, `helpip` FROM `sline_activity_helper` WHERE helpip!='' ORDER by id asc limit 4300,200";

                 $re   =$this  ->model->get_sql($sql,1);
                 foreach($re as $v){

                     $data =$this->baiduip($v['helpip']);
                     $file = fopen('ip.txt','a+');
                     fwrite($file,date('Y-m-d H:i:s').".返回数据：".var_export($data,true)."\r\n");
                     fclose($file);
                     if($data['city']=='石家庄'){
                         $sql ="UPDATE `bbs_hjbox_users` SET `isSJZ`=1 WHERE openid='$v[openid]'";
                         $this  ->model->get_sql($sql,1);
                     }

                 }
                //  var_dump($re);
             }else{

                 exit("你没有管理权限");
             }
         }
    }
    //获取 判断 ip  是否属于石家庄
    private function get_ip_data($ips){
        //  淘宝code 的int(0) 代表 成功   1  代表失败  当ip 为空 或者错误的ip 返回的code ==1
        /*
         *  淘宝返会的 城市码：city 参数为 ‘石家庄市’ 有城市city_id 字符串''
         *  百度 api  城市码 ：city 参数为‘石家庄’  没有城市ctity_id
         */
        $url="http://ip.taobao.com/service/getIpInfo.php?ip=".$ips;

        $data= $this ->curl($url);

        if($data['code']==0){
            return $data['data'];
        }else{
            $data= $this->baiduip($ips);
            return $data['retData'];
        }

    }
    private function baiduip($ip){

        $url = 'http://apis.baidu.com/apistore/iplookupservice/iplookup?ip='.$ip;
        $header = array(
            'apikey:fd697fa125b0a185069a90af48f0db18',
        );
        $data= $this ->curl($url,$header);

        return $data['retData'];

    }
    private  function  curl($url,$header=null){
        $ch = curl_init();

        // 添加apikey到header
        if($header!=null){
            curl_setopt($ch, CURLOPT_HTTPHEADER  , $header);
        }
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        // 执行HTTP请求
        curl_setopt($ch , CURLOPT_URL , $url);

        $res = curl_exec($ch);

        return json_decode($res,true);
    }
    /**
     * 是否为石家庄ip
     * return 1(限制区域内),0
     */
    private function isSJZ(){
        $tpip = $this->GetIP();

        $ipdata = $this->get_ip_data($tpip);

        $file = fopen('ip.txt','a+');
        fwrite($file,"ip为:".$tpip."的用户；调用接口返回的数据：".var_export($ipdata)."。时间：".time()."\r\n");
        fclose($file);
        if($ipdata['city_id'] == '130100'||$ipdata['city']=='石家庄'){
            return 1;
        }else{
            return 0;//超出区域限制
        }
    }
    private function GetIP(){


        $ip=false;
        if(!empty($_SERVER["HTTP_CLIENT_IP"])){
            $ip = $_SERVER["HTTP_CLIENT_IP"];
        }
        if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ips = explode (", ", $_SERVER['HTTP_X_FORWARDED_FOR']);
            if(count($ips)<2){
                $ips = explode (",", $_SERVER['HTTP_X_FORWARDED_FOR']);
            }
            if ($ip) { array_unshift($ips, $ip); $ip = FALSE; }
            for ($i = 0; $i < count($ips); $i++) {
                if (!eregi ("^(10|172\.16|192\.168)\.", $ips[$i])) {
                    $ip = $ips[$i];
                    break;
                }
            }
        }
        // echo 'ip:'.$ip."<br/>";
        return ($ip ? $ip : $_SERVER['REMOTE_ADDR']);
    }


}