<?php ob_start();
	include "koneksi.php";
	
	$tanggal = $_GET['kode'];
	$id = $_GET['kode2'];
	
	mysql_query("delete from login where tanggal='$tanggal' and id_user='$id'");
	header('location:history_login.php');
?>