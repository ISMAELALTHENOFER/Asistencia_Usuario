<?php require '../../config/Conexion.php'; ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Control | Admin</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../../library/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../library/css/font-awesome.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="../../library/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="shortcut icon" href="../../library/files/check-list.png">

</head>

<body class="hold-transition login-page">

    <div class="login-box">
        <div class="login-logo">
            <a href="#"><b>Asistencias admin </b> </a>
        </div>
        <div class="login-box-body">
            <p class="login-box-msg">Ingrese sus credenciales</p>
            <form method="post" id="AccesoAdmin">
                <div class="form-group has-feedback">
                    <input type="text" id="logAdmin" name="logAdmin" class="form-control" placeholder="Ingrese Usuario">
                    <span class="fa fa-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" id="claveadmin" name="claveadmin" class="form-control" placeholder="ingrese Password">
                    <span class="fa fa-key form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-4">

                    </div>
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat"> Ingresar</button>
                    </div>
                </div>
            </form>

        </div>
    </div>

    <!-- jQuery -->
    <script src="../../library/js/jquery-3.1.1.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../../library/js/bootstrap.min.js"></script>
    <!-- Bootbox -->
    <script src="../../library/js/bootbox.min.js"></script>

    <script type="text/javascript" src="scripts/login.js"></script>


</body>

</html>