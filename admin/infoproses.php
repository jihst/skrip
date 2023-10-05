<?php
session_start();
include "../../sistem/koneksi.php";

$nidn = $_POST['dosen'];
$matkul = $_POST['matkul'];
$tugas = $_POST['tugas'];
$deadline = $_POST['deadline'];
$keterangan = $_POST['keterangan'];

if (empty($nidn)) {
    echo "<script>alert('Nama belum diisi')</script>";
    echo "<meta http-equiv='refresh' content='1 url=infotambah.php'>";
} else
if (empty($matkul)) {
    echo "<script>alert('Email belum diisi')</script>";
    echo "<meta http-equiv='refresh' content='1 url=infotambah.php'>";
} else
if (empty($tugas)) {
    echo "<script>alert('Username belum diisi')</script>";
    echo "<meta http-equiv='refresh' content='1 url=infotambah.php'>";
} else
if (empty($deadline)) {
    echo "<script>alert('Password belum diisi')</script>";
    echo "<meta http-equiv='refresh' content='1 url=infotambah.php'>";
} else {
    $simpan = "INSERT INTO infotugas(NIDN, Kode_Matkul, Tugas, Deadline, Keterangan) VALUES('$nidn', '$matkul', '$tugas','$deadline','$keterangan')";
    $result = mysqli_query($connection, $simpan);

    if ($result) {
        echo "<script>alert('Berhasil Mendaftar')</script>";
        echo "<meta http-equiv='refresh' content='1 url=infotambah.php'>";
    } else {
        echo "<script>alert('Gagal Mendaftar')</script>";
        echo "<meta http-equiv='refresh' content='1 url=infotambah.php>";
    }
}
?>