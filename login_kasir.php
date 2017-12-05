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
			<h1 class="title">Sistem Pengelolaan Super Market</h1>
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

		<!-- menu -->
		<div class="con">
			<div class="login">
				<form action="proses_login_kasir.php" method="post">
					<div class="kotakloga">
						<b>Super Market Login Kasir</b> 
					</div>
					<div class="kotaklogb">
						<table border="0">
							<tr>
								<td align="left" align="center">ID Kasir</td>
								<td align="right">
									<input type="text" name="idkasir" placeholder="kasir" size="20">
								</td>
							</tr>
							<tr>
								<td align="left" align="center">Password</td>
								<td align="right">
									<input type="password" name="passwordkasir" placeholder="123xxx" size="20">
								</td>
							</tr>
							<tr>
								<td colspan="2" align="right">
									<input type="submit" value="login">
								</td>
							</tr>
						</table>
					</div>
				</form>
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