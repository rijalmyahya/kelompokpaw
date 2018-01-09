<?php ob_start();
include "koneksi.php";

$id   	= $_POST['id'];
$nama	= $_POST['nama'];
$pass   = $_POST['pass'];

	mysql_query("update admin set id_admin='$id', pass_admin='$pass', nama_admin='$nama' where id_admin='$id'") or die(mysql_error());
	mysql_query("update pegawai set id_pegawai='$id', nama_pegawai='$nama' where id_pegawai='$id'") or die(mysql_error());
	header('location:daftar_user.php');
?>