<?php
include "koneksi.php";
error_reporting(0);
session_start();

if(!empty($_SESSION[nim]) and !empty($_SESSION[password])) {
	header("location:home.php");
}
else {
?>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Bootstrap Login Form</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="template/css/bootstrap.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	
		
                <link href="../template/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
		<link href="template/css/logincss.css" rel="stylesheet">
                <script src="../template/js/jquery.js" type="text/javascript"></script>
		
		<script src="template/js/validatr.js" type="text/javascript"></script>
		<script>
		jQuery(function ($) {
			$('form').validatr();
		});
		</script>
		
	</head>
	<body>
	
<!--login modal-->
<!--login modal-->

		<div id="loginModal" class="modal show" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog">
  
<?php if(isset($_GET['w']) && $_GET['w'] == 'gagal' ) { ?>
		
			<div id="q" class="btn-warning" align="center" > <strong>Password atau Username salah<strong> </div>
		
  <?php } ?>
  
  

  <div class="modal-content">
      <div class="modal-header">
          <h1 class="text-center">Login</h1>
      </div>
      <div class="modal-body">
          <form class="form col-md-12 center-block" method="POST" action="login.php" id="form">
            <div class="form-group">
                <input type="text" id="username" name="username" required placeholder="Masukan Username" class="form-control input-lg" >
            </div>
			<div class="form-group">
			</div>
			
            <div class="form-group">
              <input type="password" id="password" name="password" placeholder="Masukan Password" class="form-control input-lg" required>
            </div>
            <div class="form-group">
              <button class="btn btn-primary btn-lg btn-block" type="submit">Log in</button>
              
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




<?php } ?>



