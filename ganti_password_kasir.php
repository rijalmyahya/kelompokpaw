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
					<li><a href="info_kasir.php">Kembali</a></li>
					<li>|</li>
					<li><a href="logout.php">Logout</a></li>
					<li>
						<?php 
						include 'koneksi.php';
						if(isset($_GET['pesan'])){
							$pesan = mysql_real_escape_string($_GET['pesan']);
								if($pesan=="gagal"){
									echo "Password gagal di ganti !! Periksa Kembali Password yang anda masukkan !!";
								}else if($pesan=="tdksama"){
									echo "Password yang anda masukkan tidak sesuai  !! silahkan ulangi !!";
								}else if($pesan=="oke"){
									echo "Password berhasil diganti !!";
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
						<b>Tambah kasir</b> 
					</div>
					<?php
					$id = $_GET['kode'];
					
					$tampil = "SELECT * FROM kasir WHERE id_kasir='$id'";
					$query = mysql_query($tampil);
					$data = mysql_fetch_array($query);
					$id = $data['id_kasir'];
					$pass = $data['nama_kasir'];
					?>
					<div class="kotaklogb">
						<table border="0">
							<form action="proses_ganti_password_kasir.php" method="post">
							<input name="id" type="hidden" value="<?php echo $id; ?>">
							<tr>
								<td align="left" align="center">Password lama</td>
								<td align="right">
									<input type="password" name="lama" placeholder="k124" value="<?php echo $id; ?>" size="20">
								</td>
							</tr>
							<tr>
								<td align="left" align="center">Password baru</td>
								<td align="right">
									<input type="password" name="baru" placeholder="karung" value="<?php echo $nama;?>" size="20">
								</td>
							</tr>
							<tr>
								<td align="left" align="center">ulangi password</td>
								<td align="right">
									<input type="password" name="ulang" placeholder="1500" value="<?php echo $harga;?>" size="20">
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