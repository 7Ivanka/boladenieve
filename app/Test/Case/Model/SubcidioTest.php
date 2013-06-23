<?php
App::uses('Subcidio', 'Model');

/**
 * Subcidio Test Case
 *
 */
class SubcidioTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.subcidio', 'app.presupuesto', 'app.departamento', 'app.proceso', 'app.catalogo', 'app.user');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Subcidio = ClassRegistry::init('Subcidio');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Subcidio);

		parent::tearDown();
	}

}
