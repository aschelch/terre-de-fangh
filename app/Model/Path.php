<?php
App::uses('AppModel', 'Model');
/**
 * Path Model
 *
 * @property FromPlace $FromPlace
 * @property ToPlace $ToPlace
 */
class Path extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'FromPlace' => array(
			'className' => 'Place',
			'foreignKey' => 'from_place_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'ToPlace' => array(
			'className' => 'Place',
			'foreignKey' => 'to_place_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
