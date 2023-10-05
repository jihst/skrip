<?php
include "../../sistem/koneksi.php";

//$username = $_SESSION['nim'];
//
$nim = $_GET['nim'];
$sql = "select Nama_Mhs from mahasiswa where nim=$nim";
$query = mysqli_query($connection,$sql) or die ("Gagal query".mysqli_error());
$r = mysqli_fetch_array($query);
$nama = $r['Nama_Mhs'];
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
            <form class="form-horizontal" role="form" style="width:80%" onSubmit="return validasi()" name="formulir" method="post" action="./prosesizin.php" enctype="multipart/form-data">

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
                                
                                
                                <?php echo 'Sisa izin anda adalah :'.get_sisa_izin($connection, $_GET['nim'], $_GET['kodematkul'], $_GET['batas']); ?>

                                <form role="form">

                                    <div class="form-group">
                                        <label for="disabledSelect">NIM</label>
                                        <input class="form-control" name="Nim" id="disabledInput" type="text" value="<?php echo $nim; ?>" readonly="">
                                    </div>

                                    <div class="form-group">
                                        <label for="disabledSelect">Nama</label>
                                        <input class="form-control" name="Nama" id="disabledInput" type="text" value="<?php echo $nama; ?>" readonly="">
                                    </div>

                                    <div class="form-group">
                                        <label>Matakuliah</label>
                                         <input class="form-control" name="matkul" id="disabledInput" type="text" value="<?php echo $_GET['kodematkul']; ?>" readonly="">
                                    </div>

                                    <div class="form-group">
                                        <label for="disabledSelect">Tanggal</label>
                                        <input class="form-control"name="tgll" id="disabledInput" type="text" value="<?php $tgl=date('Y-m-d');echo $tgl;?>" readonly="">
                                    </div>

                                    <div class="form-group">
                                        <label>Text area</label>
                                        <textarea class="form-control" name="alasann" rows="3"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <form method="post" enctype="multipart/form-data">
                                            <p>Pilih File Gambar : <br/><input type='file' name='filegbr' id='filegbr'></p>
    <!--                                        <input type="text" name="kete"  /> <br/>
                                            <input type="submit" value="Upload" name="save"></td>-->
                                        </form>
                                    </div>
                                    <button type="submit" name="submit" value="Upload" class="btn btn-default">Submit Button</button>
                                    <button type="reset" class="btn btn-default">Reset Button</button>

                                </form>

                            </div>
                            <?php
                            include "../koneksi.php";
                            if (isset($_POST['save'])) {
                                $fileName = $_FILES['gambar']['name'];
                                // Simpan ke Database
                                $sql = "insert into perizinan (bukti izin) values ('$fileName')";
                                mysql_query($sql);
                                // Simpan di Folder Gambar
                                move_uploaded_file($_FILES['gambar']['tmp_name'], "gambar/" . $_FILES['gambar']['name']);
                                echo"<script>alert('Gambar Berhasil diupload !');history.go(-1);</script>";
                            }
                            ?>

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

<?php
 function  get_sisa_izin($link,$nim,$kodematkul,$batas)
 {
     $result = mysqli_query($link, "select * from perizinan where NIM='$nim' and Kode_Matkul ='$kodematkul'");
     $jumlah = mysqli_num_rows($result);
     $sisa= $batas-$jumlah;
     return $sisa;
 }



?>