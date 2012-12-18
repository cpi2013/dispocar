<?php
class Parc extends AppModel {
	var $name = 'Parc';
	var $validate = array(
		'ovehicule_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'nvehicule_id' => array(
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
		'Ovehicule' => array(
			'className' => 'Ovehicule',
			'foreignKey' => 'id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Nvehicule' => array(
			'className' => 'Nvehicule',
			'foreignKey' => 'id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
