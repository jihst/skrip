<?php

include "../../sistem/koneksi.php";

$Id_user = $_POST['Id_user'];
$NIM=$_POST['NIM'];
$Nama_Mhs = $_POST['Nama_Mhs'];
$Tempat_Lahir = $_POST['Tempat_Lahir'];
$Tgl_Lahir = $_POST['Tgl_Lahir'];
$Alamat = $_POST['Alamat'];
$jk = $_POST['jk'];
$No_Hp = $_POST['No_Hp'];
$Email = $_POST['Email'];


$sql = "UPDATE mahasiswa set NIM='$NIM', Nama_Mhs='$Nama_Mhs', Tempat_Lahir='$Tempat_Lahir', Tgl_Lahir='$Tgl_Lahir', Alamat='$Alamat', Jenis_Kelamin='$jk', No_Hp='$No_Hp', Email='$Email' where Id_user=$Id_user";


if ($rs = mysqli_query($connection,$sql))
    echo "<script>alert('Data Berhasil diubah!'); window.location = 'mhslist.php'</script>";
else
    die('Gagal Menyimpan karena' . mysqli_error());
?>   