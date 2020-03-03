<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Psicología</title>

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

	<!-- Navbar -->
	<div class="container-fluid bg-primary">
			<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
					<a class="navbar-brand" href="#">
						<img src="../assets/images/logo-psicologia.png" width="30" height="30" class="d-inline-block align-top" alt="">
						Psicologia  
						</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
					</button>
				
					<a class="navbar-text ml-auto text-white">
						Dialisis de Honduras S.A.
					</a>
					
				</div>
			</nav>
	</div>

	<div class="container">
		<div class="row">
            <div class="col-12">    
			
        <?php
             if(isset($_GET['action']) == 'delete'){
				$id_delete = intval($_GET['id']);
				$query = mysqli_query($conn, "SELECT * FROM clientes WHERE id='$id_delete'");
				if(mysqli_num_rows($query) == 0){
					echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> No se encontraron datos.</div>';
				}else{
					$delete = mysqli_query($conn, "DELETE FROM clientes WHERE id='$id_delete'");
					if($delete){
						echo '<div class="alert alert-primary alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>  Bien hecho, los datos han sido eliminados correctamente.</div>';
					}else{
						echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Error, no se pudo eliminar los datos.</div>';
					}
				}
			}
        ?>
        
        <div class="card">
            <div class="card-header">
              <h3 class="card-title">Pacientes </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <table id="lookup" class="table table-bordered table-striped">  
                <thead bgcolor="#eeeeee" align="center">
                <tr>

                <th>ID</th>
                <th>Nombre </th>
                <th>Apellido</th>
                <th>Código</th>
                <th>Teléfono </th>
                <th>Email</th>
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
    
        </div>
        
	</div>
    <!--/.container-->
        
        <!--/.wrapper--><br />
        <div class="footer span-12">
            <div class="container">
              <center> <b class="copyright"><a href="http://obedalvarado.pw/"> Sistemas Web</a> &copy; <?php echo date("Y")?> DataTables Bootstrap </b></center>
            </div>
        </div>

        <!-- jQuery -->
        <script src="../plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
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

		<script src="../assets/js/psicologia.js"></script>
    </body>


