<?php 
session_start();
include 'koneksi.php';
$username = $_POST['idkasir'];
$password = $_POST['passwordkasir'];
$query = mysql_query("select * from kasir where id_kasir='$username' and pass_kasir='$password'") or die(mysql_error());
if(mysql_num_rows($query)==1){
	$_SESSION['id_admin'] = $username;
	header("location:menu_kasir.php");
}else{	
	header("location:login_kasir.php?pesan=gagal")or die(mysql_error());
}
?>