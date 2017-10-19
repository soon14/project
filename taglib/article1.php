<?php

/**

 * Created by Phpstorm.

 * User: netman

 * Date: 15-9-23

 * Time: 上午10:43

 * Desc: 广告获取标签

 */



class Taglib_Article {







    /**

     * @param $params

     * @return mixed

     * @description 标签接口

     */

    public static function query($params)

    {

        $default=array(

            'flag'=>'',

            'destid'=>0,

            'offset'=>0,

            'row'=>'10',

            'havepic'=>false,

        );

        $params=array_merge($default,$params);

        extract($params);

        switch($flag)

        {

            case 'new':

                $list = Model_Article::get_article_new($offset,$row,$havepic);

                break;

            case 'order':

                $list = Model_Article::get_article_order($offset,$row,$havepic);

                break;

            case 'mdd':

            case 'relative':

                if(empty($destid))return '';

                $list = Model_Article::get_article_bymdd($offset,$row,$destid,$havepic);

                break;



            case 'byattrid':

                $list = self::get_article_by_attrid($offset,$row,$attrid);

                break;

            case 'theme':

                $list = self::get_article_by_themeid($offset,$row,$themeid);

                break;

        }



        return Model_Article::get_article_attachinfo($list);



    }



    /**

     * @param $offset

     * @param $row

     * @param $attrid

     * @return mixed

     * @desc 按属性读取文章

     */

    private static function get_article_by_attrid($offset,$row,$attrid)

    {

        $sql = "SELECT a.* FROM sline_article a ";

        $sql.= "LEFT JOIN `sline_allorderlist` b ";

        $sql.= "ON (a.id=b.aid and b.typeid=4) ";

        $sql.= "WHERE a.ishidden=0  AND FIND_IN_SET($attrid,a.attrid)";



        $sql.= "ORDER BY IFNULL(b.displayorder,9999) asc,a.modtime desc,a.addtime DESC ";

        $sql.= "limit {$offset},{$row}";

        $arr = DB::query(1,$sql)->execute()->as_array();
        $sql ="SELECT * FROM `sline_admin` WHERE FIND_IN_SET($attrid,author_article_id)";
        $ar    = DB::query(1,$sql)->execute()->as_array();
        foreach ($arr as &$v){

            $v['Author_head'] = Common::img($ar[0]['litpic'],380,220);
//            $v['litpic']      = Common::img($v['litpic'],390,220);
//            $v['summary']     = Common::cutstr_html($v['summary'], 30);
//            $v['addtime']     = date("Y-m-d",$v['addtime']) ;
        }

        return $arr;



    }



    /**

     * @param $offset

     * @param $row

     * @param $themeid

     * @return mixed

     * 按专题读取数据

     */

    private static function get_article_by_themeid($offset,$row,$themeid)

    {

        $sql = "SELECT a.* FROM sline_article a ";

        $sql.= "LEFT JOIN `sline_allorderlist` b ";

        $sql.= "ON (a.id=b.aid and b.typeid=4) ";

        $sql.= "WHERE a.ishidden=0  AND FIND_IN_SET($themeid,a.themelist)";



        $sql.= "ORDER BY IFNULL(b.displayorder,9999) asc,a.modtime desc,a.addtime DESC ";

        $sql.= "limit {$offset},{$row}";

        $arr = DB::query(1,$sql)->execute()->as_array();

        return $arr;



    }



}