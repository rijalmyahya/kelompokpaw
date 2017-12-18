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
					<li><a href="history_login.php">Kembali</a></li>
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
			<form action="cari_history_login.php" method="get"> 
				<h4>Cari 
					<input type="text" placeholder="Nama" name="namabarang">
			 	</h4>
			</form>
			<br>
			<p><b>History Login</b></p>
			<table>
			<?php
				if(isset($_GET['cari'])){
					$cari = mysql_real_escape_string($_GET['cari']);
					$barang = mysql_query("select * from login where id_user like '%$cari%' or nama_user like '%$cari%'");
					$ketemu = mysql_num_rows($barang);
					if($ketemu > 0){
			?>
					<tr>
						<td><b>Tanggal</td>
						<td><b>ID User</td>
						<td><b>Nama User</td>
						<td><b>Edit</td>
						<td><b>Delete</td>
					</tr>
					<?php while($var = mysql_fetch_array($barang))
					{
					?>
							<tr>
								<td><?php echo $var['tanggal'] ?></td>
								<td><?php echo $var['Id_user'] ?></td>
								<td><?php echo $var['nama_user'] ?></td>
								<td><center><a href="delete_history_login.php?kode=<?php echo $var['no_log'] ?>">Delete</a></td>
								<td><center><a href="edit_history_login.php?kode=<?php echo $var['no_log'] ?>">Edit</a></td>
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