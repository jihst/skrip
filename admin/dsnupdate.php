<?php

include "../../sistem/koneksi.php";

$Id_user = $_POST['Id_user'];
$NIDN=$_POST['NIDN'];
$Nama_Dsn = $_POST['Nama_Dsn'];
$Alamat = $_POST['Alamat'];
$Jenis_Kelamin = $_POST['Jenis_Kelamin'];
$Email = $_POST['Email'];


$sql = "UPDATE dosen set NIDN='$NIDN', Nama_Dsn='$Nama_Dsn', Alamat='$Alamat', Jenis_Kelamin='$Jenis_Kelamin', Email='$Email' where Id_user=$Id_user";


if ($rs = mysqli_query($connection,$sql))
    echo "<script>alert('Data Berhasil diubah!'); window.location = 'dsnlist.php'</script>";
else
    die('Gagal Menyimpan karena' . mysqli_error());
?>   