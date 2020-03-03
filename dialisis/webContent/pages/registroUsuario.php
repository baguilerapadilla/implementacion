<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="../plugins/bootstrap2/css/bootstrap.min.css"> 


    <title>Registro Usuario</title>
    
    
 


</head>

<body>

    <div class="container-fluid pb-4">
    
        <!-- As a link -->
        <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="#">Mantenimiento usuario</a>
        </nav>

    </div>




    <div class="row row-cols-1 row-cols-md-2">
        <div class="col mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <h3>Registro Empleado</h3>
                    <br>
                    <br>
                    <!--Nombre-->

                    <div class="form-row mb-auto">
                        <div class="container">
                            <div class="col-11">
                                <label for="">Primer Nombre</label>
                                <input type="text" class="form-control" id="primerNombre" placeholder="Primer Nombre">
                            </div>
                            <div class="col-11">
                                <label for="">Primer Apellido</label>
                                <input type="text" class="form-control" id="primerApellido" placeholder="Primer Apellido">
                            </div>
                        </div>
                        <!--apellidod-->
                        <div class="container ">
                            <div class="col-11">
                                <label for="">Segundo Nombre</label>
                                <input type="text" class="form-control" id="segundoNombre" placeholder="Segundo Nombre">
                            </div>
                            <div class="col-11">
                                <label for="">Segundo Apellido</label>
                                <input type="text" class="form-control" id="segundoApellido" placeholder="Segundo Apellido">
                            </div>
                        </div>
                    </div>
                    <div class="form-row mb-auto">
                        <!--Identidad-->
                        <div class="container ">
                            <div class="col-11">
                                <label for="">Identidad</label>
                                <input type="text" class="form-control" id="identidad" placeholder="Identidad">
                            </div>
                            <div class="col-11">
                                <label for="">Genero</label>
                                <select id="selectGenero" class="form-control"></select>
                            </div>
                        </div>
                
                        <!--fecha nacimiento y estado civil-->
                        <div class="container">
                            <div class="col-11">
                                <label for="">Fecha de Nacimiento</label>
                                <input type="date" id="fechaNacimiento" class="form-control" placeholder="">
                            </div>
                            <div class="col-11">
                                <label for="">Estado Civil</label>
                                <select id="selectEstadoCivil" class="form-control"></select>
                            </div>
                        </div>
                    <!--Identidad-->
                    </div>
                    <div class="form-row mb-auto">
                        <div class="container ">
                            <div class="col-11">
                                <label for="">Teléfono</label>
                                <input type="text" id="telefono" class="form-control" placeholder="Teléfono">
                            </div>
                            <div class="col ">
                                <label for="">Departamento</label>
                                <select id="selectDepartamento" class="form-control"></select>
                            </div>
                        </div>
                        <div class="container-11">
                                <div class="col">
                                    <label for="">Correo Empleado</label>
                                    <input type="email" class="form-control" id="correoEmpleado" placeholder="Correo">
                                </div>
                                <div class="col-11">
                                    <label for="">Municipio</label>
                                    <select id="selectMunicipio" class="form-control"></select>
                                </div>
                        </div>
                        
                    <div>
                    <div class="form-row">
                        <div class="container">
                            <div class="col">
                                <label for="">Dirección</label>
                                <input type="text" id="direccion" class="form-control" placeholder="Dirección">
                            </div>
                            
                        </div>

                    </div>
                    <input type="button" value="Registrar Empleado" id="btnRegistrarEmpleado" class="btn-enviar" required>
                </div>
            </div>
        </div>
    </div>











    <div class="row row-cols-1 row-cols-md-2">
    <div class="col-6 mb-4">
        <div class="card">
      
      <div class="card-body">
        <h5 class="card-title">Card title</h5>

                
      </div>
    </div>
  </div>
</div>



  

    

    <div class="card-body">
        <h5 class="card-title">Card title</h5>

            <input type="hidden" id="idUsuario" >

            <div class="form-row ">
            <h3 class="">Agregar usuario</h3>
            <br><br>
            <div class="container col-md-6">
                    
                <div class="col">
                    <label for="">Seleccione Rol</label>
                    <select class="form-control" name="selectRol" id="selectRol"></select> 
                </div>
                <!-- <div class="col ">
                    <label for="">Telefono</label>
                    <input type="text" class="form-control" placeholder="Telefono">
                </div> -->
            </div>
            <!-- <div class="container col-md-6">
                    <div class="col">
                        <label for="">Teléfono</label>
                        <input type="telefono" class="form-control" id="telefono" placeholder="Teléfono">
                    </div>
                    <div class="col ">
                        <label for="">Telefono</label>
                        <input type="text" class="form-control" placeholder="Telefono">
                    </div>
                </div>
            <div> -->
            </div>


            <form action="Registar.php" method="post" class="form-register text-left">
            <h1 class="form-titulo text-left">Informacion del usuario</h1>
            <div class="Contenedor-inputs">
                <p>Nombre usuario: &nbsp;&nbsp; 
                <input type="text" name="nombreUsuario" id="nombreUsuario" placeholder="Nombre de Usuario" class="input-60"
                        required></p>
                <p>Contraseña : &nbsp;&nbsp; 
                <input type="password" name="password" id="password" placeholder="Contraseña"
                        class="input-60"></p>
                <p>Confirmar contraseña : &nbsp;&nbsp; 
                <input type="password" name="passwordConfirmacion" id="passwordConfirmacion"
                        placeholder="Confirmar contraseña" class="input-60" required></p>
                <p>Correo : &nbsp;&nbsp; 
                <input type="email" name="correo" id="correo" placeholder="Correo" class="input-60"
                        required></p>

            </div>


            <form action="Registrar.php" method="post" class="form-detalle text-left">
                <h1 class="form-titulo text-left">Detalles</h1>
                <div class="Contenedor-inputs">
                    <p>Estado : &nbsp;&nbsp; 
                    <select  name="selectEstado" id="selectEstado" class="input-60"
                            required></select></p>
                    <div class="form-group">
                        <p>Fecha vencimiento:  
                        <input type="date" name="fechaVencimiento" id="fechaVencimiento"></p>
                    </div>

            </form>

            <input type="button" value="Registrar" id="btnRegistrar" class="btn-enviar" required>
            <input type="button" value="Cancelar" class="btn-can" required>
        </div>





  
    
  


  

    















    
    <!--  -->

    






    


     


    
   




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
    <!-- <script src="../plugins/datatables/jquery.datatables.js"></script> -->

     <script src="../plugins/datatables2/dataTables.js"></script>


    <script src="../plugins/sweet-alert/dist/sweetalert2.min.js"></script>
    <script src="../assets/js/registroUsuario.js"></script>
    
</body>

</html>