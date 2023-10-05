<?php session_start();?>
<?php

if (empty(!$_SESSION['Username']))
{
?>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Bootstrap Admin Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="../template/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../template/css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../template/css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../template/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home.php">Perizinan Mahasiswa</a>
            </div>
            <!-- Top Menu Items -->
            
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <img  style='min-width: 100%; max-width: 100%' src="../logo.png" alt=""/>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#matkul"><i class="fa fa-fw fa-file"></i> Data Matakuliah <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="matkul" class="collapse">
                            <li>
                                <a href="matkultambah.php">Tambah Data</a>
                            </li>
                            <li>
                                <a href="matkulist.php">Lihat Data</a>
                            </li>
                        </ul>
                    </li>
                    
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#dsn"><i class="fa fa-fw fa-table"></i> Data Dosen <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="dsn" class="collapse">
                            <li>
                                <a href="dsntambah.php">Tambah Data</a>
                            </li>
                            <li>
                                <a href="dsnlist.php">Lihat Data</a>
                            </li>
                        </ul>
                    </li>
                    
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#pengajaran"><i class="fa fa-fw fa-desktop"></i> Data Pengajaran <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="pengajaran" class="collapse">
                            <li>
                                <a href="pengajarantambah.php">Tambah Data</a>
                            </li>
                            <li>
                                <a href="pengajaranlist.php">Lihat Data</a>
                            </li>
                        </ul>
                    </li>
                    
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#info"><i class="fa fa-fw fa-desktop"></i> Data Info <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="info" class="collapse">
                            <li>
                                <a href="infotambah.php">Tambah Data</a>
                            </li>
                            <li>
                                <a href="infolist.php">Lihat Data</a>
                            </li>
                        </ul>
                    </li>
                    
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#mhs"><i class="fa fa-fw fa-table"></i> Data Mahasiswa <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="mhs" class="mhs collapse">
                            <li>
                                <a href="mhstambah.php">Tambah Data</a>
                            </li>
                            <li>
                                <a href="mhslist.php">Lihat Data</a>
                            </li>
                        </ul>
                    </li>
                    
                     <li class>
                        <a href="izinlist.php"><i class="fa fa-fw fa-edit"></i> Data Perizinan</a>
                    </li>
                    
                    <li>
                         <a href="logout.php"><i class="fa fa-fw fa-bar-chart-o"></i> Log Out</a>
                    </li>
                    
<!--                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#izin"><i class="fa fa-fw fa-edit"></i> Data Perizinan <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="izin" class="collapse">
                            <li>
                                <a href="izintambah.php">Tambah Data</a>
                            </li>
                            <li>
                                <a href="izinlist.php">Lihat Data</a>
                            </li>
                        </ul>
                    </li>-->
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../template/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../template/js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../template/js/plugins/morris/raphael.min.js"></script>
    <script src="../template/js/plugins/morris/morris.min.js"></script>
    <script src="../template/js/plugins/morris/morris-data.js"></script>

</body>

</html>
<?php }else{header('location:../index.php');} ?>