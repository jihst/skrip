<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>SISTEM PERIZINAN</title>

        <!-- Bootstrap Core CSS -->
        <link href="template/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="template/css/sb-admin.css" rel="stylesheet">

        <!-- Morris Charts CSS -->
        <link href="template/css/plugins/morris.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="template/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <script src="template/js/jquery.js" type="text/javascript"></script>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
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

                <?php if (isset($_GET['w']) && $_GET['w'] == 'gagal') { ?>

                    <div id="q" class="btn-warning" align="center" > <strong>Password atau Username salah<strong> </div>

                            <?php } ?>



                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="text-center">Login</h1>
                                </div>
                                <div class="modal-body">
                                    <form class="form col-md-12 center-block" method="POST" action="login.php" id="form">
                                        <div class="form-group">
                                            <input type="number" id="Username" name="username" required placeholder="Masukan Username" class="form-control input-lg" >
                                        </div>
                                        <div class="form-group">
                                        </div>

                                        <div class="form-group">
                                            <input type="password" id="Password" name="Password" placeholder="Masukan Password" class="form-control input-lg">
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
                                        setTimeout(function () {
                                            $('#q').fadeOut('fast');
                                        }, 1000);
                            </script>
                            </body>
                            </html>
