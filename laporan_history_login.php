<?php
include 'koneksi.php';
require("phpfpdf/fpdf.php");
date_default_timezone_set('Asia/Jakarta');

$pdf = new FPDF("L","cm","A4");

$pdf->SetMargins(2,1,1);
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','B',16);
$pdf->SetX(4);
$pdf->MultiCell(20.5,0.7,'PT. SUPER GAPENSA',0,'C');
$pdf->SetX(4);
$pdf->MultiCell(20.5,0.7,'JL. MAWAR NO. 05 GARUT',0,'C');
$pdf->SetX(4);
$pdf->Line(1,3.1,28.5,3.1);
$pdf->SetLineWidth(0.1);      
$pdf->Line(1,3.2,28.5,3.2);   
$pdf->SetLineWidth(0);
$pdf->ln(1);
$pdf->SetFont('Arial','B',14);
$pdf->Cell(25.5,0.7,"Laporan Data Barang Masuk",0,10,'C');
$pdf->ln(1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(5,0.7,"Periode : ".$_GET['bln'],0,0,'L');
$pdf->ln(1);
$pdf->Cell(5,0.7,"Di cetak pada : ".date("D - d/m/Y"),0,0,'C');
$pdf->ln(1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(1, 0.8, 'No', 1, 0, 'C');
$pdf->Cell(5, 0.8, 'Tanggal Login', 1, 0, 'C');
$pdf->Cell(3, 0.8, 'Id User', 1, 0, 'C');
$pdf->Cell(7, 0.8, 'Nama User', 1, 1, 'C');
$pdf->SetFont('Arial','',10);
$no=1;
$bln=$_GET['bln'];
$query=mysql_query("select * from login where month(tanggal)=$bln order by no_log");
while($lihat=mysql_fetch_array($query)){
	$pdf->Cell(1, 0.8, $no , 1, 0, 'C');
	$pdf->Cell(5, 0.8, $lihat['tanggal'],1, 0, 'C');
	$pdf->Cell(3, 0.8, $lihat['Id_user'],1, 0, 'C');
	$pdf->Cell(7, 0.8, $lihat['nama_user'],1, 1, 'C');
	$no++;
}
$pdf->Output("laporan_history_login.pdf","I");
?>