<html>
<head>
<?php
	session_start();
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
			<h1 class="title">Sistem Pengelolaan Super Market</h1>
			<hr>
			<!-- navbar-->
			<nav>
				<ul>
					<li><a href="menu_admin.php">Kembali</a></li>
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
			<!--<a href="tambah_history_login.php">Tambah History</a>-->
			<br/>
			<br/>
			<table>
				<tr>
					<td><b>Tanggal</td>
					<td><b>ID User</td>
					<td><b>Nama User</td>
					<td><b>Edit</td>
					<td><b>Delete</td>
				</tr>
				</tr>
				<?php $query = mysql_query("select * from login order by tanggal");
					while($var = mysql_fetch_array($query)){
					?>
						<tr>
							<td><?php echo $var['tanggal'] ?></td>
							<td><?php echo $var['Id_user'] ?></td>
							<td><?php echo $var['nama_user'] ?></td>
							<td><center><a href="delete_history_login.php?kode=<?php echo $var['tanggal'] ?>&kode2=<?php echo $var['Id_user']?>">Delete</a></td>
							<td><center><a href="edit_history_login.php?kode=<?php echo $var['tanggal'] ?>&kode2=<?php echo $var['Id_user']?>">Edit</a>
							</td>
						</tr>
					<?php } ?>
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