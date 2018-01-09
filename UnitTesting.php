 <?php
	class UnitTesting{
		public function select(){
			include "koneksi.php";
			$sql = "SELECT * FROM barang";
			$query = mysql_query($sql);
			if($query)
				return true;
			else
				return false;
		}
		public function delete_data($id){
		include ("koneksi.php");
		$query = mysql_query("DELETE FROM barang WHERE id_barang = '$id'");
			if($query){ //jika query berhasil
				return true;
				//echo "<script>alert('Data sudah dihapus'); window.location = 'riwayat-penggajian(admin).php'; </script>";
			}else{ //jika query gagal
				return false;
				//echo "<script>alert('Data gagal dihapus'); window.location = 'riwayat-penggajian(admin).php'; </script>";
			}
		}
	}
?>