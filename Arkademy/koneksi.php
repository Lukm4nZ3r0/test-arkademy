<?php
	$host = "localhost";
	$uname = "root";
	$pass = "";
	$db = "arkademy";
 
	$conn=mysqli_connect($host, $uname, $pass, $db);
	if (mysqli_connect_errno()){
		echo "Koneksi database gagal : " . mysqli_connect_error();
	}
?>