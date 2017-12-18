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
					<li><a href="index.php">Home</a></li>
					<li>|</li>
					<li><a href="about.php">About</a></li>
					<li>
						<?php 
							include 'koneksi.php';
							if(isset($_GET['pesan'])){
								if($_GET['pesan'] == "gagal"){
									echo '|-- Gagal Login !! Username atau Password salah--|';
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
						<b>Super Market Login Admin</b> 
					</div>
					<div class="kotaklogb">
						<table border="0">
							<form action="proses_login_adm.php" method="post">
							<tr>
								<td align="left" align="center">ID Admin</td>
								<td align="right">
									<input type="text" name="idadmin" placeholder="admin" size="20">
								</td>
							</tr>
							<tr>
								<td align="left" align="center">Password</td>
								<td align="right">
									<input type="password" name="passwordadmin" placeholder="123xxx" size="20">
								</td>
							</tr>
							<tr>
								<td colspan="2" align="right">
									<input type="submit" value="login">
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