<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Login Administrator Sistem Informasi Siswa Untuk MAN 2 Ponorogo">
    <meta name="author" content="Hafidz dkk">

    <title>Registrasi</title>

    <!-- Bootstrap Core CSS -->
    <link href=<?php echo ASSETS_DIR."/css/bootstrap.min.css"; ?> rel="stylesheet">
    <!-- Custom CSS -->
    <link href=<?php echo ASSETS_DIR."/css/sb-admin-2.css"; ?> rel="stylesheet">
    <!-- Custom Fonts -->
    <link href=<?php echo ASSETS_DIR."/font-awesome-4.1.0/css/font-awesome.min.css"; ?> rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Register New Administrator</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input id="username" class="form-control" placeholder="Username" name="username" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input id="password" class="form-control" placeholder="Password" name="password" type="password">
                                </div>
                                <div class="form-group">
                                    <input class="btn btn-lg btn-success btn-block" name="submit" type="submit" value="Login" />
                                </div>
                                <div class="form-group">
                                    <?php echo $notif; ?>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src=<?php echo ASSETS_DIR."/js/jquery.js"; ?> type="text/javascript"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src=<?php echo ASSETS_DIR."/js/bootstrap.min.js"; ?> type="text/javascript"></script>
    <!-- Metis Menu Plugin JavaScript -->
    <script src=<?php echo ASSETS_DIR."/js/plugins/metisMenu/metisMenu.min.js"; ?> type="text/javascript"></script>
    <!-- Custom Theme JavaScript -->
    <script src=<?php echo ASSETS_DIR."/js/sb-admin-2.js"; ?> type="text/javascript"></script>
    <!-- JQuery.validate -->
    <script src=<?php echo ASSETS_DIR."/js/jquery.validate.min.js"; ?> type="text/javascript"></script>
</body>
</html>
