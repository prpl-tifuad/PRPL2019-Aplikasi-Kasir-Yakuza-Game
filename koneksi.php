<?php
$host = "localhost"; 
$user = "root"; 
$pass = "";
$db = "rental";

$koneksi = mysqli_connect($host,$user,$pass,$db);

if (mysqli_connect_error()) {
	# code...
	echo "Gagal Koneksi".mysqli_connect_error();
}
?>