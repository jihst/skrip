<?php 
error_reporting(0);
session_start();

if(empty($_SESSION[nim]) and empty($_SESSION[password])) {
	header("location:../skrip/index.php");
}else {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Startmin - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../assets/css/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="../assets/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../assets/css/startmin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../assets/css/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">

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
        <div class="navbar-header">
            <a class="navbar-brand" href="?page=home">Home</a>
        </div>

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <!-- Top Navigation: Left Menu -->
        <ul class="nav navbar-nav navbar-left navbar-top-links">
            <li><a href="#"><i class="fa fa-home fa-fw"></i> Universitas Muhammadiyah Yogyakarta</a></li>
        </ul>

        <!-- Top Navigation: Right Menu -->
        <ul class="nav navbar-right navbar-top-links">
            <li class="dropdown navbar-inverse">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-bell fa-fw"></i> <b class="caret"></b>
                </a>
                <ul class="dropdown-menu dropdown-alerts">
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-comment fa-fw"></i> New Comment
                                <span class="pull-right text-muted small">4 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a class="text-center" href="#">
                            <strong>See All Alerts</strong>
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i> secondtruth <b class="caret"></b>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                    </li>
                    <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="#"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
            </li>
        </ul>

        <!-- Sidebar -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">

                <ul class="nav" id="side-menu">
                    <li class="sidebar-search">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                        </div>
                    </li>
                    <li>
                        <a href="index.php?page=data-matkul" class="active"><i class="fa fa-dashboard fa-fw"></i> Data Matakuliah </a>
                    </li>
                    <li>
                        <a href="index.php?page=datamhs" class="active"><i class="fa fa-dashboard fa-fw"></i> Data Mahasiswa </a>
                    </li>				
                    <li>
                        <a href="index.php?page=izin" class="active"><i class="fa fa-dashboard fa-fw"></i> Izin </a>
                    </li>
					<li>
                        <a href="index.php?page=dataizin" class="active"><i class="fa fa-dashboard fa-fw"></i> Data izin </a>
                    </li>
					<li>
                        <a href="index.php?page=keluar" class="active"><i class="fa fa-dashboard fa-fw"></i> Keluar </a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><?php $judul = 	$_GET['page'];
												if($judul == 'izin') {
													echo "Pendaftaran Izin";
												}else if($judul == data){
													echo "Data Mahasiswa";
												}else{
													echo "Home";
												}
											?>
												
												</h1>
                </div>
            </div>

            <!-- ... Your content goes here ... -->
			<?php 
if(isset($_GET['page'])){
	$page = $_GET['page'];
	
	Switch($page){
		case 'data-matkul' :
			include "matakuliah.php";
			break;
		case 'data-mhs' :
			include "datamhs.php";
			break;
		case 'izin' :
			include "izin.php";
			break;
		case 'data-izin' :
			include "izin.php";
			break;
		default:
			echo "<center><h3>Maaf, Halaman yang anda minta tidak tersedia</h3></center>";
			break;
	}
} else{
	include "datamatkul.php";
}
?>

        </div>
    </div>

</div>

<!-- jQuery -->
<script src="../asset/js/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../asset/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="../asset/js/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="../asset/js/startmin.js"></script>

</body>
</html>

<?php } ?>