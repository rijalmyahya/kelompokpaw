<?php ob_start();
	include "koneksi.php";
	
	$id = $_GET['kode'];
	
	mysql_query("delete from barangkeluar where no_barang_keluar='$id'");
	header('location:keluar_gudang_barang.php');
?>