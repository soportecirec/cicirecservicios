<?php
error_reporting(0);
include_once "../../api/conexion.php";
$sesion = $_GET['sesion'];

$idEliminaDuplicado = $_GET['idEliminaDuplicado'];
$documento = $_GET['documento'];

echo $idEliminaDuplicado;





  $sqlSelect1 = "DELETE FROM app_cargue";
    $result = mysqli_query($connection, $sqlSelect1);

header ('location: masivoexcel.php');

?>