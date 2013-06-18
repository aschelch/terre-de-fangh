<?php
App::uses('Trip', 'Model');

/**
 * Trip Test Case
 *
 */
class TripTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.trip',
		'app.user',
		'app.from_place',
		'app.to_place'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Trip = ClassRegistry::init('Trip');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Trip);

		parent::tearDown();
	}

}
