<?php  
 if(!isset($_GET['id'])){
    header("Location: index.php");
  }else{
    $idPaciente = $_GET['id'];
  }
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Historial</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
        
        <!-- Tempusdominus Bbootstrap 4 -->
        <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
        <!-- iCheck -->
        <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
        <!-- JQVMap -->
        <link rel="stylesheet" href="../plugins/jqvmap/jqvmap.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="../dist/css/adminlte.min.css">
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
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Proceso Psicologico
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" data-toggle="modal"  href="#exampleModal" data-target="">CUADRO DE VALORACION (CASIC)</a> <!--para el formulario casic-->
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item"  data-toggle="modal" href="#exampleModalDepresion">LA ESCALA DE DEPRESION DE BECK</a>
                    <a class="dropdown-item" data-toggle="modal" href="#exampleModalDesesperanza">LA ESCALA DE DESESPERANZA DE BECK</a>
                    <a class="dropdown-item" data-toggle="modal" href="#exampleModalAnsiedad">ESCALA DE ANSIEDAD DE HAMILTON</a>
                  </div>
                </li>
              </ul>
              <form class="form-inline my-2 my-lg-0">
                <button class="btn btn-light my-2 my-sm-0" type="button" data-toggle="modal" onclick='loadPaciente(<?php echo $idPaciente ?>)'>Paciente</button>
              </form>
            </div>
          </nav>
    </div>


    <!--MOdal del formulario casic-->
    <!-- contiene el nombre del modar y los detalles del mismo escencial para que el modal funcione  -->
   <div class="modal fade modal-lg-centered" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
   aria-hidden="true" data-target="modal-lg">
     <!-- inicio del modal especificando clase-->
  <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
       <div class="modal-content">
           <div class="modal-header">
                <!-- Titulo o encabezado del modal se ubica en la parte superior del modal -->
                <h5 class="modal-title" id="exampleModalLabel">CUADRO DE VALORACION (CASIC)</h5>
                <!-- junto al header se ubica un boton tipo close con un a x ya viene por defecto y es escencial para cerrar el modal  -->
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
               </button>
           </div>
             <!-- comienzo del cuerpo del modal puede incluir diferentes etiquetas html -->
          <div class="modal-body">
              <!-- comienzo de un diseño tipo formulario para gestion de Datos -->
              <form>
                   <!-- Contenedor para el primer grupo de objetos -->
                   <div class="form-group">
                    <!--label de la mano con el input type text unido por un contenedor div   -->
                    <label for="message-text" class="col-form-label"> <strong>Cognitivo:</strong></label>
                      <!-- etiqueta Text tarea como una entrada de datos de mayor tamaño especial para amplearse 
                         segun la informacion que se encuentre dentro  -->
                         <textarea class="form-control" id="message-text"></textarea>
                 </div>

                   <div class="form-group">
                    <!--label de la mano con el input type text unido por un contenedor div   -->
                    <label for="message-text" class="col-form-label"> <strong>Afectivo:</strong> </label>
                      <!-- etiqueta Text tarea como una entrada de datos de mayor tamaño especial para amplearse 
                         segun la informacion que se encuentre dentro  -->
                         <textarea class="form-control" id="message-text"></textarea>
                   </div>


                   <div class="form-group">
                    <!--label de la mano con el input type text unido por un contenedor div   -->
                    <label for="message-text" class="col-form-label"> <strong> Somatico:</strong></label>
                      <!-- etiqueta Text tarea como una entrada de datos de mayor tamaño especial para amplearse 
                         segun la informacion que se encuentre dentro  -->
                         <textarea class="form-control" id="message-text"></textarea>
                   </div>


                  <!-- Contenedor para el segundo grupo de objetos -->
                <div class="form-group">
                      <!--label de la mano con el input type text unido por un contenedor div   -->
                      <label for="message-text" class="col-form-label"> <strong>Interpersonal:</strong> </label>
                        <!-- etiqueta Text tarea como una entrada de datos de mayor tamaño especial para amplearse 
                           segun la informacion que se encuentre dentro  -->
                           <textarea class="form-control" id="message-text"></textarea>
                   </div>

                <div class="form-group">
                    <!--label de la mano con el input type text unido por un contenedor div   -->
                    <label for="message-text" class="col-form-label"> <strong>Conductual:</strong> </label>
                      <!-- etiqueta Text tarea como una entrada de datos de mayor tamaño especial para amplearse 
                         segun la informacion que se encuentre dentro  -->
                         <textarea class="form-control" id="message-text"></textarea>
                 </div>  
                 
                 <div class="form-group">
                    <!--label de la mano con el input type text unido por un contenedor div   -->
                    <label for="message-text" class="col-form-label"> <strong> Acciones a Desarrollar:</strong></label>
                      <!-- etiqueta Text tarea como una entrada de datos de mayor tamaño especial para amplearse 
                         segun la informacion que se encuentre dentro  -->
                         <textarea class="form-control pb-5" id="message-text"></textarea>
                 </div> 
               </form>
           </div>
           <!-- inicio de el pie del modal perfecto para botones como agregar salir enviar etc -->
           <div class="modal-footer">
               <!-- Boton de tipo Button tambien existen tipo Submit, uno recarga la pagina y el otro se limita a no reiniciar la pagina -->
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
               <!-- Boton de tipo Button tambien existen tipo Submit, uno recarga la pagina y el otro se limita a no reiniciar la pagina -->
               <button type="button" class="btn btn-primary">Guardar Prueba</button>
           </div>
       </div>
   </div>
