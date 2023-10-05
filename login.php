<?php
include "koneksi.php";
//function anti_injeksi($data){
	// $filter = mysql_real_escape_string(stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES))));
  //return $filter;
//}

	$nim = $_POST['nim'];
	$password =($_POST['password']);

//password dan username harus berupa huruf atau angka
//if(!ctype_alnum($username) OR !ctype_alnum($password)){
//	echo "duh jangan usil deh ";
//}	
    $a = mysqli_query($connection,"select * from users where username='$nim' and password='$password'");
	$ketemu = mysqli_num_rows($a);
	$r = mysqli_fetch_array($a);
	
	
	if($ketemu > 0){
		session_start();
		// $_SESSION[nim] = $r[nim];
		// $_SESSION[password] = $r[password];
		// $_SESSION[level] = $r[level];
		$folder = $r[level];
		if($r[level] == "dosen" OR "mahasiswa") {
			header("location:../skrip/$folder/index.php");			
		}else{
			header('location:index.php?w=gagal');
		} 
	}else {
		header('location:index.php?w=gagal');
	}
?>