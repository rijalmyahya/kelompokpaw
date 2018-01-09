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
			<h1>Sistem Pengelolaan Super Market</h1>
			<hr>
			<!-- navbar-->
			<nav>
				<ul>
					<li><a href="masuk_gudang_barang.php">Kembali</a></li>
					<li>|</li>
					<li><a href="logout.php">Logout</a></li>
					<li>
						<?php
						if(isset($_GET['pesan'])){
							if($_GET['pesan'] == "ada"){
								echo '|-- Id barang sudah ada--|';
							}
							else if($_GET['pesan'] == "kurang"){
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
						<b>Edit Barang</b> 
					</div>
					<?php
					$id = $_GET['kode'];
					
					$tampil = "SELECT * FROM barangmasuk WHERE no_barang_masuk='$id'";
					$query = mysql_query($tampil);
					$data = mysql_fetch_array($query);
					$no = $data['no_barang_masuk'];
					$tanggal = $data['tanggal_masuk'];
					$id = $data['id_barang'];
					$nama = $data['nama_barang'];
					$harga = $data['harga_barang'];
					$jumlah = $data['jumlah_barang'];
					$total = $data['total_harga'];
					?>
					<div class="kotaklogb">
						<table border="0">
							<form action="proses_edit_barang_masuk.php" method="post">
							<input type="hidden" name="no" value="<?php echo $no; ?>">
							<tr>
								<td align="left" align="center">Tanggal Masuk</td>
								<td align="right">
									<input type="text" name="tanggal" placeholder="k124" value="<?php echo $tanggal; ?>" size="20">
								</td>
							</tr>
							<tr>
								<td align="left" align="center">ID Barang</td>
								<td align="right">
									<input type="text" name="id" placeholder="k124" value="<?php echo $id; ?>" size="20">
								</td>
							</tr>
							<tr>
								<td align="left" align="center">Nama Barang</td>
								<td align="right">
									<input type="text" name="nama" placeholder="karung" value="<?php echo $nama;?>" size="20">
								</td>
							</tr>
							<tr>
								<td align="left" align="center">Harga Barang</td>
								<td align="right">
									<input type="text" name="harga" placeholder="1500" value="<?php echo $harga;?>" size="20">
								</td>
							</tr>
							<tr>
								<td align="left" align="center">Jumlah Barang</td>
								<td align="right">
									<input type="text" name="jumlah" placeholder="5000" value="<?php echo $jumlah;?>" size="20">
								</td>
							</tr>
							<tr>
								<td align="left" align="center">Total Harga</td>
								<td align="right">
									<input type="text" name="total" placeholder="5000" value="<?php echo $total;?>" size="20">
								</td>
							</tr>
							<tr>
								<td colspan="2" align="right">
									<input type="submit" value="Edit">
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