<?php
	
	
	include_once "../../api/conexion.php"; 

	if(isset($_POST['editar'])){
		
			$id = $_GET['id'];
			$nombresesion = $_POST['nombresesion'];			
			$estadoactual = $_POST['estadoactual'];
			$bitacora = $_POST['bitacora'];
			$autorizacion = $_POST['autorizacion'];
			
			
		
			
			$sql = "UPDATE agendaotras SET nosesion = '$nombresesion', bitacora = '$bitacora', estado = '$estadoactual' where id = '$id'";
		

		//	$sql = "UPDATE otrasespecialidades SET fechacontacto = '$fecharegistro', bitacoraasitio = '$bitacora' WHERE id = '$id'";
			 mysqli_query($connection, $sql);		
	
	}
	

	header('location: ../tables/seguimientoOtraEspecialidad.php?autorizacion='.$autorizacion.'&criterio='.$autorizacion.'');

?>