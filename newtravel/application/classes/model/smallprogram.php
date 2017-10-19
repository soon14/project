<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Smallprogram extends ORM {

    protected  $_table_name = 'smallprogram';
    
	public function deleteClear()
	{    
		// Common::deleteRelativeImage($this->litpic);
		// Common::deleteContentImage($this->content);
		 $this->delete();
	}
}