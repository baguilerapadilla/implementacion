<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro Empleadoy Usuario</title>

   <link rel="stylesheet" href="../plugins/bootstrap2/css/bootstrap.min.css">
   <link rel="stylesheet" href="../plugins/datatables2/datatable.min.css">

   
</head>
<body>

   <header>
        <nav class="navbar navbar-expand-lg navbar-primary bg-primary">
            <h1 class="titulo-blog">MANTENIMIENTO EMPLEADO USUARIO
            </h1>
        </nav>

    </header>

    
    <a class="btn btn-primary" href="registroUsuario.php" role="button">Registrar</a>

    


    
       
        <div class="row">
            <div class="">
                <table id="tableUsuarios" class="table table-bordered table-hover">
                    <thead>
                        <th>Número</th>
                        <th>Usuario</th>
                        <th>Puesto</th>
                        <th>Email</th>
                        <th>Estado</th>
                        <th>Fecha Registro</th>
                        <th>Acciones</th>
                    </thead>
                </table>
            </div>
        </div>

            

<script src="../plugins/jquery/jquery.slim.min.js"></script>
<script src="../plugins/popper/esm/popper.min.js"></script> 
<script src="../pages/assets/js/mantenimientoUsuario.js"></script>

    
</body>
</html>