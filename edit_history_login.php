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
					$tanggal = $_GET['kode2'];
					
					$tampil = "SELECT * FROM login WHERE id_user='$id' and tanggal='$tanggal'";
					$query = mysql_query($tampil);
					$data = mysql_fetch_array($query);
					$tanggal = $data['tanggal']; 
					$id = $data['id_user'];
					$nama = $data['nama_user'];
					?>
					<div class="kotaklogb">
						<table border="0">
							<form action="proses_edit_history_login.php" method="post">
							<tr>
								<td align="left" align="center">Tanggal</td>
								<td align="right">
									<input type="datetime-local" name="tanggal" placeholder="k124" value="<?php echo $tanggal; ?>" size="20">
								</td>
							</tr>
							<tr>
								<td align="left" align="center">ID User</td>
								<td align="right">
									<input type="text" name="id" placeholder="k124" value="<?php echo $id; ?>" size="20">
								</td>
							</tr>
							<tr>
								<td align="left" align="center">Nama User</td>
								<td align="right">
									<input type="text" name="nama" placeholder="karung" value="<?php echo $nama;?>" size="20">
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