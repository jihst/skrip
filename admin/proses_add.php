<?php 
session_start();
include "../koneksi.php";

// Create connection
$conn = new mysqli("localhost","root","","skripsi");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
	$induk = mysqli_real_escape_string($conn, $_POST['NI']);
	$pw = mysqli_real_escape_string($conn, $_POST['pass']);
	$lv = mysqli_real_escape_string($conn, $_POST['level']);
	$name = mysqli_real_escape_string($conn, $_POST['nama']);
	$mail = mysqli_real_escape_string($conn, $_POST['email']);
	$telpon = mysqli_real_escape_string($conn, $_POST['tlp']);
	$sex = mysqli_real_escape_string($conn, $_POST['jk']);
	
$sql = "INSERT INTO user (nim, password, level, nama, email, telp, sex)VALUES ('$induk','$pw','$lv','$name','$mail','$telpon','$sex')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>