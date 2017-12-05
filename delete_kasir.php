<?php ob_start();
	include "koneksi.php";
	
	$id = $_GET['kode'];
	mysql_query("delete from kasir where id_kasir='$id'");
	header('location:daftar_user.php');
?>