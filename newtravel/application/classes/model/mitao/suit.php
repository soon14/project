<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Mitao_Suit extends ORM {
    protected  $_table_name = 'mitao_suit';
	
	public function deleteClear()
	{
	   if($this->id)
       {
           DB::delete('mitao_suit_price')->where("suitid={$this->id}")->execute();
           $this->delete();

       }

	}
}