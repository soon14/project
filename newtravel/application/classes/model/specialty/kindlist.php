<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Specialty_Kindlist extends ORM {

    protected  $_table_name = 'specialty_kindlist';
	
	
	public function deleteClear()
	{
		$this->delete();
	}

}