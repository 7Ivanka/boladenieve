<?php
App::uses('Presupuesto', 'Model');

/**
 * Presupuesto Test Case
 *
 */
class PresupuestoTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.presupuesto', 'app.departamento', 'app.proceso', 'app.catalogo', 'app.subcidio', 'app.user');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Presupuesto = ClassRegistry::init('Presupuesto');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Presupuesto);

		parent::tearDown();
	}

}
