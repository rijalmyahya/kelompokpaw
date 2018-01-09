<?php 
session_start();
include 'koneksi.php';
date_default_timezone_set('Asia/Jakarta');

$username = mysql_real_escape_string($_POST['idkasir']);
$password = mysql_real_escape_string($_POST['passwordkasir']);
$tanggal = date("Y-m-d H:i:s");

$query = mysql_query("select * from kasir where id_kasir='$username' and pass_kasir='$password'") or die(mysql_error());

$data=mysql_fetch_array($query);
$nama = $data['nama_kasir'];

if(mysql_num_rows($query)==1){
	$_SESSION['id_kasir'] = $username;
	mysql_query("insert into login (no_log,tanggal,Id_user,nama_user)
		values('','$tanggal','$username','$nama')") or die(mysql_error());
	header("location:menu_kasir.php");
}else{	
	header("location:login_kasir.php?pesan=gagal")or die(mysql_error());
}
?>