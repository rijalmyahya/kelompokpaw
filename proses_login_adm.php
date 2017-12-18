<?php 
session_start();
include 'koneksi.php';
date_default_timezone_set('Asia/Jakarta');

$username = $_POST['idadmin'];
$password = $_POST['passwordadmin'];
$tanggal = date("Y-m-d H:i:s");

$query = mysql_query("select * from admin where id_admin='$username' and pass_admin='$password'") or die(mysql_error());

$data=mysql_fetch_array($query);
$nama = $data['nama_admin'];

if(mysql_num_rows($query)==1){
	$_SESSION['id_admin'] = $username;
	mysql_query("insert into login (no_log,tanggal,Id_user,nama_user)
		values('','$tanggal','$username','$nama')") or die(mysql_error());
	header("location:menu_adm.php");
}else{	
	header("location:login_adm.php?pesan=gagal")or die(mysql_error());
}
?>