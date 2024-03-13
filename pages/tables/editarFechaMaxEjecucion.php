<!-- Delete -->
<div class="modal fade" id="editFechaMax_<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center>
                    <h4 class="modal-title" id="myModalLabel">Editar fecha máxima de ejecución</h4>
                </center>
            </div>
            <div class="modal-body">
                <p class="text-center">Ingrese la nueva fecha para actualizar:</p>


                <form action="editarFechaMaxBd.php?id=<?php echo $id; ?>" method="post">

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Fecha máxima ejecución:</label>

                        <div class="col-sm-10">
                            <input type="date" class="form-control" name="fechalimiteejecucionEdit" required>
                        </div>
                        <!-- Input hidden que lleva la autorizaciuon y el doc -->
                        <input type="hidden" name="autorizacion" value="<?php echo $autorizacion;?>">
                        <input type="hidden" name="documento" value="<?php echo $documento;?>">
                    

                    </div>
                    <br>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                <input type="submit" name="submit" class="btn btn-success" class="glyphicon glyphicon-check" value="Actualizar">
            </div>

            </form>

        </div>
    </div>
</div>