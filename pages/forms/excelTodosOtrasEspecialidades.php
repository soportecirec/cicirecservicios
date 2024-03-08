<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <title></title>
</head>
<body>
  <?php
  include_once "../../api/conexion.php"; 
  
                                                 
                                                
$salida =""; 
$salida .= "
<table>
    <thead>
        <tr>
            <th>Autorizacion No.</th>
            <th>Servicio</th>
            <th>nombre</th>
            <th>Tipo documento</th>
            <th>Documento</th>
            <th>Entidad</th>
            <th>Tipo Programa</th>
            <th>Valor Autorizado</th>
            <th>Cantidad autorizada</th>
            <th>Cantidad programada</th>
            <th>Fecha Solicitud</th>
            <th>Fecha Autorizacion</th>
            <th>Estado</th>
            <th>Asistencias</th>
            <!--<th>No Asistencias</th>-->
            <th>Pendientes</th>
            <th>ejecución</th>
            <th>Total a facturar</th>
            <th>Gestiono</th>
        </tr>
    </thead>
    <tbody>
        "; 
        $sql = "SELECT * from otrasespecialidades "; 
        $result = mysqli_query($connection, $sql); 
        while($row = mysqli_fetch_array($result)){ 
            
        $autorizacion = $row['autorizacion'];
        
        //si asitio
            
        $buscarpaciente11 = "SELECT count(id) as si from agendaotras 
        where autorizacion = '$autorizacion'  and estado = 'Asistio'";                                
        $result11=mysqli_query($connection, $buscarpaciente11);
        $row11 = mysqli_fetch_array($result11);
        $asistio = $row11['si'];
        
        //no asistio
        
         $buscarpaciente11 = "SELECT count(id) as si from agendaotras
            where  autorizacion = '$autorizacion' and estado = 'No Asistio'";                        
            $result11=mysqli_query($connection, $buscarpaciente11);
            $row11 = mysqli_fetch_array($result11);
            $noasistio = $row11['si'];
            
        //pendientes
        
        $buscarpaciente1111 = "SELECT *  from otrasespecialidades
            where autorizacion = '$autorizacion' ";                                     
            $result1111=mysqli_query($connection, $buscarpaciente1111);
            $row1111 = mysqli_fetch_array($result1111);                                            
<<<<<<< Updated upstream
            $cantidadautorizada = $row1111['cantidadautorizada'];
=======
            $cantidadautorizada = intval($row1111['cantidadautorizada']);
            $cantidadprogramada = intval($row1111['cantidadprogramada']);
>>>>>>> Stashed changes
            $valorautorizado = $row1111['valorautorizado'];
            $pendientes = $cantidadautorizada-($asistio+$noasistio);
        //porcentaje
        
<<<<<<< Updated upstream
         $total = ($asistio/$cantidadautorizada)*100;
=======
        
            //porcentaje
         $total = ($asistio/$cantidadprogramada)*100;
>>>>>>> Stashed changes
         $porcentaje = number_format($total, 2, ",", ".");
         
         //total a facturar
         
         $totalfacturado = ($valorautorizado / $cantidadautorizada) * $asistio;
         $totalf = number_format($totalfacturado, 2, ",", ".");
        
        $salida .="
        <tr>
            <td>".$row['autorizacion']."</td>
            <td>".$row['codigoServicio']."</td>
            <td>".$row['nombre']."</td>
            <td>".$row['tipodocumento']."</td>
            <td>".$row['documento']."</td>
            <td>".$row['entidad']."</td>
            <td>".$row['tipoprograma']."</td>
            <td>".$row['valorautorizado']."</td>
            <td>".$row['cantidadautorizada']."</td>
            <td>".$row['cantidadprogramada']."</td>
            <td>".$row['fechasolicitud']."</td>
            <td>".$row['fechaautorizacion']."</td>
            <td>".$row['estadogeneral']."</td>
            <td>".$asistio."</td>
            <!--<td>".$noasistio."</td>-->
            <td>".$pendientes."</td>
            <td>".$porcentaje."</td>
             <td>".$totalf."</td>
            <td>".$row['gestiono']."</td>
        </tr>
    </tbody>
    "; 
  }
$salida .="
</table>
";

header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=otrasEspecialidades.xls");
header("Pragma: no-cache");
header("Expires: 0");
echo $salida;

                                       

