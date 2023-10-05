<?php
include "../koneksi.php";

if ($_GET) {
    # TAMPILKAN DATA DARI DATABASE, Untuk ditampilkan kembali ke form edit
    $Id_user = isset($_GET['Id_user']) ? $_GET['Id_user'] : $_POST['Id_user'];
    $mySqli = "SELECT * FROM dosen users WHERE `Id_user`=$Id_user";
    $myQry = mysqli_query($connection,$mySqli ) or die("Query ambil data salah : " . mysqli_error());
    // Baca data
    $myData = mysqli_fetch_array($myQry);

    // Masukkan data ke dalam variabel
    $Id_user = $myData['Id_user'];
    $NIDN = isset($_POST['NIDN']) ? $_POST['NIDN'] : $myData['NIDN'];
    $Nama_Dsn = isset($_POST['Nama_Dsn']) ? $_POST['Nama_Dsn'] : $myData['Nama_Dsn'];
    $Alamat = isset($_POST['Alamat']) ? $_POST['Alamat'] : $myData['Alamat'];
    $Jenis_Kelamin = isset($_POST['Jenis_Kelamin']) ? $_POST['Jenis_Kelamin'] : $myData['Jenis_Kelamin'];
    $No_Hp = isset($_POST['No_Hp']) ? $_POST['No_Hp'] : $myData['No_Hp'];
    $Email = isset($_POST['Email']) ? $_POST['Email'] : $myData['Email'];
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

        <form class="form-horizontal" role="form" style="width:80%" onSubmit="return validasi()" name="formulir" method="post" action="./dsnupdate.php">
            <div id="wrapper">

                <!-- Navigation -->

                <div id="page-wrapper">

                    <div class="container-fluid">

                        <!-- Page Heading -->
                        <div class="row">
                            <div class="col-lg-12">
                                <h1 class="page-header">
                                    Data Dosen
                                </h1>
                                <ol class="breadcrumb">
                                    <li class="active">
                                        <i class="fa fa-edit"></i> Forms Edit Data Dosen
                                    </li>
                                </ol>
                            </div>
                        </div>
                        <!-- /.row -->

                        <div class="row">
                            <div class="col-lg-6">
                                <form role="form" method="POST">
                                    
                                    <div class="form-group" style="display: none">
                                        <label>ID :</label>
                                        <input class="form-control" name="Id_user" value="<?php echo $Id_user; ?>" placeholder="Masukkan Tempat Lahir">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>NIDN :</label>
                                        <input class="form-control" name="NIDN" value="<?php echo $NIDN; ?>">
                                    </div>

                                    <div class="form-group">
                                        <label>Nama Lengkap :</label>
                                        <input class="form-control" name="Nama_Dsn" value="<?php echo $Nama_Dsn; ?>">
                                    </div>

                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <textarea class="form-control" rows="3" name="Alamat" value=""><?php echo $Alamat; ?></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label>Jenis Kelamin</label>
                                        <label class="radio-inline">
                                            <input type="radio"name="Jenis_Kelamin" id="jk" value="L" checked>L
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio"name="Jenis_Kelamin" id="jk" value="P">P
                                        </label>
                                    </div>

                                    <div class="form-group">
                                        <label>Nomor Telp/HP :</label>
                                        <input type="number" class="form-control" name="No_Hp" value="<?php echo $No_Hp; ?>">
                                    </div>

                                    <div class="form-group">
                                        <label>Email :</label>
                                        <input class="form-control" name="Email" value="<?php echo $Email; ?>">
                                    </div>

                                    <button type="submit" name="dsntambah" class="btn btn-default">Update</button>
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
    <script src="../template/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../template/js/bootstrap.min.js"></script>

</body>

</html>



