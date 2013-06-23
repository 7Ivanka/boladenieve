<?php
App::uses('Proceso', 'Model');

/**
 * Proceso Test Case
 *
 */
class ProcesoTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.proceso', 'app.presupuesto', 'app.departamento', 'app.catalogo', 'app.user');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Proceso = ClassRegistry::init('Proceso');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Proceso);

		parent::tearDown();
	}

}
