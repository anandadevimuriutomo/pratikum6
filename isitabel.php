<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

//mengecek koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);
//mengecek koneksi
if (!$conn) {
	die("connection failed :" . mysqli_connect_error());
}
// buat  database
$sql = "INSERT INTO liga (kode, negara, champion) VALUES ('Jer', 'Jerman', '4')";

if (mysqli_query($conn, $sql)) {
	echo "New record created seccesfully";
} else {
	echo "Error :" . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn) 
?> 