<?php ob_start();
	include "koneksi.php";
	
	$id = $_GET['kode'];
	mysql_query("delete from admin where id_admin='$id'");
	header('location:daftar_user.php');
?>