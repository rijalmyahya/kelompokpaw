<?php 
if(!isset($_SESSION['username'])){
	header("location:hal_login.php?pesan=blm");
}
?>