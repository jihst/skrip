<?php
include "koneksi.php";
error_reporting(0);

	$nim = $_POST['nim'];
	$password =($_POST['password']);

//password dan username harus berupa huruf atau angka
//if(!ctype_alnum($username) OR !ctype_alnum($password)){
//	echo "duh jangan usil deh ";
//}	
    $a = mysqli_query($connection,"select * from users where username='$nim' and password='$password'");
	$ketemu = mysqli_num_rows($a);
	$r = mysqli_fetch_array($a);

	if($ketemu > 0){
		session_start();
		$_SESSION[nim] = $r[username];
		$_SESSION[password] = $r[password];
		$_SESSION[level] = $r[level];
		$folder = $r[level];
		header("location:../skrip/mahasiswa/index.php");			
	}
	// }else {
	// 	header('location:index.php?w=gagal');
	// }
?>

<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Bootstrap Login Form</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="assets/css/bootstrap.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	
		
		
		<link href="assets/css/styles.css" rel="stylesheet">
		<script src="assets/js/jquery.min.js"></script>
		
		<script src="assets/js/validatr.js" type="text/javascript"></script>
		<script>
		jQuery(function ($) {
			$('form').validatr();
		});
		</script>
		
	</head>
	<body>
	
<!--login modal-->

		<div id="loginModal" class="modal show" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog">
  
  <?php if($_GET['w'] == 'gagal' ) { ?>
		
			<div id="q" class="btn-warning" align="center" > <strong>Password atau NIM salah<strong> </div>
		
  <?php } ?>
  
  

  <div class="modal-content">
      <div class="modal-header">
          <h1 class="text-center">Login</h1>
      </div>
      <div class="modal-body">
          <form class="form col-md-12 center-block" method="POST" action="index.php" id="form">
            <div class="form-group">
              <input type="number" id="nim" name="nim" required placeholder="Masukan NIM" class="form-control input-lg" >
            </div>
			<div class="form-group">
			</div>
			
            <div class="form-group">
              <input type="password" id="password" name="password" placeholder="Masukan Password" class="form-control input-lg" required>
            </div>
            <div class="form-group">
              <button class="btn btn-primary btn-lg btn-block" type="submit">Log in</button>
              <span class="pull-right"><a href="#">Register</a></span><span><a href="#">Need help?</a></span>
            </div>
	
          </form>
      </div>
	  
	  	  
      <div class="modal-footer">
          <div class="col-md-12">
          <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
		  </div>	
      </div>
	  
  </div>
  </div>
</div>

	<!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/jquery.min.js"></script>
<script>
setTimeout(function() {
    $('#q').fadeOut('fast');
}, 1000);
</script>
	</body>
</html>







