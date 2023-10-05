<?php

include "../../sistem/koneksi.php";

if ($_GET) {
    # TAMPILKAN DATA DARI DATABASE, Untuk ditampilkan kembali ke form edit
    $Id_info = isset($_GET['Id_info']) ? $_GET['Id_info'] : $_POST['Id_info'];
    $mySqli = "SELECT * FROM infotugas LEFT JOIN dosen ON infotugas.NIDN=dosen.NIDN LEFT JOIN matakuliah ON infotugas.Kode_Matkul=matakuliah.Kode_Matkul WHERE Id_info=$Id_info";
    $myQry = mysqli_query($connection,$mySqli ) or die("Query ambil data salah : " . mysqli_error());
    // Baca data
    $myData = mysqli_fetch_array($myQry);

    // Masukkan data ke dalam variabel
    $Id_info = $myData['Id_info'];
    $Nama_Dsn = isset($_POST['Nama_Dsn']) ? $_POST['Nama_Dsn'] : $myData['Nama_Dsn'];
    $Nama_Matkul = isset($_POST['Nama_Matkul']) ? $_POST['Nama_Matkul'] : $myData['Nama_Matkul'];
} // Penutup GET
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

        <form class="form-horizontal" role="form" style="width:80%" onSubmit="return validasi()" name="formulir" method="post" action="./pengajaranupdate.php">
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
                                    
                                    <div class="form-group" style="display: none">
                                        <label>ID :</label>
                                        <input class="form-control" name="Id_info" value="<?php echo $Id_info; ?>" placeholder="Masukkan Tempat Lahir">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Dosen :</label>
                                        <?php
                                        $sqli = "select * from dosen";
                                        $q = mysqli_query($connection, $sqli) or die("Gagal query" . mysqli_error());
                                        ?>
                                        <select class="form-control" name="NIDN" id="dosen" >
                                            <option selected="selected" value="">Pilih Dosen....</option>
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
                                        <select class="form-control" name="Kode_Matkul" id="dosen" >
                                            <option selected="selected">Pilih Matakuliah....</option>
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

                                    <button type="submit" nama="pengajaranedit" class="btn btn-default">Update</button>
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
