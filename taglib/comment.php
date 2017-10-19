<?php
/**
 * Created by PhpStorm.
 * Author: netman
 * QQ: 87482723
 * Time: 15-9-28 下午7:35
 * Desc:评论标签
 */
class Taglib_Comment {


    public static function query($params)
    {
        $default=array(
            'flag'=>'all',
            'offset'=>0,
            'row'=>3,
            'time'=>0,
            'typeid'=>0,
            'articleid'=>0
        );
        $params=array_merge($default,$params);
        extract($params);
        //获取全部评论
        if($flag=='all')
        {
            $where = 'WHERE typeid!=4 and typeid !=6';
        }
        else if($flag == 'line' || $typeid==1) //线路评论
        {
            $where = 'WHERE typeid = 1';

        }
        else if($flag == 'hotel' || $typeid==2)
        {
            $where = 'WHERE typeid = 2';

        }
        else if($flag == 'car' || $typeid==3)
        {
            $where = 'WHERE typeid = 3';

        }
        else if($flag == 'raider' || $typeid==4)
        {
            $where = 'WHERE typeid = 4';

        }

        else if($flag == 'spot' || $typeid==5)
        {
            $where = 'WHERE typeid = 5';

        }
        else if($flag == 'photo' || $typeid==6)
        {
            $where = 'WHERE typeid = 6';

        }
        else if($flag == 'visa' || $typeid==8)
        {
            $where = 'WHERE typeid = 8';

        }
        else if($flag == 'tuan' || $typeid==13)
        {
            $where = 'WHERE typeid = 13';

        }
        else if($flag == 'tongyong' || $typeid>13)
        {
            $where = "WHERE typeid = $typeid";
        }

        //如果指定产品id
        if(!empty($articleid))
            $where.=' AND articleid='.$articleid;

        $where.=" AND isshow=1 ";
        //==================fengjishu  06.29 start
        if(!empty($time)){
            if ($time == 'asc') {
                $order_by = 'addtime asc';
            } elseif ($time == 'desc') {
                $order_by = 'addtime desc';
            }
        }
        //==================fengjishu  06.29 end
        else{
            if($flag == 'raider')
            {
                $order_by = 'addtime ASC';
            }
            else
            {
                $order_by = 'addtime DESC';
            }
        }

        $sql="SELECT * FROM `sline_comment` {$where}  ORDER BY {$order_by}  LIMIT $offset,$row";

        $arr = DB::query(1,$sql)->execute()->as_array();
        //=====================fengjishu xinzeng
        $sql ="SELECT COUNT(*) as total FROM `sline_comment` {$where}";
        $a = DB::query(1,$sql)->execute()->as_array();

        //===================================

        foreach($arr as &$r)
        {
            $awardinfo = self::get_award_info($r['orderid']);
            $memberinfo = self::get_member_info($r['memberid']);
            //======================06.08 fengjishu s
            $r['totalNumber'] =$a[0]['total'];
            $r['totalpage']   = ceil($r['totalNumber']/$row*1);
            //======================06.08 fengjishu end
            $r['jifentprice'] = $awardinfo['jifentprice'];
            $r['jifencomment'] = $awardinfo['jifencomment'];
            $r['jifenbook'] = $awardinfo['jifenbook'];
            //=====   06.30 fengjishu s
           if(preg_match("/^1[34578]\d{9}$/", $memberinfo['nickname'])){
               $r['nickname'] = substr($memberinfo['nickname'],0,3)."****".substr($memberinfo['nickname'],7,3); //昵称

           }else{
               $r['nickname'] =$memberinfo['nickname'];
           }
            //====    06.30 fengjsihu e
            $r['litpic']= !empty($memberinfo['litpic']) ? $memberinfo['litpic'] : Common::member_nopic();
            $r['pltime'] = Product::format_addtime($r['addtime']); //评论时间
            $r['percent']=20*$r['level'].'%';
            //判断是否有回复主题
            if(!empty($r['dockid']))
            {
                $reply_userid = ORM::factory('comment',$r['dockid'])->get('memberid');
                $reply_userinfo = self::get_member_info($reply_userid);
                $r['replyname'] = $reply_userinfo['nickname'];
            }

            $r['productname'] = $r['typeid']!='4' && $r['typeid']!='6'  ? self::get_order_name($r['articleid'],$r['typeid'],'',$r['id']) : '';
            if($r['productname']=='')continue;
            $product_info = self::get_product_info($r['articleid'],$r['typeid']);
            $r['product_litpic'] = Common::img($product_info[0]['litpic']);
            if(!empty($r['orderid']))
            {
                $r['product_price'] = ORM::factory('member_order',$r['orderid'])->get('price');
            }
        }

        return $arr;




    }
    /**
    ajax  获取评论

     ***/
    public static function action_querys_conment()
    {
        //echo $flag  =$_POST['flag'];
        $flag       =  $_POST['flag'];
        $typeid     =  $_POST['typeid'];
        $row        =  $_POST['row'];
        $offset     =  empty($_POST['offset'])?0:$_POST['offset'];
        $time       =  $_POST['time'];
        $articleid  =  $_POST['articleid'];

        //获取全部评论
        if($flag=='all')
        {
            $where = 'WHERE typeid!=4 and typeid !=6';
        }
        else if($flag == 'line' || $typeid==1) //线路评论
        {
            $where = 'WHERE typeid = 1';

        }
        else if($flag == 'hotel' || $typeid==2)
        {
            $where = 'WHERE typeid = 2';

        }
        else if($flag == 'car' || $typeid==3)
        {
            $where = 'WHERE typeid = 3';

        }
        else if($flag == 'raider' || $typeid==4)
        {
            $where = 'WHERE typeid = 4';

        }

        else if($flag == 'spot' || $typeid==5)
        {
            $where = 'WHERE typeid = 5';

        }
        else if($flag == 'photo' || $typeid==6)
        {
            $where = 'WHERE typeid = 6';

        }
        else if($flag == 'visa' || $typeid==8)
        {
            $where = 'WHERE typeid = 8';

        }
        else if($flag == 'tuan' || $typeid==13)
        {
            $where = 'WHERE typeid = 13';

        }
        else if($flag == 'tongyong' || $typeid>13)
        {
            $where = "WHERE typeid = $typeid";
        }

        //如果指定产品id
        if(!empty($articleid))
            $where.=' AND articleid='.$articleid;

        $where.=" AND isshow=1 ";
        //==================fengjishu  06.29 start
        if(!empty($time)){
            if ($time == 'asc') {
                $order_by = 'addtime asc';
            } elseif ($time == 'desc') {
                $order_by = 'addtime desc';
            }
        }
        //==================fengjishu  06.29 end
        else{
            if($flag == 'raider')
            {
                $order_by = 'addtime ASC';
            }
            else
            {
                $order_by = 'addtime DESC';
            }
        }

        $sql="SELECT * FROM `sline_comment` {$where}  ORDER BY {$order_by}  LIMIT $offset,$row";

        $arr = DB::query(1,$sql)->execute()->as_array();
        //=====================fengjishu xinzeng
        $sql ="SELECT COUNT(*) as total FROM `sline_comment` {$where}";
        $a = DB::query(1,$sql)->execute()->as_array();

        //===================================

        foreach($arr as &$r)
        {
            $awardinfo = self::get_award_info($r['orderid']);
            $memberinfo = self::get_member_info($r['memberid']);
            //======================06.08 fengjishu s
            $r['totalNumber'] =$a[0]['total'];
            $r['totalpage']   = ceil($r['totalNumber']/2*1);
            //======================06.08 fengjishu end
            $r['jifentprice'] = $awardinfo['jifentprice'];
            $r['jifencomment'] = $awardinfo['jifencomment'];
            $r['jifenbook'] = $awardinfo['jifenbook'];
            //=====   06.30 fengjishu s
            $r['nickname'] = $memberinfo['nickname'];//substr($memberinfo['nickname'],0,3)."****".substr($memberinfo['nickname'],7,3); //昵称
            //====    06.30 fengjsihu e
            $r['litpic']= !empty($memberinfo['litpic']) ? $memberinfo['litpic'] : Common::member_nopic();
            $r['pltime'] = Product::format_addtime($r['addtime']); //评论时间
            $r['percent']=20*$r['level'].'%';
            //判断是否有回复主题
            if(!empty($r['dockid']))
            {
                $reply_userid = ORM::factory('comment',$r['dockid'])->get('memberid');
                $reply_userinfo = self::get_member_info($reply_userid);
                $r['replyname'] = $reply_userinfo['nickname'];
            }

            $r['productname'] = $r['typeid']!='4' && $r['typeid']!='6'  ? self::get_order_name($r['articleid'],$r['typeid'],'',$r['id']) : '';
            if($r['productname']=='')continue;
            $product_info = self::get_product_info($r['articleid'],$r['typeid']);
            $r['product_litpic'] = Common::img($product_info[0]['litpic']);
            if(!empty($r['orderid']))
            {
                $r['product_price'] = ORM::factory('member_order',$r['orderid'])->get('price');
            }
        }

        return json_decode($arr);//code($arr);

    }
    /*
     * 获取奖励信息
     * */
    private static function get_award_info($orderid)
    {
        $sql = "SELECT jifenbook,jifentprice,jifencomment,price FROM `sline_member_order` WHERE id='$orderid'";
        $row = self::execute_sql($sql);
        return $row ? $row[0] : array();
    }
    /*
     * 会员信息
     * */
    private static function get_member_info($memberid)
    {
        $sql = "SELECT * FROM `sline_member` WHERE mid='$memberid'";
        $row = self::execute_sql($sql);
        return $row ? $row[0] : array();
    }

