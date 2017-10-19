<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Car extends ORM
{

    public function deleteClear()
    {

        $suits = ORM::factory('car_suit')->where("carid={$this->id}")->find_all()->as_array();
        foreach ($suits as $suit)
        {
            $suit->deleteClear();
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
    public static function updateMinPrice($carid)
    {
        $sql = "SELECT MIN(adultprice) as price FROM sline_car_suit_price WHERE carid='$carid' and adultprice>0";
        $ar = DB::query(1, $sql)->execute()->as_array();
        $price = $ar[0]['adultprice'] ? $ar[0]['adultprice'] : 0;
        $model = ORM::factory('car', $carid);
        $model->price = $price;
        $model->update();
    }

    /**
     * 租车克隆
     * @param $id 克隆的产品ID
     * @param $num 克隆基数
     */
    public function cloneCar($id, $num)
    {
        $arr = $this->where("id=$id")->find()->as_array();
        unset($arr['aid']);
        unset($arr['id']);
        for ($i = 1; $i <= $num; $i++)
        {
            //信息表
            $arr['addtime'] = $arr['modtime'] = time();
            $arr['aid'] = Common::getLastAid('sline_car', 0);
            list($insertId, $row) = DB::insert('car', array_keys($arr))->values(array_values($arr))->execute();
            //字段扩展表
            if ($row > 0)
            {
                $result = DB::select()->from('car_extend_field')->where("productid={$id}")->execute()->current();
                if (!empty($result))
                {
                    unset($result['id']);
                    $result['productid'] = $insertId;
                    DB::insert('car_extend_field', array_keys($result))->values(array_values($result))->execute();
                }
            }
        }
    }

}