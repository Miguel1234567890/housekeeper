<?php
/**
 * Job Fixture
 */
class JobFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'description' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 128, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'date_start' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'date_end' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'priority' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'typejobs_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'hotel_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'users_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_jobs_typejobs_idx' => array('column' => 'typejobs_id', 'unique' => 0),
			'fk_jobs_hotel1_idx' => array('column' => 'hotel_id', 'unique' => 0),
			'fk_jobs_users1_idx' => array('column' => 'users_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'description' => 'Lorem ipsum dolor sit amet',
			'date_start' => '2016-03-10 21:51:05',
			'date_end' => '2016-03-10 21:51:05',
			'priority' => 'Lorem ipsum dolor sit amet',
			'typejobs_id' => 1,
			'hotel_id' => 1,
			'users_id' => 1
		),
	);

}
