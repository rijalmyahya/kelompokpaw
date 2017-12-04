<?php 
ob_start();
include "koneksi.php";

$tanggal 	= $_POST['tanggal'];
$id   	= $_POST['id'];
$nama   = $_POST['nama'];
$barang	= $_POST['barang'];
$total	= $_POST['total'];

	if(empty($tanggal) || empty($id) || empty($nama)) {
		header("location:history_jual.php?pesan=kurang");
	}else{
		mysql_query("insert into admin(tanggal,Id_user,nama_user,barang_terjual,total_penjualan)
		values('$tanggal','$id','$nama','$barang','$total')") or die(mysql_error());
		header('location:history_jual.php');
	}

?>