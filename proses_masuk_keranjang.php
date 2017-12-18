				<?php
				ob_start();
				include "koneksi.php";

							date_default_timezone_set('Asia/Jakarta');
							$dmy = date('Ymd');
							$time1 = date('H:i:s');
							$barcode    =$_POST['barcode'];
							$jumlah		=$_POST['jumlah_barang'] ;
							
							$select4 = mysql_query("select * from barang where id_barang='$barcode' or nama_barang='$barcode'");
				 			$ketemu=mysql_num_rows($select4);
				 			if($ketemu>0){
								while($select_result4 = mysql_fetch_array($select4))
								{
									$id 			= $select_result4 ['id_barang'];
									$nama		    = $select_result4 ['nama_barang'];
									$harga			= $select_result4 ['harga_barang'];
									$jumlah_awal	= $select_result4 ['jumlah_barang'];

									$query_insert = "insert into temp 
									(id_barang,nama_barang,harga_barang,jumlah_barang,kasir,tgl,waktu) 
									values ('$id','$nama','$harga','$jumlah','$kasir','$dmy','$time1')";
									
									$query_update = "UPDATE temp SET sub_total = harga_barang * jumlah_barang WHERE nama_barang='$nama' and jumlah_barang='$jumlah'";
									$insert = mysql_query($query_insert);
									//$sisa = $jumlah_awal-$jumlah;
									//$query_update2= mysql_query("update barang set jumlah_barang='$sisa' where id_barang='$barcode' or nama_barang='$barcode'");
									if($insert == false)
									{
										die(mysql_error());
									}

									else if ($insert) 
									{
									$update = mysql_query($query_update);
									header('location:kasir1.php');
									}
									else 
									{
									echo "GAGAL DITAMBAHKAN";
									}
								}
							}
							else{
								echo "Barang Tidak Ada";
								header('location:kasir1.php');
							}
				?>