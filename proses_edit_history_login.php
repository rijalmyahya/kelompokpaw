<?php ob_start();
include "koneksi.php";

$no		= $_POST['no'];
$tanggal	= $_POST['tanggal']; 
$id   	= $_POST['id'];
$nama   = $_POST['nama'];

	mysql_query("update login set tanggal='$tanggal', Id_user='$id', nama_user='$nama' where no_log='$no'") or die(mysql_error());
	header('location:history_login.php');
?>