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
					<li><a href="data_pegawai_kasir.php">Kembali</a></li>
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
		<div class="con">
			<div class="login1">
					<div class="kotakloga1">
						<b>Edit Data pegawai</b> 
					</div>
					<?php
					$pegawai = $_SESSION['id_kasir'];
					
					$tampil = "SELECT * FROM pegawai WHERE id_pegawai='$pegawai'";
					$query = mysql_query($tampil);
					$data = mysql_fetch_array($query);
					$id = $data['id_pegawai'];
					$nama = $data['nama_pegawai'];
					$tempat = $data['tempat_lahir'];
					$tanggal = $data['tanggal_lahir'];
					$notlp = $data['no_tlp'];
					$alamat = $data['alamat'];
					?>
					<div class="kotaklogb1">
						<table border="0">
							<form action="proses_edit_pegawai_kasir.php" method="post">
							<tr>
								<td align="left" align="center">ID Pegawai</td>
								<td>:</td>
								<td align="right">
									<input style="width: 23em;" type
									="text" name="id" placeholder="k124" value="<?php echo $id; ?>" size="20">
								</td>
							</tr>
							<tr>
								<td align="left" align="center">Nama Pegawai</td>
								<td>:</td>
								<td align="right">
									<input style="width: 23em;" type="text" name="nama" placeholder="karung" value="<?php echo $nama;?>" size="20">
								</td>
							</tr>
							<tr>
								<td align="left" align="center">Tempat Lahir</td>
								<td>:</td>
								<td align="right">
									<input style="width: 23em;" type="text" name="tempat" placeholder="1500" value="<?php echo $tempat;?>" size="20">
								</td>
							</tr>
							<tr>
								<td align="left" align="center">Tanggal Lahir</td>
								<td>:</td>
								<td align="right">
									<input style="width: 23em;" type="date" name="tanggal" placeholder="5000" value="<?php echo $tanggal;?>" size="20">
								</td>
							</tr>
							<tr>
								<td align="left" align="center">No Telepon</td>
								<td>:</td>
								<td align="right">
									<input style="width: 23em;" type="text" name="notlp" placeholder="5000" value="<?php echo $notlp;?>" size="20">
								</td>
							</tr>
							<tr>
								<td align="left" align="center">Alamat</td>
								<td>:</td>
								<td align="right">
									<input style="width: 23em;" type="text" name="alamat" placeholder="5000" value="<?php echo $alamat;?>" size="20">
								</td>
							</tr>
							<tr>
								<td colspan="3" align="right">
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