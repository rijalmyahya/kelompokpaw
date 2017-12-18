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
					<li><a href="gudang_barang.php">Kembali</a></li>
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
			<br/>
			<br/>
			<table>
			<?php
				if(isset($_GET['cari'])){
					$cari = mysql_real_escape_string($_GET['cari']);
					$barang = mysql_query("select * from barang where nama_barang like '%$cari%' or id_barang like '%$cari%'");
					$ketemu = mysql_num_rows($barang);
					if($ketemu > 0){
			?>
					<tr>
						<td><b>Id Barang</td>
						<td><b>Nama Barang</td>
						<td><b>Jumlah Barang</td>
						<td><b>Harga Jual</td>
						<td><b>Delete</td>
						<td><b>Edit</td>
					</tr>
					<?php while($var = mysql_fetch_array($barang))
					{
					?>
							<tr>
								<td><?php echo $var['id_barang'] ?></td>
								<td><?php echo $var['nama_barang'] ?></td>
								<td><?php echo $var['jumlah_barang'] ?></td>
								<td><?php echo $var['harga_barang'] ?></td>
								<td><center><a href="delete_barang.php?kode=<?php echo $var['id_barang'] ?>">Delete</a></td>
								<td><center><a href="edit_barang.php?kode=<?php echo $var['id_barang'] ?>">Edit</a></td>
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