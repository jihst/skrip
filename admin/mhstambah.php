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
        <link href="../template/css/sb-admin.css" rel="stylesheet">

        <!-- Morris Charts CSS -->
        <link href="../template/css/plugins/morris.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="../template/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <script src="../template/js/jquery.js" type="text/javascript"></script>

        <script src="../template/js/bootstrap.js" type="text/javascript"></script>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
    <body>
        <?php include 'menu.php';
        ?>
        
        <form class="form-horizontal" role="form" style="width:80%" onSubmit="return validasi()" name="formulir" method="post" action="./mhsproses.php">
            <div id="wrapper">

                <!-- Navigation -->

                <div id="page-wrapper">

                    <div class="container-fluid">

                        <!-- Page Heading -->
                        <div class="row">
                            <div class="col-lg-12">
                                <h1 class="page-header">
                                    Data Mahasiswa
                                </h1>
                                <ol class="breadcrumb">
                                    <li class="active">
                                        <i class="fa fa-edit"></i> Forms Tambah Data Mahasiswa
                                    </li>
                                </ol>
                            </div>
                        </div>
                        <!-- /.row -->

                        <div class="row">
                            <div class="col-lg-6">

                                <form role="form">

                                    <div class="form-group">
                                        <label>NIM :</label>
                                        <input class="form-control" name="nim" placeholder="masukkan NIM">
                                    </div>

                                    <div class="form-group">
                                        <label>Nama Lengkap :</label>
                                        <input class="form-control" name="nama" placeholder="Masukkan Nama Lengkap">
                                    </div>

                                    <div class="form-group">
                                        <label>Tempat Lahir :</label>
                                        <input class="form-control" name="tempat" placeholder="Masukkan Tempat Lahir">
                                    </div>

                                    <div class="form-group">
                                        <label>Tanggal Lahir :</label>
                                        <input class="form-control" name="tgl" placeholder="Masukkan Tanggal Lahir" value="<?php $tgl = date('Y-m-d');echo $tgl; ?>">
                                    </div>

                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <textarea class="form-control" rows="3" name="alamat" placeholder="Masukkan Alamat Lengkap Mahasiswa"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label >Jenis Kelamin</label>
                                        <label class="radio-inline">
                                            <input type="radio"  name="jk" id="jk" value="L" checked>L
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="jk" id="jk" value="P">P
                                        </label>
                                    </div>

                                    <div class="form-group">
                                        <label>Nomor Telp/HP :</label>
                                        <input type="number" class="form-control" name="telp" placeholder="Masukkan Nomor Telepon">
                                    </div>

                                    <div class="form-group">
                                        <label>Email :</label>
                                        <input class="form-control" name="email" placeholder="Masukkan Email">
                                    </div>

                                    <div class="form-group">
                                        <label>Username :</label>
                                        <input class="form-control" name="username" placeholder="Masukkan Username">
                                    </div>

                                    <div class="form-group">
                                        <label>Password :</label>
                                        <input class="form-control" name="password" placeholder="Masukkan Password">
                                    </div>

                                    <button type="submit" name="mhstambah" class="btn btn-default">Tambah</button>
                                    <button type="reset" class="btn btn-default">Reset</button>

                                </form>

                            </div>

                        </div>
                        <!-- /.row -->

                    </div>
                    <!-- /.container-fluid -->

                </div>
                <!-- /#page-wrapper -->
        </form>

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
