<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Act_Suit extends ORM {
    protected  $_table_name = 'act_suit';
	
	public function deleteClear()
	{
	   if($this->id)
       {
           DB::delete('act_suit_price')->where("suitid={$this->id}")->execute();
           $this->delete();

       }

	}
}