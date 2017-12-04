<?php 
ob_start();
include "koneksi.php";

$id   	= $_POST['id'];
$pass   = $_POST['pass'];

$cek = mysql_query("select * from kasir where id_kasir='$id'");

if(mysql_num_rows($cek)==1){
	header("location:daftar_user.php?pesan=ada");
}else{
	if(empty($id) || empty($pass)) {
		header("location:daftar_user.php?pesan=kurang");
	}else{
		mysql_query("insert into kasir(id_kasir,pass_kasir)
		values('$id','$pass')") or die(mysql_error());
		header('location:daftar_user.php');
	}
}
?>