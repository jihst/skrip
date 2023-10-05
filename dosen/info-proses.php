<?php
session_start();
include "../koneksi.php";

$idinfo = $_POST['Id_info'];
$tugas = $_POST['Tugas'];
$deadline = $_POST['Deadline'];
$keterangan = $_POST['Keterangan'];

if (empty($idinfo)) {
    echo "<script>alert('Nama belum diisi')</script>";
    echo "<meta http-equiv='refresh' content='1 url=infotambah.php'>";
} 
if (empty($tugas)) {
    echo "<script>alert('Username belum diisi')</script>";
    echo "<meta http-equiv='refresh' content='1 url=infotambah.php'>";
} else
if (empty($deadline)) {
    echo "<script>alert('Password belum diisi')</script>";
    echo "<meta http-equiv='refresh' content='1 url=infotambah.php'>";
} else {
    $simpan = "UPDATE infotugas set Tugas='$tugas', Deadline='$deadline', Keterangan='$keterangan' where Id_info=$idinfo";
    $result = mysqli_query($connection, $simpan);

    if ($result) {
        echo "<script>alert('Berhasil Ditambahkan')</script>";
        echo "<meta http-equiv='refresh' content='1 url=info-list.php'>";
    } else {
        echo "<script>alert('Gagal Ditambahkan')</script>";
        echo "<meta http-equiv='refresh' content='1 url=info-list.php>";
    }
}
?>