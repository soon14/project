<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Restaurant_Room extends ORM {
 
     public function deleteClear()
	 {
		/* $piclist=explode(',',$this->piclist);
		 foreach($piclist as $k=>$v)
		 {
			  $img_arr=explode('||',$v);
			  Common::deleteRelativeImage($img_arr[0]);
		 }*/
         DB::delete('restaurant_room_price')->where("suitid={$this->id}")->execute();
		 $this->delete();  
	 }
}