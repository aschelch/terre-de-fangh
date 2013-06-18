<?php
App::uses('AppModel', 'Model');
/**
 * Trip Model
 *
 * @property User $User
 * @property FromPlace $FromPlace
 * @property ToPlace $ToPlace
 */
class Trip extends AppModel {

	/**
	 * belongsTo associations
	 *
	 * @var array
	 */
	public $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
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

	public $order = array('ToTrip.ended DESC');
}
