<?php session_start();?>
<?php

if (empty(!$_SESSION['username']))
{
?>


<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php?nidn=<?php echo $_SESSION['nidn']; ?>">Home | Sistem Perizinan</a>
            </div>
            <!-- Top Menu Items -->
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <img  style='min-width: 100%; max-width: 100%' src="../logo.png" alt=""/>
                    </li>
                    <li class="active">
                        <a href="data.php?nidn=<?php echo $_SESSION['nidn']; ?>"><i class="fa fa-fw fa-dashboard"></i> Data Perizinan</a>
                    </li>
<!--                    <li>
                        <a href="info-tambah.php?nidn=<?php echo $_SESSION['nidn']; ?>"><i class="fa fa-fw fa-bar-chart-o"></i> Tambah Info Tugas </a>
                    </li>-->
                    <li>
                        <a href="info-list.php?nidn=<?php echo $_SESSION['nidn']; ?>"><i class="fa fa-fw fa-bar-chart-o"></i> List Data Info Tugas </a>
                    </li>
                    <li>
                         <a href="logout.php"><i class="fa fa-fw fa-bar-chart-o"></i> Log Out</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
<?php }else{header('location:../index.php');} ?>