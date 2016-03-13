<?php
App::uses('Typejob', 'Model');

/**
 * Typejob Test Case
 */
class TypejobTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.typejob',
		'app.job',
		'app.typejobs',
		'app.hotel',
		'app.product',
		'app.store',
		'app.status',
		'app.category',
		'app.users'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Typejob = ClassRegistry::init('Typejob');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Typejob);

		parent::tearDown();
	}

}
