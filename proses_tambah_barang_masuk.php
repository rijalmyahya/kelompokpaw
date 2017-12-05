<?php ob_start();
include "koneksi.php";

$nama   = $_POST['nama'];
$harga  = $_POST['harga'];
$id 	= $_POST['id'];
$jumlah = $_POST['jumlah'];
$tanggal = $_POST['tanggal'];

$dt=mysql_query("select * from barang where nama_barang='$nama'");
$data=mysql_fetch_array($dt);
$sisa = $data['jumlah_barang']+$jumlah;
$total = $jumlah*$harga;
	
	if(empty($id) || empty($nama) || empty($harga)  || empty($jumlah) || empty($tanggal)){
		header("location:tambah_barang_masuk.php?pesan=gagal");
	}
	else{
		mysql_query("insert into barangmasuk(tanggal_masuk,id_barang,nama_barang,jumlah_barang,harga_barang,total_harga)
		values('$tanggal','$id','$nama','$jumlah','$harga','$total')") or die(mysql_error());
		mysql_query("update barang set jumlah_barang='$sisa' where nama_barang='$nama'");
		header('location:masuk_gudang_barang.php');
	}
?>