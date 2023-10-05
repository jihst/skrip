<?php
session_start();
include "../../sistem/koneksi.php";

//$username = $_SESSION['nim'];
//
//$sql = "select * from users where username='$username'";
//$query = mysqli_query($connection,$sql) or die ("Gagal query".mysqli_error());
//$r = mysqli_fetch_array($query);
?>

<html>
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
        
        <div id="page-wrapper">
            <form class="form-horizontal" role="form" style="width:80%" onSubmit="return validasi()" name="formulir" method="post" action="./prosesizin.php">
            
            <div class="container-fluid">
                <div id="wrapper">
                    <!-- Page Heading -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">
                                Input Izin
                            </h1>
                            <ol class="breadcrumb">
                                <li class="active">
                                    <i class="fa fa-edit"></i> Forms
                                </li>
                            </ol>
                        </div>
                    </div>
                    <!-- /.row -->

                    <div class="row">
                        <div class="col-lg-6">

                            <form role="form">

                                <div class="form-group">
                                    <label for="disabledSelect">NIM</label>
                                    <input class="form-control" name="Nim" id="disabledInput" type="text" value="">
                                </div>

                                <div class="form-group">
                                    <label for="disabledSelect">Nama</label>
                                    <input class="form-control" name="Nama" id="disabledInput" type="text" value="">
                                </div>

                                <div class="form-group">
                                    <label>Matakuliah</label>
                                        <?php
                                        $sqli = "SELECT * FROM matakuliah";
                                        $q = mysqli_query($connection, $sqli) or die("Gagal query" . mysqli_error());
                                        ?>
                                        <select name="matkul" id="matakuliah" class="form-control" >
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

                                <div class="form-group">
                                    <label for="disabledSelect">Tanggal</label>
                                    <input class="form-control"name="tgll" id="disabledInput" type="text" value="<?php $tgl = date('d-m-Y');echo $tgl; ?>"disabled>
                                </div>

                                <div class="form-group">
                                    <label>Text area</label>
                                    <textarea class="form-control" name="alasann" rows="3"></textarea>
                                </div>

                                <div class="form-group">
                                    <label>File input</label>
                                    <input type="file" name="filee">
                                </div>

                                <button type="submit" class="btn btn-default">Submit Button</button>
                                <button type="reset" class="btn btn-default">Reset Button</button>

                            </form>

                        </div>

                    </div>
                    <!-- /.row -->

                </div>
                <!-- /.container-fluid -->

            </div>
            
        </form>
            <!-- /#page-wrapper -->
        </div>
    </body>
</html>