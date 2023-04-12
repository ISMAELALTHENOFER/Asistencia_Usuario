<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Control | Asistencia</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="library/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="library/css/font-awesome.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="library/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="library/css/blue.css">
    <link rel="shortcut icon" href="library/files/check-list.png">

</head>

<body class="hold-transition lockscreen">

    <!-- Automatic element centering -->
    <div class="lockscreen-wrapper">

        <div class="lockscreen-logo">
            <a href="#"><b></b> ASISTENCIA</a>
        </div>
        <!-- User name -->
        <div class="lockscreen-name">Ingresá tu código o DNI</div>

        <!-- START LOCK SCREEN ITEM -->
        <div class="lockscreen-item">
            <!-- lockscreen image -->
            <div class="lockscreen-image">
                <img src="library/files/check.jpg">
            </div>
            <!-- /.lockscreen-image -->

            <!-- lockscreen credentials (contains the form) -->
            <form action="" class="lockscreen-credentials" name="formulario" id="formulario" method="POST">
                <div class="input-group">
                    <input type="text" class="form-control" name="codigo_persona" id="codigo_persona" placeholder="ID de asistencia">

                    <div class="input-group-btn">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-arrow-right text-muted"></i></button>
                    </div>
                </div>
            </form>
            <!-- /.lockscreen credentials -->

        </div>
        <!-- /.lockscreen-item -->
        <div class="help-block text-center">
            Ingresa tu ID de asistencia
        </div>
        <div class="text-center">

        </div>
        <div class="lockscreen-footer text-center">
            <a href="view/admin/login.php">Iniciar Sesión</a>
        </div>
    </div>
    <!-- /.center -->


    <!-- jQuery -->
    <script src="library/js/jquery-3.1.1.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="library/js/bootstrap.min.js"></script>
    <!-- Bootbox -->
    <script src="library/js/bootbox.min.js"></script>

    <script type="text/javascript" src="view/user/scripts/asistencia.js"></script>


</body>

</html>

<!-- ----------------------------------------------------- -->

<script>
    function geoloc() {
        d = document.getElementById("mapa");
        if (navigator.geolocation) {
            d.innerHTML = "<p>Ubicacion:</p>";
            navigator.geolocation.getCurrentPosition(showPosition, showError);
        } else {
            d.innerHTML = "<p>Lo sentimos, tu dispositivo no admite la geolocaización.</p>";
        }
    }

    function showPosition(position) {
        latitud = position.coords.latitude;
        longitud = position.coords.longitude;
        d.innerHTML += "<p>Latitud: " + latitud + "</p>";
        d.innerHTML += "<p>Longitud: " + longitud + "</p>";
    }

    function showError(error) {
        switch (error.code) {
            case error.PERMISSION_DENIED:
                d.innerHTML += "<p>El usuario ha denegado el permiso a la localización.</p>"
                break;
            case error.POSITION_UNAVAILABLE:
                d.innerHTML += "<p>La información de la localización no está disponible.</p>"
                break;
            case error.TIMEOUT:
                d.innerHTML += "<p>El tiempo de espera para buscar la localización ha expirado.</p>"
                break;
            case error.UNKNOWN_ERROR:
                d.innerHTML += "<p>Ha ocurrido un error desconocido.</p>"
                break;
        }
    }
</script>


<div id="geoloc">
    <button onclick="geoloc()">Ver geolocalización.</button><br />
    <div id="mapa"></div>
</div>