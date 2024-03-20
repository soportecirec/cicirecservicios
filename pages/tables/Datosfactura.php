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
session_start();
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
  header("location: ../../login/index.php");
  exit;
}
include_once "../../api/conexion.php";
function isActive($menu, $mode = "full")
{
  global $active_menu;
  if ($mode == "partial")
    echo ($active_menu == $menu ? "active" : "");
  else
    echo ($active_menu == $menu ? "class='active'" : "");
}


error_reporting(0);
include_once "../../api/conexion.php";
$nofactura = $_POST['nofactura'];
$fechafactura = $_POST['fechafactura'];
$autorizacion = $_POST['autorizacion'];
$documento = $_POST['documento'];
$valor = $_POST['valor'];
$sesion = $_SESSION["username"];
$cuotamoderadora = $_POST['cuotamoderadora'];
$copago = $_POST['copago'];
$asistio = $_POST['asistio'];



$valorporasitencia = 0;

$valorporasitencia = ($valor * $asistio);
          
$valorTotalRealAsistenciass = $valorporasitencia-$cuotamoderadora; 
$valorTotalRealAsistencias = $valorTotalRealAsistenciass-$copago; 



$consulta = "INSERT INTO facturacion (id, numerofactura, fechafactura, autorizacion, documento, valor, sesion, cuotamoderadora, copago) VALUES (null,'$nofactura', '$fechafactura', '$autorizacion', '$documento', '$valorTotalRealAsistencias','$sesion', '$cuotamoderadora', '$copago')";
$resultado = mysqli_query($connection, $consulta);




  
    
header('location: ../tables/seguimientoOtraEspecialidad.php?autorizacion='.$autorizacion.'&criterio='.$autorizacion.'');


?>