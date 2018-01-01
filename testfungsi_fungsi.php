<?php
	include "koneksi.php";

class testfungsi_fungsi extends PHPUnit_Framework_TestCase{
	/*function testUsername(){
		$login = mysql_query("SELECT * FROM admin WHERE pass_admin ='admin'");
		$user = mysql_fetch_array($login);
		$test_user = $user['id_admin'];
		
		$content = $test_user;
		$this->assertEquals('admin',$content);
	}

	function testUsername2(){
		$login = mysql_query("SELECT * FROM admin WHERE pass_admin ='admin'");
		$user = mysql_fetch_array($login);
		$test_user = $user['id_admin'];
		
		$content = $test_user;
		$this->assertNotEquals('apa',$content);
	}

	function testPassword(){
		$login = mysql_query("SELECT * FROM admin WHERE id_admin ='admin'");
		$user = mysql_fetch_array($login);
		$test_user = $user['id_admin'];
		
		$content = $test_user;
		$this->assertEquals('admin',$content);
	}*/

	function testPassword3(){
		$login = mysql_query("SELECT * FROM admin WHERE id_admin ='admin'");
		$user = mysql_fetch_array($login);
		$test_user = $user['id_admin'];
		
		$content = $test_user;
		$this->assertNotEquals('apaitu',$content);
	}

 	/*function testtampil(){
 		return mysql_query("select * from barang order by id_barang");
 	}*/
}
?>