<?php ob_start();
	include "koneksi.php";
	
	$nama = $_GET['kode'];
	
	mysql_query("delete from barangmasuk where no_barang_masuk='$nama'");
	header('location:masuk_gudang_barang.php');
?>