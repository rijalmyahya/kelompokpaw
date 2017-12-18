<html>
<head>
<?php
	session_start();
	include 'koneksi.php';
	include 'cek_kasir.php';
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
			<form action="cari_daftar_barang_kasir.php" method="get"> 
				<h4>Cari Barang
					<input type="text" placeholder="Nama Barang" name="namabarang">
			 	</h4>
			</form>
			<table>
				<tr>
					<td><b>Id Barang</td>
					<td><b>Nama Barang</td>
					<td><b>Jumlah Barang</td>
					<td><b>Harga Jual</td>
				</tr>
				<?php $query = mysql_query("select * from barang order by id_barang");
					while($var = mysql_fetch_array($query)){
					?>
						<tr>
							<td><?php echo $var['id_barang'] ?></td>
							<td><?php echo $var['nama_barang'] ?></td>
							<td><?php echo $var['jumlah_barang'] ?></td>
							<td><?php echo $var['harga_barang'] ?></td>
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