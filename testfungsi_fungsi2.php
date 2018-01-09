<?php
	require 'fungsi_fungsi.php';

class testfungsi_fungsi2 extends PHPUnit_Framework_TestCase{
	protected function setUp(){
		$this->fungsi = new fungsi_fungsi();
	}

 	public function testtampil(){
 		$result = $this->fungsi->tampil2();
 		$this->assertTrue($result);
 	}
}
?>