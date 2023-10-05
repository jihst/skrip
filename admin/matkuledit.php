<?php

include "koneksi.php";

if ($_GET) {
    # TAMPILKAN DATA DARI DATABASE, Untuk ditampilkan kembali ke form edit
    $Kode_Matkul = isset($_GET['Kode_Matkul']) ? $_GET['Kode_Matkul'] : $_POST['Kode_Matkul'];
    $mySqli = "SELECT * FROM matakuliah WHERE Kode_Matkul='$Kode_Matkul'";
    $myQry = mysqli_query($connection,$mySqli ) or die("Query ambil data salah : " . mysqli_error());
    // Baca data
    $myData = mysqli_fetch_array($myQry);

    // Masukkan data ke dalam variabel
    $Kode_Matkul = $myData['Kode_Matkul'];
    $Nama_Matkul = isset($_POST['Nama_Matkul']) ? $_POST['Nama_Matkul'] : $myData['Nama_Matkul'];
    $Semester = isset($_POST['Semester']) ? $_POST['Semester'] : $myData['Semester'];
    $Jumlah_SKS = isset($_POST['Jumlah_SKS']) ? $_POST['Jumlah_SKS'] : $myData['Jumlah_SKS'];
    $Jumlah_Sesi = isset($_POST['Jumlah_Sesi']) ? $_POST['Jumlah_Sesi'] : $myData['Jumlah_Sesi'];
    $Batas_Izin = isset($_POST['Batas_Izin']) ? $_POST['Batas_Izin'] : $myData['Batas_Izin'];
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

        <form class="form-horizontal" role="form" style="width:80%" onSubmit="return validasi()" name="formulir" method="post" action="./matkulupdatee.php">
            <div id="wrapper">

                <!-- Navigation -->

                <div id="page-wrapper">

                    <div class="container-fluid">

                        <!-- Page Heading -->
                        <div class="row">
                            <div class="col-lg-12">
                                <h1 class="page-header">
                                    Data Matakuliah
                                </h1>
                                <ol class="breadcrumb">
                                    <li class="active">
                                        <i class="fa fa-edit"></i> Forms Edit Matakuliah
                                    </li>
                                </ol>
                            </div>
                        </div>
                        <!-- /.row -->

                        <div class="row">
                            <div class="col-lg-6">
                                <form role="form" method="POST">
                                    
                                    <div class="form-group">
                                        <label>Kode Matakuliah :</label>
                                        <input class="form-control" name="Kode_Matkul" value="<?php echo $Kode_Matkul; ?>" placeholder="Masukkan Kode Matakuliah" readonly>
                                    </div>

                                    <div class="form-group">
                                        <label>Nama Matakuliah :</label>
                                        <input class="form-control" name="Nama_Matkul" value="<?php echo $Nama_Matkul; ?>" placeholder="Masukkan Nama Matakuliah">
                                    </div>

                                    <div class="form-group">
                                        <label>Semester :</label>
                                        <select name="Semester" class="form-control">
                                            <option>Pilih Semester . . . .</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>6</option>
                                            <option>7</option>
                                            <option>8</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Jumlah SKS :</label>
                                        <input type="number" class="form-control" name="Jumlah_SKS" value="<?php echo $Jumlah_SKS; ?>" placeholder="Masukkan Jumlah SKS">
                                    </div>

                                    <div class="form-group">
                                        <label>Jumlah Sesi :</label>
                                        <input type="number" class="form-control" name="Jumlah_Sesi" value="<?php echo $Jumlah_Sesi; ?>" placeholder="Masukkan Jumlah Sesi">
                                    </div>

                                    <div class="form-group">
                                        <label>Batas Izin :</label>
                                        <input type="number" class="form-control" name="Batas_Izin" value="<?php echo $Batas_Izin; ?>" placeholder="Masukkan Batas Izin">
                                    </div>
                                    
                                    <button type="submit" class="btn btn-default">Update</button>
                                    <button type="reset" class="btn btn-default">Reset</button>
<!--                                    <input type="hidden" name="Id_Info" value="<?php //echo $baca['Id_Info']; ?>"/>-->
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



