<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Act_Kindlist extends ORM {

    protected  $_table_name = 'act_kindlist';
	
	
	public function deleteClear()
	{
		$this->delete();
	}

}