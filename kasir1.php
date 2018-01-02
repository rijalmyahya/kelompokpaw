<html>
<head>
<?php
	session_start();
	include 'koneksi.php';
	include 'cek_kasir.php';
?>
<title>Sistem Pengelolaan Super Market</title>
<link rel="stylesheet" type="text/css" href="style.css">
	<script>
		function startCalc(){
			interval = setInterval("calc()",1);
		}
		function calc(){
			two = document.autoSumForm.bayar.value; 
			three = document.autoSumForm.subtotal.value; 
			document.autoSumForm.kembali.value = (two * 1) - (three * 1);
		}
		function stopCalc(){
			clearInterval(interval);
		}
	</script>
</head>
<body>
	<!-- wrapper -->
	<div class="wrapper">
		<!-- header-->
		<header>
			<!-- logo-->
			<div id="logo">
				<img src="logo.png">
			</div>
			<!-- end logo-->
			<h1 class="title">Sistem Pengelolaan Super Market</h1>
			<hr>
			<!-- navbar-->
			<nav>
				<ul>
					<li><a href="menu_kasir.php">Kembali</a></li>
					<li>|</li>
					<li><a href="logout.php">Log Out</a></li>
				</ul>
			</nav>
			<hr>
			<!-- end navbar-->	
		</header>
		<!-- end header-->

		<div class="clear"></div>

		<!-- banner-->
		<div id="banner">
			<img src="banner.jpg">
		</div>
		<!-- end banner-->

		<!-- menu -->
		<div class="contain">
			<h1>Transaksi Penjualan</h1>
			<a href='daftar_barang.php' target='_blank'>Cari barang</a><br/><br/>
			<form action="proses_masuk_keranjang.php" method="post">
						 <input type="text"  name="jumlah_barang"  placeholder="Jumlah Barang" />	
						 <input type="text" name="barcode"  placeholder="Id Barang"/>	
					     <input type="Submit" value="<<< TAMBAHKAN">
				<div class="clear"></div>	
			</form>

			<table>
				<tr>

					<th style="text-align:center;">Nama</th>
					<th style="text-align:center;">Harga</th>
					<th style="text-align:center;">Jumlah</th>
					<th style="text-align:center;">Sub Total</th>
					<th style="text-align:center;">Hapus</th>
				</tr>
				<tr>
					<?php 
						$select1 = mysql_query("select * from temp");
						while ($var = mysql_fetch_array($select1)) {
						?>
						<tr>
						<td><?php echo $var['nama_barang']?></td>
						<td><?php echo $var['harga_barang']?></td>
						<td><?php echo $var['jumlah_barang']?></td>
						<td><?php echo $var['sub_total']?></td>
						<td><a href="delete_barang_dikeranjang.php?kode=<?php echo $var['no']?>">Hapus</a></td>
						</tr>
					<?php
						}
					?>
				</tr>
			<?php

			$select2 = "SELECT SUM(jumlah_barang) AS alljumlah,SUM(sub_total) AS total FROM temp";
			$select_query2 = mysql_query($select2);
			while($select_result2 = mysql_fetch_array($select_query2))
			{
			$alljumlah	 			= $select_result2['alljumlah'] ;
			$total	 				= $select_result2['total'] ;
			echo"
			<tr>
			<th style='text-align:center;'></th>
			<th style='text-align:center;'></th>
			<th style='text-align:center;'>$alljumlah</th>
			<th style='text-align:right;'>$total</th>
			<th><a href='delete_keranjang.php'>Kosongkan Keranjang</a></th>
			</tr>
			</table>
			";}?>
			<!--table untuk jumlah harga-->

			<h1>Pembayaran</h1>
			<form name='autoSumForm' action="proses_cetak_nota.php" method="post">
				<?php
				$hitung = "SELECT SUM(sub_total) AS total1 FROM temp";
				$select_hitung = mysql_query($hitung);
				while($select_result = mysql_fetch_array($select_hitung))
				{
				$total1	 	= $select_result['total1'] ;
				}?>

						 <input type='text' name='bayar' required placeholder="Uang Pembayaran ?" style="text-align:right;" value='' size='23' maxlength='300'  onFocus="startCalc();" onBlur="stopCalc();" />
							<input type='text' name="subtotal"  style="text-align:right;" value="<?php echo $total1;?>" size='23' maxlength='300' onFocus="startCalc();" onBlur="stopCalc();"  />
							<input readonly type=text value='0' style="text-align:right;" name="kembali" readonly onchange='tryNumberFormat(this.form.thirdBox);'> 
							<input type="Submit" value="SIMPAN" >
				<div class="clear"></div>	
			</form>
		</div>
		<!-- menu -->

		<!-- footbar -->
		<footer>
			<hr>
			<p class="kaki">by kelompok</p>
		</footer>
		<!-- end footbar -->
		<div class="clear"></div>
	</div>
	<!-- end wrapper -->
</body>
</html>