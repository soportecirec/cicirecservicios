<?php
	session_start();
	include_once "../../api/conexion.php"; 

	if(isset($_POST['editar'])){
		
			$id = $_GET['id'];
			$nombres = $_POST['nombres'];			
			$telefono = $_POST['telefono'];
			$entidad = $_POST['entidad'];
			$ciudad = $_POST['ciudad'];

			$sql = "UPDATE paciente SET nombre = '$nombres', telefono = '$telefono', entidad = '$entidad', ciudad = '$ciudad' WHERE documento = '$id'";
			mysqli_query($connection, $sql);
			//if-else statement in executing our query
			
	}

	header('location: gestionUsuarios.php');

?>