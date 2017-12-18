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
					<li><a href="info_kasir.php">Kembali</a></li>
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
						<b>Data pegawai</b> 
					</div>
					<?php
					$pegawai = $_SESSION['id_admin'];
					
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
							<tr>
								<td align="left" align="center">ID Pegawai</td>
								<td>:</td>
								<td align="left">
									<?php echo $id; ?>
								</td>
							</tr>
							<tr>
								<td align="left" align="center">Nama Pegawai</td>
								<td>:</td>
								<td align="left">
									<?php echo $nama;?>
								</td>
							</tr>
							<tr>
								<td align="left" align="center">Tempat Lahir</td>
								<td>:</td>
								<td align="left">
									<?php echo $tempat;?>
								</td>
							</tr>
							<tr>
								<td align="left" align="center">Tanggal Lahir</td>
								<td>:</td>
								<td align="left">
									<?php echo $tanggal;?>
								</td>
							</tr>
							<tr>
								<td align="left" align="center">No Telepon</td>
								<td>:</td>
								<td align="left">
									<?php echo $notlp;?>
								</td>
							</tr>
							<tr>
								<td align="left" align="center">Alamat</td>
								<td>:</td>
								<td align="left">
									<?php echo $alamat;?>
								</td>
							</tr>
							<tr>
								<td colspan="3" align="right">
									<a href="edit_data_pegawai_kasir.php">Edit Data</a>
								</td>
							</tr>
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