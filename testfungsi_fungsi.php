<?php
	//require_once "PHPUnit/Framework/TestCase.php";
	include "koneksi.php";
	require 'fungsi_fungsi.php'
class testfungsi_fungsi extends PHPUnit_Framework_TestCase{
	/*function testtambah_barang($id,$nama,$jumlah,$harga,$tanggal,$total){
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

	function testdelete_barang($idbarang){
		$idbarang1 = $idbarang;
		mysql_query("delete from barang where id_barang='$idbarang1'");
		header('location:gudang_barang.php');
	}
*/
	private $fungsi;
 
    protected function setUp()
    {
        $this->fungsi = new fungsi_fungsi();
    }
 
    protected function tearDown()
    {
        $this->fungsi = NULL;
    }

    public public function testtambah_barang()
    {
    	$this->fungsi->tambah_barang("k1", "barang", 10, 500, "10/12/2017", 5000);
    }
	function testtampil(){
		return mysql_query("select * from barang order by id_barang");
	}	
}
?>