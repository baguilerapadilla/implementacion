<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro Empleadoy Usuario</title>

   <!-- Tell the browser to be responsive to screen width -->
   <meta name="viewport" content="width=device-width, initial-scale=1">

        
<!-- Font Awesome -->
<link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- DataTables -->
<link rel="stylesheet" href="../plugins/datatables-bs4/css/dataTables.bootstrap4.css">

<!-- Tempusdominus Bbootstrap 4 -->
<link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
<!-- iCheck -->
<link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
<!-- JQVMap -->
<link rel="stylesheet" href="../plugins/jqvmap/jqvmap.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="../dist/css/adminlte.min.css">

<link rel="stylesheet" href="../assets/css/psicologia.css">
<!-- overlayScrollbars -->
<link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
<!-- Daterange picker -->
<link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
<!-- summernote -->
<link rel="stylesheet" href="../plugins/summernote/summernote-bs4.css">
<!-- Google Font: Source Sans Pro -->
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">  

   
</head>
<body>

  

   <header>
        <nav class="navbar navbar-expand-lg navbar-primary bg-primary">
            <h1 class="titulo-blog">MANTENIMIENTO EMPLEADO USUARIO
            </h1>
        </nav>

    </header>

    <div class="container p-4">
     <a href="registroUsuario.php" class="btn-enviar btn btn-primary" >Nuevo Usuario</a>
    </div>


    <div class="card">


            <!-- /.card-header -->
            <div class="tableUsuarios">
            <table id="tableUsuarios" class="table table-bordered table-striped">  
                <thead bgcolor="#eeeeee" align="center">
                <tr>

                <th>Numero</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Usuario </th>
                <th>Email</th>
                <th>Estado </th>
                <th>Fecha Registro</th>
                <th class="text-center"> Acciones </th> 

                </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
                            
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
           
        </div>
    

    
   


    
       
       <!-- <div class="row">
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
        </div>-->

<!--/.wrapper--><br />
        <div class="footer span-12">
            <div class="container">
              <center> <b class="copyright"><a href="http://obedalvarado.pw/"> Sistemas Web</a> &copy; <?php echo date("Y")?> DataTables Bootstrap </b></center>
            </div>
        </div>

        <!-- jQuery -->
        <script src="../plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
       
        <!-- DataTables -->
        <script src="../plugins/datatables/jquery.dataTables.js"></script>
        <script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>

        <!-- jQuery UI 1.11.4 -->
        <script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
       
        <script src="../plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- ChartJS -->
        <script src="../plugins/chart.js/Chart.min.js"></script>
       
        <!-- daterangepicker -->
        <script src="../plugins/moment/moment.min.js"></script>
        <script src="../plugins/daterangepicker/daterangepicker.js"></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src="../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
        <!-- Summernote -->
        <script src="../plugins/summernote/summernote-bs4.min.js"></script>
        <!-- overlayScrollbars -->
        <script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
        <!-- AdminLTE App -->
        <script src="../dist/js/adminlte.js"></script>

		   <script src="../assets/js/registroUsuario.js"></script>
    
</body>
</html>