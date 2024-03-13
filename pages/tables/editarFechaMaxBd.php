<?php
	session_start();
	include_once "../../api/conexion.php"; 

	if(isset($_POST['submit'])){
		
			$id = $_GET['id'];
			$fechalimiteejecucionEdit = $_POST['fechalimiteejecucionEdit'];
            $autorizacion = $_POST['autorizacion'];
            $documento = $_POST['documento'];
			

			$sql = "UPDATE otrasespecialidades 
			SET fechalimiteejecucion = '$fechalimiteejecucionEdit'
			WHERE id = '$id'";
			mysqli_query($connection, $sql);
			//if-else statement in executing our query
			
			
	}

	header('location: ../tables/usuarioOtraEspecialidadBuscar.php?criterio='.$documento.'&autorizacion='.$documento.'&editFechaMax=s');

?>