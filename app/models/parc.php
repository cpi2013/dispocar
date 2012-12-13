<?php
class Parc extends AppModel {
	var $name = 'Parc';
	var $validate = array(
		'ovehicules_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'nvehicules_id' => array(
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
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Ovehicules' => array(
			'className' => 'Ovehicules',
			'foreignKey' => 'ovehicules_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Nvehicules' => array(
			'className' => 'Nvehicules',
			'foreignKey' => 'nvehicules_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
