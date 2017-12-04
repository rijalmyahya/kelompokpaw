<?php 
ob_start();
include "koneksi.php";

$id   	= $_POST['id'];
$nama   = $_POST['nama'];
$jumlah = $_POST['jumlah'];
$harga  = $_POST['harga'];
$tanggal = $_POST['tanggal'];
$total = $harga*$jumlah;

$cek = mysql_query("select * from barang where id_barang='$id'");

if(mysql_num_rows($cek)==1){
	header("location:tambah_barang.php?pesan=ada");
}else{
	if(empty($id) || empty($nama) || empty($harga)  || empty($jumlah) || empty($tanggal)) {
		header("location:tambah_barang.php?pesan=kurang");
	}else{
		mysql_query("insert into barang(id_barang,nama_barang,jumlah_barang,harga_barang)
		values('$id','$nama','$jumlah','$harga')") or die(mysql_error());
		mysql_query("insert into barangmasuk(tanggal_masuk,id_barang,nama_barang,jumlah_barang,harga_barang,total_harga)
		values('$tanggal','$id','$nama','$jumlah','$harga','$total')") or die(mysql_error());
		header('location:gudang_barang.php');
	}
}
?>