<?php
App::uses('AppModel', 'Model');
/**
 * Place Model
 *
 * @property Place $ParentPlace
 * @property Place $ChildPlace
 */
class Place extends AppModel {

	/**
	 * belongsTo associations
	 *
	 * @var array
	 */
	public $belongsTo = array(
		'ParentPlace' => array(
			'className' => 'Place',
			'foreignKey' => 'parent_id',
		)
	);

	/**
	 * hasMany associations
	 *
	 * @var array
	 */
	public $hasMany = array(
		'ChildPlace' => array(
			'className' => 'Place',
			'foreignKey' => 'parent_id',
			'dependent' => false,
		),
		'FromPath' => array(
			'className' => 'Path',
			'foreignKey' => 'from_place_id',
			'dependent' => true,
		),
		'ToPath' => array(
			'className' => 'Path',
			'foreignKey' => 'to_place_id',
			'dependent' => true,
		),
		'FromTrip' => array(
			'className' => 'Trip',
			'foreignKey' => 'from_place_id',
			'dependent' => true,
		),
		'ToTrip' => array(
			'className' => 'Trip',
			'foreignKey' => 'to_place_id',
			'dependent' => true,
		),
	);

	public $actsAs = array('Tree');

}
