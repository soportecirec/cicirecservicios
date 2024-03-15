<?php
	
	
	include_once "../../api/conexion.php"; 

	if(isset($_POST['editar'])){
		
	
			$id = $_GET['id'];
			$fecharegistro = $_POST['fecharegistro'];
			$autorizacion = $_POST['autorizacion'];
			$tiposeguimiento = $_POST['tiposeguimiento'];	
			$bitacora = $_POST['bitacora'];
			$crear = $_POST['crear'];
		
			
			
			
			$sql = "INSERT into contacto values ( null, '$autorizacion', '$fecharegistro', '$bitacora', '$crear','$tiposeguimiento')";
			 mysqli_query($connection, $sql);		
	
	}
	

	header('location: ../tables/seguimientoOtraEspecialidad.php?autorizacion='.$autorizacion.'&criterio='.$autorizacion.'');

?>