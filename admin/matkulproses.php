<?php
include "../koneksi.php";

$kode = $_POST['kode'];
$nama = $_POST['nama'];
$semester = $_POST['semester'];
$sks = $_POST['sks'];
$sesi = $_POST['sesi'];
$batas = $_POST['batas'];
if (empty($kode)) {
    echo "<script>alert('Nama belum diisi')</script>";
    echo "<meta http-equiv='refresh' content='1 url=matkultambah.php'>";
} else
if (empty($nama)) {
    echo "<script>alert('Email belum diisi')</script>";
    echo "<meta http-equiv='refresh' content='1 url=matkultambah.php'>";
} else
if (empty($semester)) {
    echo "<script>alert('Username belum diisi')</script>";
    echo "<meta http-equiv='refresh' content='1 url=matkultambah.php'>";
} else
if (empty($sks)) {
    echo "<script>alert('Password belum diisi')</script>";
    echo "<meta http-equiv='refresh' content='1 url=matkultambah.php'>";
}
if (empty($sesi)) {
    echo "<script>alert('Password belum diisi')</script>";
    echo "<meta http-equiv='refresh' content='1 url=matkultambah.php'>";
}
if (empty($batas)) {
    echo "<script>alert('Password belum diisi')</script>";
    echo "<meta http-equiv='refresh' content='1 url=matkultambah.php'>";
}
else {
    $simpan = "INSERT INTO matakuliah(Kode_Matkul, Nama_Matkul, Semester, Jumlah_SKS, Jumlah_Sesi, Batas_Izin) VALUES('$kode', '$nama', '$semester','$sks','$sesi','$batas')";
    $result = mysqli_query($connection, $simpan);

    if ($result) {
        echo "<script>alert('Berhasil Mendaftar')</script>";
        echo "<meta http-equiv='refresh' content='1 url=matkultambah.php'>";
    } else {
        echo "<script>alert('Gagal Mendaftar')</script>";
        echo "<meta http-equiv='refresh' content='1 url=matkultambah.php'>";
    }
}
?>