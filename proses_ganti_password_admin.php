<?php 
include 'koneksi.php';
$id = $_POST['id'];
$lama = $_POST['lama'];
$baru = $_POST['baru'];
$ulang = $_POST['ulang'];

$cek = mysql_query("select * from admin where pass_admin='$lama' and is_admin='$id'");

if(mysql_num_rows($cek)==1){
	if($baru==$ulang){
		$b = $baru;
		mysql_query("update user set pass_admin='$b' where id_admin='$id'");
		header("location:ganti_password_admin.php?pesan=oke");
	}else{
		header("location:ganti_password_admin.php?pesan=tdksama");
	}
}else{
	header("location:ganti_password_admin.php?pesan=gagal");
}
 ?>