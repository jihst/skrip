<?php 
session_start();
include "../../sistem/koneksi.php";

$nim = $_POST['Nim'];
$nama = $_POST['Nama'];
$makul = $_POST['matkul'];
$tgl = $_POST['tgll'];
$alasan = $_POST['alasann'];
$file = $_POST['filee'];

$result= mysqli_query($connection,"select jumlah_izin from data_izin where nim='".$nim."' and kodematkul='".$makul."'");
$count=mysqli_num_rows($result);
if($count>0)
{
    while($row = mysqli_fetch_assoc($result))
    {
    $jml_izin=$row['jumlah_izin'];
    }
	$jml_izin++;
    $sql = "update data_izin set jumlah_izin='$jml_izin' where nim='".$nim."' and kodematkul='".$makul."'";

    mysqli_query($connection,$sql);
}
else
{
    $sql = "INSERT INTO data_izin (id, nim, kodematkul, jumlah_izin, tanggal, alasan, file)VALUES (NULL,'$nim','$makul','1','$tgll','$alasan','$file')";

    mysqli_query($connection,$sql);

}

?>