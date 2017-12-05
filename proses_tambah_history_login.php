<?php 
ob_start();
include "koneksi.php";

$tanggal 	= $_POST['tanggal'];
$id   	= $_POST['id'];
$nama   = $_POST['nama'];

	if(empty($tanggal) || empty($id) || empty($nama)) {
		header("location:history_login.php?pesan=kurang");
	}else{
		mysql_query("insert into admin(tanggal,Id_user,nama_user)
		values('$tanggal','$id','$nama')") or die(mysql_error());
		header('location:history_login.php');
	}

?>