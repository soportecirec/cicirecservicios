<?php
//echo $perfil;
                if ($perfil == 'administrador') {



                  //sql para sacar cuantas sesiones quedan dependiendo de las que están prograamadas
              $sqlSesionesPendientes = "SELECT *  from otrasespecialidades where autorizacion = '$autorizacion'" ;
              $resultSesionesPendientes = mysqli_query($connection, $sqlSesionesPendientes);
               $rowSesionesPendientes = mysqli_fetch_array($resultSesionesPendientes);
              $sesionesProgramadas = $rowSesionesPendientes['cantidadprogramada'];


             //$prueba = $cantidadautorizada - ($total_autorizacion_asistio + $sesionesProgramadas);
              /*echo $prueba;
              echo "Autorizada". $cantidadautorizada;
              echo "proramadas".$sesionesProgramadas;
              echo "Peidientes asistir".$cantidadautorizada - $sesionesProgramadas;*/



                ?>
                    <a href="editarCantidadesAutorizacion.php?autorizacion=<?php echo $autorizacion; ?>&nombrePaciente=<?php echo $nombres; ?>&cantidadAutorizada=<?php echo $cantidadautorizada; ?>&cantidadProgramada=<?php echo $sesionesProgramadas; ?>&PendientesProgramar=<?php echo $cantidadautorizada - $sesionesProgramadas; ?>&criterio=<?php echo $documentoEditCantidad; ?>" class="btn btn-warning btn-sm" onclick="mostrarFormulario('formEditar_<?php echo $autorizacion; ?>')">
                        <span class="glyphicon glyphicon-edit"></span>
                    </a>
                    <script>
                        $(document).ready(function() {
                            $('[data-toggle="tooltip"]').tooltip();
                        });
                        $(document).ready(function() {
                            $('[data-toggle="modal"]').modal();
                        });
                    </script>
                    <a href="seguimientoOtraEspecialidad.php?autorizacion=<?php echo $autorizacion; ?>&criterio=<?php echo $autorizacion; ?>" data-toggle="tooltip" title="Modificar seguimiento" class="btn btn-primary btn-sm" data-toggle="modal"><span class="glyphicon glyphicon-list-alt"></span> </a>
                    <a href="#delete_<?php echo $id; ?>" data-toggle="modal" title="Eliminar proceso" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span> </a>
                <?php
                } else {
                ?>
                    <a href="#edit_<?php echo $id; ?>" class="btn btn-warning btn-sm" data-toggle="modal"><span class="glyphicon glyphicon-edit"></span></a>
                    <a href="seguimientoOtraEspecialidad.php?autorizacion=<?php echo $autorizacion; ?>&criterio=<?php echo $autorizacion; ?>" class="btn btn-success btn-sm" data-toggle="modal"><span class="glyphicon glyphicon-list-alt"></span> </a>
                <?php
                }
                ?>