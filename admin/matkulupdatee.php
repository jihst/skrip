<?php
include "../../sistem/koneksi.php";

$Kode_Matkul = $_POST['Kode_Matkul'];
$Nama_Matkul = $_POST['Nama_Matkul'];
$Semester = $_POST['Semester'];
$Jumlah_SKS = $_POST['Jumlah_SKS'];
$Jumlah_Sesi = $_POST['Jumlah_Sesi'];
$Batas_Izin = $_POST['Batas_Izin'];



$sql = "UPDATE matakuliah set Kode_Matkul='$Kode_Matkul', Nama_Matkul='$Nama_Matkul', Semester='$Semester', Jumlah_SKS=$Jumlah_SKS, Jumlah_Sesi=$Jumlah_Sesi, Batas_Izin=$Batas_Izin where Kode_Matkul='$Kode_Matkul'";

if ($rs = mysqli_query($connection,$sql))
    echo "<script>alert('Data Berhasil diubah!'); window.location = 'matkulist.php'</script>";
else
    die('Gagal Menyimpan karena' .mysqli_error());
?>   