<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"/></script>
<body>
    
</body>
</html>


<?php

error_reporting(0);
include_once "../../api/conexion.php";
$nofactura = $_POST['nofactura'];
$fechafactura = $_POST['fechafactura'];
$autorizacion = $_POST['autorizacion'];
$documento = $_POST['documento'];
$valor = $_POST['valor'];
$sesion = $_GET['sesion'];

$consulta = "INSERT INTO facturacion (id, numerofactura, fechafactura, autorizacion, documento, valor,sesion) VALUES (null,'$nofactura', '$fechafactura', '$autorizacion', '$documento', '$valor','$sesion')";
$resultado = mysqli_query($connection, $consulta);




  
    
header('location: ../tables/seguimientoOtraEspecialidad.php?autorizacion='.$autorizacion.'&criterio='.$autorizacion.'');


?>