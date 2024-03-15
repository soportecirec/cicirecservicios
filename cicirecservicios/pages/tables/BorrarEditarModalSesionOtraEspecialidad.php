<!-- Ventana Editar Registros CRUD -->
<div class="modal fade" id="editsesion_<?php echo $roww['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div style = "width: 600px;"class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Editar Sesión</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="editarSeguiminetoOtraEspecialidad.php?id=<?php echo $roww['id']; ?>">
                <div class="row form-group">
                    <div class="col-sm-4">
                        <label class="control-label" style="position:relative; top:7px;">Nombre sesión :</label>
                    </div>
                    <div class="col-sm-8">
                        <input type="hidden" class="form-control" name="autorizacion" value="<?php echo $autorizacion; ?>" readonly>
                        <input type="hidden" class="form-control" name="documento" value="<?php echo $documento; ?>" readonly>  
                        <input type="text" class="form-control" name="nombresesion" placeholder = "Sesion No. x" value="<?php echo $nosesion; ?>">
                    </div>
                </div>                
                <div class="row form-group">
                    <div class="col-sm-4">
                        <label class="control-label" style="position:relative; top:7px;">Estado Actual :</label>                      
                    </div>
                    <div class="col-sm-8">
                          <select name="estadoactual" class="form-control" required >
                          <!--<option value="">Seleccione</option>-->
                           <option value="<?php echo $estado;?>"><?php echo $estado;?></option>
                          <!-- <option value="Asistió">Asistió</option> -->
                          <option value="Anulado">Anulado</option>                     
                          </select> 
                    </div>
                </div>
                
                
                <div class="row form-group">
                    <div class="col-sm-4">
                        <label class="control-label" style="position:relative; top:7px;">Bitacora:</label>
                    </div>
                    <div class="col-sm-8">
                        <select name="bitacora" class="form-control" required >
                          <!--<option value="">Seleccione</option>-->
                           <option value="<?php echo $bitacorasesion;?>"><?php echo $bitacorasesion;?></option>
                          <option value="SALUD">SALUD</option>
                          <option value="TRANSPORTE">TRANSPORTE</option>
                          <option value="ORDEN PUBLICO">ORDEN PUBLICO</option>
                          <option value="CRUCE CON CITA EXTERNA">CRUCE CON CITA EXTERNA</option>
                          <option value="CALAMIDAD PERSONAL">CALAMIDAD PERSONAL</option>
                          <option value="AUTORIZACIÓN ERRADA">AUTORIZACIÓN ERRADA</option>
                          <option value="NO DESEA TOMAR EL SERVICIO">NO DESEA TOMAR EL SERVICIO</option>
                          <option value="NO CUMPLE CON REQUISITOS">NO CUMPLE CON REQUISITOS</option>                          
                          </select>
                    
                    </div>
                </div>
                
            </div> 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                <button type="submit" name="editar" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Editar sesión</a>
            </form>
            </div>

        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" id="deletesesion_<?php echo $roww['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Borrar Sesión</h4></center>
            </div>
            <div class="modal-body">	
            	<p class="text-center">¿Esta seguro de Borrar la sesión?</p>
				<h2 class="text-center"><?php echo $nosesion;?></h2>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                <a href="eliminarSesionOtraEspecialidad.php?id=<?php echo $roww['id'];?>&autorizacion=<?php echo $autorizacion;?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Si</a>
            </div>

        </div>
    </div>
</div>