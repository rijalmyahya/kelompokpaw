<?php ob_start();
include "koneksi.php";

$no 	= $_POST['no'];
$id 	= $_POST['id']; 
$nama   = $_POST['nama'];
$harga  = $_POST['harga'];
$jumlah	= $_POST['jumlah'];
$total	= $_POST['total'];
$kasir 	= $_POST['kasir'];
$tanggal 	= $POST['tanggal'];

	mysql_query("update logjual set id_barang='$id', nama_barang='$nama', harga_barang='$harga', jumlah_barang='$jumlah', total_harga='$total', id_kasir='$kasir', tanggal='$tanggal' where no_logjual='$no'") or die(mysql_error());
	header('location:history_penjualan.php');
?>