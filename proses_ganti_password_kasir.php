<?php 
include 'koneksi.php';
$id = $_POST['id'];
$lama = $_POST['lama'];
$baru = $_POST['baru'];
$ulang = $_POST['ulang'];

$cek = mysql_query("select * from kasir where pass_kasir='$lama' and is_kasir='$id'");

if(mysql_num_rows($cek)==1){
	if($baru==$ulang){
		$b = $baru;
		mysql_query("update user set pass_kasir='$b' where id_kasir='$id'");
		header("location:ganti_password_kasir.php?pesan=oke");
	}else{
		header("location:ganti_password_kasir.php?pesan=tdksama");
	}
}else{
	header("location:ganti_password_kasir.php?pesan=gagal");
}
 ?>