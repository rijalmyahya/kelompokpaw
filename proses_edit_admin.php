<?php ob_start();
include "koneksi.php";

$id   	= $_POST['id'];
$pass   = $_POST['pass'];

	mysql_query("update admin set id_admin='$id', pass_admin='$pass' where id_admin='$id'") or die(mysql_error());
	header('location:daftar_user.php');
?>