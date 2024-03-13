<?php
	
	session_start();
	$sesion = $_SESSION["username"];
	
	include_once "../../api/conexion.php"; 

	if(isset($_POST['editar'])){
		
	
			$id = $_GET['id'];
			$fechagenda = $_POST['fechagenda'];
			$autorizacion = $_POST['autorizacion'];
			$documento = $_POST['documento'];
			$nombresesion = $_POST['nombresesion'];
			$estadoactual = $_POST['estadoactual'];
			$bitacora = $_POST['bitacora'];
			$crear = $_POST['crear'];
		
			
			
			
			$sql = "
			INSERT INTO agendaotras values (
			null,
			'$nombresesion',
			'$autorizacion',
			'$fechagenda',
			'$documento',
			'',
			'$sesion',
			'$estadoactual',
			'$bitacora',
			''
			
			)
			
			";
		
			 mysqli_query($connection, $sql);		
	
	}
	

	header('location: ../tables/seguimientoOtraEspecialidad.php?autorizacion='.$autorizacion.'&criterio='.$autorizacion.'');

?>