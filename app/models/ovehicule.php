<?php
class Ovehicule extends AppModel {
	var $name = 'Ovehicule';
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
	
	var $actsAs = array(
    'MeioUpload' => array(
        'filename' => array(
            'dir' => 'img/lesimages/ovehicules/',
            'create_directory' => true,
            'allowed_mime' => array('image/jpeg', 'image/pjpeg', 'image/png'),
            'allowed_ext' => array('.jpg', '.jpeg', '.png'),
            'thumbsizes' => array(
                'normal' => array('width'=>200, 'height'=>200),
            ),
			
            'default' => 'default.jpg',
        )
    )
); 
	
}
