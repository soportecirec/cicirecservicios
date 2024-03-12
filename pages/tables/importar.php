<?php
error_reporting(0);
include_once "../../api/conexion.php";
$sesion = $_GET['sesion'];

$sql = "INSERT INTO otrasespecialidades SELECT * FROM app_cargue WHERE estadocargue = 'sinsubir'";


$result = mysqli_query($connection, $sql);



$sqlSelect1 = "UPDATE app_cargue SET estadocargue = 'subido' where gestiono ='$sesion'";
$result = mysqli_query($connection, $sqlSelect1);

//BORRAR CABECERAS EXCEL 
$eliminarcabecera = "DELETE FROM otrasespecialidades WHERE documento = 'documento' and autorizacion = 'autorizacion'";
$result3 = mysqli_query($connection, $eliminarcabecera);


header('location: ../forms/usuarioOtraEspecialidad.php');
