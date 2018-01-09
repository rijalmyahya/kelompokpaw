<?php
	include "koneksi.php";

	function tambah_barang($id,$nama,$jumlah,$harga,$tanggal,$total){
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
	}

	function delete_barang($idbarang){
		$idbarang1 = $idbarang;
		mysql_query("delete from barang where id_barang='$idbarang1'");
		header('location:gudang_barang.php');
	}

	/*function tampil(){
		$query = mysql_query("select * from barang order by id_barang");
 		if($query==true){
 			return $query;
 		}
 		else{
 			$message = "kesalahan";
 			return $message;
 		}
	}*/

	function tampil(){
		$query = mysql_query("select * from barang order by id_barang");
 		if($query==true){
 			return $query;
 		}
 		else{
 			$message = "kesalahan";
 			return $message;
 		}
	}		
?>