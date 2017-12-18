<?php ob_start();
include "koneksi.php";

$id = $_POST['id'];
$nama = $_POST['nama'];
$tempat = $_POST['tempat'];
$tanggal = $_POST['tanggal'];
$notlp = $_POST['notlp'];
$alamat = $_POST['alamat'];

mysql_query("update pegawai set nama_pegawai='$nama', tempat_lahir='$tempat', tanggal_lahir='$tanggal', no_tlp='$notlp', alamat='$alamat' where id_pegawai='$id'") or die(mysql_error());
mysql_query("update admin set nama_admin='$nama' where id_admin='$id'") or die(mysql_error());
header('location:data_pegawai_admin.php');
?>