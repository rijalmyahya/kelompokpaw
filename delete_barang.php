<?php ob_start();
	include "koneksi.php";
	include "fungsi_fungsi.php";

	/*function delete_barang($idbarang){
		$idbarang1 = $idbarang;
		mysql_query("delete from barang where id_barang='$idbarang1'");
		header('location:gudang_barang.php');
	}*/

	$idbarang = $_GET['kode'];
	delete_barang($idbarang);
?>