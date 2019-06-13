<?php
 
use IrfanTOOR\Hello;
use IrfanTOOR\Test;
 
class HelloTest extends Test
{

	public function testValidInstanceOfHello(): void
	{
		$hello = new Hello();
		$this->assertInstanceOf('IrfanTOOR\Hello', $hello);
	}

	public function testCanInvoke(): void
	{
		$hello = new Hello();
		$this->assertSame('Hello World!', $hello());
	}
}
