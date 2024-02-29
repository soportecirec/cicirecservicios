<!-- Ventana crear Registros CRUD -->
<div class="modal fade" id="crear_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Crear Sesión</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="crearSeguiminetoOtraEspecialidad.php?id=<?php echo $row['id']; ?>">
				<div class="row form-group">
					<div class="col-sm-4">
						<label class="control-label" style="position:relative; top:7px;">Nombre sesión :</label>
					
					</div>
					<div class="col-sm-8">
						<input type="hidden" class="form-control" name="autorizacion" value="<?php echo $autorizacion; ?>" readonly>
						<input type="hidden" class="form-control" name="documento" value="<?php echo $documento; ?>" readonly>	
						<input type="hidden" class="form-control" name="nombresesion1" placeholder = "Sesion No. x" value="<?php echo $nombres; ?>">
						
					   
					    <select name="nombresesion" class="form-control" required >
                          <!--<option value="">Seleccione</option>-->
                           <?php
					    for($x=1;$x<=$cantidadprogramada;$x++){
					    ?>
                           <option value="Sesión No. <?php echo $x;?>">Sesión No. <?php echo $x;?></option>
                            <?php
					    }
					    ?>
                        </select>
                       
					
					
						 <input type="hidden" class="form-control" name="crear" value="<?php echo $sesion;?>" >
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-4">
						<label class="control-label" style="position:relative; top:7px;">Fecha Asistencia :</label>
					</div>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="fechagenda" placeholder = "Sesion No. x"  value = "<?php echo $fechasesion;?>" readonly>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-4">
						<label class="control-label" style="position:relative; top:7px;">Estado Actual:</label>
					</div>
					<div class="col-sm-8">
						  <select name="estadoactual" class="form-control" required >
						  <option value="">Seleccione</option>
	                      <option value="Asistio">Asistió</option>
	                      <!--<option value="No Asistio">No Asistió</option>-->                    
                		  </select> 
					</div>
				</div>
				
				
				<!--
				<div class="row form-group">
					<div class="col-sm-4">
						<label class="control-label" style="position:relative; top:7px;">Bitacora:</label>
					</div>
					<div class="col-sm-8">
						
				<select name="bitacora" class="form-control" required >
                           <option value="<?php echo $bitacorasesion;?>"><?php echo $bitacorasesion;?></option>
                          <option value="SALUD">SALUD</option>
                          <option value="TRANSPORTE">TRANSPORTE</option>
                          <option value="ORDEN PUBLICO">ORDEN PUBLICO</option>
                          <option value="CRUCE CON CITA EXTERNA">CRUCE CON CITA EXTERNA</option>
                          <option value="CALAMIDAD PERSONAL">CALAMIDAD PERSONAL</option>
                          <option value="AUTORIZACIÓN ERRADA">AUTORIZACIÓN ERRADA</option>
                          <option value="NO DESEA TOMAR EL SERVICIO">NO DESEA TOMAR EL SERVICIO</option>
                          <option value="NO APLICA">NO APLICA</option>
                          </select>
					
					
					
					</div>
				</div>
				-->
				
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                <button type="submit" name="editar" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Crear sesión</a>
			</form>
            </div>

        </div>
    </div>
</div>



