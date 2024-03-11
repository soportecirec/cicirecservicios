<!-- Ventana Editar Registros CRUD -->
<div class="modal fade" id="crearseguimientosesion_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div style = "width: 600px;"class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Crear seguimiento </h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="crearLineaTiempoSesionOtraEspecialidad.php?id=<?php echo $row['id']; ?>">
                <div class="row form-group">
                    <div class="col-sm-4">
                        <label class="control-label" style="position:relative; top:7px;">Fecha seguimiento :</label>
                    </div>
                    <div class="col-sm-8">
                        <input type="hidden" class="form-control" name="autorizacion" value="<?php echo $autorizacion; ?>" readonly>
                        <input type="hidden" class="form-control" name="documento" value="<?php echo $documento; ?>" readonly>

                        <input type="hidden" class="form-control" name="crear" value="<?php echo $sesion;?>" >  
                        <input type="text" class="form-control" name="fecharegistro" placeholder = "Sesion No. x" value="<?php echo $fechasesion; ?>" readonly>
                    </div>
                </div>                
                <div class="row form-group">
                    <div class="col-sm-4">
                        <label class="control-label" style="position:relative; top:7px;">Seguimiento:</label>                      
                    </div>
                    <div class="col-sm-8">
                          <select name="tiposeguimiento" class="form-control" required >
                          <option value="">Seleccione</option>                           
                          <option value="Usuario Contactado">Usuario Contactado</option>
                          <option value="Usuario no Contactado">Usuario no Contactado</option>
                          <option value="Solicitud Especial">Solicitud Especial</option>                       
                          </select> 
                    </div>
                </div>
                
                
                <div class="row form-group">
                    <div class="col-sm-4">
                        <label class="control-label" style="position:relative; top:7px;">Bitacoras:</label>
                    </div>
                    <div class="col-sm-8">
                        
                   <select name="bitacora" class="form-control" required >
                          <option value="">Seleccione</option>                           
                          <option value="ATIENDE PACIENTE Y ENTIENDE  LA INFORMACION">ATIENDE PACIENTE Y ENTIENDE  LA INFORMACION</option>
                          <option value="ATIENDE FAMILIAR Y ENTIENDE LA INFORMACION">ATIENDE FAMILIAR Y ENTIENDE LA INFORMACION</option>
                          
                          <option value="PROGRAMACION TOTAL SESIONES AUTORIZADAS">PROGRAMACION TOTAL SESIONES AUTORIZADAS</option>
                          <option value="ATIENDE FAMILIAR Y ENTIENDE LA INFORMACION">ATIENDE FAMILIAR Y ENTIENDE LA INFORMACION</option>
                          <option value="PROGRAMACION PARCIAL SESIONES AUTORIZADAS">PROGRAMACION PARCIAL SESIONES AUTORIZADAS</option>
                          <option value="CELULAR APAGADO SE ENVIA MENSAJE DE TEXTO">CELULAR APAGADO SE ENVIA MENSAJE DE TEXTO </option>
                          <option value="CELULAR NO CORESPONDE AL PACIENTE">CELULAR NO CORESPONDE AL PACIENTE </option>
                          <option value="PACIENTE INFORMA NO DESEA TOMAR EL SERVICIO">PACIENTE INFORMA NO DESEA TOMAR EL SERVICIO </option>
                                           
                          </select> 
                    </div>
                </div>
                
            </div> 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                <button type="submit" name="editar" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Crear seguimiento</a>
            </form>
            </div>

        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" id="borrarseguimientosesion_<?php echo $idseguimiento; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Borrar Seguimiento</h4></center>
            </div>
            <div class="modal-body">	
            	<p class="text-center">¿Esta seguro de Borrar el seguimiento?</p>
				<h2 class="text-center"><?php echo $bitacoracontacto;?></h2>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                <a href="eliminarSeguimientoSesionOtraEspecialidad.php?id=<?php echo $idseguimiento;?>&autorizacion=<?php echo $autorizacion;?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Si</a>
            </div>

        </div>
    </div>
</div>