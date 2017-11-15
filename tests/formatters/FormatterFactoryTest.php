<?php
use PayPal\Formatter\FormatterFactory;
use PHPUnit\Framework\TestCase;
class FormatterFactoryTest extends TestCase {

	/**
	 * @test
	 */
	public function testValidBinding() {
		$this->assertEquals('PayPal\Formatter\PPNVPFormatter', get_class(FormatterFactory::factory('NV')));
		$this->assertEquals('PayPal\Formatter\PPSOAPFormatter', get_class(FormatterFactory::factory('SOAP')));
	}

	/**
	 * @test
	 */
	public function testInvalidBinding() {
		$this->setExpectedException('\InvalidArgumentException');
		FormatterFactory::factory('Unknown');
	}
}
