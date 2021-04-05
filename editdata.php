<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<br>
	<a href="index.php">KEMBALI</a>
	<br>
	<br>
	<h3>EDIT DATA PEGAWAI</h3>

	<?php
	$host = "localhost"; 
	$username = "root"; 
	$password = ""; 
	$database = "data_pegawai"; 

	$conn = mysqli_connect($host, $username , $password, $database); //membuka koneksi ke server MySQL
	// mengecek koneksi
	if (mysqli_connect_errno()) { //jika mySQLI konek error maka tampilanya teks failed connect to MySQL dan menampilkan pesan eror
		echo "Failed to connect to MySQL ". mysqli_connect_error();
	};

	$id = $_GET['id'];
	$data = mysqli_query($conn,"select * from tb_pegawai where id_pegawai='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">
			<table>
				<tr>			
					<td>nama</td>
					<td>
						<input type="hidden" name="id_pegawai" value="<?php echo $d['id_pegawai']; ?>">
						<input type="text" name="nama_pegawai" value="<?php echo $d['nama_pegawai']; ?>">
					</td>
				</tr>
				<tr>
					<td>Departemen</td>
					<td><input type="text" name="jabatan_pegawai" value="<?php echo $d['jabatan_pegawai']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>

</body>
</html> 