<?php ob_start();
	include "koneksi.php";
	
	$tanggal = $_GET['kode'];
	$nama = $_GET['kode2'];
	
	mysql_query("delete from barangkeluar where tanggal_keluar='$tanggal' and nama_barang='$nama'");
	header('location:keluar_gudang_barang.php');
?>