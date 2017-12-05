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
				<img src="banner.jpg">	
			</div>
			<!-- end logo-->
			<h1 class="title">Sistem Pengelolaan Super Market</h1>
			<hr>
			<!-- navbar-->
			<nav>
				<ul>
					<li><a href="menu_admin.php">Kembali</a></li>
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
			<table>
				<tr>
					<td><b>Tanggal</td>
					<td><b>Id kasir</td>
					<td><b>Nama kasir</td>
					<td><b>Barang yang dijual</td>
					<td><b>Total Penjualan</td>
					<td><b>Edit</td>
					<td><b>Delete</td>
				</tr>
				<?php $query = mysql_query("select * from logjual order by tanggal");
					while($var = mysql_fetch_array($query)){
					?>
						<tr>
							<td><?php echo $var['tanggal'] ?></td>
							<td><?php echo $var['id_kasir'] ?></td>
							<td><?php echo $var['nama_kasir'] ?></td>
							<td><?php echo $var['barang_terjual'] ?></td>
							<td><?php echo $var['total_penjualan'] ?></td>
							<td><center><a href="delete_history_jual.php?kode=<?php echo $var['tanggal'] ?>&kode2=<?php echo $var['id_kasir']?>">Delete</a></td>
							<td><center><a href="edit_history_jual.php?kode=<?php echo $var['tanggal'] ?>&kode2=<?php echo $var['id_kasir']?>">Edit</a></td>
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