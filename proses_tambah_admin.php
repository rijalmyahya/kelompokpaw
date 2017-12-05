<?php 
ob_start();
include "koneksi.php";

$id   	= $_POST['id'];
$pass   = $_POST['pass'];

$cek = mysql_query("select * from admin where id_admin='$id'");

if(mysql_num_rows($cek)==1){
	header("location:daftar_user.php?pesan=ada");
}else{
	if(empty($id) || empty($pass)) {
		header("location:daftar_user.php?pesan=kurang");
	}else{
		mysql_query("insert into admin(id_admin,pass_admin)
		values('$id','$pass')") or die(mysql_error());
		header('location:daftar_user.php');
	}
}
?>