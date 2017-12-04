<!--Penjualannya di sini gan!!-->
<html>
<head>

<?php
	session_start();
	include 'koneksi.php';
?>
<title>Sistem Pengelolaan Super Market</title>
<link rel="stylesheet" type="text/css" href="style.css">
<script>
function startCalc(){
interval = setInterval("calc()",1);}
function calc(){

two = document.autoSumForm.bayar.value; 
three = document.autoSumForm.subtotal.value; 
document.autoSumForm.kembali.value = (two * 1) - (three * 1);}
function stopCalc(){
clearInterval(interval);}
</script>


</head>
<body>
	<div class="wrapper">
	     <div class="left1">
				<?php
				include "koneksi.php";

					if (isset($_GET['op']))
					{
						if ($_GET['op'] == 'send')
						{
							date_default_timezone_set('Asia/Jakarta');
							$dmy = date('Ymd');
							$time1 = date('H:i:s');
							$barcode    =$_POST['id_barang'];
							$jumlah		=$_POST['jumlah_barang'] ;
							
							$select = "select nama_barang,harga_barang, from barang where barcode='$barcode' or nama='$barcode'";
							$select_query = mysql_query($select);
				 

							while($select_result = mysql_fetch_array($select_query))
							{

								$nama		    = $select_result ['nama_barang'];
								$harga_barang	= $select_result ['harga_barang'];

								$query_insert = "INSERT INTO temp (nama_barang,harga_barang,jumlah_barang,kasir,tgl,waktu) VALUES ('$nama','$harga_barang','$jumlah_barang','$kasir','$dmy','$time1','$barcode')";
								$query_update = "UPDATE temp SET sub_total = harga_barang * jumlah WHERE nama_barang='$nama' and jumlah_barang='$jumlah'";

								$insert = mysql_query($query_insert);


								if ($insert) 
								{
								$update = mysql_query($query_update);
								}
								else 
								{
								echo "GAGAL DITAMBAHKAN";
								}
							}
						}
					}
				?>
			</div>

<div class="left2">
		 <div class="message warning">
<div class="contact-form">
	<div class="logo">
		<h1>Transaksi Penjualan</h1>
	</div>	
<!-- form -->
<a href='gudang_barang.php' target='_blank'>Cari barang</a><br/>

<form class="form" action="kasir.php?op=send" method="post" name="contact_form">
	<ul>
		<li>
			 <label></label>
			 
			 <input type="text"  name="jumlah"  placeholder="jumlah barang" required />	
													 
		 </li>
		<li>
			 <label></label>
			 <input type="text" id  name="barcode"  placeholder="barcode atau nama barang" required />	
													 
		 </li>
		 <li class="style">
		     <input type="Submit" value="<<< TAMBAHKAN">
		 </li>
	</ul>	
	<div class="clear"></div>	
</form>

	<table id='tfhover'  class='tftable' border='1' align='center'> <col width='250'><col width='100'><col width='100'><col width='100'><colwidth='50'>

		<tr>

		<th style="text-align:center;">Nama</th>
		<th style="text-align:center;">Harga</th>
		<th style="text-align:center;">Jumlah</th>
		<th style="text-align:center;">Sub Total</th>

		<th></th>
		</tr>
		<?php
			$select = "SELECT id_barang,sub_total,nama_barang,harga_barang,jumlah_barang FROM temp";
			$select_query = mysql_query($select);


			while($select_result = mysql_fetch_array($select_query))
			{
			?>
				<tr>
					<td><?php echo $select_result['nama_barang'] ?></td>
					<td><?php echo $select_result['jumlah_barang'] ?></td>
					<td><?php echo $select_result['harga_barang'] ?></td>
					<td><?php echo $select_result['subtotal'] ?></td>
					<td><center><a href="delete_barang.php?kode=<?php echo $var['id_barang'] ?>">Delete</a></td>
				</tr>
			<?php}?>
	</table>
<?php

	$select1 = "SELECT SUM(jumlah_barang) AS alljumlah,SUM(sub_total) AS total FROM temp";
	$select_query1 = mysql_query($select1);
	while($select_result = mysql_fetch_array($select_query1))
	{
		$alljumlah	 			= $select_result['alljumlah'] ;
		$total	 				= $select_result['total'] ;
	?>
		<table id='tfhover'  class='tftable' border='1' align='center'> <col width='250'><col width='100'><col width='100'><col width='100'><col width='50'>
		<tr>

		<th style='text-align:center;'><br/></th>
		<th style='text-align:center;'></th>
		<th style='text-align:center;'><?php$alljumlah?></th>
		<th style='text-align:right;'><?php$total?></th>
		<th><a href='deletetemp.php'><img src='bin.png'></img></a></th>
		</tr>
		</table>
	<?php}?>



Pembayaran
	<form name='autoSumForm' class="form" action="angkut.php" method="post">
		<?php
		$hitung = "SELECT SUM(sub_total) AS total1 FROM temp";
		$select_hitung = mysql_query($hitung);
		while($select_result = mysql_fetch_array($select_hitung))
		{
		$total1	 	= $select_result['total1'] ;
		}?>

			<ul>
				<li>
				 <label></label>
				 <input type='text' name='bayar' required placeholder="Uang Pembayaran ?" style="text-align:right;" value='' size='23' maxlength='300'  onFocus="startCalc();" onBlur="stopCalc();" />
			    </li>
			<li>
			<label></label>
			<input type='text' name="subtotal"  style="text-align:right;" readonly value='<?php echo $total1 ;?>' size='23' maxlength='300' onFocus="startCalc();" onBlur="stopCalc();"  />
			</li>
			<li>
			<label></label>
			<input readonly type=text value='0' style="text-align:right;" name="kembali" readonly onchange='tryNumberFormat(this.form.thirdBox);'> 
			</li>
			 <li class="style">
			<input type="Submit" value="SIMPAN" >
			</li>
			</ul>
		<div class="clear"></div>	
	</form>
	</div>
	</div>
<div class="clear"></div>

	     </div>
	 </div> 
</body>
</html>