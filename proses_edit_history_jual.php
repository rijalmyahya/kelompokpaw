<?php ob_start();
include "koneksi.php";

$tanggal	= $_POST['tanggal']; 
$id   	= $_POST['id'];
$nama   = $_POST['pass'];
$barang	= $_POST['barang'];
$total	= $_POST['total'];

	mysql_query("update logjual set tanggal='$tanggal', Id_user='$id', nama_user='$pass', barang_terjual='$barang', total_penjualan='$total_penjualan' where id_user='$id' and tanggal='$tanggal'") or die(mysql_error());
	header('location:history_jual.php');
?>