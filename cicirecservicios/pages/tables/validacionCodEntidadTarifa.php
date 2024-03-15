<?php

include_once "../../api/conexion.php";


///conexión a servinte
try
{

$usuario = "BDCIREC";
$password = "C1r3c2020";
$nombredb = "SCSE";


//para oracle el tipo es oci
$conn =new PDO("oci:dbname".$nombredb,$usuario,$password);

$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch ( PDOException $e )
{  
    echo "Error: ".$e->getMessage( );  

}



// Obtener códigos de servicio y entidad de MySQL
$sqlServEntidad = "SELECT numCodServ, codEntidad FROM otrasespecialidades WHERE documento = '$documento' AND autorizacion = '$criterio'";
$resultServEntidad = mysqli_query($connection, $sqlServEntidad);
$rowServEntidad = mysqli_fetch_array($resultServEntidad);
$CodServ = $rowServEntidad['numCodServ'];
$CodEntidad = $rowServEntidad['codEntidad'];






//traer codigos de servicio y entoidad, dependiendo de los codigos se asigna tarifa
//buscar codigo
$consultaDefineTarifa = "SELECT PROTARPRO, PROTARTAR, PROTARVAA
FROM inprotar
WHERE PROTARPRO = '$CodServ' AND PROTARTAR = '$CodEntidad'";
$resultDefineTarifa = $conn->query($consultaDefineTarifa);
$rowDefineTarifa = $resultDefineTarifa->fetch();

if ($rowDefineTarifa) {
    $tarifaDefinida = $rowDefineTarifa['PROTARVAA'];
} else {
   // echo "No se encontraron resultados.";
}


          ?>