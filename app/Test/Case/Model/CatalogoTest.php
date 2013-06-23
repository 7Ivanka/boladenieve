<?php
App::uses('Catalogo', 'Model');

/**
 * Catalogo Test Case
 *
 */
class CatalogoTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.catalogo', 'app.presupuesto');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Catalogo = ClassRegistry::init('Catalogo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Catalogo);

		parent::tearDown();
	}

}
