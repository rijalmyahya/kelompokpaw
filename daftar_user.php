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
			<p><b>Id Kasir</b></p>
			<a href="tambah_kasir.php">Tambah User</a>
			<br/>
			<br/>
			<table>
				<tr>
					<td><b>User ID</td>
					<td><b>Nama User</td>
					<td><b>Delete</td>
					<td><b>Edit</td>
				</tr>
				<?php $query = mysql_query("select * from kasir order by id_kasir");
					while($var = mysql_fetch_array($query)){
					?>
						<tr>
							<td><?php echo $var['id_kasir'] ?></td>
							<td><?php echo $var['pass_kasir'] ?></td>
							<td><center><a href="delete_kasir.php?kode=<?php echo $var['id_kasir'] ?>">Delete</a></td>
							<td><center><a href="edit_kasir.php?kode=<?php echo $var['id_kasir'] ?>">Edit</a></td>
						</tr>
					<?php } ?>
			</table>
			<br/>
			<p><b>Id Admin</b></p>
			<a href="tambah_admin.php">Tambah Admin</a>
			<br/>
			<br/>
			<table>
				<tr>
					<td><b>User ID</td>
					<td><b>Nama User</td>
					<td><b>Delete</td>
					<td><b>Edit</td>
				</tr>
				<?php $query = mysql_query("select * from admin order by id_admin");
					while($var = mysql_fetch_array($query)){
					?>
						<tr>
							<td><?php echo $var['id_admin'] ?></td>
							<td><?php echo $var['pass_admin'] ?></td>
							<td><center><a href="delete_admin.php?kode=<?php echo $var['id_admin'] ?>">Delete</a></td>
							<td><center><a href="edit_admin.php?kode=<?php echo $var['id_admin'] ?>">Edit</a></td>
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