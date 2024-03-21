<?php
error_reporting(1);
session_start();
include_once "../../api/conexion.php";


if (isset($_POST['editar'])) {
    $id = $_GET['id'];
    $grupo = $_POST['grupo'];
    $intensidadsemana = $_POST['intensidadsemana'];
    $min = $_POST['min'];
    $dxcodigo = $_POST['dxcodigo'];
    $ciclo = $_POST['ciclo'];
    $mesactual = $_POST['mesactual'];
    $mes = $_POST['mes'];
    $frecuencia = $_POST['frecuencia'];
    $tiempo = $_POST['tiempo'];
    $autorizacion = $_POST['autorizacion'];
    $documento = $_POST['documento'];
    $diagnostico = $_POST['diagnostico'];
    $input_perfil = $_POST['input_perfil'];

    //MOSTRAR TODOS LOS POST
    /*foreach ($_POST as $key => $value) {
        echo "$key = $value <br>";
    }
    echo "id = $id <br>";*/
    

    // validar si existen registros
    $buscarInfoAsistencial = "SELECT * FROM informacionasistencial WHERE id_otraespecialidad = '$id'";
    $resultInfoAsistencial = mysqli_query($connection, $buscarInfoAsistencial);

    if ($resultInfoAsistencial) {
        $rowinfoAsistencial = mysqli_fetch_array($resultInfoAsistencial);
        $id_otraespcialidad = $rowinfoAsistencial['id_otraespecialidad'];

        //if para validar si hay registros
        if (empty($id_otraespcialidad)) {
            $sql = "INSERT INTO informacionasistencial 
                (grupo, intensidadsemana, min, dxcodigo, ciclo, mesactual, mes, frecuencia, tiempo, documento, autorizacion, diagnostico, id_otraespecialidad)
                VALUES 
                ('$grupo', '$intensidadsemana', '$min', '$dxcodigo', '$ciclo', '$mesactual', '$mes', '$frecuencia', '$tiempo', '$documento', '$autorizacion', '$diagnostico', '$id')";
            
            mysqli_query($connection, $sql);
        }
        if (!empty($id_otraespcialidad)) {

            if ($input_perfil == 'terapeutaval') {
                $sql = "UPDATE informacionasistencial 
                SET grupo = '$grupo',
                frecuencia = '$frecuencia',
                tiempo = '$tiempo',
                diagnostico = '$diagnostico'
                WHERE id_otraespecialidad = '$id'";
                
                mysqli_query($connection, $sql);
            } //fin if anidado

            if ($input_perfil == 'gestorseguimiento') {
                $sql = "UPDATE informacionasistencial 
                SET
                ciclo = '$ciclo',
                mesactual = '$mesactual',
                mes = '$mes'
                WHERE id_otraespecialidad = '$id'";
                
                mysqli_query($connection, $sql);
            } //fin if anidado
        }
    } else {
        echo "Error en la consulta: " . mysqli_error($connection);
    }
}//fin if isset



header('location: ../tables/seguimientoOtraEspecialidad.php?autorizacion=' . $autorizacion . '&criterio=' . $autorizacion . '&editInfoAsistencial=s');
