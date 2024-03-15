<?php
//echo $perfil;

    //sql para sacar cuantas sesiones quedan dependiendo de las que están prograamadas
    $sqlSesionesPendientes = "SELECT *  from otrasespecialidades where autorizacion = '$autorizacion'";
    $resultSesionesPendientes = mysqli_query($connection, $sqlSesionesPendientes);
    $rowSesionesPendientes = mysqli_fetch_array($resultSesionesPendientes);
    $sesionesProgramadas = $rowSesionesPendientes['cantidadprogramada'];
    //$prueba = $cantidadautorizada - ($total_autorizacion_asistio + $sesionesProgramadas);
    /*echo $prueba;
              echo "Autorizada". $cantidadautorizada;
              echo "proramadas".$sesionesProgramadas;
              echo "Peidientes asistir".$cantidadautorizada - $sesionesProgramadas;*/

              $sql2 = "SELECT *  from users where correo = '$sesion'";
              $result2 = mysqli_query($connection, $sql2);
              $row2 = mysqli_fetch_array($result2);
              $perfil = $row2[10];

?>

    <?php 
    //perfil administrador
    if ($perfil == 'administrador' ) {
    
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
    }
    ?>

<?php 
    //perfil administrador
    if ($perfil == 'gestorseguimiento' ) {
    
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
    }
    ?>

<?php 
    //perfil administrador
    if ($perfil == 'jefeexperiencia' ) {
    
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
    }
    ?>

<?php 
    //perfil administrador
    if ($perfil == 'lideradmisiones' ) {
    
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
    }
    ?>

    <?php 
    //perfil administrador
    if ($perfil == 'lidercall' ) {
    
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
    }
    ?>


    <?php 
    //perfil auxadmisiones
    if ($perfil == 'auxadmisiones' ) {
    
    ?>
    
    <a href="seguimientoOtraEspecialidad.php?autorizacion=<?php echo $autorizacion; ?>&criterio=<?php echo $autorizacion; ?>" data-toggle="tooltip" title="Modificar seguimiento" class="btn btn-primary btn-sm" data-toggle="modal"><span class="glyphicon glyphicon-list-alt"></span> </a>
    <a href="#editFechaMax_<?php echo $id; ?>" data-toggle="modal" title="Modificar fecha límite ejecución" class="btn btn-info btn-sm"><span class="glyphicon glyphicon-pencil"></span> </a>
    
    <?php
    }
    ?>



    <?php 
    //perfil auxadmisiones
    if ($perfil == 'liderrehabilitacion' ) {
    
    ?>
    
    <a href="seguimientoOtraEspecialidad.php?autorizacion=<?php echo $autorizacion; ?>&criterio=<?php echo $autorizacion; ?>" data-toggle="tooltip" title="Modificar seguimiento" class="btn btn-primary btn-sm" data-toggle="modal"><span class="glyphicon glyphicon-list-alt"></span> </a>
    
    <?php
    }
    ?>

<?php 
    //perfil auxadmisiones
    if ($perfil == 'facturacion' ) {
    
    ?>
    
    <a href="seguimientoOtraEspecialidad.php?autorizacion=<?php echo $autorizacion; ?>&criterio=<?php echo $autorizacion; ?>" data-toggle="tooltip" title="Modificar seguimiento" class="btn btn-primary btn-sm" data-toggle="modal"><span class="glyphicon glyphicon-list-alt"></span> </a>
    
    <?php
    }
    ?>


<?php 
    //perfil auxadmisiones
    if ($perfil == 'agentecall') {
    
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
    <?php
    }
    ?>

    <?php 
    //perfil comercial
    if ($perfil == 'comercial') {
    
    ?>   
    
    <a href="seguimientoOtraEspecialidad.php?autorizacion=<?php echo $autorizacion; ?>&criterio=<?php echo $autorizacion; ?>" data-toggle="tooltip" title="Modificar seguimiento" class="btn btn-primary btn-sm" data-toggle="modal"><span class="glyphicon glyphicon-list-alt"></span> </a>
    <?php
    }
    ?>