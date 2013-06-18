<?php
/**
 * TripFixture
 *
 */
class TripFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'from_place_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'to_place_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'started' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'ended' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'user_id' => 1,
			'from_place_id' => 1,
			'to_place_id' => 1,
			'started' => '2013-06-17 22:41:25',
			'ended' => '2013-06-17 22:41:25'
		),
	);

}
