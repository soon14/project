<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Farm_Suit extends ORM {
    protected  $_table_name = 'farm_suit';
	
	public function deleteClear()
	{
	   if($this->id)
       {
           DB::delete('farm_suit_price')->where("suitid={$this->id}")->execute();
           $this->delete();

       }

	}
}