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

                $list = Model_Article::get_article_bymdd($offset,$row,$destid,$havepic,$attrid);

                break;



            case 'byattrid':

                $list = Model_Article::get_article_new($offset,$row,$attrid);

                break;

            case 'theme':

                $list = self::get_article_by_themeid($offset,$row,$themeid);

                break;
            case 'recomment':

                $list = Model_Article::article_ad_index($offset,$row);

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