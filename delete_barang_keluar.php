<?php ob_start();
	include "koneksi.php";
	
	$tanggal = $_GET['kode'];
	$nama = $_GET['kode2'];
	
	mysql_query("delete from barangkeluar where no_barang_keluar='$nama'");
	header('location:keluar_gudang_barang.php');
?>