<?php ob_start();
	include "koneksi.php";
	
	$tanggal = $_GET['kode'];
	$nama = $_GET['kode2'];
	
	mysql_query("delete from barangmasuk where tanggal_masuk='$tanggal' and nama_barang='$nama'");
	header('location:masuk_gudang_barang.php');
?>