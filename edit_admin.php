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
					<li><a href="daftar_user.php">Kembali</a></li>
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
						<b>Edit Admin</b> 
					</div>
					<?php
					$id = $_GET['kode'];
					
					$tampil = "SELECT * FROM admin WHERE id_admin='$id'";
					$query = mysql_query($tampil);
					$data = mysql_fetch_array($query);
					$id = $data['id_admin'];
					$pass = $data['pass_admin'];
					$nama = $data['nama_admin'];
					?>
					<div class="kotaklogb">
						<table border="0">
							<form action="proses_edit_admin.php" method="post">
							<tr>
								<td align="left" align="center">ID Admin</td>
								<td align="right">
									<input type="text" name="id" placeholder="id" value="<?php echo $id; ?>" size="20">
								</td>
							</tr>
							<tr>
								<td align="left" align="center">Nama Admin</td>
								<td align="right">
									<input type="text" name="nama" placeholder="nama" value="<?php echo $nama;?>" size="20">
								</td>
							</tr>
							<tr>
								<td align="left" align="center">Pass Admin</td>
								<td align="right">
									<input type="password" name="pass" placeholder="password" value="<?php echo $pass;?>" size="20">
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