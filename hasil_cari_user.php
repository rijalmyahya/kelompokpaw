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
					<li><a href="daftar_user.php">Kembali</a></li>
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
			<form action="cari_user.php" method="get"> 
				<h4>Cari Nama User
					<input type="text" placeholder="Nama User" name="namabarang">
			 	</h4>
			</form>
			<p><b>Id Kasir</b></p>
			<table>
			<?php
				if(isset($_GET['cari'])){
					$cari = mysql_real_escape_string($_GET['cari']);
					$barang = mysql_query("select * from kasir where id_kasir like '%$cari%'");
					$ketemu = mysql_num_rows($barang);
					if($ketemu > 0){
			?>
					<tr>
						<td><b>User ID</td>
						<td><b>Nama User</td>
						<td><b>Delete</td>
						<td><b>Edit</td>
					</tr>
					<?php while($var = mysql_fetch_array($barang))
					{
					?>
							<tr>
								<td><?php echo $var['id_kasir'] ?></td>
								<td><?php echo $var['pass_kasir'] ?></td>
								<td><center><a href="delete_kasir.php?kode=<?php echo $var['id_kasir'] ?>">Delete</a></td>
								<td><center><a href="edit_kasir.php?kode=<?php echo $var['id_kasir'] ?>">Edit</a></td>
								</tr>
					<?php }
						}
						else {
							echo "<center>Data tidak ditemukan di table kasir</center>";
						}
					}
					?>
			</table>
			<p><b>Id Admin</b></p>
			<table>
			<?php
				if(isset($_GET['cari'])){
					$cari = mysql_real_escape_string($_GET['cari']);
					$barang = mysql_query("select * from admin where id_admin like '%$cari%'");
					$ketemu = mysql_num_rows($barang);
					if($ketemu > 0){
			?>
					<tr>
						<td><b>User ID</td>
						<td><b>Nama User</td>
						<td><b>Delete</td>
						<td><b>Edit</td>
					</tr>
					<?php while($var = mysql_fetch_array($barang))
					{
					?>
							<tr>
								<td><?php echo $var['id_admin'] ?></td>
								<td><?php echo $var['pass_admin'] ?></td>
								<td><center><a href="delete_admin.php?kode=<?php echo $var['id_admin'] ?>">Delete</a></td>
								<td><center><a href="edit_admin.php?kode=<?php echo $var['id_admin'] ?>">Edit</a></td>
								</tr>
					<?php }
						}
						else {
							echo "<center>Data tidak ditemukan di table admin</center>";
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