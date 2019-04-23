<?php 

$conn = mysqli_connect("localhost", "root", "", "db_gps");

function tambah ($data) {
	global $conn;

	// Ambil data dari setiap variabel
	$username = $data["username"];
	$password = $data["password"];

	$query = "INSERT INTO tb_pengguna
				VALUES
				('', '$username', '$password')
			";

	$result = mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}


?>