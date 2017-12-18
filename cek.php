<?php 
if(!isset($_SESSION['id_admin'])){
	header("location:login_adm.php?pesan=blm");
}
?>