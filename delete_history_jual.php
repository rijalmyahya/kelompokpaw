<?php ob_start();
	include "koneksi.php";
	
	$id = $_GET['kode'];
	
	mysql_query("delete from logjual where no_logjual='$id'");
	header('location:history_jual.php');
?>