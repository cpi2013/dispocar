<?php
//modèle du client qui achète un véhicule d'occassion

class Clientvo extends AppModel {
	var $name = 'Clientvo';
	
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
		
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		
		'Ovehicule' => array(
			'className' => 'Ovehicule',
			'foreignKey' => 'ovehicules_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
