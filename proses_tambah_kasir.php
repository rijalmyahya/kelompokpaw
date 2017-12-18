<?php 
ob_start();
include "koneksi.php";

$id   	= $_POST['id'];
$nama	= $_POST['nama'];
$pass   = $_POST['pass'];

$cek = mysql_query("select * from kasir where id_kasir='$id'");

$cek2 = mysql_query("select * from pegawai where id_pegawai='$id'");

if(mysql_num_rows($cek)==1 and mysql_num_rows($cek2)==1){
	header("location:daftar_user.php?pesan=ada");
}else{
	if(empty($id) || empty($pass)) {
		header("location:daftar_user.php?pesan=kurang");
	}else{
		mysql_query("insert into kasir(id_kasir,pass_kasir,nama_kasir)
		values('$id','$pass','$nama')") or die(mysql_error());
		mysql_query("insert into pegawai
		values ('$id','$nama','','','','')") or die(mysql_error());
		header('location:daftar_user.php');
	}
}
?>