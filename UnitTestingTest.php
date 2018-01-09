<?php
	require 'UnitTesting.php';
	
	class UnitTestingTest extends PHPUnit_Framework_TestCase{
		protected function setUp(){
			$this->UnitTesting = new UnitTesting();
		}
		public function testGaji(){
			$result = $this->UnitTesting->gaji(100000,5000,50000);
			$this->assertEquals(55000,$result);
		}
		public function testGaji_total(){
			$result = $this->UnitTesting->gaji_total(5000,50000,10000,10,10,10,2000,1000,1000);
			$this->assertEquals(85000,$result);
		}
		public function testJumlah_total(){
			$result = $this->UnitTesting->jumlah_total(10,10,10,1000,1000,1000);
			$this->assertEquals(30000,$result);
		}
	}
?>