<?php
class fungsi_fungsi2 extends PHPUnit_Framework_TestCase{
	public function totalharga($jumlah, $harga){
		$total = $jumlah*$harga;
		return $total;
	}

	public function sisabarangmasuk($jumlah1,$jumlah2){
		$sisa = $jumlah1+$jumlah2;
		return $sisa;
	}

	public function sisabarangkeluar($jumlah1,$jumlah2){
		$sisa = $jumlah1-$jumlah2;
		return $sisa;
	}
}
?>