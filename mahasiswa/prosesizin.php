<?php

session_start();
include "../../sistem/koneksi.php";

$nim = $_POST['Nim'];
$nama = $_POST['Nama'];
$makul = $_POST['matkul'];
$tgl = $_POST['tgll'];
$alasan = $_POST['alasann'];


$namafolder = dirname(getcwd()) . "\\gambar\\"; //folder tempat menyimpan file
echo $namafolder;

//
//$file_path = "dokumen/";
//     
//    $file_path = $file_path . basename( $_FILES['uploaded_file']['name']);
//    if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $file_path) ){
//        echo "success";
//    } else{
//        echo "fail";
//    }

if (is_uploaded_file($_FILES['filegbr']['tmp_name'])) {
    $jenis_gambar = $_FILES['filegbr']['type']; //memeriksa format gambar
    if ($jenis_gambar == "image/jpeg" || $jenis_gambar == "image/jpg" || $jenis_gambar == "image/gif" || $jenis_gambar == "image/png") {
        $lampiran = basename($_FILES['filegbr']['name']);
        $filegambar = $namafolder . $lampiran;
//mengupload gambar dan update row table database dengan path folder dan nama image
        if (move_uploaded_file($_FILES['filegbr']['tmp_name'], $filegambar)) {

            $query_insert = "INSERT INTO perizinan (NIM,Kode_Matkul,Tanggal,Alasan,Bukti_Izin)
VALUES ($nim,'$makul','$tgl','$alasan','$lampiran')";
            //echo $query_insert;
            if ($rs = mysqli_query($connection, $query_insert)) {

                echo "<script>alert('Berhasil Mendaftar')</script>";
                //$nim = get_pengenal($connection, $nim, mahasiswa, "NIM");

                header("location:index.php?nim=$nim");
            } else {
                die('Gagal Menyimpan karena' . mysqli_error($connection));
            }
//Jika gagal upload, tampilkan pesan Gagal mysqli_error()
        } else {
            echo "Gambar gagal dikirim";
        }
    } else {
        echo "Jenis gambar yang anda kirim salah. Harus .jpg .gif .png";
    }
} else {
    echo "Anda belum memilih gambar";
}
?>
