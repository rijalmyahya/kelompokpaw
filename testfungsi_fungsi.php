<?php
	include "koneksi.php";
	include "fungsi_fungsi.php";

class testfungsi_fungsi extends PHPUnit_Framework_TestCase{
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

	/*function testPassword(){
		$login = mysql_query("select * from admin where id_admin ='admin'");
		$user = mysql_fetch_array($login);
		$test_user = $user['id_admin'];
		
		$content = $test_user;
		$this->assertEquals('admin',$content);
	}*/

	function testPassword2(){
		$login = mysql_query("select * from admin where id_admin ='admin'");
		$user = mysql_num_rows($login);
		$test_user = $user['id_admin'];
		
		$content = $test_user;
		$this->assertNotEquals('apaitu',$content);
	}

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