<?php ob_start();
	include "koneksi.php";
	
	$id = $_GET['kode'];
	mysql_query("delete from admin where id_admin='$id'");
	mysql_query("delete from pegawai where id_pegawai='$id'");
	header('location:daftar_user.php');
?>