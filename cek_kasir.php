<?php 
if(!isset($_SESSION['id_kasir'])){
	header("location:login_kasir.php?pesan=gagal");
}
?>