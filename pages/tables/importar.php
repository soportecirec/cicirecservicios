<?php
error_reporting(0);
include_once "../../api/conexion.php";
$sesion = $_GET['sesion'];

$sql = "INSERT INTO otrasespecialidades SELECT * FROM app_cargue WHERE estadocargue = 'sinsubir'";


 $result = mysqli_query($connection, $sql);



  $sqlSelect1 = "UPDATE app_cargue SET estadocargue = 'subido' where gestiono ='$sesion'";
    $result = mysqli_query($connection, $sqlSelect1);

    
    
    header ('location: ../forms/usuarioOtraEspecialidad.php');


?>