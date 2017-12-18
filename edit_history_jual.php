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
				<img src="logo.png">
			</div>
			<!-- end logo-->
			<h1>Sistem Pengelolaan Super Market</h1>
			<hr>
			<!-- navbar-->
			<nav>
				<ul>
					<li><a href="gudang_barang.php">Kembali</a></li>
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
						<b>Edit History</b> 
					</div>
					<?php
					$id = $_GET['kode'];
					
					$tampil = "SELECT * FROM logjual WHERE no_logjual = $id";
					$query = mysql_query($tampil);
					$data = mysql_fetch_array($query);
					$no = $data['no_logjual'];
					$id = $data['id_barang']; 
					$nama = $data['nama_barang'];
					$harga = $data['harga_barang'];
					$jumlah = $data['jumlah_barang'];
					$total = $data['total_harga'];
					$kasir = $data['id_kasir'];
					$tanggal = $data['tanggal'];
					?>
					<div class="kotaklogb">
						<table border="0">
							<form action="proses_edit_history_jual.php" method="post">
							<input type="hidden" name="no" placeholder="ID" value="<?php echo $no; ?>" size="20">
							<tr>
								<td align="left" align="center">Id Barang</td>
								<td align="right">
									<input type="text" name="id" placeholder="ID" value="<?php echo $id; ?>" size="20">
								</td>
							</tr>
							<tr>
								<td align="left" align="center">Nama Barang</td>
								<td align="right">
									<input type="text" name="nama" placeholder="nama" value="<?php echo $nama; ?>" size="20">
								</td>
							</tr>
							<tr>
								<td align="left" align="center">Harga Barang</td>
								<td align="right">
									<input type="text" name="harga" placeholder="Harga" value="<?php echo $harga;?>" size="20">
								</td>
							</tr>
							<tr>
								<td align="left" align="center">Jumlah Barang</td>
								<td align="right">
									<input type="text" name="jumlah" placeholder="Jumlah" value="<?php echo $jumlah;?>" size="20">
								</td>
							</tr>
							<tr>
								<td align="left" align="center">Total Harga</td>
								<td align="right">
									<input type="text" name="total" placeholder="total" value="<?php echo $total;?>" size="20">
								</td>
							</tr>
							<tr>
								<td align="left" align="center">Id Kasir</td>
								<td align="right">
									<input type="text" name="kasir" placeholder="kasir" value="<?php echo $kasir;?>" size="20">
								</td>
							</tr>
							<tr>
								<td align="left" align="center">tanggal</td>
								<td align="right">
									<input type="datetime-local" name="total" placeholder="date-time" value="<?php echo $tanggal;?>" size="20">
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