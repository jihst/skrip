<?php

session_start();
include "../../sistem/koneksi.php";

$Kode_Matkul = $_GET['Kode_Matkul'];

$query = mysqli_query($connection, "DELETE FROM matakuliah WHERE Kode_Matkul='$Kode_Matkul'");
if ($query) {
    echo "<script>alert('Data Berhasil dihapus!'); window.location = 'matkulist.php'</script>";
} else {
    echo "<script>alert('Data Gagal dihapus!'); window.location = 'matkulist.php'</script>";
}
?>