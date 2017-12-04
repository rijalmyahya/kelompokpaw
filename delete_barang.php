<?php ob_start();
	include "koneksi.php";
	
	$idbarang = $_GET['kode'];
	mysql_query("delete from barang where id_barang='$idbarang'");
	header('location:gudang_barang.php');
?>