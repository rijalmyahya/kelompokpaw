<?php 
include('koneksi.php');
	mysql_query("delete from temp") or die(mysql_error());
	header('location:kasir1.php');
?>