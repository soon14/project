<?php
/**
 * Created by PhpStorm.
 * Author: netman
 * QQ: 87482723
 * Time: 15-9-28 下午7:35
 * Desc:游记调用标签
 */
class Taglib_Notes{



    public static function query($params)
    {
        $default=array(
            'row'=>'30',
            'offset'=>0,
            'flag' => ''

        );
        $params=array_merge($default,$params);
        extract($params);
        $sql = "SELECT * FROM `sline_notes` AS a  LEFT JOIN (SELECT mid,nickname,litpic as memberpic,remarks FROM sline_member) AS m ON m.mid=a.memberid WHERE a.status=1";
        //最新游记
        if($flag == 'new')
        {
            $sql.=" ORDER BY a.modtime DESC LIMIT {$offset},{$row}";
        }
        //热门游记
        else if($flag == 'hot')
        {
            $sql.=" ORDER BY a.shownum DESC LIMIT {$offset},{$row}";
        }
        //当季热门
        else if($flag == 'season')
        {
            $sql = "SELECT a.nickname,a.litpic as memberpic,a.remarks,a.mid,b.*  FROM `sline_member` a LEFT JOIN `sline_notes` b ON(a.mid = b.memberid AND b.status=1 ) WHERE quarter(from_unixtime(modtime,'%y%m%d'))=quarter(curdate()) ORDER BY b.shownum DESC LIMIT {$offset},{$row}";
        }
        $arr = DB::query(1,$sql)->execute()->as_array();
        return self::format_row($arr);


    }

    /**
     * 达人排行榜
     * @param $params
     * @return mixed
     */
    public static function daren($params)
    {
        $default=array(
            'row'=>'30',
            'offset'=>0

        );
        $params=array_merge($default,$params);
        extract($params);

        $sql="SELECT a.nickname,a.litpic,a.remarks,b.* ,count(b.memberid) AS c FROM `sline_member` a LEFT JOIN `sline_notes` b ON(a.mid = b.memberid AND b.status=1) WHERE b.status=1  GROUP BY b.memberid ORDER BY c DESC LIMIT {$offset},{$row}";
        $ar = DB::query(1,$sql)->execute()->as_array();
        return $ar;
    }

    /**
     * 格式化数据
     * @param $arr
     * @return mixed
     */
    public static function format_row($arr)
    {
        foreach($arr as &$row)
        {
            $row['url'] = $GLOBALS['cfg_basehost'].'/notes/show_'.$row['id'].'.html';
        }
        return $arr;

    }

}