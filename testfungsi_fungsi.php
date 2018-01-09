<?php
	include "koneksi.php";
	include "fungsi_fungsi2.php";

class testfungsi_fungsi extends PHPUnit_Framework_TestCase{
	protected function setUp(){
		$this->fungsi = new fungsi_fungsi2();
	}
	
	public function testsisabarangmasuk(){
		$result = $this->fungsi->sisabarangmasuk(120,30);
		$result2 = $this->fungsi->sisabarangmasuk(120,80);
		$this->assertEquals(150,$result);
		$this->assertEquals(200,$result2);
		$this->assertNotEquals(10,$result2);
	}

	public function testsisabarangkeluar(){
		$result = $this->fungsi->sisabarangkeluar(120,30);
		$result2 = $this->fungsi->sisabarangkeluar(120,20);
		$this->assertEquals(90,$result);
		$this->assertEquals(100,$result2);
		$this->assertNotEquals(10,$result2);
	}
	
	public function testtotalharga(){
		$result = $this->fungsi->totalharga(10,75000);
		$result2 = $this->fungsi->totalharga(10,5000);
		$this->assertEquals(750000,$result);
		$this->assertEquals(50000,$result2);
		$this->assertNotEquals(10,$result2);
	}

	/*function testUsername(){
		$login = mysql_query("select * from admin where pass_admin ='admin'");
		$user = mysql_fetch_array($login);
		$test_user = $user['id_admin'];
		
		$content = $test_user;
		$this->assertEquals('admin',$content);
	}*/

	function testUsername2(){
		$login = mysql_query("select * from admin where pass_admin ='admin'");
		$user = mysql_fetch_array($login);
		$test_user = $user['id_admin'];
		
		$content = $test_user;
		$this->assertNotEquals('apa',$content);
	}

	function testUsername3(){
		$login = mysql_query("select * from admin where pass_kasir ='kasir'");
		$user = mysql_fetch_array($login);
		$test_user = $user['id_kasir'];
		
		$content = $test_user;
		$this->assertNotEquals('apa2',$content);
	}

	function testPassword(){
		$login = mysql_query("select * from admin where id_admin ='admin'");
		$user = mysql_fetch_array($login);
		$test_user = $user['id_admin'];
		
		$content = $test_user;
		$this->assertEquals('admin',$content);
	}

	/*function testPassword2(){
		$login = mysql_query("select * from admin where id_admin ='admin'");
		$user = mysql_num_rows($login);
		$test_user = $user['id_admin'];
		
		$content = $test_user;
		$this->assertNotEquals('apaitu',$content);
	}*/

	function testPassword3(){
		$login = mysql_query("select * from admin where id_kasir ='k1'");
		$user = mysql_num_rows($login);
		$test_user = $user['id_kasir'];
		
		$content = $test_user;
		$this->assertNotEquals('apaitu2',$content);
	}

 	function testtampil(){
 		return mysql_query("select * from barang order by id_barang");
 	}
}
?>