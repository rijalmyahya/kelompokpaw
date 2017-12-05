<html>
<head>
<?php
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
			<h1>Sistem Pengelolaan Super Market</h1>
			<hr>
			<!-- navbar-->
			<nav>
				<ul>
					<li><a href="keluar_gudang_barang.php">kembali</a></li>
					<li>|</li>
					<li><a href="logout.php">Log Out</a></li>
					<li>
						<?php
						if(isset($_GET['pesan'])){
							if($_GET['pesan'] == "gagal"){
								echo '|-- Ada data belum di isi--|';
							}
						}
						?>
					</li>
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

		<div class="clear"></div>

		<!-- menu -->
		<div class="con">
			<div class="login">
					<div class="kotakloga">
						<b>Tambah</b> 
					</div>
					<div class="kotaklogb">
						<table border="0">
							<form action="proses_tambah_barang_keluar.php" method="post">
							<tr>
								<td align="left" align="center">Tanggal Keluar</td>
								<td align="right">
									<input type="date" name="tanggal" placeholder="k124" size="20">
								</td>
							</tr>
							<tr>
								<td align="left" align="center">ID Barang</td>
								<td align="right">
									<input type="text" name="id" placeholder="k124" size="20">
								</td>
							</tr>
							<tr>
								<td align="left" align="center">Nama Barang</td>
								<td align="right">
									<input type="text" name="nama" placeholder="karung" size="20">
								</td>
							</tr>
							<tr>
								<td align="left" align="center">Jumlah Barang</td>
								<td align="right">
									<input type="text" name="jumlah" placeholder="1500" size="20">
								</td>
							</tr>
							<tr>
								<td align="left" align="center">Harga Barang</td>
								<td align="right">
									<input type="text" name="harga" placeholder="5000" size="20">
								</td>
							</tr>
							<tr>
								<td colspan="2" align="right">
									<input type="submit" value="Tambah">
								</td>
							</tr>
							</form>
						</table>
					</div>
			</div>
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