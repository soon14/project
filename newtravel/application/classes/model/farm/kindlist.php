<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Farm_Kindlist extends ORM {

    protected  $_table_name = 'farm_kindlist';
	
	
	public function deleteClear()
	{
		$this->delete();
	}

}