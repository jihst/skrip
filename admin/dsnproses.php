<?php 
session_start();
include "../koneksi.php";

if (isset($_POST['dsntambah'])) 
    {
        $nidn = $_POST['nidn'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$nama = $_POST['nama'];
        $alamat = $_POST['Alamat'];
	$jk = $_POST['jk'];
	$telp = $_POST['telp'];
        $email = $_POST['email'];
	$level = "dosen";
	
	$sql_user = "INSERT INTO users (username,Password,Level) VALUES('$username','$password','')";
	$sql_detail = "INSERT INTO dosen (NIDN,Nama_Dsn,Alamat,Jenis_Kelamin,No_Hp,Email_Id_user) VALUES('$nidn','$nama','$alamat','$jk','$telp','$email','')";
	if ($nidn==="" || $nama==="" || $alamat==="" || $jk==="" || $telp==="" || $email==="" || $level==="") {
		header("location:");
	}
        else
        {
            if(cek($username, $connection))
            {
                echo 'dasdsadasd';
            }
            else
            {
                $iddd=insertUser($username, $password, $connection);
                //echo $iddd;
                echo "<script>alert('Data Berhasil ditambah!'); window.location = 'dsnlist.php'</script>";
                insertMahasiswa($nidn,$nama,$alamat,$jk,$telp,$email,$iddd,$connection);
            }
	}
	
}
else
{
    echo'sds';
}


function insertMahasiswa($Nidn,$Nama,$Alamat,$Jk,$Telp,$Email,$ID,$link)
{
    $result=mysqli_query($link, "insert into dosen(NIDN,Nama_Dsn,Alamat,Jenis_Kelamin,No_Hp,Email,Id_user)values('$Nidn','$Nama','$Alamat','$Jk','$Telp','$Email','$ID')");
   
}


function insertUser($username,$pwd,$Link)
{
    mysqli_query($Link, "insert into users(Id_user,username,Password,Level) values('','$username','$pwd','dosen')");
    return mysqli_insert_id($Link); ;
}

function cek($uname,$link)
{
    $result=mysqli_query($link, "select username from users");
    if(mysqli_num_rows($result)<0)
    {
        return true;
    }
    else
        return false;
}
?>