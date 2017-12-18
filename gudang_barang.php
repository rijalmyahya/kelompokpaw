<html>
<head>
<?php
	session_start();
	include 'koneksi.php';
	include 'cek.php';
	include 'fungsi_fungsi.php';
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
			<form action="cari_barang.php" method="get"> 
				<h4>Cari Barang
					<input type="text" placeholder="Nama Barang" name="namabarang">
			 	</h4>
			</form>
			<a href="tambah_barang.php">Tambah Barang</a>
			<a href="laporan_barang.php">Cetak Data</a>
			<br/>
			<br/>
			<table>
				<tr>
					<td><b>Id Barang</td>
					<td><b>Nama Barang</td>
					<td><b>Jumlah Barang</td>
					<td><b>Harga Jual</td>
					<td><b>Delete</td>
					<td><b>Edit</td>
				</tr>
				<?php //$query = mysql_query("select * from barang order by id_barang");
					$query = tampil();
					while($var = mysql_fetch_array($query)){
					?>
						<tr>
							<td><?php echo $var['id_barang'] ?></td>
							<td><?php echo $var['nama_barang'] ?></td>
							<td><?php echo $var['jumlah_barang'] ?></td>
							<td><?php echo $var['harga_barang'] ?></td>
							<td><center><a href="delete_barang.php?kode=<?php echo $var['id_barang'] ?>">Delete</a></td>
							<td><center><a href="edit_barang.php?kode=<?php echo $var['id_barang'] ?>">Edit</a></td>
						</tr>
					<?php } ?>
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