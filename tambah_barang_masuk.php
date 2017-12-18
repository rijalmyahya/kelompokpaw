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
			<h1>Sistem Pengelolaan Super Market</h1>
			<hr>
			<!-- navbar-->
			<nav>
				<ul>
					<li><a href="masuk_gudang_barang.php">kembali</a></li>
					<li>|</li>
					<li><a href="logout.php">Log Out</a></li>
					<li>
						<?php
						if(isset($_GET['pesan'])){
							if($_GET['pesan'] == "gagal"){
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
						<b>Tambah Catatan Masuk</b> 
					</div>
					<div class="kotaklogb">
						<table border="0">
							<form action="proses_tambah_barang_masuk.php" method="post">
							<tr>
								<td align="left" align="center">Tanggal Masuk</td>
								<td align="right">
									<input type="date" name="tanggal" placeholder="k124" size="20">
								</td>
							</tr>
							<tr>
								<td align="left" align="center">ID Barang</td>
								<td align="right">
									<?php
									$brg=mysql_query("select * from barang");
									$jsArray = "var prdName = new Array();";
									?>
									<select name="id" onchange="changeValue(this.value)">';
									<option>Pilih Nama Barang...</option>';  
									<?php
									while($row=mysql_fetch_array($brg)){
										echo '<option value="' . $row['id_barang'] . '">' . $row['id_barang'] . '</option>';
    									$jsArray .= "prdName['" . $row['id_barang'] . "'] = {nama:'" . addslashes($row['nama_barang']) . "',harga:'".addslashes($row['harga_barang'])."'};\n";
    								?>
    								<?php
									}
									?>
									</select>
								</td>
							</tr>
							<tr>
								<td align="left" align="center">Nama Barang</td>
								<td align="right">
									<input type="text" name="nama" id="prd_nama" size="20"/>
								</td>
							</tr>
							<tr>
								<td align="left" align="center">Jumlah Barang</td>
								<td align="right">
									<input type="text" name="jumlah" placeholder="Jumlah Barang" size="20">
								</td>
							</tr>
							<tr>
								<td align="left" align="center">Harga Barang</td>
								<td align="right">
									<input type="text" name="harga" id="prd_harga" size="20"/>
								</td>
							</tr>
							<tr>
								<td colspan="2" align="right">
									<input type="submit" value="Tambah">
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
<script type="text/javascript">
	<?php echo $jsArray; ?>
	function changeValue(id){
		document.getElementById('prd_nama').value = prdName[id].nama;
		document.getElementById('prd_harga').value = prdName[id].harga;
	};
</script>