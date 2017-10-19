<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Specialty extends ORM {

    protected  $_table_name = 'specialty';
    
	public function deleteClear()
	{    
		// Common::deleteRelativeImage($this->litpic);
		// Common::deleteContentImage($this->content);
		 $this->delete();
	}
}