<?php ob_start();
include "koneksi.php";

$id = $_POST['id'];
$nama = $_POST['nama'];
$tempat = $_POST['tempat'];
$tanggal = $_POST['tanggal'];
$notlp = $_POST['notlp'];
$alamat = $_POST['alamat'];

mysql_query("update pegawai set nama_pegawai='$nama', tempat_lahir='$tempat', tanggal_lahir='$tanggal', no_tlp='$notlp', alamat='$alamat' where id_pegawai='$id'") or die(mysql_error());
mysql_query("update kasir set nama_kasir='$nama' where id_kasir='$id'") or die(mysql_error());
header('location:data_pegawai_kasir.php');
?>