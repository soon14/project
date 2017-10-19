<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Act_Day extends ORM {
    protected  $_table_name = 'act_day';
	
	public function deleteClear()
	{
		$this->delete();
	}
}