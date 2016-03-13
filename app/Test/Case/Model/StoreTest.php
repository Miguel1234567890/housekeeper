<?php
App::uses('Store', 'Model');

/**
 * Store Test Case
 */
class StoreTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.store',
		'app.product',
		'app.status',
		'app.category',
		'app.users',
		'app.hotel',
		'app.job',
		'app.typejobs'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Store = ClassRegistry::init('Store');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Store);

		parent::tearDown();
	}

}
