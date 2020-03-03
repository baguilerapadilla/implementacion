<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" href="../plugins/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="../assets/css/index-login.css">

    <link rel="stylesheet" href="../plugins/sweet-alert/dist/sweetalert2.min.css">
    

</head>

<body class="fondo-login"  >
    <div class="container">
        <div class="row">

        <div class="login-form col-md-6 col-md-offset-3">
            <form class="form">
                <h2 class="text-center">SERVICIOS INTEGRALES <img src="../docs/assets/img/sfondo.png"></h2>

                <div class="form-group">
                    <input autocomplete="off" type="text" id="usuario" name="usuario" class="form-control" placeholder="Usuario" required="required" onkeyup = "this.value=this.value.toUpperCase()">
                </div>
                <div class="form-group">
                    <input type="password" id="password" name="password" class="form-control" placeholder="Contrasenia" required="required">
                </div>
                <div class="form-group">
                    <button type="button" id="btnLogin" class="btn btn-primary btn-block">Iniciar Sesion</button>
                </div>

         </form>

        </div>
        
        </div>
    
    </div>
   
</body>

	<div id="dropDownSelect1"></div>
	
    <!--===============================================================================================-->
        <script src="../plugins/jquery/jquery.js"></script>
    <!--===============================================================================================-->
        <script src="../plugins/vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
        <script src="../plugins/popper/popper.js"></script>
        <script src="../plugins/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
        <script src="../plugins/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
        <script src="../plugins/vendor/daterangepicker/moment.min.js"></script>
        <script src="../plugins/vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
        <script src="../plugins/vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    
        <!-- <script src="../plugins/bootstrap-validator/dist/js/bootstrapValidator.js"></script> -->
    
        <script src="../plugins/sweet-alert/dist/sweetalert2.min.js"></script>
        <script src="../assets/js/index-login.js"></script>

</html>