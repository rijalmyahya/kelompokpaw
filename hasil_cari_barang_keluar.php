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
					<li><a href="keluar_gudang_barang.php">Kembali</a></li>
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
			<form action="cari_barang_keluar.php" method="get"> 
				<h4>Cari Barang
					<input type="text" placeholder="Nama Barang" name="namabarang">
			 	</h4>
			</form>
			<br/>
			<br/>
			<table>
			<?php
				if(isset($_GET['cari'])){
					$cari = mysql_real_escape_string($_GET['cari']);
					$barang = mysql_query("select * from barangkeluar where nama_barang like '%$cari%' or id_barang like '%$cari%'");
					$ketemu = mysql_num_rows($barang);
					if($ketemu > 0){
			?>
					<tr>
						<td><b>Id Barang</td>
						<td><b>Tanggal keluar</td>
						<td><b>Nama Barang</td>
						<td><b>Jumlah Barang</td>
						<td><b>Harga Satuan</td>
						<td><b>Total Harga</td>
						<td><b>Delete</td>
						<td><b>Edit</td>
					</tr>
					<?php while($var = mysql_fetch_array($barang))
					{
					?>
						<tr>
							<td><?php echo $var['tanggal_keluar'] ?></td>
							<td><?php echo $var['id_barang'] ?></td>
							<td><?php echo $var['nama_barang'] ?></td>
							<td><?php echo $var['jumlah_barang'] ?></td>
							<td><?php echo $var['harga_barang'] ?></td>
							<td><?php echo $var['total_harga'] ?></td>
							<td><center><a href="delete_barang_keluar.php?kode=<?php echo $var['no_barang_keluar'] ?>">Delete</a></td>
							<td><center><a href="edit_barang_keluar.php?kode=<?php echo $var['no_barang_keluar']?>">Edit</a></td>
						</tr>
					<?php }
						}
						else {
							echo "<center>Data tidak ditemukan</center>";
						}
					}
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