<?php
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
            <!--            <form class="form-horizontal" role="form" style="width:80%" onSubmit="return validasi()" name="formulir" method="post" action="./prosesizin.php">-->
            <div id="wrapper">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Tables
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-table"></i> Tables
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="container">
                    <h2 align="center">Data Matakuliah</h2>
                    </br>

                    <form class="form-inline" action="" method="POST">
                        <div class="form-group">
                            <input type="text" name="cari" class="form-control" id="cari">
                        </div>
                        <button type="submit" name="submit" class="btn btn-default">Cari</button>
                    </form>

                    </br>
                    <table class="table table-condensed">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Mata Kuliah</th>
                                <th>Semester</th>
                                <th>Jumlah SKS</th>
                                <th>Jumlah Sesi</th>
                                <th>Batas Izin</th>
                                <th>Nama Dosen</th>
                                <th>Izin</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include "../../sistem/koneksi.php";

                            if (isset($_POST['submit'])) {
                                $cari = $_POST['cari'];
                                $sql = "SELECT * from matakuliah where Kode_Matkul or Nama_Matkul LIKE '%$cari%' Order by Semester desc";
                            } else {
                                //$sql = "SELECT* FROM matakuliah";
                                $sql = "SELECT * FROM infotugas left join matakuliah on infotugas.Kode_matkul = matakuliah.Kode_Matkul
                                        left join dosen on infotugas.NIDN= dosen.NIDN";
                            }
                            $query = mysqli_query($connection, $sql) or die("Gagal query" . mysql_error($sql));
                            $no = 0;
                            while ($r = mysqli_fetch_array($query)) {
                                $no++;
                                ?>

                                <tr>
                                    <td><?php echo $no; ?></td>
                                    <td><?php echo $r['Nama_Matkul']; ?></td>
                                    <td><?php echo $r['Semester']; ?></td>
                                    <td><?php echo $r['Jumlah_SKS']; ?></td>
                                    <td><?php echo $r['Jumlah_Sesi']; ?></td>
                                    <td><?php echo $r['Batas_Izin']; ?></td>
                                    <td><?php echo $r['Nama_Dsn']; ?></td>
                                    <th><a href="izin.php?nim=<?php echo $_GET['nim']; ?>&kodematkul=<?php echo $r['Kode_Matkul']; ?>&batas=<?php echo $r['Batas_Izin']; ?>">Izin</a></th>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->

    </div>
</body>
</html>