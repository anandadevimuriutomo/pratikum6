<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<br>
	<a href="input.php">+ TAMBAH PEGAWAI</a>
	<br>
	<br>
	<table border="1" width="60%">
		<tr>
			<th>No</th>
			<th>Id</th>
			<th>Nama</th>
			<th>Jabatan</th>
		</tr>
		<?php 
		$host = "localhost"; 
		$username = "root"; 
		$password = "";  
		$database = "db_pegawai"; 

		$conn = mysqli_connect($host, $username , $password, $database); //membuka koneksi ke server MySQL
		// Mengecek koneksi
		if (mysqli_connect_errno()) { //jika mySQLI connect error maka tampilkan teks failed connect to MySQL dan menampilkan pesan eror
			echo "Failed to connect to MySQL ". mysqli_connect_error();
		};
		$no = 1;
		$data = mysqli_query($conn,"select * from tb_pegawai");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['id']; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['jabatan']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $d['id_pegawai']; ?>">EDIT</a>
					<a href="hapus.php?id=<?php echo $d['id_pegawai']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html> 