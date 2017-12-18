<?php ob_start();
	include "koneksi.php";
	
	$id = $_GET['kode'];
	
	mysql_query("delete from login where no_log='$id'");
	header('location:history_login.php');
?>