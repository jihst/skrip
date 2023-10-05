<?php

include "../../sistem/koneksi.php";
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

        <form class="form-horizontal" role="form" style="width:80%" onSubmit="return validasi()" name="formulir" method="post" action="./pengajaranproses.php">
            <div id="wrapper">

                <!-- Navigation -->

                <div id="page-wrapper">

                    <div class="container-fluid">

                        <!-- Page Heading -->
                        <div class="row">
                            <div class="col-lg-12">
                                <h1 class="page-header">
                                    Data Pengajaran
                                </h1>
                                <ol class="breadcrumb">
                                    <li class="active">
                                        <i class="fa fa-edit"></i> Forms Tambah Pengajaran Dosen
                                    </li>
                                </ol>
                            </div>
                        </div>
                        <!-- /.row -->

                        <div class="row">
                            <div class="col-lg-6">

                                <form role="form">
                                    
                                    <div class="form-group">
                                        <label>Dosen :</label>
                                        <?php
                                        $sqli = "select * from dosen";
                                        $q = mysqli_query($connection, $sqli) or die("Gagal query" . mysqli_error());
                                        ?>
                                        <select class="form-control" name="dosen" id="dosen" >
                                            <option selected="selected">Please select ...</option>
                                            <?php
                                            while ($read = mysqli_fetch_array($q)) {
                                                ?>
                                                <option value='<?php echo $read['NIDN']; ?>' >
                                                    <?php echo $read['Nama_Dsn']; ?>
                                                </option>
                                            <?php }
                                            ?>
                                        </select>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Matakuliah :</label>
                                        <?php
                                        $sqli = "select * from matakuliah";
                                        $q = mysqli_query($connection, $sqli) or die("Gagal query" . mysqli_error());
                                        ?>
                                        <select class="form-control" name="matkul" id="dosen" >
                                            <option selected="selected">Please select ...</option>
                                            <?php
                                            while ($read = mysqli_fetch_array($q)) {
                                                ?>
                                                <option value='<?php echo $read['Kode_Matkul']; ?>' >
                                                    <?php echo $read['Nama_Matkul']; ?>
                                                </option>
                                            <?php }
                                            ?>
                                        </select>
                                    </div>

                                    <button type="submit" nama="pengajarantambah" class="btn btn-default">Tambah</button>
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
