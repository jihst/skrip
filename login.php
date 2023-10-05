<?php


include "koneksi.php";

	$nim = $_POST['username'];
	$password =($_POST['Password']);
	
    $a = mysqli_query($connection,"select * from users where username='$nim' and Password='$password'");
	$ketemu = mysqli_num_rows($a);
	$r = mysqli_fetch_array($a);
	
	
	if($ketemu > 0){
		session_start();
		$_SESSION['username'] = $r['username'];
		$_SESSION['Password'] = $r['Password'];
		$_SESSION['Level'] = $r['Level'];
		$folder = $r['Level'];
		if($r[Level] == "dosen") {
                    $nidn = get_pengenal($connection, $r['Id_user'], $folder, "NIDN");
                    $_SESSION['nidn']= $nidn;
                    header("location:../sistem/$folder/index.php?nidn= $nidn");
                        
                    //echo "sukses";
		}
                else if($r[Level] == "mahasiswa") {
                    $nim = get_pengenal($connection, $r['Id_user'], $folder, "NIM");
                    $_SESSION['nim']= $nim;
                    header("location:../sistem/$folder/index.php?nim= $nim");
                    //echo "sukses";
		}
                else{
			header('location:index.php?w=gagal');
		} 
	}else {
		header('location:index.php?w=gagal');
	}
?>

<?php
function get_pengenal($link,$idUser, $folder, $pengenal)
{
    
    $result= mysqli_query($link, "select $pengenal from $folder where Id_user= '$idUser'");
    $r = mysqli_fetch_assoc($result);
    return $r[$pengenal];
}

?>