<!-- Ventana Editar Registros CRUD -->

<div class="modal fade" id="editInfoAsistencial_<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div style = "width: 600px;"class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Editar Proceso</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="editarInfoAsistencialBd.php?id=<?php echo $id; ?>">

               
             <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Grupo:</label>

                  <div class="col-sm-6">
                    <input type="text" class="form-control" id= "grupo" name = "grupo" placeholder=""  value = "<?php echo $grupo;?>" >
                  </div>
                </div> <br><br>
                
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

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Ciclo:</label>

                  <div class="col-sm-6">
                    <input type="text" class="form-control" id= "ciclo" name = "ciclo" placeholder=""  value = "<?php echo $ciclo;?>" >
                  </div>
                </div> <br><br>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Mes actual:</label>

                  <div class="col-sm-6">
                    <input type="text" class="form-control" id= "mesactual" name = "mesactual" placeholder=""  value = "<?php echo $mesactual;?>" >
                  </div>
                </div> 

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

