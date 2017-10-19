<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Mitao_Day extends ORM {
    protected  $_table_name = 'mitao_day';
	
	public function deleteClear()
	{
		$this->delete();
	}
}