<?php

include_once "../../api/conexion.php"; 

// Obtener el valor de la autorización enviado por AJAX
$autorizacion = $_POST['autorizacion'];

// Consulta SQL para verificar si la autorización existe
$sql = "SELECT * FROM otrasespecialidades WHERE autorizacion = '$autorizacion'";
$result = $connection->query($sql);

// Crear un array para la respuesta JSON
$response = array();

if ($result->num_rows > 0) {
    // La autorización existe
    $response['existe'] = true;
} else {
    // La autorización no existe
    $response['existe'] = false;
}

// Devolver la respuesta en formato JSON
echo json_encode($response);


?>