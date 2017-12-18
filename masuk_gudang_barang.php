<html>
<head>
<?php
	session_start();
	include 'koneksi.php';
	include 'cek.php';
?>
<title>Sistem Pengelolaan Super Market</title>
<link rel="stylesheet" type="text/css" href="style.css">
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
					<li><a href="menu_gudang.php">Kembali</a></li>
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
			<form action="cari_barang_masuk.php" method="get"> 
				<h4>Cari Barang
					<input type="text" placeholder="Nama Barang" name="namabarang">
			 	</h4>
			</form>
			<form action="laporan_barang_masuk.php" method="get"> 
				<select name="bln"> <option>Pilih Bulan...</option>
					<option value="01">Januari</option>
					<option value="02">Februari</option>
					<option value="03">Maret</option>
					<option value="04">April</option>
					<option value="05">Mei</option>
					<option value="06">Juni</option>
					<option value="07">Juli</option>
					<option value="08">Agustus</option>
					<option value="09">September</option>
					<option value="10">Oktober</option>
					<option value="11">November</option>
					<option value="12">Desember</option>
				</select>
				<input type="submit" value="Cetak">
			</form>
			<br>
			<a href="tambah_barang_masuk.php">Tambah</a>
			<br/>
			<br/>
			<table>
				<tr>
					<td><b>Tanggal Masuk</td>
					<td><b>Id Barang</td>
					<td><b>Nama Barang</td>
					<td><b>Jumlah Barang</td>
					<td><b>Harga Satuan</td>
					<td><b>Total Harga</td>
					<td><b>Delete</td>
					<td><b>Edit</td>
				</tr>
				<?php $query = mysql_query("select * from barangmasuk order by tanggal_masuk");
					while($var = mysql_fetch_array($query)){
					?>
						<tr>
							<td><?php echo $var['tanggal_masuk'] ?></td>
							<td><?php echo $var['id_barang'] ?></td>
							<td><?php echo $var['nama_barang'] ?></td>
							<td><?php echo $var['jumlah_barang'] ?></td>
							<td><?php echo $var['harga_barang'] ?></td>
							<td><?php echo $var['total_harga'] ?></td>
							<td><center><a href="delete_barang_masuk.php?kode=<?php echo $var['no_barang_masuk'] ?>">Delete</a></td>
							<td><center><a href="edit_barang_masuk.php?kode=<?php echo $var['no_barang_masuk'] ?>">Edit</a></td>
						</tr>
				<?php	}
				?>
			</table>
		</div>
		<!-- menu -->

		<!-- footbar -->
		<footer>
			<hr>
			<p class="kaki">by kelompok</p>
		</footer>
		<!-- end footbar -->
	</div>
	<!-- end wrapper -->
</body>
</head>
</html>	