
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


        <div id="page-wrapper">
            <div class="container-fluid">
                <div id="wrapper">
                    <div class="row"></div>
                    <h2 align="center">Data Info</h2>
                    <br/>
                    <?php
//                    if (isset($_GET['hal']) == 'hapus') {
//                        $Id_info = $_GET['Id'];
//                        $query = "SELECT * FROM `infotugas` WHERE `Id_info`='$Id_info'";
//                        $cek = mysqli_query($connection, $query);
//                        if (mysqli_num_rows($cek) == 0) {
//                            echo 'data ditemukan';
//                        } else {
//                            $info = mysqli_fetch_array($cek);
//                            $delete = mysqli_query($connection, "DELETE FROM `infotugas` WHERE `Id_info`='$Id_info'");
//                            if ($delete) {
//                                echo 'berhasil dihapus';
//                            } else {
//                                echo 'gagal menghapus';
//                            }
//                        }
//                    }
                    ?>
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
                                <th>Dosen</th>
                                <th>Matakuliah</th>
                                <th>Tugas</th>
                                <th>Deadline</th>
                                <th>Keterangan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include "../../sistem/koneksi.php";

                            if (isset($_POST['submit'])) {
                                //$Id_info = $_POST['Id_info'];
                                $cari = $_POST['cari'];
                                $sql = "SELECT * FROM infotugas left join dosen on infotugas.NIDN = dosen.NIDN left join matakuliah on infotugas.Kode_Matkul= matakuliah.Kode_Matkul where Nama_Dsn like '%$cari%' or Nama_Matkul like '%$cari%'";
                                //$sql = "SELECT * from infotugas where Kode_Matkul or NIDN LIKE '%$cari%' Order by Deadline desc";
                            } else {
                                //$sql = "SELECT a.*, b.*, c.* FROM infotugas a left join dosen b on a.NIDN = b.NIDN, a left join matakuliah c on a.Kode_Matakuliah = c.Kode_Matakuliah";
                                $sql = "SELECT * FROM infotugas left join dosen on infotugas.NIDN = dosen.NIDN
                                        left join matakuliah on infotugas.Kode_Matkul= matakuliah.Kode_Matkul";
                            }
                            $query = mysqli_query($connection, $sql) or die("Gagal query" . mysql_error($sql));
//                            if (mysqli_num_rows($query) > 0) {
                                $no = 0;
                                while ($r = mysqli_fetch_array($query)) {
                                    $no++;
                                    ?>

                                    <tr>

                                        <td><?php echo $no; ?></td>
                                        <td><?php echo $r['Nama_Dsn']; ?></td>
                                        <td><?php echo $r['Nama_Matkul']; ?></td>
                                        <td><?php echo $r['Tugas']; ?></td>
                                        <td><?php echo $r['Deadline']; ?></td>
                                        <td><?php echo $r['Keterangan']; ?></td>

                                        <td>
                                            <div id="thanks">
                                                <a class="btn btn-sm btn-primary" data-placement="bottom" data-toggle="tooltip" title="Edit Info" href="infoedit.php?Id_info=<?php echo $r['Id_info']; ?> ">
                                                    <span class="glyphicon glyphicon-edit"></span>
                                                </a>  
                                                <a onclick="return confirm('Yakin hapus tugas <?php echo $r['Nama_Matkul']; ?>.?');" class="btn btn-sm btn-danger tooltips" data-placement="bottom" data-toggle="tooltip" title="Hapus Info" href="infohapus.php?Id_info=<?php echo $r['Id_info']; ?>">
                                                    <span class="glyphicon glyphicon-trash"></span>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                    <td>
                            <center>

                            </center>
                            </td>
                            </tbody>
                        </table>
                    <?php
//                    } else {
//                        echo 'data tidak ditemukan.....';
//                    }
                    ?>
                </div>
            </div>
        </div>
    </body>
</html>