<?php ob_start();
include "koneksi.php";

$id   	= $_POST['id'];
$nama   = $_POST['nama'];
$harga  = $_POST['harga'];
$jumlah = $_POST['jumlah'];
$tanggal = $_POST['tanggal'];
$total = $jumlah*$harga;
	
$dt=mysql_query("select * from barangmasuk where nama_barang='$nama' and tanggal_masuk='$tanggal'");
$data=mysql_fetch_array($dt);
$awal = $data['jumlah_barang'];

$dt2=mysql_query("select * from barang where id_barang='$id'");
$data2=mysql_fetch_array($dt2);
$awal2 = $data2['jumlah_barang'];

if($awal>$jumlah){
	$sisa = $awal-$jumlah;
	$final = $awal2-$sisa;
	if($final<0){
		header("location:masuk_gudang_barang.php?pesan=min");
	}
	else{
		mysql_query("update barangmasuk set tanggal_masuk='$tanggal', id_barang='$id', nama_barang='$nama', jumlah_barang='$jumlah', harga_barang='$harga', total_harga='$total' where id_barang='$id' and tanggal_masuk = '$tanggal'") or die(mysql_error());
		mysql_query("update barang set jumlah_barang='$final' where id_barang='$id'");
		header('location:masuk_gudang_barang.php');
	}
}
else{
	$sisa = $jumlah-$awal;
	$final = $awal2+$sisa;
	mysql_query("update barangmasuk set tanggal_masuk='$tanggal', id_barang='$id', nama_barang='$nama', jumlah_barang='$jumlah', harga_barang='$harga', total_harga='$total' where id_barang='$id' and tanggal_masuk = '$tanggal'") or die(mysql_error());
	mysql_query("update barang set jumlah_barang='$final' where id_barang='$id'");
	header('location:masuk_gudang_barang.php');
}
?>