<?php
class Member extends AppModel {
	var $name = 'Member';
	var $validate = array(
		'parcs_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
	
	
	function beforeSave(){
	$this->data[$this->name]['password']=Security::hash($this->data[$this->name]['password'],'sha1',true);
	return true;

	}
	
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Parc' => array(
			'className' => 'Parc',
			'foreignKey' => 'parcs_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
