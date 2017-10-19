<?php defined('SYSPATH') or die('No direct access allowed.');


class Model_Visa_Area extends ORM
{

    /**
     * @param $keyword
     * @return string
     * @desc 匹配汉字
     */

    public static function match_chinese($keyword)
    {
        $sql = "SELECT kindname FROM `sline_visa_area` WHERE isopen=1 AND kindname LIKE '%$keyword%' LIMIT 0,10 ";

        $res = DB::query(1,$sql)->execute()->as_array();
        $str = '';
        foreach($res AS $row)
        {
            $row['kindname'] = str_replace($keyword, '<b>' . $keyword . '</b>', $row['kindname']);
            $str .= $row['kindname'] . ',';
        }
        $str = substr($str, 0, strlen($str)-1);
        return $str;
    }

    /**
     * @param $keyword
     * @return string
     * @desc 匹配拼音
     */

    public static  function match_pinyin($keyword)
    {

        $sql = "SELECT a.kindname FROM `sline_visa_area` a WHERE a.isopen=1";


        $res = DB::query(1,$sql)->execute()->as_array();
        $str = '';


        foreach($res AS $row) // 获取全部name
        {
            if(strlen($keyword) == 1)
            {
                $pinyin = Common::get_pinyin($row['kindname']); // 获取拼音
                if(strpos($pinyin, $keyword) !== false)
                {
                    if(substr($pinyin, 0, 1) == $keyword)
                    {
                        $str .= $row['kindname'] . ",";
                    }
                }
            }
            else
            {
                $pinyin = Common::get_pinyin($row['kindname'], 1); // 获取拼音
                if(strpos($pinyin, $keyword) !== false)
                {
                    $str .= $row['kindname'] . ",";
                }
            }
        }

        $str = substr($str, 0, strlen($str)-1);
        return $str;
    }

    /**
     * @param $kindname
     * @return mixed
     * @desc 根据区域名获取拼音
     */
    public static function get_pinyin($kindname)
    {
        $sql = "SELECT pinyin FROM `sline_visa_area` WHERE kindname='$kindname'";
        $ar = DB::query(1,$sql)->execute()->as_array();
        return $ar[0]['pinyin'] ? $ar[0]['pinyin'] : '';
    }

}