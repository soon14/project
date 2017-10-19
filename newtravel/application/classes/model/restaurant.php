<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Restaurant extends ORM
{
    public function deleteClear()
    {

        $rooms = ORM::factory('restaurant_room')->where("hotelid={$this->id}")->find_all()->as_array();
        foreach ($rooms as $room)
        {
            if ($room->id)
                $room->deleteClear();
        }
        /* Common::deleteRelativeImage($this->litpic);
         $piclist=explode(',',$this->piclist);
         foreach($piclist as $k=>$v)
         {
              $img_arr=explode('||',$v);
              Common::deleteRelativeImage($img_arr[0]);
         }*/
        $this->delete();
    }

    /*
     * 更新最低报价
     * */
    public static function updateMinPrice($hotelid)
    {
        $sql = "SELECT MIN(price) as price FROM sline_restaurant_room_price WHERE hotelid='$hotelid' and price>0 and day>=UNIX_TIMESTAMP()";
        $ar = DB::query(1, $sql)->execute()->as_array();
        $price = $ar[0]['price'] ? $ar[0]['price'] : 0;
        $model = ORM::factory('restaurant', $hotelid);
        $model->price = $price;
        $model->update();
    }

    /**
     * 酒店克隆
     * @param $id 克隆的产品ID
     * @param $num 克隆基数
     */
    public function cloneHotel($id, $num)
    {
        $arr = $this->where("id=$id")->find()->as_array();
        unset($arr['aid']);
        unset($arr['id']);
        for ($i = 1; $i <= $num; $i++)
        {
            //信息表
            $arr['addtime'] = $arr['modtime'] = time();
            $arr['aid'] = Common::getLastAid('sline_restaurant', 0);
            list($insertId, $row) = DB::insert('restaurant', array_keys($arr))->values(array_values($arr))->execute();
            //字段扩展表
            if ($row > 0)
            {
                $result = DB::select()->from('restaurant_extend_field')->where("productid={$id}")->execute()->current();
                if (!empty($result))
                {
                    unset($result['id']);
                    $result['productid'] = $insertId;
                    DB::insert('restaurant_extend_field', array_keys($result))->values(array_values($result))->execute();
                }
            }
        }
        return $insertId;
    }
}