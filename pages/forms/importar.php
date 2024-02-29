<?php
error_reporting(0);
include_once "../../api/conexionConvenio.php"; 
$sesion = $_GET['sesion'];

$sql = "INSERT INTO autorizacion SELECT * FROM autorizacion_prueba WHERE gestiono ='$sesion' and estadocargue = 'sinsubir'";


 $result = mysqli_query($connection, $sql);



  $sqlSelect1 = "UPDATE autorizacion_prueba SET estadocargue = 'subido' where gestiono ='$sesion'";
    $result = mysqli_query($connection, $sqlSelect1);
    
    header ('location: agendarUsuarioConvenioMasivo.php');


?>