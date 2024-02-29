<?php
	session_start();
	include_once "../../api/conexion.php"; 

	if(isset($_GET['id'])){
		$autorizacion = $_GET['autorizacion'];
		
			$sql = "DELETE FROM agendaotras WHERE id = '".$_GET['id']."'";
			mysqli_query($connection, $sql);
		//if-else statement in executing our query
			
	
	}

	header('location: ../tables/seguimientoOtraEspecialidad.php?autorizacion='.$autorizacion.'&criterio='.$autorizacion.'');

?>