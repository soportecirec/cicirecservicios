<?php
error_reporting(0);
include_once "../../api/conexion.php";
$sesion = $_GET['sesion'];



 

  $sqlSelect1 = "DELETE FROM facturacion_cargue";
    $result = mysqli_query($connection, $sqlSelect1);

header ('location: masivoexcelfacturacion.php');

?>