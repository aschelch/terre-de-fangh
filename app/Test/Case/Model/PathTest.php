<?php
App::uses('Path', 'Model');

/**
 * Path Test Case
 *
 */
class PathTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.path',
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
		$this->Path = ClassRegistry::init('Path');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Path);

		parent::tearDown();
	}

}
