<?php
	session_start();
	include_once "../../api/conexion.php"; 

	if(isset($_GET['id'])){
		$documento = $_GET['documento'];
		
			$sql = "DELETE FROM otrasespecialidades WHERE id = '".$_GET['id']."'";
			mysqli_query($connection, $sql);
		//if-else statement in executing our query
			
	
	}

	header('location: ../tables/usuarioOtraEspecialidadBuscar.php?criterio='.$documento.'');

?>