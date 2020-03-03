<div class="modal fade modal-lg-centered" id="pacienteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true" data-target="modal-xl">
      <!-- inicio del modal especificando clase-->
   <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                 <!-- Titulo o encabezado del modal se ubica en la parte superior del modal -->
                 <h5 class="modal-title" id="">Paciente</h5>
                 <!-- junto al header se ubica un boton tipo close con un a x ya viene por defecto y es escencial para cerrar el modal  -->
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
              <!-- comienzo del cuerpo del modal puede incluir diferentes etiquetas html -->
           <div class="modal-body">
               <!-- comienzo de un diseño tipo formulario para gestion de Datos -->
               <form>
                   
                <div class="row">
                        <!-- Contenedor para el primer grupo de objetos -->
                    <div class="form-group col-3">
                        <!--label de la mano con el input type text unido por un contenedor div   -->
                        <label for="nombreCompleto" class="col-form-label">Nombre Completo:</label>
                        <!-- etiqueta Text tarea como una entrada de datos de mayor tamaño especial para amplearse 
                            segun la informacion que se encuentre dentro  -->
                            <input type="text" class="form-control" id="nombreCompleto" readonly> 
                    </div>
    
                        <div class="form-group col-3">
                        <!--label de la mano con el input type text unido por un contenedor div   -->
                        <label for="" class="col-form-label">Lugar de nacimiento:</label>
                        <!-- etiqueta Text tarea como una entrada de datos de mayor tamaño especial para amplearse 
                            segun la informacion que se encuentre dentro  -->
                            <input type="text" class="form-control" id="lugarNacimiento" readonly>
                    </div>

                     <div class="form-group col-3">
                            <!--label de la mano con el input type text unido por un contenedor div   -->
                            <label for="" class="col-form-label">Fecha de nacimiento:</label>
                            <!-- etiqueta Text tarea como una entrada de datos de mayor tamaño especial para amplearse 
                                segun la informacion que se encuentre dentro  -->
                                <input type="text" class="form-control" id="fechaNacimietno" readonly>
                        </div>
        
        
                        <!-- Contenedor para el segundo grupo de objetos -->
                        <div class="form-group col-3">
                            <!--label de la mano con el input type text unido por un contenedor div   -->
                            <label for="" class="col-form-label">Departamento:</label>
                                <!-- etiqueta Text tarea como una entrada de datos de mayor tamaño especial para amplearse 
                                    segun la informacion que se encuentre dentro  -->
                                    <input type="text" class="form-control" id="departamento" readonly>
                        </div>
    
                </div>
 
                    
                 <div class="row">
                    <div class="form-group col-3">
                        <!--label de la mano con el input type text unido por un contenedor div   -->
                        <label for="" class="col-form-label">Nacionalidad:</label>
                        <!-- etiqueta Text tarea como una entrada de datos de mayor tamaño especial para amplearse 
                            segun la informacion que se encuentre dentro  -->
                            <input type="text" class="form-control" id="nacionalidad" readonly>
                    </div>  

                    <div class="form-group col-3">
                        <!--label de la mano con el input type text unido por un contenedor div   -->
                        <label for="" class="col-form-label">Fecha de ingreso:</label>
                        <!-- etiqueta Text tarea como una entrada de datos de mayor tamaño especial para amplearse 
                            segun la informacion que se encuentre dentro  -->
                            <input type="text" class="form-control" id="fechaIngreso" readonly>
                    </div> 
                    <div class="form-group col-3">
                        <!--label de la mano con el input type text unido por un contenedor div   -->
                        <label for="" class="col-form-label">Clínica:</label>
                        <!-- etiqueta Text tarea como una entrada de datos de mayor tamaño especial para amplearse 
                            segun la informacion que se encuentre dentro  -->
                            <input type="text" class="form-control" id="clinica" readonly>
                    </div>  
                    

                    <div class="form-group col-3">
                        <!--label de la mano con el input type text unido por un contenedor div   -->
                        <label for="" class="col-form-label">Día y turno:</label>
                        <!-- etiqueta Text tarea como una entrada de datos de mayor tamaño especial para amplearse 
                            segun la informacion que se encuentre dentro  -->
                            <input type="text" class="form-control" id="diaTurno" readonly>
                    </div>  
                 
                 </div>
                  


                  <div class="row">
                    <div class="form-group col-3">
                        <!--label de la mano con el input type text unido por un contenedor div   -->
                        <label for="" class="col-form-label">Sexo:</label>
                        <!-- etiqueta Text tarea como una entrada de datos de mayor tamaño especial para amplearse 
                            segun la informacion que se encuentre dentro  -->
                            <input type="text" class="form-control" id="sexo" readonly>
                    </div>  
                    

                    <div class="form-group col-3">
                        <!--label de la mano con el input type text unido por un contenedor div   -->
                        <label for="" class="col-form-label">Edad:</label>
                        <!-- etiqueta Text tarea como una entrada de datos de mayor tamaño especial para amplearse 
                            segun la informacion que se encuentre dentro  -->
                            <input type="text" class="form-control" id="edad" readonly>
                    </div>  
                    <div class="form-group col-3">
                        <!--label de la mano con el input type text unido por un contenedor div   -->
                        <label for="" class="col-form-label">Expediente:</label>
                        <!-- etiqueta Text tarea como una entrada de datos de mayor tamaño especial para amplearse 
                            segun la informacion que se encuentre dentro  -->
                            <input type="text" class="form-control" id="expediente" readonly>
                    </div> 
                    <div class="form-group col-3">
                        <!--label de la mano con el input type text unido por un contenedor div   -->
                        <label for="" class="col-form-label">Edad Cronológica:</label>
                        <!-- etiqueta Text tarea como una entrada de datos de mayor tamaño especial para amplearse 
                            segun la informacion que se encuentre dentro  -->
                            <input type="number" class="form-control" id="edadCronologica">
                       </div>  
                  </div>

                  <div class="row">
                    <div class="form-group col-3">
                        <!--label de la mano con el input type text unido por un contenedor div   -->
                        <label for="" class="col-form-label">Religión:</label>
                        <!-- etiqueta Text tarea como una entrada de datos de mayor tamaño especial para amplearse 
                            segun la informacion que se encuentre dentro  -->
                            <select name="menu" class="form-control" id="religion">
                                <option value="1" selected>Ausente</option>
                                <option value="2">Leve</option>
                                <option value="3">Moderado</option>
                                <option value="4">Grave</option>
                                <option value="5">Muy Grave</option>
                            </select>
                    </div>  
                     <div class="form-group col-3">
                        <!--label de la mano con el input type text unido por un contenedor div   -->
                        <label for="" class="col-form-label">Estado Civil:</label>
                        <!-- etiqueta Text tarea como una entrada de datos de mayor tamaño especial para amplearse 
                            segun la informacion que se encuentre dentro  -->
                            <input type="text" class="form-control" id="estadoCivil">
                    </div>  
                    

                    <div class="form-group col-3">
                        <!--label de la mano con el input type text unido por un contenedor div   -->
                        <label for="" class="col-form-label">Teléfono:</label>
                        <!-- etiqueta Text tarea como una entrada de datos de mayor tamaño especial para amplearse 
                            segun la informacion que se encuentre dentro  -->
                            <input type="text" class="form-control" id="telefono">
                    </div>  
                    

                    <div class="form-group col-3">
                        <!--label de la mano con el input type text unido por un contenedor div   -->
                        <label for="" class="col-form-label">Ocupación Actual:</label>
                        <!-- etiqueta Text tarea como una entrada de datos de mayor tamaño especial para amplearse 
                            segun la informacion que se encuentre dentro  -->
                            <input type="text" class="form-control" id="ocupacionActual">
                    </div>  
                  </div>
                  

                  <div class="row">
                    <div class="form-group col-6">
                        <!--label de la mano con el input type text unido por un contenedor div   -->
                        <label for="" class="col-form-label">Dirección Actual:</label>
                        <!-- etiqueta Text tarea como una entrada de datos de mayor tamaño especial para amplearse 
                            segun la informacion que se encuentre dentro  -->
                            <input type="text" class="form-control" id="direccionActual">
                    </div>  

                    <div class="form-group col-6">
                        <!--label de la mano con el input type text unido por un contenedor div   -->
                        <label for="" class="col-form-label">Nivel Educativo:</label>
                        <!-- etiqueta Text tarea como una entrada de datos de mayor tamaño especial para amplearse 
                            segun la informacion que se encuentre dentro  -->
                            <input type="text" class="form-control" id="nivelEducativo">
                    </div>
                  </div>

                 <div class="row">
                    <div class="form-group col-6">
                        <!--label de la mano con el input type text unido por un contenedor div   -->
                        <label for="" class="col-form-label">Pasatiempos:</label>
                        <!-- etiqueta Text tarea como una entrada de datos de mayor tamaño especial para amplearse 
                            segun la informacion que se encuentre dentro  -->
                            <input type="text" class="form-control" id="pasatiempos">
                    </div>

                    <div class="form-group col-6">
                        <!--label de la mano con el input type text unido por un contenedor div   -->
                        <label for="" class="col-form-label">Deportes:</label>
                        <!-- etiqueta Text tarea como una entrada de datos de mayor tamaño especial para amplearse 
                            segun la informacion que se encuentre dentro  -->
                            <input type="text" class="form-control" id="deportes"> 
                    </div>
                 </div>

                  
                </form>
            </div>
            <!-- inicio de el pie del modal perfecto para botones como agregar salir enviar etc -->
            <div class="modal-footer">
                <!-- Boton de tipo Button tambien existen tipo Submit, uno recarga la pagina y el otro se limita a no reiniciar la pagina -->
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <!-- Boton de tipo Button tambien existen tipo Submit, uno recarga la pagina y el otro se limita a no reiniciar la pagina -->
                <button type="button" class="btn btn-primary" id="guardarEntrevista">Guardar Entrevista</button>
            </div>
        </div>
    </div>