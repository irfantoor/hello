<?php
namespace IrfanTOOR;

class Hello {
    const NAME        = "Irfan's Hello";
    const DESCRIPTION = "Hello to Git";
    const VERSION     = "0.6.0";

	function __construct() {
		
	}
	
	function __invoke() {
		return 'Hello World!';
	}
}
