<?php
	//require_once "PHPUnit/Framework/TestCase.php";
	include "koneksi.php";

class testfungsi_fungsi extends PHPUnit_Framework_TestCase{
	
	bool $tambah;
	bool $delete;
	public function addtambah_barang()
    {
    	$this->testtambah_barang("k1", "barang", 10, 500, "10/12/2017", 5000,true);
    }

    public function adddelete_barang(){
    	$this->testdelete_barang("k1",true);
    }
	
	function testtambah_barang($id,$nama,$jumlah,$harga,$tanggal,$total,$extends){
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
				$tambah =true;
			}
		}
		$this->assertEquals($extends);	
	}

	function testdelete_barang($idbarang,$extends){
		$idbarang1 = $idbarang;
		mysql_query("delete from barang where id_barang='$idbarang1'");
		header('location:gudang_barang.php');
		$delete =true;
		$this->assertEquals($extends);
	}

	function testtampil(){
		return mysql_query("select * from barang order by id_barang");
	}	
}
?>