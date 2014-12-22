<?php
App::uses('Shipping', 'Model');

/**
 * Shipping Test Case
 *
 */
class ShippingTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.shipping',
		'app.planet',
		'app.user',
		'app.product',
		'app.products_shipping'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Shipping = ClassRegistry::init('Shipping');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Shipping);

		parent::tearDown();
	}

}
