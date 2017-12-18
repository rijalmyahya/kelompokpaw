<?php 
include('koneksi.php');
$id = $_GET[kode];
	mysql_query("delete from temp where no='$id'") or die(mysql_error());
	header('location:kasir1.php');
?>