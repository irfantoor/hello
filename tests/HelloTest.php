<?php
 
use IrfanTOOR\Hello;

use PHPUnit\Framework\TestCase;
 
class HelloTest extends TestCase 
{

	public function testValidInstanceOfHello(): void
	{
		$hello = new Hello();
		$this->assertInstanceOf('IrfanTOOR\Hello', $hello);
	}

	public function testCanInvoke(): void
	{
		$hello = new Hello();
		$this->assertSame($hello(), 'Hello');
	}
}
