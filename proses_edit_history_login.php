<?php ob_start();
include "koneksi.php";

$tanggal	= $_POST['tanggal']; 
$id   	= $_POST['id'];
$nama   = $_POST['nama'];

	mysql_query("update login set tanggal='$tanggal', Id_user='$id', nama_user='$nama' where id_user='$id' and tanggal='$tanggal'") or die(mysql_error());
	header('location:history_login.php');
?>