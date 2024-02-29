<?php
if (isset($_GET['term'])){
	include_once "../../api/conexion.php";
	//include_once "../../api/conexionOracle.php";
	$return_arr = array(); 
	$fetch = mysqli_query($connection,"SELECT * FROM paciente where documento like '%" . mysqli_real_escape_string($connection,($_GET['term'])) . "%' LIMIT 0 ,50"); 
	
	/* Recuperar y almacenar en conjunto los resultados de la consulta.*/
	while ($row = mysqli_fetch_array($fetch)) {
		$id_producto=$row['id'];
		//$precio=number_format($row['precio_venta'],2,".","");
		$row_array['value'] = $row['documento']." | ".$row['nombre'];
		//$row_array['id_producto']=$row['id'];
		$row_array['codigo']=$row['documento'];
		$row_array['tipo_documento']=$row['tipodocumento'];
		$row_array['nombres_usuario']=$row['nombre'];
		$row_array['telefono_usuario']=$row['telefono'];
		
		$row_array['entidad_usuario']=$row['entidad'];
		$row_array['ciudad_usuario']=$row['ciudad'];
		array_push($return_arr,$row_array);
    }
/* Codifica el resultado del array en JSON. */
echo json_encode($return_arr);

}
?>