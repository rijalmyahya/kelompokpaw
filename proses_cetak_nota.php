<?php
require("phpfpdf/fpdf.php");
include 'koneksi.php';
$bayar 		= $_POST['bayar'];
$hargat		= $_POST['subtotal'];
$kembali	= $_POST['kembali'];

$select2 = mysql_query("select * from temp");
while ($var2 = mysql_fetch_array($select2)) {
	$id     = $var2['id_barang'];
	$nama   = $var2['nama_barang'];
	$jumlah = $var2['jumlah_barang'];

	$select = mysql_query("select * from barang where id_barang='$id' or nama_barang='$nama'");
	while($var1 = mysql_fetch_array($select)){
		$id2         = $var1['id_barang'];
		$nama2		 = $var1['nama_barang'];
		$jumlah_awal = $var1['jumlah_barang'];
		$sisa = $jumlah_awal-$jumlah;
		$query_update=mysql_query("update barang set jumlah_barang='$sisa' where id_barang='$id2' or nama_barang='$nama2'");
	}
}

$pdf = new FPDF('l','mm','A4');
$pdf->Addpage();
$pdf->SetFont('Arial','B','16');
$pdf->Cell(190,7,'Sistem Pengelolaan Supermarket',0,1,'C');
$pdf->SetFont('Arial','B','14');
$pdf->Cell(190,7,'Nota Pembelian',0,1,'C');

$pdf->Cell(10,7,'',0,1);

$pdf->SetFont('Arial','B','12');

$pdf->Cell(20,6,'No',1,0);
$pdf->Cell(85,6,'NAMA BARANG',1,0);
$pdf->Cell(27,6,'JUMLAH',1,0);
$pdf->Cell(25,6,'HARGA',1,1);
 
$pdf->SetFont('Arial','',10);
 
$nota = mysql_query("select * from temp");
while ($row = mysql_fetch_array($nota)){
    $pdf->Cell(20,6,$row['no'],1,0);
    $pdf->Cell(85,6,$row['nama_barang'],1,0);
    $pdf->Cell(27,6,$row['jumlah_barang'],1,0);
    $pdf->Cell(25,6,$row['sub_total'],1,1); 
}
$pdf->Cell(20,6,'Total Harga        :' .$hargat,0,1);
$pdf->Cell(20,6,'Uang Yang Di Bayar :' .$bayar,0,1);
$pdf->Cell(20,6,'Uang Kembalian     :' .$kembali,0,1);

$pdf->Output("cetak_nota.pdf","I");

//$query_hapus_temp=mysql_query("delete from temp ") or die(mysql_error());

echo "<meta http-equiv='refresh' content='1 url=kasir1.php'>";
?>