<?php
include "../../sistem/koneksi.php";

$nidn = $_GET['nidn'];
$sql = "SELECT * FROM dosen left join users on users.Id_user = dosen.Id_user where nidn=$nidn";
$query = mysqli_query($connection, $sql) or die("Gagal query" . mysqli_error());
$r = mysqli_fetch_array($query);
$nama = $r['Nama_Dsn'];
$alamat = $r['Alamat'];
$jk = $r['Jenis_Kelamin'];
$nomor = $r['No_Hp'];
$email = $r['Email'];
$username = $r['username'];
$password = $r['Password'];
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Sistem Perizinan</title>

        <!-- Bootstrap Core CSS -->
        <link href="../template/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <!-- Custom CSS -->

        <link href="../template/css/sb-admin.css" rel="stylesheet" type="text/css"/>
        <!-- Morris Charts CSS -->

        <link href="../template/css/plugins/morris.css" rel="stylesheet" type="text/css"/>
        <!-- Custom Fonts -->
        <link href="../template/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <script src="../template/js/jquery.js" type="text/javascript"></script>

        <script src="../template/js/bootstrap.js" type="text/javascript"></script>

    </head>

    <body>
        <?php include 'menu.php';
        ?>

        <!-- Page Heading -->
    <center>
        <div class="row"style="align-content: center">
            <div>
                <div>
                    <hr/>
                    <p class='text-center'>
                    <center>
                        <img  style='min-width: 30%; max-width: 30%' src="pict/logo2.png" alt=""/>
                    </center>
                    </p>
                    <h1 align="center">Selamat Datang</h1>
                    <p align="center">Di Halaman Website Perizinan Mahasiswa Teknologi Informasi UMY</p>
                    <hr/>
                </div>
            </div>
            <form class="form-horizontal" role="form" style="width:80%" onSubmit="return validasi()" name="formulir" method="post" action="./passwordedit.php" enctype="multipart/form-data">
                <div id="page-wrapper">
                    <div class="container-fluid">
                        <div id="wrapper">

                            <div class="row">
                                <div class="col-lg-12">
                                    <h1 class="page-header">
                                        Profile
                                    </h1>
                                    <ol class="breadcrumb">
                                        <li class="active">
                                        </li>
                                    </ol>
                                </div>
                            </div>


                            <table class="table table-condensed">
                                <tbody>
                                    <tr>
                                        <td><label class="control-label col-sm-20">NIDN</label></td>
                                        <td> : </td>
                                        <td><?php echo $nidn; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Nama</td>
                                        <td> : </td>
                                        <td><?php echo $nama; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Alamat</td>
                                        <td> : </td>
                                        <td><?php echo $alamat; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Jenis Kelamin</td>
                                        <td> : </td>
                                        <td><?php echo $jk; ?></td>
                                    </tr>
                                    <tr>
                                        <td>No Hp</td>
                                        <td> : </td>
                                        <td><?php echo $nomor; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td> : </td>
                                        <td><?php echo $email; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Username</td>
                                        <td> : </td>
                                        <td><?php echo $username; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Password</td>
                                        <td> : </td>
                                        <td><?php echo $password; ?></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                                </thead>
                            </table>
                                <a class="btn btn-sm btn-primary" data-placement="bottom" data-toggle="tooltip" title="Edit Mahasiswa" href="passwordedit.php?nidn=<?php echo $_SESSION['nidn']; ?>">Edit Profil</a>
                                
                            </form>

                        </div>

                    </div>
                    <!-- /.row -->

                </div>
        </div>
    </center>



    <!-- jQuery -->
    <script src="../template/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../template/js/bootstrap.min.js"></script>
</body>
</html>
