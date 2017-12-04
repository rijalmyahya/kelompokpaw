<?php 
session_start();
include 'koneksi.php';
$username = $_POST['idadmin'];
$password = $_POST['passwordadmin'];
$query = mysql_query("select * from admin where id_admin='$username' and pass_admin='$password'") or die(mysql_error());
if(mysql_num_rows($query)==1){
	$_SESSION['id_admin'] = $username;
	header("location:menu_adm.php");
}else{	
	header("location:login_adm.php?pesan=gagal")or die(mysql_error());
}
?>