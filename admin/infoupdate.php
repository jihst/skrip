<?php

include "../../sistem/koneksi.php";

$Id_info = $_POST['Id_info'];
$dosen = $_POST['dosen'];
$matkul = $_POST['matkul'];
$Tugas = $_POST['Tugas'];
$Deadline = $_POST['Deadline'];
$Keterangan = $_POST['Keterangan'];



$sql = "UPDATE infotugas set NIDN='$dosen', Kode_Matkul='$matkul', Tugas='$Tugas', Deadline='$Deadline', Keterangan='$Keterangan' where Id_info=$Id_info";

if ($rs = mysqli_query($connection,$sql))
    echo "<script>alert('Data Berhasil diubah!'); window.location = 'infolist.php'</script>";
else
    die('Gagal Menyimpan karena' . mysqli_error());
?>   