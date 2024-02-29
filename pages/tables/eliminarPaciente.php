<?php
	session_start();
	include_once "../../api/conexion.php"; 

	if(isset($_GET['id'])){
		
			$sql = "DELETE FROM paciente WHERE documento = '".$_GET['id']."'";
			mysqli_query($connection, $sql);
		//if-else statement in executing our query
			
	
	}

	header('location: gestionUsuarios.php');

?>