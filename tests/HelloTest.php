<?php
 
use IrfanTOOR\Hello\Hello;
 
class HelloTest extends PHPUnit_Framework_TestCase {
 
  public function testHelloHasCheese()
  {
    $hello = new Hello();
    $this->assertSame($hello->__invoke(), 'Hello');
  }
 
}
