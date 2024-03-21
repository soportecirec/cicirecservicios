<?php
error_reporting(0);
include_once "../../api/conexion.php";
$sesion = $_GET['sesion'];
$sql = "INSERT INTO facturacion SELECT * FROM facturacion_cargue WHERE estado = 'sinsubir'";
$result = mysqli_query($connection, $sql);
$sqlSelect1 = "UPDATE facturacion_cargue SET estadocargue = 'subido' where gestiono ='$sesion'";
$result = mysqli_query($connection, $sqlSelect1);
//BORRAR CABECERAS EXCEL 
$eliminarcabecera = "DELETE FROM facturacion WHERE documento = 'documento' and autorizacion = 'autorizacion'";
$result3 = mysqli_query($connection, $eliminarcabecera);

$sqlSelect1 = "DELETE FROM facturacion_cargue";
    $result = mysqli_query($connection, $sqlSelect1);
header('location: ../forms/usuarioOtraEspecialidad.php');
