<?php
  include_once "../../api/conexion.php"; 
  $nombres_usuario=$_POST['nombres_usuario'];
  $codigo=$_POST['codigo'];
  $tipo_documento=$_POST['tipo_documento'];
  $telefono_usuario=$_POST['telefono_usuario'];
  $sql = "INSERT INTO paciente (nombre, documento, tipodocumento, telefono) 
  VALUES ('$nombres_usuario','$codigo','$tipo_documento','$telefono_usuario')";
  if (mysqli_query($connection, $sql)) {
    echo json_encode(array("statusCode"=>200));
  } 
  else {
    echo json_encode(array("statusCode"=>201));
  }
  mysqli_close($conn);
?>