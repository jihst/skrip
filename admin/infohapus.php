<?php

include "../../sistem/koneksi.php";

$Id_info = $_GET['Id_info'];
//
//$sql = "delete from infotugas where Id_info=$Id_info";
//
//if ($rs = mysqli_query($sql))
//    header("location:infolist.php");
//else
//    die('Gagal Menyimpan karena' . mysqli_error());


$query = mysqli_query($connection, "DELETE FROM infotugas WHERE Id_info=$Id_info");
if ($query) {
    echo "<script>alert('Data Berhasil dihapus!'); window.location = 'infolist.php'</script>";
} else {
    echo "<script>alert('Data Gagal dihapus!'); window.location = 'infolist.php'</script>";
}
?>