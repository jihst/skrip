<?php
include "koneksi.php";
//function anti_injeksi($data){
	// $filter = mysql_real_escape_string(stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES))));
  //return $filter;
//}

	$username = $_POST['username'];
	$password =($_POST['password']);

//password dan username harus berupa huruf atau angka
//if(!ctype_alnum($username) OR !ctype_alnum($password)){
//	echo "duh jangan usil deh ";
//}	
    $a = mysqli_query($connection,"select * from admin where username='$username' and password='$password'");
	$ketemu = mysqli_num_rows($a);
	$r = mysqli_fetch_array($a);
	
	
	if($ketemu > 0){
		session_start();
		$_SESSION[username] = $r[username];
		$_SESSION[password] = $r[password];
		
		header("location:home.php");			
		
	}else {
		header('location:index.php?w=gagal');
	}
?>