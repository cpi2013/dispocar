<?php
class User extends AppModel {
	var $name = 'User';
	
	function beforeSave(){
	$this->data[$this->name]['password']=Security::hash($this->data[$this->name]['password'],'sha1',true);
	return true;
	}
}
