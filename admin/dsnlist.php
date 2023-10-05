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
                    <h2 align="center">Data Dosen</h2>
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
                                <th>NIDN</th>
                                <th>Nama Lengkap</th>
                                <th>Alamat</th>
                                <th>Jenis Kelamin</th>
                                <th>No Telepon</th>
                                <th>Email</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include "../../sistem/koneksi.php";

                            if (isset($_POST['submit'])) {
                                $cari = $_POST['cari'];
                                $sql = "SELECT * FROM dosen left join users on dosen.Id_user = users.Id_user where Nama_Dsn LIKE '%$cari%' Order by NIDN desc";
                            } else {
                                $sql = "SELECT * FROM dosen left join users on dosen.Id_user = users.Id_user WHERE Level='dosen'";
                            }
                            $query = mysqli_query($connection, $sql) or die("Gagal query" . mysql_error($sql));
                            $no = 0;
                            while ($r = mysqli_fetch_array($query)) {
                                $no++;
                                ?>

                                <tr>
                                    <td><?php echo $no; ?></td>
                                    <td><?php echo $r['NIDN']; ?></td>
                                    <td><?php echo $r['Nama_Dsn']; ?></td>
                                    <td><?php echo $r['Alamat']; ?></td>
                                    <td><?php echo $r['Jenis_Kelamin']; ?></td>
                                    <td><?php echo $r['No_Hp']; ?></td>
                                    <td><?php echo $r['Email']; ?></td>
                                    <td><?php echo $r['username']; ?></td>
                                    <td><?php echo $r['Password']; ?></td>
                                <td>
                                        <div id="thanks">
                                            <a class="btn btn-sm btn-primary" data-placement="bottom" data-toggle="tooltip" title="Edit Data Dosen" href="dsnedit.php?Id_user=<?php echo $r['Id_user']; ?> ">
                                                <span class="glyphicon glyphicon-edit"></span>
                                            </a>  
                                            <a onclick="return confirm('Yakin Hapus Data? <?php echo $r['Nama_Dsn']; ?>.?');" class="btn btn-sm btn-danger tooltips" data-placement="bottom" data-toggle="tooltip" title="Hapus Data Dosen" href="dsndelete.php?Id_user=<?php echo $r['Id_user']; ?>">
                                                <span class="glyphicon glyphicon-trash"></span>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>