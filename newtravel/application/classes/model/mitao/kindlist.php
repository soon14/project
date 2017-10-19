<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Mitao_Kindlist extends ORM {

    protected  $_table_name = 'mitao_kindlist';
	
	
	public function deleteClear()
	{
		$this->delete();
	}

}