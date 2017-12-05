<html>
<head>
<?php
	session_start();
	include 'koneksi.php';
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
				<img src="logo.jpg">
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
			<a href="tambah_barang_masuk.php">Tambah</a>
			<br/>
			<br/>
			<table>
				<tr>
					<td><b>Id Barang</td>
					<td><b>Tanggal masuk</td>
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
							<td><center><a href="delete_barang_masuk.php?kode=<?php echo $var['tanggal_masuk'] ?>&kode2=<?php echo $var['nama_barang']?>">Delete</a></td>
							<td><center><a href="edit_barang_masuk.php?kode=<?php echo $var['id_barang'] ?> &kode2=<?php echo $var['tanggal_masuk'] ?>">Edit</a></td>
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