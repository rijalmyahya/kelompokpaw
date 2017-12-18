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
			<h1>Sistem Pengelolaan Super Market</h1>
			<hr>
			<!-- navbar-->
			<nav>
				<ul>
					<li><a href="info_admin.php">Kembali</a></li>
					<li>|</li>
					<li><a href="logout.php">Logout</a></li>
					<li>|</li>
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
						<b>Ganti Password</b> 
					</div>
					<!--
					<?php
					/*$id = $_GET['kode'];
					
					$tampil = "SELECT * FROM admin WHERE id_admin='$id'";
					$query = mysql_query($tampil);
					$data = mysql_fetch_array($query);
					$id = $data['id_admin'];
					$pass = $data['nama_admin'];
					*/?>-->
					<div class="kotaklogb">
						<table border="0">
							<form action="proses_ganti_password_admin.php" method="post">
							<input name="user" type="hidden" value="<?php echo $_SESSION['id_admin']; ?>">
							<tr>
								<td align="left" align="center">Password lama</td>
								<td align="right">
									<input type="password" name="lama" placeholder="password lama" size="20">
								</td>
							</tr>
							<tr>
								<td align="left" align="center">Password baru</td>
								<td align="right">
									<input type="password" name="baru" placeholder="password baru" size="20">
								</td>
							</tr>
							<tr>
								<td align="left" align="center">ulangi password</td>
								<td align="right">
									<input type="password" name="ulang" placeholder="password baru" size="20">
								</td>
							</tr>
							<tr>
								<td colspan="2" align="right">
									<input type="submit" value="Ganti">
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