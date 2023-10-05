<?php

include "koneksi.php";

$Id_info = $_POST['Id_info'];
$Nama_Dsn = $_POST['NIDN'];
$Nama_Matkul = $_POST['Kode_Matkul'];

$sql = "UPDATE infotugas set NIDN='$Nama_Dsn', Kode_Matkul='$Nama_Matkul' where Id_info=$Id_info";

if ($rs = mysqli_query($connection,$sql))
    echo "<script>alert('Data Berhasil diubah!'); window.location = 'pengajaranlist.php'</script>";
else
    die('Gagal Menyimpan karena' . mysqli_error());
?>   <?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

