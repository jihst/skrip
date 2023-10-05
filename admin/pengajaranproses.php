<?php
session_start();
include "../admin/koneksi.php";

$dosen = $_POST['dosen'];
$matkul = $_POST['matkul'];


if (empty($dosen)) {
    echo "<script>alert('Nama belum diisi')</script>";
    echo "<meta http-equiv='refresh' content='1 url=pengajarantambah.php'>";
} else
if (empty($matkul)) {
    echo "<script>alert('Email belum diisi')</script>";
    echo "<meta http-equiv='refresh' content='1 url=pengajarantambah.php'>";
} else {
    $simpan = "INSERT INTO infotugas(id_info,NIDN,Kode_Matkul)VALUES('',$dosen,'$matkul')";
    $result = mysqli_query($connection, $simpan);

    if ($result) {
        echo "<script>alert('Berhasil Mendaftar')</script>";
        echo "<meta http-equiv='refresh' content='1 url=pengajarantambah.php'>";
    } else {
        echo "<script>alert('Gagal Mendaftar')</script>";
        echo "<meta http-equiv='refresh' content='1 url=pengajarantambah.php>";
    }
}
?>