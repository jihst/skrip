<?php
        $host = "localhost";
        $username = "root";
        $password = "";
        $dbname = "sistemperizinan";
        //$table = "login";
        $connection = mysqli_connect($host, $username, $password, $dbname);
        if (!$connection) {
                die("Koneksi ke database gagal: " . mysqli_connect_error());
            }
        ?>
