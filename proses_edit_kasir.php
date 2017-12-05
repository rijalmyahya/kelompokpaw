<?php ob_start();
include "koneksi.php";

$id   	= $_POST['id'];
$pass   = $_POST['pass'];

	mysql_query("update kasir set id_kasir='$id', pass_kasir='$pass' where id_kasir='$id'") or die(mysql_error());
	header('location:daftar_user.php');
?>