 <!--MOdal del formulario escala de desesperanza de beck-->
 <div class="modal fade modal-lg-centered" id="exampleModalAnsiedad" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true" data-target="modal-lg">
      <!-- inicio del modal especificando clase-->
   <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                 <!-- Titulo o encabezado del modal se ubica en la parte superior del modal -->
                 <h5 class="modal-title" id="exampleModalLabel">Escala de ansiedad de hamilton</h5>
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
               
                       <div class="form-group col-4">
                           <label for="">Fecha: </label>
                            <div class="input-group date" id="fechaHoraHamiltton" data-target-input="nearest">
                                <input type="text" class="form-control datetimepicker-input" data-target="#fechaHoraHamiltton"/>
                                <div class="input-group-append" data-target="#fechaHoraHamiltton" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                            </div>
                       </div>
                       <!--Parrafo   -->
                       <div class="form-group">
                           <!--label de la mano con el input type text unido por un contenedor div   -->
                           <p><br>
                               <h2 align = "center" >Custionario</h2><br> <!--sub titulo-->
                                <strong>INSRUCCIONES:</strong> Encierre con un circulo el numero con la respuesta que más se identifique contestando de manera sincera.   
                           </p>
                          </div>

                   <!-- Contenedor para el segundo grupo de objetos -->
                 <div class="form-group col-12">
                       <!--label de la mano con el input type text unido y combobox   -->
                       <label for="message-text" class="col-form-label"> <strong>1. Estado de ánimo ansioso.</strong> </label>
                       <p>Preocupaciones, anticipación de lo peor, aprensión
                        (anticipación temerosa), irritabilidad</p>
                        <select name="menu" class="form-control">
                            <option value="1" selected>Ausente</option>
                            <option value="2">Leve</option>
                            <option value="3">Moderado</option>
                            <option value="4">Grave</option>
                            <option value="5">Muy Grave</option>
                          </select>
                    

                       
                    </div>
 
                 <div class="form-group col-12">
                     <!--label de la mano con el input type text unido y combobox   -->
                     <label for="message-text" class="col-form-label"> <strong>2. Tensión</strong> </label>
                        <p>Sensación de tensión, imposibilidad de relajarse, reacciones con sobresalto, llanto fácil, temblores, sensación de inquietud.</p>
                         <select name="menu" class="form-control">
                             <option value="1" selected>Ausente</option>
                             <option value="2">Leve</option>
                             <option value="3">Moderado</option>
                             <option value="4">Grave</option>
                             <option value="5">Muy Grave</option>
                           </select>
                        
                  </div>
                  
                  <div class="form-group col-12">
                     <!--label de la mano con el input type text unido y combobox   -->
                     <label for="message-text" class="col-form-label"> <strong>3. Temores</strong> </label>
                        <p>A la oscuridad, a los desconocidos, a quedarse solo, a los animales grandes, al tráfico, a las multitudes.</p>
                         <select name="menu" class="form-control">
                             <option value="1" selected>Ausente</option>
                             <option value="2">Leve</option>
                             <option value="3">Moderado</option>
                             <option value="4">Grave</option>
                             <option value="5">Muy Grave</option>
                           </select>
                 </div>

                 <div class="form-group col-12">
                        <!--label de la mano con el input type text unido y combobox   -->
                        <label for="message-text" class="col-form-label"> <strong>4. Insomnio</strong> </label> 
                           <p>Dificultad   para   dormirse,   sueño   interrumpido,   sueño insatisfactorio y cansancio al despertar.</p>
                            <select name="menu" class="form-control">
                                <option value="1" selected>Ausente</option>
                                <option value="2">Leve</option>
                                <option value="3">Moderado</option>
                                <option value="4">Grave</option>
                                <option value="5">Muy Grave</option>
                            </select>
                 </div>

                 <div class="form-group col-12">
                   <!--label de la mano con el input type text unido y combobox   -->
                   <label for="message-text" class="col-form-label"><strong>5.  Intelectual (cognitivo)</strong> </label>
                    <p>Dificultad para concentrarse, mala memoria.</p>
                     <select name="menu" class="form-control">
                         <option value="1" selected>Ausente</option>
                         <option value="2">Leve</option>
                         <option value="3">Moderado</option>
                         <option value="4">Grave</option>
                         <option value="5">Muy Grave</option>
                       </select>
                 </div>

                 <div class="form-group col-12">
                   <!--label de la mano con el input type text unido y combobox   -->
                   <label for="message-text" class="col-form-label"><strong>6. Estado de ánimo deprimido.</strong> </label>
                    <p>Pérdida de interés, insatisfacción en las diversiones, depresión, despertar prematuro, cambios de humor durante el día.</p>
                     <select name="menu" class="form-control">
                         <option value="1" selected>Ausente</option>
                         <option value="2">Leve</option>
                         <option value="3">Moderado</option>
                         <option value="4">Grave</option>
                         <option value="5">Muy Grave</option>
                       </select>
                 </div>

                 <div class="form-group col-12">
                    <!--label de la mano con el input type text unido y combobox   -->
                   <label for="message-text" class="col-form-label"><strong>7. Síntomas somáticos generales (musculares)</strong> </label>
                    <p>Dolores   y molestias musculares, rigidez muscular, contracciones musculares, sacudidas clónicas, crujir de dientes, voz temblorosa.</p>
                     <select name="menu" class="form-control">
                         <option value="1" selected>Ausente</option>
                         <option value="2">Leve</option>
                         <option value="3">Moderado</option>
                         <option value="4">Grave</option>
                         <option value="5">Muy Grave</option>
                       </select>
                 </div>

                 <div class="form-group col-12">
                    <!--label de la mano con el input type text unido y combobox   -->
                   <label for="message-text" class="col-form-label"><strong>8. Síntomas somáticos generales (sensoriales)</strong> </label>
                    <p>Zumbidos de oídos, visión borrosa, sofocos y escalofríos, sensación de debilidad, sensación de hormigueo.</p>
                     <select name="menu" class="form-control">
                         <option value="1" selected>Ausente</option>
                         <option value="2">Leve</option>
                         <option value="3">Moderado</option>
                         <option value="4">Grave</option>
                         <option value="5">Muy Grave</option>
                       </select>
                 </div>

                 <div class="form-group col-12">
                     <!--label de la mano con el input type text unido y combobox   -->
                   <label for="message-text" class="col-form-label"><strong>9. Síntomas cardiovasculares.</strong> </label>
                    <p>Taquicardia,  palpitaciones,  dolor  en  el  pecho,  latidos vasculares, sensación de desmayo, extrasístole.</p>
                     <select name="menu" class="form-control">
                         <option value="1" selected>Ausente</option>
                         <option value="2">Leve</option>
                         <option value="3">Moderado</option>
                         <option value="4">Grave</option>
                         <option value="5">Muy Grave</option>
                       </select>
                 </div>

                 <div class="form-group col-12">
                    <!--label de la mano con el input type text unido y combobox   -->
                    <label for="message-text" class="col-form-label"><strong>10. Síntomas respiratorios.</strong> </label>
                        <p>Opresión o constricción en el pecho, sensación de ahogo, suspiros, disnea</p>
                         <select name="menu" class="form-control">
                             <option value="1" selected>Ausente</option>
                             <option value="2">Leve</option>
                             <option value="3">Moderado</option>
                             <option value="4">Grave</option>
                             <option value="5">Muy Grave</option>
                        </select>
                 </div>

                 <div class="form-group col-12">
                     <!--label de la mano con el input type text unido y combobox   -->
                     <label for="message-text" class="col-form-label"><strong>11. Síntomas gastrointestinales.</strong> </label>
                        <p>Dificultad  para  tragar,  gases,  dispepsia:  dolor  antes  y después  de  comer,  sensación  de  ardor,  sensación  de
                        estómago lleno, vómitos acuosos, vómitos, sensación de
                        Estómago  vacío,  digestión  lenta,  borborigmos  (ruido intestinal), diarrea, pérdida de peso, estreñimiento.</p>
                         <select name="menu" class="form-control">
                             <option value="1" selected>Ausente</option>
                             <option value="2">Leve</option>
                             <option value="3">Moderado</option>
                             <option value="4">Grave</option>
                             <option value="5">Muy Grave</option>
                           </select>
                 </div>

                 <div class="form-group col-12">
                    <!--label de la mano con el input type text unido y combobox   -->
                    <label for="message-text" class="col-form-label"><strong>12. Síntomas genitourinarios.</strong> </label>
                        <p>Micción frecuente, micción urgente, amenorrea, menorragia, aparición de la frigidez, eyaculación precoz, ausencia de erección, impotencia.</p>
                         <select name="menu" class="form-control">
                             <option value="1" selected>Ausente</option>
                             <option value="2">Leve</option>
                             <option value="3">Moderado</option>
                             <option value="4">Grave</option>
                             <option value="5">Muy Grave</option>
                        </select>
                 </div>

                 <div class="form-group col-12">
                     <!--label de la mano con el input type text unido y combobox   -->
                     <label for="message-text" class="col-form-label"><strong>13. Síntomas autónomos.</strong> </label>
                        <p>Boca seca, rubor, palidez, tendencia a sudar, vértigos, cefaleas de tensión, piloerección (pelos de punta)</p>
                         <select name="menu" class="form-control">
                             <option value="1" selected>Ausente</option>
                             <option value="2">Leve</option>
                             <option value="3">Moderado</option>
                             <option value="4">Grave</option>
                             <option value="5">Muy Grave</option>
                        </select>
                 </div>

                 <div class="form-group col-12">
                   <!--label de la mano con el input type text unido y combobox   -->
                   <label for="message-text" class="col-form-label"><strong>14. Comportamiento en la entrevista (general y fisiológico)</strong> </label>
                    <p>Tenso,  no  relajado,  agitación  nerviosa:  manos,  dedos
                        cogidos, apretados, tics, enrollar un pañuelo; inquietud; pasearse de un lado a otro, temblor de manos, ceño fruncido, cara tirante, aumento del tono muscular, suspiros, palidez facial.
                        Tragar saliva, eructar, taquicardia de reposo, frecuencia respiratoria por encima de 20 res/min, sacudidas enérgicas de tendones, temblor, pupilas dilatadas, exoftalmos (proyección anormal del globo del ojo), sudor, tics en los párpados.
                        </p>
                     <select name="menu" class="form-control">
                         <option value="1" selected>Ausente</option>
                         <option value="2">Leve</option>
                         <option value="3">Moderado</option>
                         <option value="4">Grave</option>
                         <option value="5">Muy Grave</option>
                    </select>
                </div>

                <div class="form-group col-12">
                    <!--label de la mano con el input type text unido por un contenedor div   -->
                    <label for="message-text" class="col-form-label"><strong>Comentario :</strong></label>
                      <!-- etiqueta Text tarea como una entrada de datos de mayor tamaño especial para amplearse 
                         segun la informacion que se encuentre dentro  -->
                         <textarea class="form-control pb-5" id="message-text"></textarea>
                 </div> 
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