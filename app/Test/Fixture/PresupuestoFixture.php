<?php
/**
 * PresupuestoFixture
 *
 */
class PresupuestoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 12, 'key' => 'primary'),
		'departamento_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 12),
		'proceso_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 12),
		'catalogo_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 12),
		'Enero' => array('type' => 'float', 'null' => false, 'default' => NULL, 'length' => 7),
		'Febrero' => array('type' => 'float', 'null' => false, 'default' => NULL, 'length' => 7),
		'Marzo' => array('type' => 'float', 'null' => false, 'default' => NULL, 'length' => 7),
		'Abril' => array('type' => 'float', 'null' => false, 'default' => NULL, 'length' => 7),
		'Mayo' => array('type' => 'float', 'null' => false, 'default' => NULL, 'length' => 7),
		'Junio' => array('type' => 'float', 'null' => false, 'default' => NULL, 'length' => 7),
		'Julio' => array('type' => 'float', 'null' => false, 'default' => NULL, 'length' => 7),
		'Agosto' => array('type' => 'float', 'null' => false, 'default' => NULL, 'length' => 7),
		'Septiembre' => array('type' => 'float', 'null' => false, 'default' => NULL, 'length' => 7),
		'Octubre' => array('type' => 'float', 'null' => false, 'default' => NULL, 'length' => 7),
		'Noviembre' => array('type' => 'float', 'null' => false, 'default' => NULL, 'length' => 7),
		'Diciembre' => array('type' => 'float', 'null' => false, 'default' => NULL, 'length' => 7),
		'subcidio_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 12),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
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
			'departamento_id' => 1,
			'proceso_id' => 1,
			'catalogo_id' => 1,
			'Enero' => 1,
			'Febrero' => 1,
			'Marzo' => 1,
			'Abril' => 1,
			'Mayo' => 1,
			'Junio' => 1,
			'Julio' => 1,
			'Agosto' => 1,
			'Septiembre' => 1,
			'Octubre' => 1,
			'Noviembre' => 1,
			'Diciembre' => 1,
			'subcidio_id' => 1,
			'user_id' => 1
		),
	);
}
