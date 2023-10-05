<?php

include "../../sistem/koneksi.php";

$Id_user = $_POST['Id_user'];
$username = $_POST['username'];
$Password = $_POST['Password'];

$sql = "UPDATE users set username='$username', Password='$Password' where Id_user=$Id_user";

if ($rs = mysqli_query($connection,$sql)){
    //echo 'berhasil';
    $nidn = get_pengenal($connection, $Id_user, dosen, "NIDN");

    header("location:index.php?nidn=$nidn");
}else{
    die('Gagal Menyimpan' . mysqli_error());
}
?>   

<?php
function get_pengenal($link,$idUser, $folder, $pengenal)
{
    
    $result= mysqli_query($link, "select $pengenal from $folder where Id_user= '$idUser'");
    $r = mysqli_fetch_assoc($result);
    return $r[$pengenal];
}

?>