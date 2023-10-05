<?php

session_start();
include "../koneksi.php";

if (isset($_POST['mhstambah'])) {
    $nim = $_POST['nim'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $nama = $_POST['nama'];
    $tempat = $_POST['tempat'];
    $tgl = $_POST['tgl'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jk'];
    $telp = $_POST['telp'];
    $email = $_POST['email'];
    $level = "mahasiswa";

    $sql_user = "INSERT INTO users (username,Password,Level) VALUES('$username','$password','')";
    $sql_detail = "INSERT INTO mahasiswa (NIM,Nama_Mhs,Tempat_lahir,Tgl_Lahir,Alamat,Jenis_Kelamin,No_Hp,Email_Id_user) VALUES('$nim','$nama','$tempat','$tgl','$alamat','$jk','$telp','$email','')";
    if ($nim === "" || $nama === "" || $tempat === "" || $tgl === "" || $alamat === "" || $jk === "" || $telp === "" || $email === "" || $level === "") {
        echo 'location:../home.php';
    } else {
        if (cek($username, $connection)) {
            echo "<script>alert('Berhasil Mendaftar')</script>";
            echo "<meta http-equiv='refresh' content='1 url=mhslist.php'>";
            //echo 'location:../mhstambah.php';
        } else {
            $iddd = insertUser($username, $password, $connection);
            echo "<script>alert('Berhasil Mendaftar')</script>";
            echo "<meta http-equiv='refresh' content='1 url=mhslist.php'>";
//header("location:mhstambah.php");
            insertMahasiswa($nim, $nama, $tempat, $tgl, $alamat, $jk, $telp, $email, $iddd, $connection);
        }
    }
} else {
    echo'sds';
}

function insertMahasiswa($Nim, $Nama, $Tempat, $Tgl, $Alamat, $Jk, $Telp, $Email, $ID, $link) {
    $result = mysqli_query($link, "insert into mahasiswa(NIM,Nama_Mhs,Tempat_Lahir,Tgl_Lahir,Alamat,Jenis_Kelamin,No_Hp,Email,Id_user)values('$Nim','$Nama','$Tempat','$Tgl','$Alamat','$Jk','$Telp','$Email','$ID')");
}

function insertUser($username, $pwd, $Link) {
    mysqli_query($Link, "insert into users(Id_user,username,Password,Level) values('','$username','$pwd','mahasiswa')");
    return mysqli_insert_id($Link);
    ;
}

function cek($uname, $link) {
    $result = mysqli_query($link, "select username from users");
    if (mysqli_num_rows($result) < 0) {
        return true;
    } else
        return false;
}

?>