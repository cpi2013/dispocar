<?php
class Member extends AppModel {
	var $name = 'Member';
	
	
	function beforeSave(){
	$this->data[$this->name]['password']=Security::hash($this->data[$this->name]['password'],'sha1',true);
	return true;

	}
	
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Parcs' => array(
			'className' => 'Parcs',
			'foreignKey' => 'parcs_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
