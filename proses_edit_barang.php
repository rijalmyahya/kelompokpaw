<?php ob_start();
include "koneksi.php";

$id   	= $_POST['id'];
$nama   = $_POST['nama'];
$harga  = $_POST['harga'];
$jumlah = $_POST['jumlah'];
$total  = $harga*$jumlah;

$dt=mysql_query("select * from barangmasuk where id_barang='$id'");
$data=mysql_fetch_array($dt);
$awal = $data['jumlah_barang'];

$dt2=mysql_query("select * from barang where id_barang='$id'");
$data2=mysql_fetch_array($dt2);
$awal2 = $data2['jumlah_barang'];

$tanggal = $data['tanggal_masuk'];

if($awal>$jumlah){
	$sisa = $awal2-$jumlah;
	$final = $awal-$sisa;
	mysql_query("update barang set nama_barang='$nama', jumlah_barang='$jumlah', harga_barang='$harga', id_barang='$id' where id_barang='$id'") or die(mysql_error());
	mysql_query("update barangmasuk set tanggal_masuk='$tanggal', id_barang='$id', nama_barang='$nama', jumlah_barang='$final', harga_barang='$total' where id_barang='$id' and tanggal_masuk = '$tanggal'");
	header('location:gudang_barang.php');
}
else{
	$sisa = $jumlah-$awal2;
	$final = $awal+$sisa;
	mysql_query("update barang set nama_barang='$nama', jumlah_barang='$jumlah', harga_barang='$harga', id_barang='$id' where id_barang='$id'") or die(mysql_error());
	mysql_query("update barangmasuk set tanggal_masuk='$tanggal', id_barang='$id', nama_barang='$nama', jumlah_barang='$final', harga_barang='$total' where id_barang='$id' and tanggal_masuk = '$tanggal'");
	header('location:gudang_barang.php');
}
?>