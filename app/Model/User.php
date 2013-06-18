<?php
App::uses('AppModel', 'Model');
/**
 * User Model
 *
 * @property Trip $Trip
 */
class User extends AppModel {

	/**
	 * Display field
	 *
	 * @var string
	 */
	public $displayField = 'username';

	/**
	 * hasMany associations
	 *
	 * @var array
	 */
	public $hasMany = array(
		'Trip' => array(
			'className' => 'Trip',
			'foreignKey' => 'user_id',
			'dependent' => true,
		)
	);

}
