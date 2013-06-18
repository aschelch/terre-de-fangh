<?php
/**
 * PathFixture
 *
 */
class PathFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'from_place_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'to_place_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'distance' => array('type' => 'float', 'null' => true, 'default' => null),
		'description' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
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
			'from_place_id' => 1,
			'to_place_id' => 1,
			'distance' => 1,
			'description' => 'Lorem ipsum dolor sit amet'
		),
	);

}
