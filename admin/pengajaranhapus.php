<?php

session_start();
include "../../sistem/koneksi.php";

$Id_info = $_GET['Id_info'];

$query = mysqli_query($connection, "DELETE FROM infotugas WHERE Id_info=$Id_info");
if ($query) {
    echo "<script>alert('Data Berhasil dihapus!'); window.location = 'pengajaranlist.php'</script>";
} else {
    echo "<script>alert('Data Gagal dihapus!'); window.location = 'pengajaranlist.php'</script>";
}
?>