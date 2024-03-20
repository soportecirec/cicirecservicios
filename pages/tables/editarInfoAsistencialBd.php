<?php
error_reporting(1);
	session_start();
	include_once "../../api/conexion.php"; 


    if(isset($_POST['editar'])){
        $id = $_GET['id'];
        $grupo = $_POST['grupo'];
        $intensidadsemana = $_POST['intensidadsemana'];
        $min = $_POST['min'];
        $dxcodigo = $_POST['dxcodigo'];
        $ciclo = $_POST['ciclo'];
        $mesactual = $_POST['mesactual'];
        $autorizacion = $_POST['autorizacion'];
        $documento = $_POST['documento'];
    
        // validar si existen registros
        $buscarInfoAsistencial = "SELECT * FROM informacionasistencial WHERE id_otraespecialidad = '$id'";
        $resultInfoAsistencial = mysqli_query($connection, $buscarInfoAsistencial);
    
        if ($resultInfoAsistencial) {
            $rowinfoAsistencial = mysqli_fetch_array($resultInfoAsistencial);
            $id_otraespcialidad = $rowinfoAsistencial['id_otraespecialidad'];
    
            if(empty($id_otraespcialidad)){
                $sql = "INSERT INTO informacionasistencial 
                (grupo, intensidadsemana, min, dxcodigo, ciclo, mesactual, documento, autorizacion, id_otraespecialidad)
                VALUES 
                ('$grupo', '$intensidadsemana', '$min', '$dxcodigo', '$ciclo', '$mesactual', '$documento', '$autorizacion', '$id')";
                mysqli_query($connection, $sql);
            } else {
                $sql = "UPDATE informacionasistencial 
                SET grupo = '$grupo',
                intensidadsemana = '$intensidadsemana',
                min = '$min',
                dxcodigo = '$dxcodigo',
                ciclo = '$ciclo',
                mesactual = '$mesactual'
                WHERE id_otraespecialidad = '$id'";
                mysqli_query($connection, $sql);
            }
        } else {
            echo "Error en la consulta: " . mysqli_error($connection);
        }
    }
    

	//header('location: ../tables/usuarioOtraEspecialidadBuscar.php?criterio='.$documento.'&autorizacion='.$documento.'&editFechaMax=s');

?>