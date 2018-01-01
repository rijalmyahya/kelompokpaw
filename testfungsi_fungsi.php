<?php
class testfungsi_fungsi extends PHPUnit_Framework_TestCase{
	function testUsername(){
		include "koneksi.php";
		$login = mysqli_query($conn,"select * from admin where pass_admin ='admin'");
		$user = mysqli_fetch_array($login);
		$test_user = $user['id_admin'];
		
		$content = $test_user;
		$this->assertEquals('admin',$content);
	}

	function testUsername2(){
		include "koneksi.php";
		$login = mysqli_query($conn,"select * from admin where pass_admin ='admin'");
		$user = mysqli_fetch_array($login);
		$test_user = $user['id_admin'];
		
		$content = $test_user;
		$this->assertNotEquals('apa',$content);
	}

	function testPassword(){
		include "koneksi.php";
		$login = mysqli_query($conn,"select * from admin where id_admin ='admin'");
		$user = mysqli_fetch_array($login);
		$test_user = $user['id_admin'];
		
		$content = $test_user;
		$this->assertEquals('admin',$content);
	}

	function testPassword3(){
		include "koneksi.php";
		$login = mysqli_query($conn,"select * from admin where id_admin ='admin'");
		$user = mysqli_fetch_array($login);
		$test_user = $user['id_admin'];
		
		$content = $test_user;
		$this->assertNotEquals('apaitu',$content);
	}

 	function testtampil(){
 		include "koneksi.php";
 		return mysqli_query($conn,"select * from barang order by id_barang");
 	}

 	function testtampil2(){
 		include "koneksi.php";
 		return mysqli_query($conn,"select * from admin order by id_admin");
 	}
}
?>