<?php ob_start();
include "koneksi.php";

$tanggal	= $_POST['tanggal']; 
$id   	= $_POST['id'];
$nama   = $_POST['nama'];
$barang	= $_POST['barang'];
$total	= $_POST['total'];

	mysql_query("update logjual set tanggal='$tanggal', id_kasir='$id', nama_kasir='$nama', barang_terjual='$barang', total_penjualan='$total' where id_kasir='$id' and tanggal='$tanggal'") or die(mysql_error());
	header('location:history_penjualan.php');
?>