    /*
     * 产品名称
     * */
    private  static function get_order_name($id,$typeid,$commentid)
    {

        $channeltable=array(
            "1"=>"sline_line",
            "2"=>"sline_hotel",
            "3"=>"sline_car",
            "5"=>"sline_spot",
            "8"=>"sline_visa",
            "13"=>"sline_tuan"
        );
        $tablename = $typeid<14 ? $channeltable[$typeid] : 'sline_model_archive';
        $fields=array(
            '1'=>array('link'=>'lines'),
            '2'=>array('link'=>'hotels'),
            '3'=>array('link'=>'cars'),
            '5'=>array('link'=>'spots'),
            '8'=>array('link'=>'visa'),
            '13'=>array('link'=>'tuan')

        );
        $link =$fields[$typeid]['link'];
        if(empty($link))
        {
            $model_info = self::get_extend_model_info($typeid);
            $link = $model_info['pinyin'];


        }
        $out = '';
        if(!empty($tablename))
        {
            $sql = "SELECT aid,title,webid FROM {$tablename} WHERE id='$id'";
            $row = self::execute_sql($sql);


            $title = !empty($productname) ? $productname : $row[0]['title'];

            $url=Common::get_web_url($row[0]['webid']);
            $out = "<a href=\"{$url}/{$link}/show_{$row[0]['aid']}.html\" target=\"_blank\">{$title}</a>";
        }

        return $out;
    }

    /*
     * 获取产品信息
     * */

    private static function get_product_info($id,$typeid)
    {
        $channeltable=array(
            "1"=>"sline_line",
            "2"=>"sline_hotel",
            "3"=>"sline_car",
            "5"=>"sline_spot",
            "8"=>"sline_visa",
            "13"=>"sline_tuan"
        );
        $tablename = $typeid<14 ? $channeltable[$typeid] : 'sline_model_archive';
        $sql = "SELECT * FROM {$tablename} WHERE id='$id'";
        $row = self::execute_sql($sql);
        return $row;
    }

    private static function get_extend_model_info($typeid)
    {
        $sql = "SELECT * FROM `sline_model` WHERE id='$typeid'";
        $row = self::execute_sql($sql);
        return $row ? $row[0] : array();

    }

    private static function execute_sql($sql)
    {
        return DB::query(1,$sql)->execute()->as_array();

    }

}