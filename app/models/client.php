<?php

//modèle du client qui achète une nouvelle voiture

class Client extends AppModel {
	var $name = 'Client';
	
	var $validate = array(
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
		'Nvehicule' => array(
			'className' => 'Nvehicule',
			'foreignKey' => 'nvehicules_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
