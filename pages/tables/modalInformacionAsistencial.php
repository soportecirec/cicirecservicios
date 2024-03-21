<?php
// CONEXIÓN SERVINTE

try {

    $usuario = "BDCIREC";
    $password = "C1r3c2020";
    $nombredb = "SCSE";


    //para oracle el tipo es oci
    $conn = new PDO("oci:dbname" . $nombredb, $usuario, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
  }

?>



<!-- Ventana Editar Registros CRUD -->

<div class="modal fade" id="editInfoAsistencial_<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div style = "width: 600px;"class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Editar información asistencial</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="editarInfoAsistencialBd.php?id=<?php echo $id; ?>">

  <!-- ENVIAR PERFIL -->
  <input type="hidden" name="input_perfil" value="<?php echo $perfil ?>">

      <?php 
      
      if($perfil == 'terapeutaval'){
        //cierra inicio if?>

        <div class="form-group">
            <label for="grupo" class="col-sm-4 control-label">Grupo:</label>
            <div class="col-sm-6">
                <select class="form-control" id="grupo" name="grupo">
                    <option value="COLUMNA LUMBAR O MIEMBRO INFERIOR" <?php if(strtoupper($grupo) == 'COLUMNA LUMBAR O MIEMBRO INFERIOR') echo 'selected'; ?>>COLUMNA LUMBAR O MIEMBRO INFERIOR</option>
                    <option value="COLUMNA CERVICO-DORSAL O MIEMBRO SUPERIOR" <?php if(strtoupper($grupo) == 'COLUMNA CERVICO-DORSAL O MIEMBRO SUPERIOR') echo 'selected'; ?>>COLUMNA CERVICO-DORSAL O MIEMBRO SUPERIOR</option>
                    <option value="FIBROMIALGIA/ARTROSIS/OSTEOARTROSIS SIN ESPECIFICACION CORPORAL" <?php if(strtoupper($grupo) == 'FIBROMIALGIA/ARTROSIS/OSTEOARTROSIS SIN ESPECIFICACION CORPORAL') echo 'selected'; ?>>FIBROMIALGIA/ARTROSIS/OSTEOARTROSIS SIN ESPECIFICACION CORPORAL</option>
                    <option value="AFECTACION DE 2 O MAS SEGMENTOS CORPORALES" <?php if(strtoupper($grupo) == 'AFECTACION DE 2 O MAS SEGMENTOS CORPORALES') echo 'selected'; ?>>AFECTACION DE 2 O MAS SEGMENTOS CORPORALES</option>
                    <option value="NEUROLOGICOS" <?php if(strtoupper($grupo) == 'NEUROLOGICOS') echo 'selected'; ?>>NEUROLOGICOS</option>
                    <option value="MANO Y CODO" <?php if(strtoupper($grupo) == 'MANO Y CODO') echo 'selected'; ?>>MANO Y CODO</option>
                    <option value="RODILLA Y PIE" <?php if(strtoupper($grupo) == 'RODILLA Y PIE') echo 'selected'; ?>>RODILLA Y PIE</option>
                </select>
            </div>
        </div> <br><br><br>        

        <div class="form-group">
    <label for="frecuencia" class="col-sm-4 control-label">Frecuencia:</label>
    <div class="col-sm-6">
        <select class="form-control" id="frecuencia" name="frecuencia">
            <option value="1" <?php if($frecuencia == '1') echo 'selected'; ?>>1</option>
            <option value="2" <?php if($frecuencia == '2') echo 'selected'; ?>>2</option>
            <option value="3" <?php if($frecuencia == '3') echo 'selected'; ?>>3</option>
            <option value="4" <?php if($frecuencia == '4') echo 'selected'; ?>>4</option>
            <option value="5" <?php if($frecuencia == '5') echo 'selected'; ?>>5</option>
        </select>
    </div>
</div> <br><br>

<div class="form-group">
    <label for="tiempo" class="col-sm-4 control-label">Tiempo:</label>
    <div class="col-sm-6">
        <select class="form-control" id="tiempo" name="tiempo">
            <option value="30 min" <?php if($tiempo == '30 min') echo 'selected'; ?>>30 min</option>
            <option value="60 min" <?php if($tiempo == '60 min') echo 'selected'; ?>>60 min</option>
        </select>
    </div>
</div> <br><br>



                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">Diagnóstico:</label>

                      <div class="col-sm-10">
                        <input list="entidades" class="form-control" name="diagnostico" id="entidad_usuario" oninput="actualizarCodigoEntidad()">

                        
                        <datalist id="entidades">
                        <?php
                        //buscar entidad
                        $consultaDiagServinte = "select * from india";
                        $resultDiagServinte = $conn->query($consultaDiagServinte);

                        while($rowDiagServinte = $resultDiagServinte->fetch()){

                        $codigoDiagServinte = $rowDiagServinte['DIACOD'];
                        $nombreDiagServinte = $rowDiagServinte['DIANOM'];
                        ?>
                          <option value="<?php echo $nombreDiagServinte;?>" data-codigo="<?php echo $codigoDiagServinte; ?>"><?php echo $codigoDiagServinte;?></option>
                          <?php
                        }
                        ?>
                        </datalist>

                        <input type='hidden' name="codigoEntidadSeleccionado" id="codigoEntidadSeleccionado">
                    
                    <script>
                      //FUNCIÓN PARA AGREGAR EL CODIGO EN EL INPUT OCULTO
                        function actualizarCodigoEntidad() {
                            var input = document.getElementById('entidad_usuario');
                            var codigoInput = document.getElementById('codigoEntidadSeleccionado');
                            var option = document.querySelector('#entidades option[value="' + input.value + '"]');
                            if (option) {
                                codigoInput.value = option.getAttribute('data-codigo');
                            } else {
                                codigoInput.value = '';
                            }
                        }
                    </script>
                        
                      </div>
                    </div>







      <?php        
      }//fin if
      ?>


<?php 
      
      if($perfil == 'gestorseguimiento'){
        //cierra inicio if?>



        <div class="form-group">
            <label for="grupo" class="col-sm-4 control-label">Grupo:</label>
            <div class="col-sm-6">
            <input class="form-control" type="text" value="<?php echo $grupo; ?>" disabled>
            </div>
        </div> <br><br><br>

        <div class="form-group">
    <label for="frecuencia" class="col-sm-4 control-label">Frecuencia:</label>
    <div class="col-sm-6">
    <input class="form-control" type="text" value="<?php echo $frecuencia; ?>" disabled>
    </div>
</div> <br><br>

<div class="form-group">
    <label for="tiempo" class="col-sm-4 control-label">Tiempo:</label>
    <div class="col-sm-6">
    <input class="form-control" type="text" value="<?php echo $tiempo; ?>" disabled>
    </div>
</div> <br><br>


<div class="form-group">
    <label for="diagnostico" class="col-sm-4 control-label">Diagnóstico:</label>
    <div class="col-sm-6">
        <textarea class="form-control" id="diagnostico" name="diagnostico" disabled><?php echo $diagnostico; ?></textarea>
    </div>
</div> <br><br><br>


<div class="form-group">
    <label for="ciclo" class="col-sm-4 control-label">Ciclo:</label>
    <div class="col-sm-6">
        <select class="form-control" id="ciclo" name="ciclo">
            <option value="1" <?php if($ciclo == '1') echo 'selected'; ?>>1</option>
            <option value="2" <?php if($ciclo == '2') echo 'selected'; ?>>2</option>
        </select>
    </div>
</div> <br><br>

<div class="form-group">
    <label for="mes" class="col-sm-4 control-label">Mes:</label>
    <div class="col-sm-6">
        <select class="form-control" id="mes" name="mes">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select>
    </div>
</div> <br><br>



<div class="form-group">
    <label for="mesactual" class="col-sm-4 control-label">Mes actual:</label>
    <div class="col-sm-6">
        <select class="form-control" id="mesactual" name="mesactual">
            <option value="1" <?php if($mesactual == '1') echo 'selected'; ?>>1</option>
            <option value="2" <?php if($mesactual == '2') echo 'selected'; ?>>2</option>
            <option value="3" <?php if($mesactual == '3') echo 'selected'; ?>>3</option>
        </select>
    </div>
</div> <br><br>





      <?php        
      }//fin if
      ?>


               
                <!--  CAMPOS DEL DRIVE, DESCOMENTAR SI SE NECESITA

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Intensidad por semana:</label>

                  <div class="col-sm-6">
                    <input type="text" class="form-control" id= "intensidadsemana" name = "intensidadsemana" placeholder=""  value = "<?php echo $intensidadsemana;?>" >
                  </div>
                </div> <br><br>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Min:</label>

                  <div class="col-sm-6">
                    <input type="text" class="form-control" id= "min" name = "min" placeholder=""  value = "<?php echo $min;?>" >
                  </div>
                </div> <br><br>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">DX CIE10 (Código):</label>

                  <div class="col-sm-6">
                    <input type="text" class="form-control" id= "dxcodigo" name = "dxcodigo" placeholder=""  value = "<?php echo $dxcodigo;?>" >
                  </div>
                </div> <br><br>
                -->
                

                

                <!-- Input hidden que lleva la autorizaciuon y el doc -->
                <input type="hidden" name="autorizacion" value="<?php echo $autorizacion;?>">
                        <input type="hidden" name="documento" value="<?php echo $documento;?>">
			
			</div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="editar" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Actualizar Ahora</a>
			</form>
            </div>

        </div>
    </div>
</div>

