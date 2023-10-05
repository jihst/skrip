<?php
        include "koneksi.php";
        $username = $_POST['username'];
        $password = $_POST['password'];
        if (empty($username)) {
            echo "<script>alert('Username belum diisi')</script>";
            echo "<meta http-equiv='refresh' content='1 url=login.php'>";
        } else if (empty($password)) {
            echo "<script>alert('Password belum diisi')</script>";
            echo "<meta http-equiv='refresh' content='1 url=login.php'>";
        } else {
            session_start();
            $login = "select * from admin where Username='$username' and Password='$password'";
            $result = mysqli_query($connection, $login);

            if (mysqli_num_rows($result) > 0) {
                $_SESSION['Username'] = $username;
                header("location:home.php");
            } else {
                echo "<script>alert('Username atau Password salah')</script>";
                echo "<meta http-equiv='refresh' content='1 url=login.php'>";
            }
        }
        ?>