</div> <!--MOdal del formulario casic-->



 <!--MOdal del formulario escala de desesperanza de beck-->
    <!-- contiene el nombre del modar y los detalles del mismo escencial para que el modal funcione  -->
    <div class="modal fade modal-lg-centered" id="exampleModalDepresion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true" data-target="modal-lg">
      <!-- inicio del modal especificando clase-->
   <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                 <!-- Titulo o encabezado del modal se ubica en la parte superior del modal -->
                 <h5 class="modal-title" id="exampleModalLabel">Escala de depresion de beck</h5>
                 <!-- junto al header se ubica un boton tipo close con un a x ya viene por defecto y es escencial para cerrar el modal  -->
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
              <!-- comienzo del cuerpo del modal puede incluir diferentes etiquetas html -->
           <div class="modal-body">
               <!-- comienzo de un diseño tipo formulario para gestion de Datos -->
               <form>
                    <!-- Contenedor para el primer grupo de objetos -->
                    <div class="form-group">
                     <!--label de la mano con el input type text unido por un contenedor div   -->
                     <label for="nombre">Nombre: <input type="text" name="nombre" placeholder="Nombre" size="30"></label>&nbsp;
                  </div>
            
                    <div class="form-group">
                     <!--label de la mano con el input type text unido por un contenedor div   -->
                     <p>Fecha : &nbsp;&nbsp; <input type="date" name="fecha"></p>
                    </div>
                    <!--Parrafo   -->
                    <div class="form-group">
                        <!--label de la mano con el input type text unido por un contenedor div   -->
                        <p><br>
                            <h2 align = "center" >Custionario</h2><br> <!--sub titulo-->
                           <strong>Instrucciones:</strong>  Este cuestionario consta de 21 grupos de afirmaciones. Por favor, lea con atención cada uno de ellos cuidadosamente. Luego elija uno de cada grupo, el que mejor describa el modo como se ha sentido <strong> las últimas dos semanas, incluyendo el día de hoy.</strong> Marque con un círculo el número correspondiente al enunciado elegido Si varios enunciados de un mismo grupo le parecen igualmente apropiados, marque el número más alto. Verifique que no haya elegido más de uno por grupo, incluyendo el ítem 16 (cambios en los hábitos de Sueño) y el ítem 18 (cambios en el apetito)   
                        </p>
                       </div>
 
 
                   <!-- Contenedor para el segundo grupo de objetos, osea preguntas con los texbox -->
                 <div class="form-group"><br>
                       <!--label de la mano con el input type text unido por un contenedor div   -->
                       <label for="sexo"><strong>1. Tristeza :</strong> <br> <select name="menu">
                        <option value="1" selected> No me siento triste </option>
                        <option value="2"> Me siento triste gran parte del tiempo </option>
                        <option value="2"> Me siento triste todo el tiempo </option>
                        <option value="3" > Me siento tan triste o soy tan infeliz que no puedo soportarlo </option>
                      </select></label>
                    </div>
 
                <div class="form-group"><br>
                        <!--label de la mano con el input type text unido por un contenedor div   -->
                        <label for="sexo"><strong>2. Pesimismo :</strong> <br><select name="menu">
                        <option value="1" selected>  No estoy desalentado respecto del mi futuro. </option>
                        <option value="2">  Me siento más desalentado respecto de mi futuro que lo que solía estarlo </option>
                        <option value="3"> No espero que las cosas funcionen para mi. </option>
                        <option value="4" > Siento que no hay esperanza para mi futuro y que sólo puede empeorar. </option>
                      </select></label>
                    </div> 
                    
                    <div class="form-group"><br>
                        <!--label de la mano con el input type text unido por un contenedor div &nbsp;  -->
                        <label for="sexo"><strong>3. Fracaso :</strong> <br><select name="menu">
                        <option value="1" selected> No me siento como un fracasado. </option>
                        <option value="2"> He fracasado más de lo que hubiera debido. </option>
                        <option value="3"> Cuando miro hacia atrás, veo muchos fracasos. </option>
                        <option value="4" > Siento que como persona soy un fracaso total </option>
                      </select></label>
                    </div>
                    
                    <div class="form-group"><br>
                        <!--label de la mano con el input type text unido por un contenedor div   -->
                        <label for="sexo"><strong>4. Pérdida de Place :</strong> <br><select name="menu">
                        <option value="1" selected> Obtengo tanto placer como siempre por las cosas de las que disfruto. </option>
                        <option value="2"> No disfruto tanto de las cosas como solía hacerlo. </option>
                        <option value="3"> Obtengo muy poco placer de las cosas que solía disfrutar. </option>
                        <option value="4"> No puedo obtener ningún placer de las cosas de las que solía disfrutar. </option>
                      </select></label>
                    </div>

                    <div class="form-group"><br>
                        <!--label de la mano con el input type text unido por un contenedor div   -->
                        <label for="sexo"><strong>5. Sentimientos de Culpa :</strong><br><select name="menu">
                        <option value="1" selected> No me siento particularmente culpable.</option>
                        <option value="2">Me siento culpable respecto de varias cosas que he hecho
                        o tuve que hacer
                        </option>
                        <option value="3"> Me siento bastante culpable la mayor parte del tiempo.</option>
                        <option value="4" >Me siento culpable todo el tiempo </option>
                      </select></label>
                    </div>

                    <div class="form-group"><br>
                        <!--label de la mano con el input type text unido por un contenedor div   -->
                        <label for="sexo"><strong>6. Sentimientos de Castigo </strong><br><select name="menu">
                        <option value="1" selected>No siento que este siendo castigado</option>
                        <option value="2"> Siento que tal vez pueda ser castigado.</option>
                        <option value="3"> Espero ser castigado.</option>
                        <option value="4" > Siento que estoy siendo castigado.</option>
                      </select></label>
                    </div>

                    <div class="form-group"><br>
                        <!--label de la mano con el input type text unido por un contenedor div   -->
                        <label for="sexo"><strong>7. Disconformidad con uno mismo.</strong><br><select name="menu">
                        <option value="1" selected>Siento acerca de mi lo mismo que siempre.</option>
                        <option value="2">He perdido la confianza en mí mismo.</option>
                        <option value="3">Estoy decepcionado conmigo mismo.</option>
                        <option value="4" >No me gusto a mí mismo.</option>
                      </select></label>
                    </div>

                    <div class="form-group"><br>
                        <!--label de la mano con el input type text unido por un contenedor div   -->
                        <label for="sexo"><strong>8. Autocrític</strong><br><select name="menu">
                        <option value="1" selected> No me critico ni me culpo más de lo habitual </option>
                        <option value="2"> Estoy más crítico conmigo mismo de lo que solía estarlo </option>
                        <option value="3"> Me critico a mí mismo por todos mis errores </option>
                        <option value="4" > Me culpo a mí mismo por todo lo malo que sucede.</option>
                      </select></label>
                    </div>

                    <div class="form-group"><br>
                        <!--label de la mano con el input type text unido por un contenedor div   -->
                        <label for="sexo"><strong>9. Pensamientos o Deseos Suicidas</strong><br><select name="menu">
                        <option value="1" selected> No tengo ningún pensamiento de matarme.</option>
                        <option value="2">He tenido pensamientos de matarme, pero no lo haría</option>
                        <option value="3"> Querría matarme </option>
                        <option value="4">Me mataría si tuviera la oportunidad de hacerlo.</option>
                      </select></label>
                    </div>

                    <div class="form-group"><br>
                        <!--label de la mano con el input type text unido por un contenedor div   -->
                        <label for="sexo"><strong>10. Llanto</strong><br><select name="menu">
                        <option value="1" selected>No lloro más de lo que solía hacerlo.</option>
                        <option value="2">Lloro más de lo que solía hacerlo</option>
                        <option value="3">Lloro por cualquier pequeñez</option>
                        <option value="4">Siento ganas de llorar pero no puedo.</option>
                      </select></label>
                    </div>

                    <div class="form-group"><br>
                        <!--label de la mano con el input type text unido por un contenedor div   -->
                        <label for="sexo"><strong>11. Agitación</strong><br><select name="menu">
                        <option value="1" selected>No estoy más inquieto o tenso que lo habitual.</option>
                        <option value="2">Me siento más inquieto o tenso que  lo habitual.</option>
                        <option value="3">Estoy tan inquieto o agitado que me es difícil quedarme quieto</option>
                        <option value="4"> Estoy tan inquieto o agitado que tengo que estar siempre en movimiento o haciendo algo.</option>
                      </select></label>
                    </div>

                    <div class="form-group"><br>
                        <!--label de la mano con el input type text unido por un contenedor div   -->
                        <label for="sexo"><strong>12. Pérdida de Interés</strong><br><select name="menu">
                        <option value="1" selected>No he perdido el interés en otras actividades o personas.</option>
                        <option value="2">Estoy menos interesado que antes en otras personas o cosas</option>
                        <option value="3">He perdido casi todo el interés en otras personas o cosas.</option>
                        <option value="4">.Me es difícil interesarme por algo</option>
                      </select></label>
                    </div>

                    <div class="form-group"><br>
                        <!--label de la mano con el input type text unido por un contenedor div   -->
                        <label for="sexo"><strong>13. Indecisión</strong><br><select name="menu">
                        <option value="1" selected>Tomo mis propias decisiones tan bien como siempre.</option>
                        <option value="2">Me resulta más difícil que de costumbre tomar decisiones</option>
                        <option value="3">Encuentro mucha más dificultad que antes para tomar decisiones</option>
                        <option value="4"> Tengo problemas para tomar cualquier decisión.</option>
                      </select></label>
                    </div>
                  
                    <div class="form-group"><br>
                        <!--label de la mano con el input type text unido por un contenedor div   -->
                        <label for="sexo"><strong>14. Desvalorización</strong><br><select name="menu">
                        <option value="1" selected>No siento que yo no sea valioso </option>
                        <option value="2">No me considero a mi mismo tan valioso y útil como solía considerarme</option>
                        <option value="3"> Me siento menos valioso cuando me comparo con otros</option>
                        <option value="4">Siento que no valgo nada.</option>
                      </select></label>
                    </div>

                    <div class="form-group"><br>
                        <!--label de la mano con el input type text unido por un contenedor div   -->
                        <label for="sexo"><strong>15. Pérdida de Energía</strong><br><select name="menu">
                        <option value="1" selected>Tengo tanta energía como siempre</option>
                        <option value="2"> Tengo menos energía que la que solía tener.</option>
                        <option value="3"> No tengo suficiente energía para hacer demasiado </option>
                        <option value="4"> No tengo energía suficiente para hacer nada</option>
                      </select></label>
                    </div>

                    <div class="form-group"><br>
                        <!--label de la mano con el input type text unido por un contenedor div   -->
                        <label for="sexo"><strong>16. Cambios en los Hábitos de Sueño </strong><br><select name="menu">
                        <option value="1" selected>No he experimentado ningún cambio en mis hábitos de sueño.</option>
                        <option value="2"> Duermo un poco más que lo habitual.</option>
                        <option value="3">Duermo un poco menos que lo habitual.</option>
                        <option value="4"> Duermo mucho más que lo habitual.</option>
                        <option value="4"> Duermo mucho menos que lo habitual </option>
                        <option value="4"> Duermo mucho más que lo habitual.</option>
                        <option value="4">  Me despierto  1-2 horas más temprano y no puedo volver a dormirme </option>
                      </select></label>
                    </div>

                    <div class="form-group"><br>
                        <!--label de la mano con el input type text unido por un contenedor div   -->
                        <label for="sexo"><strong>17. Irritabilidad</strong><br><select name="menu">
                        <option value="1" selected>No estoy tan irritable que lo habitual.</option>
                        <option value="2">Estoy más irritable que lo habitual.</option>
                        <option value="3">Estoy mucho más irritable que lo habitual.</option>
                        <option value="4">Estoy irritable todo el tiempo.</option>
                      </select></label>
                    </div>

                    <div class="form-group"><br>
                        <!--label de la mano con el input type text unido por un contenedor div   -->
                        <label for="sexo"><strong>No he experimentado ningún cambio en mi apetito. </strong><br><select name="menu">
                        <option value="1" selected>Mi apetito es un poco menor que lo habitual.</option>
                        <option value="2">  Mi apetito es un poco mayor que lo habitual.</option>
                        <option value="3"> Mi apetito es mucho menor que antes.</option>
                        <option value="4"> Mi apetito es mucho mayor que lo habitual</option>
                        <option value="4">No tengo apetito en absoluto.</option>
                        <option value="4"> Duermo mucho más que lo habitual.</option>
                        <option value="4">Quiero comer todo el día.</option>
                      </select></label>
                    </div>

                    <div class="form-group"><br>
                        <!--label de la mano con el input type text unido por un contenedor div   -->
                        <label for="sexo"><strong>19. Dificultad de Concentración</strong><br><select name="menu">
                        <option value="1" selected> Puedo concentrarme tan bien como siempre.</option>
                        <option value="2">No puedo concentrarme tan bien como habitualmente</option>
                        <option value="3">Me es difícil mantener la mente en algo por mucho tiempo.</option>
                        <option value="4">Encuentro que no puedo concentrarme en nada</option>
                      </select></label>
                    </div>

                    <div class="form-group"><br>
                        <!--label de la mano con el input type text unido por un contenedor div   -->
                        <label for="sexo"><strong>20. Cansancio o Fatiga</strong><br><select name="menu">
                        <option value="1" selected>No estoy más cansado o fatigado que lo habitual.</option>
                        <option value="2">Me fatigo o me canso más fácilmente que lo habitual. </option>
                        <option value="3">Estoy demasiado fatigado o cansado para hacer muchas de las cosas que solía hacer</option>
                        <option value="4">Estoy  demasiado fatigado o cansado para hacer la mayoría de las cosas que solía hacer.</option>
                      </select></label>
                    </div>

                    <div class="form-group"><br>
                        <!--label de la mano con el input type text unido por un contenedor div   -->
                        <label for="sexo"><strong>21. Pérdida de Interés en el Sexo</strong><br><select name="menu">
                        <option value="1" selected>No he notado ningún cambio reciente en mi interés por el sexo.</option>
                        <option value="2">Estoy menos interesado en el sexo de lo que solía estarlo</option>
                        <option value="3">Estoy mucho menos interesado en el sexo.</option>
                        <option value="4">He perdido completamente el interés en el sexo</option>
                      </select></label>
                    </div>

                  <div class="form-group">
                     <!--label de la mano con el input type text unido por un contenedor div   -->
                     <label for="message-text" class="col-form-label"> <strong>Comentario:</strong></label>
                       <!-- etiqueta Text tarea como una entrada de datos de mayor tamaño especial para amplearse 
                          segun la informacion que se encuentre dentro  -->
                          <textarea class="form-control pb-5" id="message-text"></textarea>
                  </div> 
                </form>
            </div>
            <!-- inicio de el pie del modal perfecto para botones como agregar salir enviar etc -->
            <div class="modal-footer">
                <!-- Boton de tipo Button tambien existen tipo Submit, uno recarga la pagina y el otro se limita a no reiniciar la pagina -->
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <!-- Boton de tipo Button tambien existen tipo Submit, uno recarga la pagina y el otro se limita a no reiniciar la pagina -->
                <button type="button" class="btn btn-primary">Guardar Prueba</button>
            </div>
        </div>
    </div>
 </div>

 <div class="modal fade modal-lg-centered" id="exampleModalDesesperanza" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true" data-target="modal-lg">
      <!-- inicio del modal especificando clase-->
   <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                 <!-- Titulo o encabezado del modal se ubica en la parte superior del modal -->
                 <h5 class="modal-title" id="exampleModalLabel"> <strong></strong> Escala de desesperanza de beck</h5>
                 <!-- junto al header se ubica un boton tipo close con un a x ya viene por defecto y es escencial para cerrar el modal  -->
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
              <!-- comienzo del cuerpo del modal puede incluir diferentes etiquetas html -->
           <div class="modal-body">
               <!-- comienzo de un diseño tipo formulario para gestion de Datos -->
               <form>
                     <!-- Contenedor para el primer grupo de objetos -->
                     <div class="form-group">
                        <!--label de la mano con el input type text unido por un contenedor div   -->
                        <label for="nombre">Nombre: <input type="text" name="nombre" placeholder="Nombre" size="30"></label>&nbsp;
                     </div>
               
                       <div class="form-group">
                        <!--label de la mano con el input type text unido por un contenedor div   -->
                        <p>Fecha : &nbsp;&nbsp; <input type="date" name="fecha"></p>
                       </div>
                       <!--Parrafo   -->
                       <div class="form-group">
                           <!--label de la mano con el input type text unido por un contenedor div   -->
                           <p><br>
                               <h2 align = "center" >Custionario</h2><br> <!--sub titulo-->
                               <strong>INSTRUCCIONES PARA EL PACIENTE:</strong> Por favor, señale si las siguientes afirmaciones se ajustan o no a su situación personal. Las opciones de respuestas son verdadero o falso.   
                           </p>
                          </div>

                   <!-- Contenedor para el segundo grupo de objetos -->
                 <div class="form-group">
                       <!--label de la mano con el input type text unido y los radio button   -->
                       <label for="message-text" class="col-form-label"> <strong> 1. Espero el futuro con esperanza y entusiasmo</strong></label>
                       <p>
                        <input type="radio" name="p1" value="1"> Verdadero
                        <input type="radio" name="p1" value="2"> Falso
                      </p>
                    </div>
 
                 <div class="form-group">
                     <!--label de la mano con el input type text unido y los radio button   -->
                     <label for="message-text" class="col-form-label"> <strong> 2. Puedo darme por vencido, renunciar, ya que no puedo hacer mejor las cosas por mí mismo</strong></label>
                     <p>
                      <input type="radio" name="p1" value="1"> Verdadero
                      <input type="radio" name="p1" value="2"> Falso
                    </p>
                  </div>
                  
                  <div class="form-group">
                    <!--label de la mano con el input type text unido y los radio button   -->
                    <label for="message-text" class="col-form-label"> <strong>3. Cuando las cosas van mal me alivia saber que las cosas no pueden permanecer tiempo así</strong> </label>
                    <p>
                     <input type="radio" name="p1" value="1"> Verdadero
                     <input type="radio" name="p1" value="2"> Falso
                   </p>
                 </div>

                 <div class="form-group">
                    <!--label de la mano con el input type text unido y los radio button   -->
                    <label for="message-text" class="col-form-label"> <strong> 3. Cuando las cosas van mal me alivia saber que las cosas no pueden permanecer tiempo así</strong></label>
                    <p>
                     <input type="radio" name="p1" value="1"> Verdadero
                     <input type="radio" name="p1" value="2"> Falso
                   </p>
                 </div>

                 <div class="form-group">
                    <!--label de la mano con el input type text unido y los radio button   -->
                    <label for="message-text" class="col-form-label"> <strong>4. No puedo imaginar como será mi vida dentro de 10 años</strong></label>
                    <p>
                     <input type="radio" name="p1" value="1"> Verdadero
                     <input type="radio" name="p1" value="2"> Falso
                   </p>
                 </div>

                 <div class="form-group">
                    <!--label de la mano con el input type text unido y los radio button   -->
                    <label for="message-text" class="col-form-label"> <strong>5. Tengo bastante tiempo para llevar a cabo las cosas que quisiera poder hacer</strong> </label>
                    <p>
                     <input type="radio" name="p1" value="1"> Verdadero
                     <input type="radio" name="p1" value="2"> Falso
                   </p>
                 </div>

                 <div class="form-group">
                    <!--label de la mano con el input type text unido y los radio button   -->
                    <label for="message-text" class="col-form-label"> <strong>6. En el futuro, espero conseguir lo que me pueda interesar</strong></label>
                    <p>
                     <input type="radio" name="p1" value="1"> Verdadero
                     <input type="radio" name="p1" value="2"> Falso
                   </p>
                 </div>

                 <div class="form-group">
                    <!--label de la mano con el input type text unido y los radio button   -->
                    <label for="message-text" class="col-form-label"> <strong>7. Mi futuro me parece oscuro</strong></label>
                    <p>
                     <input type="radio" name="p1" value="1"> Verdadero
                     <input type="radio" name="p1" value="2"> Falso
                   </p>
                 </div>

                 <div class="form-group">
                    <!--label de la mano con el input type text unido y los radio button   -->
                    <label for="message-text" class="col-form-label"> <strong>8. Espero más cosas buenas de la vida que lo que la gente suele conseguir por término medio</strong></label>
                    <p>
                     <input type="radio" name="p1" value="1"> Verdadero
                     <input type="radio" name="p1" value="2"> Falso
                   </p>
                 </div>

                 <div class="form-group">
                    <!--label de la mano con el input type text unido y los radio button   -->
                    <label for="message-text" class="col-form-label"> <strong>9. No logro hacer que las cosas cambien, y no existen razones para creer que pueda en el futuro</strong></label>
                    <p>
                     <input type="radio" name="p1" value="1"> Verdadero
                     <input type="radio" name="p1" value="2"> Falso
                   </p>
                 </div>

                 <div class="form-group">
                    <!--label de la mano con el input type text unido y los radio button   -->
                    <label for="message-text" class="col-form-label"> <strong> 10. Mis pasadas experiencias me han preparado bien para mi futuro</strong></label>
                    <p>
                     <input type="radio" name="p1" value="1"> Verdadero
                     <input type="radio" name="p1" value="2"> Falso
                   </p>
                 </div>

                 <div class="form-group">
                    <!--label de la mano con el input type text unido y los radio button   -->
                    <label for="message-text" class="col-form-label"> <strong>11. Todo lo que puedo ver por delante de mí es más desagradable que agradable</strong></label>
                    <p>
                     <input type="radio" name="p1" value="1"> Verdadero
                     <input type="radio" name="p1" value="2"> Falso
                   </p>
                 </div>

                 <div class="form-group">
                    <!--label de la mano con el input type text unido y los radio button   -->
                    <label for="message-text" class="col-form-label"> <strong>12. No espero conseguir lo que realmente dese</strong>o</label>
                    <p>
                     <input type="radio" name="p1" value="1"> Verdadero
                     <input type="radio" name="p1" value="2"> Falso
                   </p>
                 </div>

                 <div class="form-group">
                    <!--label de la mano con el input type text unido y los radio button   -->
                    <label for="message-text" class="col-form-label"> <strong>13. Cuando miro hacia el futuro, espero que seré más feliz de lo que soy ahora</strong></label>
                    <p>
                     <input type="radio" name="p1" value="1"> Verdadero
                     <input type="radio" name="p1" value="2"> Falso
                   </p>
                 </div>

                 <div class="form-group">
                    <!--label de la mano con el input type text unido y los radio button   -->
                    <label for="message-text" class="col-form-label"> <strong>14. Las cosas no marchan como yo quisiera</strong></label>
                    <p>
                     <input type="radio" name="p1" value="1"> Verdadero
                     <input type="radio" name="p1" value="2"> Falso
                   </p>
                 </div>

                 <div class="form-group">
                    <!--label de la mano con el input type text unido y los radio button   -->
                    <label for="message-text" class="col-form-label"> <strong>15. Tengo una gran confianza en el futuro</strong></label>
                    <p>
                     <input type="radio" name="p1" value="1"> Verdadero
                     <input type="radio" name="p1" value="2"> Falso
                   </p>
                 </div>

                 <div class="form-group">
                    <!--label de la mano con el input type text unido y los radio button   -->
                    <label for="message-text" class="col-form-label"> <strong>16. Nunca consigo lo que deseo, por lo que es absurdo desear cualquier cosa</strong></label>
                    <p>
                     <input type="radio" name="p1" value="1"> Verdadero
                     <input type="radio" name="p1" value="2"> Falso
                   </p>
                 </div>

                 <div class="form-group">
                    <!--label de la mano con el input type text unido y los radio button   -->
                    <label for="message-text" class="col-form-label"> <strong>17. Es muy improbable que pueda lograr una satisfacción  real en el futuro</strong></label>
                    <p>
                     <input type="radio" name="p1" value="1"> Verdadero
                     <input type="radio" name="p1" value="2"> Falso
                   </p>
                 </div>

                 <div class="form-group">
                    <!--label de la mano con el input type text unido y los radio button   -->
                    <label for="message-text" class="col-form-label"> <strong>18. El futuro me parece vago e incierto</strong></label>
                    <p>
                     <input type="radio" name="p1" value="1"> Verdadero
                     <input type="radio" name="p1" value="2"> Falso
                   </p>
                 </div>

                 <div class="form-group">
                    <!--label de la mano con el input type text unido y los radio button   -->
                    <label for="message-text" class="col-form-label"> <strong>19. Espero más bien épocas buenas que malas.</strong></label>
                    <p>
                     <input type="radio" name="p1" value="1"> Verdadero
                     <input type="radio" name="p1" value="2"> Falso
                   </p>
                 </div>

                 <div class="form-group">
                    <!--label de la mano con el input type text unido y los radio button   -->
                    <label for="message-text" class="col-form-label"> <strong>20. No merece la pena que intente conseguir algo que desee, porque probablemente no lo lograré</strong> </label>
                    <p>
                     <input type="radio" name="p1" value="1"> Verdadero
                     <input type="radio" name="p1" value="2"> Falso
                   </p>
                 </div>
                  
                  <div class="form-group">
                     <!--label de la mano con el input type text unido por un contenedor div   -->
                     <label for="message-text" class="col-form-label"><strong>Comentario :</strong></label>
                       <!-- etiqueta Text tarea como una entrada de datos de mayor tamaño especial para amplearse 
                          segun la informacion que se encuentre dentro  -->
                          <textarea class="form-control pb-5" id="message-text"></textarea>
                  </div> 
                </form>
            </div>
            <!-- inicio de el pie del modal perfecto para botones como agregar salir enviar etc -->
            <div class="modal-footer">
                <!-- Boton de tipo Button tambien existen tipo Submit, uno recarga la pagina y el otro se limita a no reiniciar la pagina -->
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <!-- Boton de tipo Button tambien existen tipo Submit, uno recarga la pagina y el otro se limita a no reiniciar la pagina -->
                <button type="button" class="btn btn-primary">Guardar Prueba</button>
            </div>
        </div>
    </div>
 </div>

<?php  

include_once("psicologia/hamilttonModal.php");
include_once("psicologia/pacienteModal.php");

?>




    <!-- tabla -->
   

    <!-- footer -->
    <!--<footer class="bg-primary text-white mt-5 py-2">
        <div class="container text-center">
            <p>Dialisis de Honduras S.A.</p>
            <p>Historial Psicologia</p>
        </div>
        
    </footer>-->

<!--/.wrapper--><br />
<div class="footer span-12">
            <div class="container">
              <center> <b class="copyright"><a href="http://obedalvarado.pw/"> Sistemas Web</a> &copy; <?php echo date("Y")?> DataTables Bootstrap </b></center>
            </div>
        </div>
       <!-- jQuery -->
        <script src="../plugins/jquery/jquery.min.js"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
       
        <!-- Bootstrap 4 -->
        <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
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

        <script src="../plugins/datatables-personalizado/jquery.dataTables.js"></script>
        <script src="../plugins/datatables-personalizado/dataTables.bootstrap.js"></script>
		    <script src="../assets/js/historial-psicologia.js"></script>
    
</body>
</html>