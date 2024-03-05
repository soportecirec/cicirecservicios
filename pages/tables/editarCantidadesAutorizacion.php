<!-- Ventana Editar Registros CRUD -->
<div class="modal fade" id="editCantidad_<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div style = "width: 600px;"class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Editar Cantidades</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="editarProcesoOtraEspecialidad.php?id=<?php echo $id; ?>">





             
				
				 <?php                   
                        if($perfil == 'administrador'){       
                      ?>
				
				
				
				<div class="row form-group">
					<div class="col-sm-4">
						<label class="control-label" style="position:relative; top:7px;">Cantidad Autorizada :</label>
					</div>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="cantidad" value="<?php echo $cantidadautorizada; ?>" disabled>
						<input type="hidden" class="form-control" name="documento" value="<?php echo $usuario; ?>">
					</div>
				</div>
				
				<div class="row form-group">
					<div class="col-sm-4">
						<label class="control-label" style="position:relative; top:7px;">Cantidad asistida :</label>
					</div>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="cantidad" value="<?php echo $asistio; ?>">
						<input type="hidden" class="form-control" name="documento" value="<?php echo $usuario; ?>">
					</div>
				</div>
				
				<div class="row form-group">
					<div class="col-sm-4">
						<label class="control-label" style="position:relative; top:7px;">Cantidad pendiente para asistir :</label>
					</div>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="cantidad" value="<?php echo $cantidadautorizada - $asistio; ?>">
						<input type="hidden" class="form-control" name="documento" value="<?php echo $usuario; ?>">
					</div>
				</div>
				
				
				<?php
                        }
                ?>
				
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