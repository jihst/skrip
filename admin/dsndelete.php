<?php

include "../../sistem/koneksi.php";

$Id_user = $_GET['Id_user'];
//
//$sql = "delete from infotugas where Id_info=$Id_info";
//
//if ($rs = mysqli_query($sql))
//    header("location:infolist.php");
//else
//    die('Gagal Menyimpan karena' . mysqli_error());


$query = mysqli_query($connection, "DELETE FROM dosen WHERE Id_user=$Id_user");
if ($query) {
    echo "<script>alert('Data Berhasil dihapus!'); window.location = 'dsnlist.php'</script>";
} else {
    echo "<script>alert('Data Gagal dihapus!'); window.location = 'dsnlist.php'</script>";
}
?>