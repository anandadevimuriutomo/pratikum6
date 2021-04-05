<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDb";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
	die("Connection Failed : ". mysqli_connect_error());
}
$sql = " CREATE TABLE buku_tamukuu ";

if (mysqli_query($conn, $sql)) {
	echo "New table created succesfully";
} else {
	echo "Error : ".$sql . "<br>". mysqli_error($conn);
}
mysqli_close($conn);
?> 