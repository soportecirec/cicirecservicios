<?php
	session_start();
	include_once "../../api/conexion.php"; 

	if(isset($_POST['editar'])){
		
			$id = $_GET['id'];
		//	$cantidad = $_POST['cantidad'];			
		//	$valor = $_POST['valor'];
			$documento = $_POST['documento'];
			$estados = $_POST['estados'];
			

			$sql = "UPDATE otrasespecialidades 
			SET estadogeneral = '$estados'
			WHERE id = '$id'";
			mysqli_query($connection, $sql);
			//if-else statement in executing our query
			
			
	}

	header('location: ../tables/seguimientoOtraEspecialidad.php?criterio='.$documento.'&autorizacion='.$documento.'');

?>