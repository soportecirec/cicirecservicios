<!-- Ventana Editar Registros CRUD -->

<div class="modal fade" id="edit_<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div style = "width: 600px;"class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Editar Proceso</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="editarProcesoOtraEspecialidad.php?id=<?php echo $id; ?>">

                <div class="row form-group">
                    <div class="col-sm-4">
                        <label class="control-label" style="position:relative; top:7px;">Estado :</label>
                    </div>

                    <?php
                     if ($perfil == 'administrador') {
                     ?>
                    <div class="col-sm-8">
                       <select class="form-control select2" id="example1" name="estados" value="algo">
                            <option value="<?php echo $estado;?>"><?php echo $estado;?></option>
                            <option value="AUTORIZADO">AUTORIZADO</option>
                            <option value="AGENDADO CITA 1">AGENDADO CITA 1</option>
                            <option value="SIN CONTACTO">SIN CONTACTO</option>
                            <option value="NO APTO">NO APTO</option>
                            <option value="EN PROCESO">EN PROCESO</option>
                            <option value="CANCELADO">CANCELADO</option>
                            <option value="SUSPENDIDO">SUSPENDIDO</option>
                            <option value="SEGUIMIENTO COMERCIAL">SEGUIMIENTO COMERCIAL</option>
<<<<<<< Updated upstream
=======
                            <option value="FINALIZADO SIN FACTURAR">FINALIZADO SIN FACTURAR</option>
                            <option value="FACTURADO">FACTURADO</option>
>>>>>>> Stashed changes
                        </select>
                        <input type="hidden" class="form-control" name="documento" value="<?php echo $autorizacion; ?>">
                    </div>
<<<<<<< Updated upstream
                </div>
				
				 <?php                   
                        if($perfil == 'administrador'){
                      ?>
				
				
				<!--
				<div class="row form-group">
					<div class="col-sm-4">
						<label class="control-label" style="position:relative; top:7px;">Cantidad Autorizada :</label>
					</div>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="cantidad" value="<?php echo $cantidadautorizada; ?>">
						<input type="hidden" class="form-control" name="documento" value="<?php echo $usuario; ?>">
					</div>
				</div>
				
				<div class="row form-group">
					<div class="col-sm-4">
						<label class="control-label" style="position:relative; top:7px;">Valor Autorizado:</label>
					</div>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="valor" value="<?php echo $valorautorizado; ?>">
					</div>
				</div>
				-->
				
				
				<?php
                        }
                ?>
				
            </div> 
=======
                    <?php
                    }
                    ?>

                    <?php
                     if ($perfil == 'gestorseguimiento') {
                     ?>
                    <div class="col-sm-8">
                       <select class="form-control select2" id="example1" name="estados" value="algo">
                            <option value="<?php echo $estado;?>"><?php echo $estado;?></option>
                            <option value="NO APTO">NO APTO</option>
                            <option value="SIN PROCESO">SIN PROCESO</option>
                            <option value="AGENDADO">AGENDADO</option>
                            <option value="CONTACTO FALLIDO">CONTACTO FALLIDO</option>                            
                            <option value="CANCELADO">CANCELADO</option>
                            <option value="SEGUIMIENTO COMERCIAL">SEGUIMIENTO COMERCIAL</option>
                            
                        </select>
                        <input type="hidden" class="form-control" name="documento" value="<?php echo $autorizacion; ?>">
                    </div>
                    <?php
                    }
                    ?>

                    <?php
                     if ($perfil == 'auxadmisiones') {
                     ?>
                    <div class="col-sm-8">
                       <select class="form-control select2" id="example1" name="estados" value="algo">
                            <option value="<?php echo $estado;?>"><?php echo $estado;?></option>                            
                            <option value="EN PROCESO">EN PROCESO</option>
                            <option value="CANCELADO">CANCELADO</option> 
                            <option value="FINALIZADO SIN FACTURAR">FINALIZADO SIN FACTURAR</option>
                            <option value="CONCILIACION">CONCILIACION</option>                            
                        </select>
                        <input type="hidden" class="form-control" name="documento" value="<?php echo $autorizacion; ?>">
                    </div>
                    <?php
                    }
                    ?>

                    <?php
                     if ($perfil == 'lideradmisiones') {
                     ?>
                    <div class="col-sm-8">
                       <select class="form-control select2" id="example1" name="estados" value="algo">
                            <option value="<?php echo $estado;?>"><?php echo $estado;?></option>                            
                            <option value="EN PROCESO">EN PROCESO</option>
                            <option value="CANCELADO">CANCELADO</option> 
                            <option value="FINALIZADO SIN FACTURAR">FINALIZADO SIN FACTURAR</option>                             
                        </select>
                        <input type="hidden" class="form-control" name="documento" value="<?php echo $autorizacion; ?>">
                    </div>
                    <?php
                    }
                    ?>

                    <?php
                     if ($perfil == 'agentecall') {
                     ?>
                    <div class="col-sm-8">
                       <select class="form-control select2" id="example1" name="estados" value="algo">
                            <option value="<?php echo $estado;?>"><?php echo $estado;?></option>                            
                            <option value="AGENDADO">AGENDADO</option>
                            <option value="CONTACTO FALLIDO">CONTACTO FALLIDO</option>  
                            <option value="SEGUIMIENTO COMERCIAL">SEGUIMIENTO COMERCIAL</option>  
                                                    
                        </select>
                        <input type="hidden" class="form-control" name="documento" value="<?php echo $autorizacion; ?>">
                    </div>
                    <?php
                    }
                    ?>

                    <?php
                     if ($perfil == 'comercial') {
                     ?>
                    <div class="col-sm-8">
                       <select class="form-control select2" id="example1" name="estados" value="algo">
                            <option value="<?php echo $estado;?>"><?php echo $estado;?></option>                            
                            <option value="SIN PROCESO">SIN PROCESO</option>                            
                            <option value="SEGUIMIENTO COMERCIAL">SEGUIMIENTO COMERCIAL</option>                            
                        </select>
                        <input type="hidden" class="form-control" name="documento" value="<?php echo $autorizacion; ?>">
                    </div>
                    <?php
                    }
                    ?>

                    <?php
                     if ($perfil == 'lidercall') {
                     ?>
                    <div class="col-sm-8">
                       <select class="form-control select2" id="example1" name="estados" value="algo">
                            <option value="<?php echo $estado;?>"><?php echo $estado;?></option>                            
                            <option value="AGENDADO">AGENDADO</option>
                            <option value="CONTACTO FALLIDO">CONTACTO FALLIDO</option>                              
                            <option value="SEGUIMIENTO COMERCIAL">SEGUIMIENTO COMERCIAL</option>                            
                        </select>
                        <input type="hidden" class="form-control" name="documento" value="<?php echo $autorizacion; ?>">
                    </div>
                    <?php
                    }
                    ?>

                    <?php
                     if ($perfil == 'jefeexperiencia') {
                     ?>
                    <div class="col-sm-8">
                       <select class="form-control select2" id="example1" name="estados" value="algo">
                            <option value="<?php echo $estado;?>"><?php echo $estado;?></option>                            
                            <option value="AGENDADO">AGENDADO</option>
                            <option value="CONTACTO FALLIDO">CONTACTO FALLIDO</option>                              
                            <option value="SEGUIMIENTO COMERCIAL">SEGUIMIENTO COMERCIAL</option>                            
                        </select>
                        <input type="hidden" class="form-control" name="documento" value="<?php echo $autorizacion; ?>">
                    </div>
                    <?php
                    }
                    ?>
                    
                    <?php
                     if ($perfil == 'liderrehabilitacion') {
                     ?>
                    <div class="col-sm-8">
                       <select class="form-control select2" id="example1" name="estados" value="algo">
                            <option value="<?php echo $estado;?>"><?php echo $estado;?></option>                            
                            <option value="NO APTO">NO APTO</option>                                                        
                        </select>
                        <input type="hidden" class="form-control" name="documento" value="<?php echo $autorizacion; ?>">
                    </div>
                    <?php
                    }
                    ?>

                    <?php
                     if ($perfil == 'facturacion') {
                     ?>
                    <div class="col-sm-8">
                       <select class="form-control select2" id="example1" name="estados" value="algo">
                            <option value="<?php echo $estado;?>"><?php echo $estado;?></option>                            
                            <option value="PROCESO FACTURADO">PROCESO FACTURADO</option>
                            <option value="DEVOLUCION AL AREA DE ADMISIONES">DEVOLUCION AL AREA DE ADMISIONES</option>                                                      
                        </select>
                        <input type="hidden" class="form-control" name="documento" value="<?php echo $autorizacion; ?>">
                    </div>
                    <?php
                    }
                    ?>





                </div>			
			</div> 
>>>>>>> Stashed changes
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="editar" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Actualizar Ahora</a>
			</form>
            </div>

        </div>
    </div>
</div>



<!-- Delete -->
<div class="modal fade" id="delete_<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Borrar Proceso</h4></center>
            </div>
            <div class="modal-body">	
            	<p class="text-center">¿Esta seguro de Borrar la autorización?</p>
				<h2 class="text-center"><?php echo $autorizacion ?></h2>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                <a href="eliminarAutorizacionOtraEspecialidad.php?id=<?php echo $id;?>&documento=<?php echo $autorizacion;?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Si</a>
            </div>

        </div>
    </div>
</div>