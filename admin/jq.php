<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>delay demo</title>
  
  <script src="assets/js/jquery.min.js"></script>
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="assets/css/styles.css" rel="stylesheet">
		<script src="assets/js/jquery.min.js"></script>
</head>
<body>
<div class="btn-warning" align="center" id="q"> <strong>Password atau Username salah<strong> </div> 
<script>
setTimeout(function() {
    $('#q').fadeOut('fast');
}, 1000);
</script>
</body>
</html>