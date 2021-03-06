<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="../plugins/bootstrap2/css/bootstrap.min.css"> 
 
    



</head>

<body>

    <div class="container-fluid pb-4">
    
        <!-- As a link -->
        <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="#">Mantenimiento usuario</a>
        </nav>

    </div>

        <div class="container pr-5">
            <form class=" col-6"  method="post">

            <input type="hidden" id="idUsuario" >

            <div class="form-row ">
            <h3 class="">Agregar usuario</h3>
            <br><br>
            <div class="container">

            <div class="col">
                <label for="">Nombre de Usuario</label>
                    <input type="text" name="nombre"  id="nombre" class="form-control" placeholder="Nombre">
            </div>

            <div class="col">
                <label for="">Apellido</label>
                    <input type="text" name="apellido"  id="apellido" class="form-control" placeholder="apellido">
            </div>

            <div class="col">
                <label for="">Identidad</label>
                    <input type="text" name="telefono"  id="telefono" class="form-control" placeholder="telefono Usuario">
            </div>

            <div class="col">
                <label for="">Seleccione Rol</label>
                <select class="form-control" name="selectRol" id="selectRol"></select> 
            </div>


            <div class="col">
                <label for="">Nombre de Usuario</label>
                    <input type="text" name="nombreUsuario"  id="nombreUsuario" class="form-control" placeholder="Nombre de Usuario">
            </div>

            <div class="col">
                <label for="">Contraseña</label>
                    <input type="password" name="password"  id="password" class="form-control" placeholder="Contraseña">
            </div>

            <div class="col">
                <label for="">Confirmar la Contraseña</label>
                    <input type="password" name="passwordConfirmacion"  id="passwordConfirmacion" class="form-control" placeholder="Confirmar contraseña">
            </div>

            <div class="col">
                <label for="">Fecha de vencimiento</label>
                    <input type="date" name="fechaVencimiento"  id="fechaVencimiento" class="form-control" >
            </div>

            <div class="col pt-4">
                <button type="button" value="Registrar"  class="btn-enviar btn btn-primary" id="btnRegistrar">Registrar</button>
                <button type="button" value="Cancelar" id="btnRegistrar" class="btn-can btn btn-danger">Danger</button>
            </div>


                <!-- <input type="button" value="Registrar" id="btnRegistrar" class="btn-enviar" required>
                <input type="button" value="Cancelar" class="btn-can" required> -->




            </form>
         </div>
  
            
        

        

    <!--===============================================================================================-->
        <script src="../plugins/jquery/jquery.js"></script>
    <!--===============================================================================================-->


     <script src="../plugins/datatables2/datatable.min.js"></script>


    <script src="../plugins/sweet-alert/dist/sweetalert2.min.js"></script>
    <script src="../assets/js/registroUsuario.js"></script>
    
</body>

</html>