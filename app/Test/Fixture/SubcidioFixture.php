<?php
/**
 * SubcidioFixture
 *
 */
class SubcidioFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 12, 'key' => 'primary'),
		'Federal' => array('type' => 'float', 'null' => false, 'default' => NULL, 'length' => 6),
		'Estatal' => array('type' => 'float', 'null' => false, 'default' => NULL, 'length' => 6),
		'Propio' => array('type' => 'float', 'null' => false, 'default' => NULL, 'length' => 6),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
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
			'Federal' => 1,
			'Estatal' => 1,
			'Propio' => 1
		),
	);
}
