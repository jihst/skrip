<?php
include "../../sistem/koneksi.php";

$nidn = $_GET['nidn'];
$sql = "SELECT * FROM users left join dosen on dosen.Id_user = users.Id_user where nidn=$nidn";
$query = mysqli_query($connection, $sql) or die("Gagal query" . mysqli_error());
$r = mysqli_fetch_array($query);
$nama = $r['Nama_Dsn'];
$id = $r['Id_user'];
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
            <form class="form-horizontal" role="form" style="width:80%" onSubmit="return validasi()" name="formulir" method="post" action="./passwordupdate.php" enctype="multipart/form-data">
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


                            <table class="table table-condensed" style="width: 50%">
                                <tbody>
                                    <tr style="display: none">
                                        <td><label class="control-label col-sm-20">ID</label></td>
                                        <td> : </td>
                                        <td><input class="form-control" name="Id_user" id="disabledInput" type="text" value="<?php echo $id; ?>" readonly=""></td>
                                    </tr>
                                    <tr>
                                        <td><label class="control-label col-sm-20">NIDN</label></td>
                                        <td> : </td>
                                        <td><input class="form-control" name="nidn" id="disabledInput" type="text" value="<?php echo $nidn; ?>" readonly=""></td>
                                    </tr>
                                    <tr>
                                        <td>Username</td>
                                        <td> : </td>
                                        <td><input class="form-control" name="username" id="disabledInput" type="text" value="<?php echo $username; ?>"></td>
                                    </tr>
                                    <tr>
                                        <td>Password</td>
                                        <td> : </td>
                                        <td><input class="form-control" name="Password" id="disabledInput" type="text" value="<?php echo $password; ?>"></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                            <button type="submit" class="btn btn-default">Update</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                            </form>

                        </div>

                    </div>
                    <!-- /.row -->

                </div>
        </div>

        <!-- jQuery -->
        <script src="../template/js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../template/js/bootstrap.min.js"></script>
    </body>
</html>
