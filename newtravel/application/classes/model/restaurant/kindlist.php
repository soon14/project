<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Restaurant_Kindlist extends ORM {

    protected  $_table_name = 'restaurant_kindlist';
	
	
	public function deleteClear()
	{
		$this->delete();
	}

}