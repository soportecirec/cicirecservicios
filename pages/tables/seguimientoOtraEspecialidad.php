<?php
error_reporting(0);
session_start();
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
  header("location: ../../login/index.php");
  exit;
}
<<<<<<< Updated upstream
 include_once "../../api/conexion.php"; 
  function isActive($menu, $mode="full"){
    global $active_menu;
    if ($mode == "partial")
      echo ($active_menu == $menu? "active": "");
    else
      echo ($active_menu == $menu? "class='active'": "");
  }
  $host= $_SERVER["HTTP_HOST"];
  $url= $_SERVER["REQUEST_URI"];
  $link = "https://" . $host . $url;
    error_reporting(0);
    date_default_timezone_set('America/Bogota');    
    $fecha = date('d-m-Y');
    $sesion= $_SESSION["username"];
    $fechasesion = date('d-m-Y h:i:s');
    $buscar = $_POST['buscar'];
    $criterio = $_GET['criterio'];
    $autorizacion = $_GET['autorizacion'];
   


                 if($criterio == ''){
                    $usuario = $buscar;

                 }else{
                    $usuario = $criterio;

                 }
    $sql2 = "SELECT *  from users where correo = '$sesion'";
    $result2 = mysqli_query($connection, $sql2);
    $row2 = mysqli_fetch_array($result2);
    $perfil = $row2['sintomas'];
=======
include_once "../../api/conexion.php";
function isActive($menu, $mode = "full")
{
  global $active_menu;
  if ($mode == "partial")
    echo ($active_menu == $menu ? "active" : "");
  else
    echo ($active_menu == $menu ? "class='active'" : "");
}
$host = $_SERVER["HTTP_HOST"];
$url = $_SERVER["REQUEST_URI"];
$link = "https://" . $host . $url;
error_reporting(0);
date_default_timezone_set('America/Bogota');
$fecha = date('d-m-Y');
$sesion = $_SESSION["username"];
$fechasesion = date('d-m-Y h:i:s');
$buscar = $_POST['buscar'];
$criterio = $_GET['criterio'];
$autorizacion = $_GET['autorizacion'];
if ($criterio == '') {
  $usuario = $buscar;
} else {
  $usuario = $criterio;
}
$sql2 = "SELECT *  from users where correo = '$sesion'";
$result2 = mysqli_query($connection, $sql2);
$row2 = mysqli_fetch_array($result2);
$perfil = $row2['sintomas'];
>>>>>>> Stashed changes
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta charset="ISO-8859-1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>CICIREC SERVICIOS | CIREC</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.5 -->
  <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables/dataTables.bootstrap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
<<<<<<< Updated upstream
    <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.0/css/buttons.dataTables.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
        <a href="../../index.php" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
         <span class="logo-mini"><b>CI</b>REC</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Cicirec Servicios</b></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
        
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
     
      <ul class="sidebar-menu">
        <li class="header"><?php echo $sesion;?></li>        

        <li class="treeview">
          <!--
            <a href="#">
            <i class="fa fa-user"></i> <span>Pacientes</span>
             <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>          
            </a>
            -->
          <ul class="treeview-menu">          

            <li <?php isActive("boxed") ?>>
              <a href="http://fundacioncirec.org/cicirecservicios/pages/tables/gestionUsuarios.php"><i class="fa fa-circle-o"></i> Gestión pacientes</a>
            </li>
            
            <!--<li <?php isActive("collapsed_sidebar") ?>>
              <a href="pages/forms/excelTodosParticular.php"><i class="fa fa-circle-o"></i> Descargar Excel </a>
            </li>-->

            

          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i> <span>Otras especialidades</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            

            <li <?php isActive("boxed") ?>>
              <a href="http://fundacioncirec.org/cicirecservicios/pages/forms/usuarioOtraEspecialidad.php"><i class="fa fa-circle-o"></i> Buscar paciente</a>
            </li>
            
            <li <?php isActive("boxed") ?>>
              <a href="http://fundacioncirec.org/cicirecservicios/pages/tables/masivoexcel.php"><i class="fa fa-circle-o"></i> Cargar Masivo</a>
            </li>

            <li <?php isActive("collapsed_sidebar") ?>>
              <a href="http://fundacioncirec.org/cicirecservicios/pages/forms/excelTodosOtrasEspecialidades.php"><i class="fa fa-circle-o"></i> Descargar Excel </a>
            </li>
          </ul>
        </li>        
        <li><a href="http://fundacioncirec.org/cicirecservicios/logout.php"><i class="fa fa-book"></i> <span>Cerrar sesión</span></a></li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
  
  
  
  
  
  

      <!-- Content Wrapper. Contains page content -->    

      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        
        
        
        
     
   
        <section class="content-header">
              


<div class="panel panel-default">
    <div class="panel-heading"><strong>Información del paciente</strong></div>
    <div class="panel-body">
        <h3 style="margin: -2px 0px 10px 5px">
            <?php
            $buscarpaciente12 = "SELECT * FROM otrasespecialidades WHERE autorizacion = '$criterio'";
            $result = mysqli_query($connection, $buscarpaciente12);
            $row = mysqli_fetch_array($result);
            //corregir caracteres especiales codigoServicio
            $nombreSinAcentosCodServicio = mb_convert_encoding($row['codigoServicio'], 'UTF-8', 'ASCII');
            $nombre = $row['nombre'];
            $estadoautorizado = $row['estadogeneral'];
            $documento = $row['documento'];
            $id = $row['id'];
            $entidadMayus = strtoupper($row['entidad']);
            $numCodServ = $row['numCodServ'];
            ?>
            Paciente: <strong><?php echo $nombre; ?></strong><br>
            Nro. documento: <strong><?php echo $documento; ?></strong><br>
        </h3>
        <div class="panel-footer">
            <p><strong>Seguimiento Autorización No.</strong> <?php echo $autorizacion; ?></p>
            <p><strong>Servicio:</strong> <?php echo $numCodServ; ?> - <?php echo $nombreSinAcentosCodServicio; ?></p>
            <p><strong>Entidad:</strong> <?php echo $entidadMayus; ?></p>
            <p><strong>Estado:</strong> <?php echo $estadoautorizado; ?></p>
            <br>
            <?php include('BorrarEditarAutorizacionOtraEspecilidad.php'); ?>
            <a href="#edit_<?php echo $id; ?>" class="btn btn-warning btn-sm" data-toggle="modal">
=======
  <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.0/css/buttons.dataTables.min.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <header class="main-header">
      <!-- Logo -->
      <a href="../../index.php" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>CI</b>REC</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Cicirec Servicios</b></span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
      </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <?php include("../../layout.php"); ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="panel panel-default">
          <div class="panel-heading"><strong>Información del paciente</strong></div>
          <div class="panel-body">
            <h3 style="margin: -2px 0px 10px 5px">
              <?php
              $buscarpaciente12 = "SELECT * FROM otrasespecialidades WHERE autorizacion = '$criterio'";
              $result = mysqli_query($connection, $buscarpaciente12);
              $row = mysqli_fetch_array($result);
              //corregir caracteres especiales codigoServicio
              $nombreSinAcentosCodServicio = mb_convert_encoding($row['codigoServicio'], 'UTF-8', 'ASCII');
              $nombre = $row['nombre'];
              $estadoautorizado = $row['estadogeneral'];
              $documento = $row['documento'];
              $id = $row['id'];
              $entidadMayus = strtoupper($row['entidad']);
              $numCodServ = $row['numCodServ'];
              $autfilrofactura = $row['autorizacion'];
              ?>
              Paciente: <strong><?php echo $nombre; ?></strong><br>
              Nro. documento: <strong><?php echo $documento; ?></strong><br>
            </h3>
            <div class="panel-footer">
              <p><strong>Seguimiento Autorización No.</strong> <?php echo $autorizacion; ?></p>
              <p><strong>Servicio:</strong> <?php echo $numCodServ; ?> - <?php echo $nombreSinAcentosCodServicio; ?></p>
              <p><strong>Entidad:</strong> <?php echo $entidadMayus; ?></p>
              <p><strong>Estado:</strong> <?php echo $estadoautorizado; ?></p>
              <?php
              //validacion facturacion
              //select tabla facturacion filtrada por autorizacion
              $buscarFacturacion = "SELECT * FROM facturacion WHERE autorizacion = '$autfilrofactura'";
              $resultFacturacion = mysqli_query($connection, $buscarFacturacion);
              $rowFacturacion = mysqli_fetch_array($resultFacturacion);
              //validar si la consulta trajo datos
              $num_rows = mysqli_num_rows($resultFacturacion);
              if ($num_rows > 0) {
                $autorizacionFacturacion = $rowFacturacion['autorizacion'];
                $numerofactura = $rowFacturacion['numerofactura'];
                $fechaFactura = $rowFacturacion['fechafactura'];
                $formulario = '';
              }
              //si no trae datos
              else {
                $autorizacionFacturacion = "No facturado";
                $formulario = '
                <div class="box box-info">
                    <div class="box-header with-border">
                    <h3 class="box-title">Ingrese los datos de la factura</h3>
                    </div>
                    <form class="form-horizontal" action="Datosfactura.php" method="POST">
                    <div class="box-body">
                    <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Número factura</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" name = "nofactura" placeholder="XX-XXXXXX" required>
                    </div>
                    </div>
                    <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Fecha Factura</label>
                    <div class="col-sm-10">
                    <input type="date" class="form-control" id="inputPassword3" name = "fechafactura" placeholder="Password" required>
                    <input type="hidden" class="form-control" id="inputEmail3" name = "autorizacion" value = "' . $autorizacion . ' ">
                    <input type="hidden" class="form-control" id="inputEmail3" name = "documento" value = " ' . $documento . ' ">
                    <input type="hidden" class="form-control" id="inputEmail3" name = "valor" value = "' . $tarifaFinalFormat . ' ">
                    <input type="hidden" class="form-control" id="inputEmail3" name = "sesion" value = "' . $sesion . ' ">
                    </div>
                    </div>                    
                    </div>
                    <div class="box-footer">                    
                    <button type="submit" class="btn btn-info pull-right">Enviar</button>
                    </div>
                    </form>
                    </div>
                ';
              }
              ?>
              <p><strong>Numero factura:</strong> <?php echo $numerofactura; ?></p>
              <p><strong>Fecha factura:</strong> <?php echo $fechaFactura; ?></p>
              <br>
              <?php include('BorrarEditarAutorizacionOtraEspecilidad.php'); ?>
              <a href="#edit_<?php echo $id; ?>" class="btn btn-warning btn-sm" data-toggle="modal">
>>>>>>> Stashed changes
                <span class="glyphicon glyphicon-edit"></span>&ensp;<span style="font-size: 14px;">Editar estado</span>
              </a>
              <a href="usuarioOtraEspecialidadBuscar.php?criterio=<?php echo $documento; ?>" class="btn btn-sm btn-default btn-sm" data-toggle="modal">
                <span class="fa fa-reply"></span>&ensp;<span style="font-size: 14px;">Volver</span>
              </a>
            </div>
          </div>
        </div>
<<<<<<< Updated upstream
    </div>
</div>


  
         
               
            
        </section>
    
        <!-- Main content -->
        <section class="content" >
            
            
            
          <!-- Info boxes -->
          <div class="row" style="display: block; align-items: center; justify-content: center;">
            <!-- asistencias-->
            <?php
                        
            $buscarpaciente11 = "SELECT count(id) as si from agendaotras 
            where autorizacion = '$autorizacion'  and estado = 'Asistio'";                                     
            $result11=mysqli_query($connection, $buscarpaciente11);
            $row11 = mysqli_fetch_array($result11);
            $asistio = $row11['si'];
            ?>
            <div class="col-md-4 col-sm-12 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-aqua"><i class="fa fa-calendar-check-o"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Asistencias</span>
                  <span class="info-box-number"><?php echo $asistio;?></span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            <!-- No asistencias-->
            

            <!-- fix for small devices only -->
            <div class="clearfix visible-sm-block"></div>

            <!--pendientes-->
            <?php
            $buscarpaciente1111 = "SELECT *  from otrasespecialidades
            where autorizacion = '$autorizacion' ";                                     
            $result1111=mysqli_query($connection, $buscarpaciente1111);
            $row1111 = mysqli_fetch_array($result1111);                                            
            $cantidadautorizada = $row1111['cantidadautorizada'];
            $cantidadprogramada = $row1111['cantidadprogramada'];
            $valorautorizado = $row1111['valorautorizado'];
            $entidad = $row1111['entidad'];
            $pendientes = $cantidadprogramada-($asistio+$noasistio);
             
            ?>
            <div class="col-md-4 col-sm-12 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-orange"><i class="fa fa-warning"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Pendientes</span>
                  <span class="info-box-number"><?php echo $pendientes;?></span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->

            <!-- total ejecucion -->
            <?php                       
              $total = ($asistio/$cantidadprogramada)*100;
              $porcentaje = number_format($total, 2, ",", "."); 
            ?>
            <div class="col-md-4 col-sm-12 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-yellow"><i class="fa fa-pie-chart"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Ejecución</span>
                  <span class="info-box-number"><?php echo $porcentaje;?>%</span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            
            
            <div class="col-md-4 col-sm-12 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-purple"><i class="fa fa-clock-o"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Programadas</span>
                  <span class="info-box-number"><?php echo $cantidadprogramada;?></span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            
            
            
            
            
            <div class="col-md-4 col-sm-12 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-blue"><i class="fa fa-check"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Cantidad autorizada</span>
                  <span class="info-box-number"><?php echo $cantidadautorizada;?></span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            
            
            
            <?php
            //cáclculos para facturación botón
            
            
            //Obtener datos en mayuscula entidad
            $entidadMayus = strtoupper($entidad);
            
            
            //Obtener codigos servicios
            /*$buscarCodSrv = "SELECT *  from servicios WHERE codigoServicio = $numCodServ";                                     
            $resultCodSrv=mysqli_query($connection, $buscarCodSrv);
            $rowCodSrv = mysqli_fetch_array($resultCodSrv);
            $codSrv = $rowCodSrv['codigoServicio'];*/
            
            
            //Definición de tarífas COD 890502
            $tarifaPositivaCod890502 = 139100;
            $tarifaSegurosBArlCod890502 = 435200;
            $tarifaSuraArlCod890502 = 544100;
            $tarifaSuraPolizaCod890502 = 686500;
            $tarifaUnisaludCod890502 = 538700;
            
            
            
            //Validación tarifas COD 890502
            if($entidadMayus == 'POSITIVA' && $numCodServ == 890502){
                $tarifaFinal = $tarifaPositivaCod890502*$asistio;
                $tarifaFinalFormat = number_format($tarifaFinal, 0, ',', '.');
            }
            if($entidadMayus == 'SEGUROS BOLIVAR ARL' && $numCodServ == 890502){
                $tarifaFinal = $tarifaSegurosBArlCod890502*$asistio;
                $tarifaFinalFormat = number_format($tarifaFinal, 0, ',', '.');
            }
            if($entidadMayus == 'SURA ARL' && $numCodServ == 890502){
                $tarifaFinal = $tarifaSuraArlCod890502*$asistio;
                $tarifaFinalFormat = number_format($tarifaFinal, 0, ',', '.');
            }
            if($entidadMayus == 'SURA POLIZA' && $numCodServ == 890502){
                $tarifaFinal = $tarifaSuraPolizaCod890502*$asistio;
                $tarifaFinalFormat = number_format($tarifaFinal, 0, ',', '.');
            }
            if($entidadMayus == 'UNISALUD' && $numCodServ == 890502){
                $tarifaFinal = $tarifaUnisaludCod890502*$asistio;
                $tarifaFinalFormat = number_format($tarifaFinal, 0, ',', '.');
            }
            
            
            
            //Definición de tarífas COD 931001
            $tarifaPositivaCod931001 = 19300;
            $tarifaSegurosBArlCod931001 = 21100;
            $tarifaSuraArlCod931001 = 23800;
            $tarifaSuraPolizaCod931001 = 31700;
            $tarifaUnisaludCod931001 = 22100;
            
            
            
            //Validación tarifas COD 931001
            if($entidadMayus == 'POSITIVA' && $numCodServ == 931001){
                $tarifaFinal = $tarifaPositivaCod931001*$asistio;
                $tarifaFinalFormat = number_format($tarifaFinal, 0, ',', '.');
            }
            if($entidadMayus == 'SEGUROS BOLIVAR ARL' && $numCodServ == 931001){
                $tarifaFinal = $tarifaSegurosBArlCod931001*$asistio;
                $tarifaFinalFormat = number_format($tarifaFinal, 0, ',', '.');
            }
            if($entidadMayus == 'SURA ARL' && $numCodServ == 931001){
                $tarifaFinal = $tarifaSuraArlCod931001*$asistio;
                $tarifaFinalFormat = number_format($tarifaFinal, 0, ',', '.');
            }
            if($entidadMayus == 'SURA POLIZA' && $numCodServ == 931001){
                $tarifaFinal = $tarifaSuraPolizaCod931001*$asistio;
                $tarifaFinalFormat = number_format($tarifaFinal, 0, ',', '.');
            }
            if($entidadMayus == 'UNISALUD' && $numCodServ == 931001){
                $tarifaFinal = $tarifaUnisaludCod931001*$asistio;
                $tarifaFinalFormat = number_format($tarifaFinal, 0, ',', '.');
            }
            
            
            
            
            //Definición de tarífas COD 938303
            $tarifaPositivaCod938303 = 19300;
            $tarifaSegurosBArlCod938303 = 21100;
            $tarifaSuraArlCod938303 = 23800;
            $tarifaSuraPolizaCod938303 = 31700;
            $tarifaUnisaludCod938303 = 22100;
            
            
            
            //Validación tarifas COD 931001
            if($entidadMayus == 'POSITIVA' && $numCodServ == 938303){
                $tarifaFinal = $tarifaPositivaCod938303*$asistio;
                $tarifaFinalFormat = number_format($tarifaFinal, 0, ',', '.');
            }
            if($entidadMayus == 'SEGUROS BOLIVAR ARL' && $numCodServ == 938303){
                $tarifaFinal = $tarifaSegurosBArlCod938303*$asistio;
                $tarifaFinalFormat = number_format($tarifaFinal, 0, ',', '.');
            }
            if($entidadMayus == 'SURA ARL' && $numCodServ == 938303){
                $tarifaFinal = $tarifaSuraArlCod938303*$asistio;
                $tarifaFinalFormat = number_format($tarifaFinal, 0, ',', '.');
            }
            if($entidadMayus == 'SURA POLIZA' && $numCodServ == 938303){
                $tarifaFinal = $tarifaSuraPolizaCod938303*$asistio;
                $tarifaFinalFormat = number_format($tarifaFinal, 0, ',', '.');
            }
            if($entidadMayus == 'UNISALUD' && $numCodServ == 938303){
                $tarifaFinal = $tarifaUnisaludCod938303*$asistio;
                $tarifaFinalFormat = number_format($tarifaFinal, 0, ',', '.');
            }
            
            
            
            
            
            
            //Definición de tarífas COD 937000
            $tarifaPositivaCod937000 = 19300;
            $tarifaSegurosBArlCod937000 = 21100;
            $tarifaSuraArlCod937000 = 23800;
            $tarifaSuraPolizaCod937000 = 31700;
            $tarifaUnisaludCod937000 = 22100;
            
            
            
            //Validación tarifas COD 931001
            if($entidadMayus == 'POSITIVA' && $numCodServ == 937000){
                $tarifaFinal = $tarifaPositivaCod937000*$asistio;
                $tarifaFinalFormat = number_format($tarifaFinal, 0, ',', '.');
            }
            if($entidadMayus == 'SEGUROS BOLIVAR ARL' && $numCodServ == 937000){
                $tarifaFinal = $tarifaSegurosBArlCod937000*$asistio;
                $tarifaFinalFormat = number_format($tarifaFinal, 0, ',', '.');
            }
            if($entidadMayus == 'SURA ARL' && $numCodServ == 937000){
                $tarifaFinal = $tarifaSuraArlCod937000*$asistio;
                $tarifaFinalFormat = number_format($tarifaFinal, 0, ',', '.');
            }
            if($entidadMayus == 'SURA POLIZA' && $numCodServ == 937000){
                $tarifaFinal = $tarifaSuraPolizaCod937000*$asistio;
                $tarifaFinalFormat = number_format($tarifaFinal, 0, ',', '.');
            }
            if($entidadMayus == 'UNISALUD' && $numCodServ == 937000){
                $tarifaFinal = $tarifaUnisaludCod937000*$asistio;
                $tarifaFinalFormat = number_format($tarifaFinal, 0, ',', '.');
            }
            
            
            
            
            
            //Definición de tarífas COD 938688
            $tarifaPositivaCod938688= 'falta';
            $tarifaSegurosBArlCod938688 = 24200;
            $tarifaSuraArlCod938688 = 23800;
            $tarifaSuraPolizaCod938688 = 28500;
            $tarifaUnisaludCod938688 = 24000;
            
            
            
            //Validación tarifas COD 931001
            if($entidadMayus == 'POSITIVA' && $numCodServ == 938688){
                $tarifaFinal = $tarifaPositivaCod938688*$asistio;
                $tarifaFinalFormat = number_format($tarifaFinal, 0, ',', '.');
            }
            if($entidadMayus == 'SEGUROS BOLIVAR ARL' && $numCodServ == 938688){
                $tarifaFinal = $tarifaSegurosBArlCod938688*$asistio;
                $tarifaFinalFormat = number_format($tarifaFinal, 0, ',', '.');
            }
            if($entidadMayus == 'SURA ARL' && $numCodServ == 938688){
                $tarifaFinal = $tarifaSuraArlCod938688*$asistio;
                $tarifaFinalFormat = number_format($tarifaFinal, 0, ',', '.');
            }
            if($entidadMayus == 'SURA POLIZA' && $numCodServ == 938688){
                $tarifaFinal = $tarifaSuraPolizaCod938688*$asistio;
                $tarifaFinalFormat = number_format($tarifaFinal, 0, ',', '.');
            }
            if($entidadMayus == 'UNISALUD' && $numCodServ == 938688){
                $tarifaFinal = $tarifaUnisaludCod938688*$asistio;
                $tarifaFinalFormat = number_format($tarifaFinal, 0, ',', '.');
            }
            
            
            
            ?>
            
            <div class="col-md-4 col-sm-12 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-green"><i class="fa fa-money"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Facturación</span>
                  <span class="info-box-number">$<?php echo $tarifaFinalFormat;?></span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            
        
           
            
            
            
            
          </div><!-- /.row -->
          
        <!-- validacion para imprimir vista de proceso terminado --> 
            <?php
                    if($asistio == $cantidadprogramada){
                        $facturacion = "PROCESO LISTO PARA FACTURAR";
                    ?>
                    <div class="alert alert-success alert-dismissible">
                    <h4><i class="icon fa fa-check"></i>Servicio Finalizado</h4>
                    PROCESO LISTO PARA FACTURAR
                    </div>
                    <?php
                    }
                    else{
                        $facturacion = "";
                    }
                    
            ?>
        <!-- Fin validacion para imprimir vista de proceso terminado -->     
        
          
          <!-- Main row -->
          <div class="row" style="display: flex; align-items: center; justify-content: center;">
            <!-- Left col -->
            <div class="col-md-12">
              <!-- MAP & BOX PANE -->           
             

              <!-- TABLE: LATEST ORDERS -->
              <div class="box box-info" style="padding: 20px; width: #;">
                <div class="box-header with-border">
                  <h3 class="box-title"><strong>Seguimiento Sesiones</strong></h3>
                  
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="table-responsive">
                    <table class="table no-margin">
                      <thead>
                        <tr>
                          <th>Sesiones</th>                        
                          <th>Fecha</th>
                          <th>Estado</th>
                          <th>Acciones</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                            $buscarpaciente = "SELECT *  from otrasespecialidades 
                            where autorizacion = '$autorizacion'";
                                              
                            $result=mysqli_query($connection, $buscarpaciente);
                            $row = mysqli_fetch_array($result);
                            $cantidadprogramada = $row['cantidadprogramada'];
                            $documento = $row['documento'];
                            $autorizacion =  $row['autorizacion'];
                            $cantidad = $row['cantidadautorizada'];
                                                 
                                                         
                            $buscaragenda = "SELECT *  from agendaotras where autorizacion = '$autorizacion'";
                            $result1=mysqli_query($connection,  $buscaragenda);
                            while($roww = mysqli_fetch_array($result1)):
                            $fechaagenda = $roww['fechaagenda'];
                            $estado = $roww['estado'];
                            $nosesion = $roww['nosesion'];
                            $bitacorasesion = $roww['bitacora'];                        

                        ?>
=======
      </section>
      <!-- Main content -->
      <section class="content">
        <!-- Info boxes -->
        <div class="row" style="display: block; align-items: center; justify-content: center;">
          <!-- asistencias-->
          <?php
          $buscarpaciente11 = "SELECT count(id) as si from agendaotras 
            where autorizacion = '$autorizacion'  and estado = 'Asistio'";
          $result11 = mysqli_query($connection, $buscarpaciente11);
          $row11 = mysqli_fetch_array($result11);
          $asistio = $row11['si'];
          ?>
          <div class="col-md-4 col-sm-12 col-xs-12">
            <div class="info-box">
              <span class="info-box-icon bg-aqua"><i class="fa fa-calendar-check-o"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Asistencias</span>
                <span class="info-box-number"><?php echo $asistio; ?></span>
              </div><!-- /.info-box-content -->
            </div><!-- /.info-box -->
          </div><!-- /.col -->
          <!-- No asistencias-->
          <!-- fix for small devices only -->
          <div class="clearfix visible-sm-block"></div>
          <!--pendientes-->
          <?php
          $buscarpaciente1111 = "SELECT *  from otrasespecialidades
            where autorizacion = '$autorizacion' ";
          $result1111 = mysqli_query($connection, $buscarpaciente1111);
          $row1111 = mysqli_fetch_array($result1111);
          $cantidadautorizada = $row1111['cantidadautorizada'];
          $cantidadprogramada = $row1111['cantidadprogramada'];
          $valorautorizado = $row1111['valorautorizado'];
          $entidad = $row1111['entidad'];
          $pendientes = $cantidadautorizada - $cantidadprogramada;
          //$pendientes = $cantidadprogramada - ($asistio + $noasistio);
          ?>
          <div class="col-md-4 col-sm-12 col-xs-12">
            <div class="info-box">
              <span class="info-box-icon bg-orange"><i class="fa fa-warning"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Pendientes por programar</span>
                <span class="info-box-number"><?php echo $pendientes; ?></span>
              </div><!-- /.info-box-content -->
            </div><!-- /.info-box -->
          </div><!-- /.col -->
          <!-- total ejecucion -->
          <?php
          $total = ($asistio / $cantidadprogramada) * 100;
          $porcentaje = number_format($total, 2, ",", ".");
          ?>


           <!--     
          <div class="col-md-4 col-sm-12 col-xs-12">
            <div class="info-box">
              <span class="info-box-icon bg-yellow"><i class="fa fa-pie-chart"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Ejecución</span>
                <span class="info-box-number"><?php echo $porcentaje; ?>%</span>
              </div>
            </div>
          </div>--><!-- /.col -->



          <div class="col-md-4 col-sm-12 col-xs-12">
            <div class="info-box">
              <span class="info-box-icon bg-yellow"><i class="fa fa-pie-chart"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Pendientes por asistir</span>
                <span class="info-box-number"><?php echo $cantidadautorizada - $asistio; ?></span>
              </div>
            </div>
          </div>




          <div class="col-md-4 col-sm-12 col-xs-12">
            <div class="info-box">
              <span class="info-box-icon bg-purple"><i class="fa fa-clock-o"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Programadas</span>
                <span class="info-box-number"><?php echo $cantidadprogramada; ?></span>
              </div><!-- /.info-box-content -->
            </div><!-- /.info-box -->
          </div><!-- /.col -->
          <div class="col-md-4 col-sm-12 col-xs-12">
            <div class="info-box">
              <span class="info-box-icon bg-blue"><i class="fa fa-check"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Cantidad autorizada</span>
                <span class="info-box-number"><?php echo $cantidadautorizada; ?></span>
              </div><!-- /.info-box-content -->
            </div><!-- /.info-box -->
          </div><!-- /.col -->
          <?php
          //cáclculos para facturación botón
          //Obtener datos en mayuscula entidad
          $entidadMayus = strtoupper($entidad);
          //Obtener codigos servicios
          /*$buscarCodSrv = "SELECT *  from servicios WHERE codigoServicio = $numCodServ";                                     
            $resultCodSrv=mysqli_query($connection, $buscarCodSrv);
            $rowCodSrv = mysqli_fetch_array($resultCodSrv);
            $codSrv = $rowCodSrv['codigoServicio'];*/
          //Definición de tarífas COD 890502
          $tarifaPositivaCod890502 = 139100;
          $tarifaSegurosBArlCod890502 = 435200;
          $tarifaSuraArlCod890502 = 544100;
          $tarifaSuraPolizaCod890502 = 686500;
          $tarifaUnisaludCod890502 = 538700;
          //Validación tarifas COD 890502
          if ($entidadMayus == 'POSITIVA' && $numCodServ == 890502) {
            $tarifaFinal = $tarifaPositivaCod890502 * $asistio;
            $tarifaFinalFormat = number_format($tarifaFinal, 0, ',', '.');
          }
          if ($entidadMayus == 'SEGUROS BOLIVAR ARL' && $numCodServ == 890502) {
            $tarifaFinal = $tarifaSegurosBArlCod890502 * $asistio;
            $tarifaFinalFormat = number_format($tarifaFinal, 0, ',', '.');
          }
          if ($entidadMayus == 'SURA ARL' && $numCodServ == 890502) {
            $tarifaFinal = $tarifaSuraArlCod890502 * $asistio;
            $tarifaFinalFormat = number_format($tarifaFinal, 0, ',', '.');
          }
          if ($entidadMayus == 'SURA POLIZA' && $numCodServ == 890502) {
            $tarifaFinal = $tarifaSuraPolizaCod890502 * $asistio;
            $tarifaFinalFormat = number_format($tarifaFinal, 0, ',', '.');
          }
          if ($entidadMayus == 'UNISALUD' && $numCodServ == 890502) {
            $tarifaFinal = $tarifaUnisaludCod890502 * $asistio;
            $tarifaFinalFormat = number_format($tarifaFinal, 0, ',', '.');
          }
          //Definición de tarífas COD 931001
          $tarifaPositivaCod931001 = 19300;
          $tarifaSegurosBArlCod931001 = 21100;
          $tarifaSuraArlCod931001 = 23800;
          $tarifaSuraPolizaCod931001 = 31700;
          $tarifaUnisaludCod931001 = 22100;
          //Validación tarifas COD 931001
          if ($entidadMayus == 'POSITIVA' && $numCodServ == 931001) {
            $tarifaFinal = $tarifaPositivaCod931001 * $asistio;
            $tarifaFinalFormat = number_format($tarifaFinal, 0, ',', '.');
          }
          if ($entidadMayus == 'SEGUROS BOLIVAR ARL' && $numCodServ == 931001) {
            $tarifaFinal = $tarifaSegurosBArlCod931001 * $asistio;
            $tarifaFinalFormat = number_format($tarifaFinal, 0, ',', '.');
          }
          if ($entidadMayus == 'SURA ARL' && $numCodServ == 931001) {
            $tarifaFinal = $tarifaSuraArlCod931001 * $asistio;
            $tarifaFinalFormat = number_format($tarifaFinal, 0, ',', '.');
          }
          if ($entidadMayus == 'SURA POLIZA' && $numCodServ == 931001) {
            $tarifaFinal = $tarifaSuraPolizaCod931001 * $asistio;
            $tarifaFinalFormat = number_format($tarifaFinal, 0, ',', '.');
          }
          if ($entidadMayus == 'UNISALUD' && $numCodServ == 931001) {
            $tarifaFinal = $tarifaUnisaludCod931001 * $asistio;
            $tarifaFinalFormat = number_format($tarifaFinal, 0, ',', '.');
          }
          //Definición de tarífas COD 938303
          $tarifaPositivaCod938303 = 19300;
          $tarifaSegurosBArlCod938303 = 21100;
          $tarifaSuraArlCod938303 = 23800;
          $tarifaSuraPolizaCod938303 = 31700;
          $tarifaUnisaludCod938303 = 22100;
          //Validación tarifas COD 931001
          if ($entidadMayus == 'POSITIVA' && $numCodServ == 938303) {
            $tarifaFinal = $tarifaPositivaCod938303 * $asistio;
            $tarifaFinalFormat = number_format($tarifaFinal, 0, ',', '.');
          }
          if ($entidadMayus == 'SEGUROS BOLIVAR ARL' && $numCodServ == 938303) {
            $tarifaFinal = $tarifaSegurosBArlCod938303 * $asistio;
            $tarifaFinalFormat = number_format($tarifaFinal, 0, ',', '.');
          }
          if ($entidadMayus == 'SURA ARL' && $numCodServ == 938303) {
            $tarifaFinal = $tarifaSuraArlCod938303 * $asistio;
            $tarifaFinalFormat = number_format($tarifaFinal, 0, ',', '.');
          }
          if ($entidadMayus == 'SURA POLIZA' && $numCodServ == 938303) {
            $tarifaFinal = $tarifaSuraPolizaCod938303 * $asistio;
            $tarifaFinalFormat = number_format($tarifaFinal, 0, ',', '.');
          }
          if ($entidadMayus == 'UNISALUD' && $numCodServ == 938303) {
            $tarifaFinal = $tarifaUnisaludCod938303 * $asistio;
            $tarifaFinalFormat = number_format($tarifaFinal, 0, ',', '.');
          }
          //Definición de tarífas COD 937000
          $tarifaPositivaCod937000 = 19300;
          $tarifaSegurosBArlCod937000 = 21100;
          $tarifaSuraArlCod937000 = 23800;
          $tarifaSuraPolizaCod937000 = 31700;
          $tarifaUnisaludCod937000 = 22100;
          //Validación tarifas COD 931001
          if ($entidadMayus == 'POSITIVA' && $numCodServ == 937000) {
            $tarifaFinal = $tarifaPositivaCod937000 * $asistio;
            $tarifaFinalFormat = number_format($tarifaFinal, 0, ',', '.');
          }
          if ($entidadMayus == 'SEGUROS BOLIVAR ARL' && $numCodServ == 937000) {
            $tarifaFinal = $tarifaSegurosBArlCod937000 * $asistio;
            $tarifaFinalFormat = number_format($tarifaFinal, 0, ',', '.');
          }
          if ($entidadMayus == 'SURA ARL' && $numCodServ == 937000) {
            $tarifaFinal = $tarifaSuraArlCod937000 * $asistio;
            $tarifaFinalFormat = number_format($tarifaFinal, 0, ',', '.');
          }
          if ($entidadMayus == 'SURA POLIZA' && $numCodServ == 937000) {
            $tarifaFinal = $tarifaSuraPolizaCod937000 * $asistio;
            $tarifaFinalFormat = number_format($tarifaFinal, 0, ',', '.');
          }
          if ($entidadMayus == 'UNISALUD' && $numCodServ == 937000) {
            $tarifaFinal = $tarifaUnisaludCod937000 * $asistio;
            $tarifaFinalFormat = number_format($tarifaFinal, 0, ',', '.');
          }
          //Definición de tarífas COD 938688
          $tarifaPositivaCod938688 = 'falta';
          $tarifaSegurosBArlCod938688 = 24200;
          $tarifaSuraArlCod938688 = 23800;
          $tarifaSuraPolizaCod938688 = 28500;
          $tarifaUnisaludCod938688 = 24000;
          //Validación tarifas COD 931001
          if ($entidadMayus == 'POSITIVA' && $numCodServ == 938688) {
            $tarifaFinal = $tarifaPositivaCod938688 * $asistio;
            $tarifaFinalFormat = number_format($tarifaFinal, 0, ',', '.');
          }
          if ($entidadMayus == 'SEGUROS BOLIVAR ARL' && $numCodServ == 938688) {
            $tarifaFinal = $tarifaSegurosBArlCod938688 * $asistio;
            $tarifaFinalFormat = number_format($tarifaFinal, 0, ',', '.');
          }
          if ($entidadMayus == 'SURA ARL' && $numCodServ == 938688) {
            $tarifaFinal = $tarifaSuraArlCod938688 * $asistio;
            $tarifaFinalFormat = number_format($tarifaFinal, 0, ',', '.');
          }
          if ($entidadMayus == 'SURA POLIZA' && $numCodServ == 938688) {
            $tarifaFinal = $tarifaSuraPolizaCod938688 * $asistio;
            $tarifaFinalFormat = number_format($tarifaFinal, 0, ',', '.');
          }
          if ($entidadMayus == 'UNISALUD' && $numCodServ == 938688) {
            $tarifaFinal = $tarifaUnisaludCod938688 * $asistio;
            $tarifaFinalFormat = number_format($tarifaFinal, 0, ',', '.');
          }
          ?>
          <div class="col-md-4 col-sm-12 col-xs-12">
            <div class="info-box">
              <span class="info-box-icon bg-green"><i class="fa fa-money"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Facturación</span>
                <span class="info-box-number">$<?php echo $tarifaFinalFormat; ?></span>
              </div><!-- /.info-box-content -->
            </div><!-- /.info-box -->
          </div><!-- /.col -->
          <?php
          ?>
        </div><!-- /.row -->
        <!-- validacion para imprimir vista de proceso terminado -->
        <?php
        if ($asistio == $cantidadautorizada) {
          $facturacion = "PROCESO LISTO PARA FACTURAR";
        ?>
          <div class="alert alert-success alert-dismissible">
            <h4><i class="icon fa fa-check"></i>Servicio Finalizado</h4>
            PROCESO FACTURADO
          </div>
          <?php
          //echo $perfil;
          
          if ($perfil == 'facturacion') {
                    
          echo $formulario;
          }
          ?>
        <?php
        } else {
          $facturacion = "";
        }
        ?>
        <!-- Fin validacion para imprimir vista de proceso terminado -->
        <!-- Main row -->
        <div class="row" style="display: flex; align-items: center; justify-content: center;">
          <!-- Left col -->
          <div class="col-md-12">
            <!-- MAP & BOX PANE -->
            <!-- TABLE: LATEST ORDERS -->
            <div class="box box-info" style="padding: 20px; width: '';">
              <div class="box-header with-border">
                <h3 class="box-title"><strong>Seguimiento Sesiones</strong></h3>
              </div><!-- /.box-header -->
              <div class="box-body">
                <div class="table-responsive">
                  <table class="table no-margin">
                    <thead>
                      <tr>
                        <th>Sesiones</th>
                        <th>Fecha</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $buscarpaciente = "SELECT *  from otrasespecialidades 
                            where autorizacion = '$autorizacion'";
                      $result = mysqli_query($connection, $buscarpaciente);
                      $row = mysqli_fetch_array($result);
                      $cantidadprogramada = $row['cantidadprogramada'];
                      $documento = $row['documento'];
                      $autorizacion =  $row['autorizacion'];
                      $cantidad = $row['cantidadautorizada'];
                      $buscaragenda = "SELECT *  from agendaotras where autorizacion = '$autorizacion'";
                      $result1 = mysqli_query($connection,  $buscaragenda);
                      while ($roww = mysqli_fetch_array($result1)) :
                        $fechaagenda = $roww['fechaagenda'];
                        $estado = $roww['estado'];
                        $nosesion = $roww['nosesion'];
                        $bitacorasesion = $roww['bitacora'];
                      ?>
>>>>>>> Stashed changes
                        <tr>
                          <td><?php echo $nosesion; ?></td>
                          <td>
                            <?php
                            if ($fechaagenda == '') {
                            ?>
                              <label>Sin asignar</label>
                            <?php
                            } else {
                            ?>
                              <input type="text" name="fecha" placeholder="" class="form-control" value="<?php echo $fechaagenda; ?>" readonly>
                            <?php
                            }
                            ?>
                          </td>
<<<<<<< Updated upstream
                          <td><?php echo $estado;?></td>
                          <td> 
                          <?php                   
                            if($perfil == 'administrador'){
                          ?>                         
                          <a href="#editsesion_<?php echo $roww['id']; ?>" class="btn btn-default btn-sm" data-toggle="modal"><span class="glyphicon glyphicon-edit"></span> Modificar sesión</a>
                          <a href="#deletesesion_<?php echo $roww['id']; ?>" class="btn btn-default btn-sm" data-toggle="modal"><span class="glyphicon glyphicon-trash"></span> Eliminar sesión</a>
                          <?php 
                          }else{
                          ?>
                          <a href="#editsesion_<?php echo $roww['id']; ?>" class="btn btn-default btn-sm" data-toggle="modal"><span class="glyphicon glyphicon-edit"></span> Modificar sesión</a>
                          <?php 
                          }
                          ?>



                            
                            <?php include('BorrarEditarModalSesionOtraEspecialidad.php');?>
                                   
                        </td>
                        </tr>
                        
                      </tbody>
                      <?php
                       endwhile;
                      ?>
                    </table>
                  </div><!-- /.table-responsive -->
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                  <?php
                    $contar = "SELECT count(id)  from agendaotras where autorizacion = '$autorizacion'";
                    $result2=mysqli_query($connection,  $contar);
                    $rowww = mysqli_fetch_array($result2);
                    $sesiones = $rowww[0];                                                
                    if($cantidadprogramada == $sesiones){
                    }else{
                    ?>
                    <a href="#crear_<?php echo $row['id']; ?>" class="btn btn-sm btn-info btn-flat pull-left" data-toggle="modal">Agregar sesión</a>
                    <?php include('crearSesionOtraEspecialidad.php');?>
                    <?php
                    }
                    ?>
                  <a href="usuarioOtraEspecialidadBuscar.php?criterio=<?php echo $documento;?>" class="btn btn-sm btn-default btn-flat pull-right">Volver</a>
                </div><!-- /.box-footer -->
              </div><!-- /.box -->
            </div><!-- /.col -->

           
          </div><!-- /.row -->
          <br>

          <div class="tab-content">

                  <?php
                    $buscarcontacto = "SELECT * from contacto where autorizacion = '$autorizacion'";
                    $result5 = mysqli_query($connection,  $buscarcontacto);
                     while($row5 = mysqli_fetch_array($result5)){
                      $fechacontacto = $row5['fecha'];
                      $bitacoracontacto = $row5['bitacora'];
                      $gestionocontacto = $row5['gestiono'];
                      $tiposeguimientocontacto = $row5['tiposeguimiento'];
                      $idseguimiento = $row5['id'];

                  ?>
                  
                  <div class="tab-pane active" id="timeline">
                    <!-- The timeline -->
                    <ul class="timeline timeline-inverse">
                      <!-- timeline time label -->
                      <li class="time-label">
                        <span style = "font-size:10px;" class="bg-green">
                          <?php echo $fechacontacto; ?>
                        </span>
                      </li>
                      <!-- /.timeline-label -->
                      <!-- timeline item -->
                      
                      <li>
                        <i class="fa fa-comments bg-blue"></i>
                        <div class="timeline-item">
                          <span class="time"><i class="fa fa-clock-o"></i> <?php echo $gestionocontacto; ?></span>
                          <h3 class="timeline-header"><a href="#">Tipo seguimiento: </a><?php echo $tiposeguimientocontacto; ?></h3>
                          <div class="timeline-body">
                            <?php echo $bitacoracontacto; ?>

                            <?php                   
                            if($perfil == 'administrador'){
                            ?>

                             <a href="#borrarseguimientosesion_<?php echo $idseguimiento; ?>" class="btn btn-danger btn-xs pull-right" data-toggle="modal">Borrar</a>
                             <?php include('crearSeguimientoSesionOtraEspecialidad.php');?>
                            <?php 
                           }else{
                           }
                          ?>
                          </div>

                        </div>
                       
                      </li>
                      <?php 
                      }
                      ?>
                      <li class="time-label">
                        <div class="timeline-footer">
                            <a href="#crearseguimientosesion_<?php echo $row['id']; ?>" class="btn btn-primary btn-xs" data-toggle="modal">Agregar seguimiento</a>
                           
                            <?php include('crearSeguimientoSesionOtraEspecialidad.php');?>
                        </div>

                      </li>
                   
                      <li>
                        <i class="fa fa-clock-o bg-gray"></i>
                      </li>
                    </ul>
                  </div><!-- /.tab-pane -->
          </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      
      
      
      
      
     <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 1.2.0
        </div>
        <strong>Copyright &copy; 2021 <a href=#>CIREC</a>.</strong> Desarrolloado por el Departamento de Sistemas CIREC..
      </footer>

      <!-- Control Sidebar -->
    
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="../../plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../../bootstrap/js/bootstrap.min.js"></script>
    <!-- DataTables -->
    <script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../../plugins/datatables/dataTables.bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="../../plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
    <!-- page script -->
    <script src=" https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.print.min.js"></script>

    <!-- page script -->
    <script>
      $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": true,
          "searching": true,
          "ordering": true,
          "info": true,
          "responsive": true,
          "autoWidth": true,
          "scrollX": true,
          "language": {
             "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
          }
          
          
        });
=======
                          <td><?php echo $estado; ?></td>
                          <td>
                            <?php
                            if ($perfil == 'administrador') {
                            ?>
                              <a href="#editsesion_<?php echo $roww['id']; ?>" class="btn btn-default btn-sm" data-toggle="modal"><span class="glyphicon glyphicon-edit"></span> Modificar sesión</a>
                              <a href="#deletesesion_<?php echo $roww['id']; ?>" class="btn btn-default btn-sm" data-toggle="modal"><span class="glyphicon glyphicon-trash"></span> Eliminar sesión</a>
                            <?php
                            } else {
                            ?>
                              <a href="#editsesion_<?php echo $roww['id']; ?>" class="btn btn-default btn-sm" data-toggle="modal"><span class="glyphicon glyphicon-edit"></span> Modificar sesión</a>
                            <?php
                            }
                            ?>
                            <?php include('BorrarEditarModalSesionOtraEspecialidad.php'); ?>
                          </td>
                        </tr>
                    </tbody>
                  <?php
                      endwhile;
                  ?>
                  </table>
                </div><!-- /.table-responsive -->
              </div><!-- /.box-body -->
              <div class="box-footer clearfix">
                <?php
                $contar = "SELECT count(id)  from agendaotras where autorizacion = '$autorizacion'";
                $result2 = mysqli_query($connection,  $contar);
                $rowww = mysqli_fetch_array($result2);
                $sesiones = $rowww[0];
                //poner $cantidad cuando juan acabe de corregir                                              
                if ($cantidadprogramada == $asistio) {
                } else {
                ?>
                  <a href="#crear_<?php echo $row['id']; ?>" class="btn btn-sm btn-info btn-flat pull-left" data-toggle="modal">Agregar sesión</a>
                  <?php include('crearSesionOtraEspecialidad.php'); ?>
                <?php
                }
                ?>
                <a href="usuarioOtraEspecialidadBuscar.php?criterio=<?php echo $documento; ?>" class="btn btn-sm btn-default btn-flat pull-right">Volver</a>
              </div><!-- /.box-footer -->
            </div><!-- /.box -->
          </div><!-- /.col -->
        </div><!-- /.row -->
        <br>
        <div class="tab-content">
          <?php
          $buscarcontacto = "SELECT * from contacto where autorizacion = '$autorizacion'";
          $result5 = mysqli_query($connection,  $buscarcontacto);
          while ($row5 = mysqli_fetch_array($result5)) {
            $fechacontacto = $row5['fecha'];
            $bitacoracontacto = $row5['bitacora'];
            $gestionocontacto = $row5['gestiono'];
            $tiposeguimientocontacto = $row5['tiposeguimiento'];
            $idseguimiento = $row5['id'];
          ?>
            <div class="tab-pane active" id="timeline">
              <!-- The timeline -->
              <ul class="timeline timeline-inverse">
                <!-- timeline time label -->
                <li class="time-label">
                  <span style="font-size:10px;" class="bg-green">
                    <?php echo $fechacontacto; ?>
                  </span>
                </li>
                <!-- /.timeline-label -->
                <!-- timeline item -->
                <li>
                  <i class="fa fa-comments bg-blue"></i>
                  <div class="timeline-item">
                    <span class="time"><i class="fa fa-clock-o"></i> <?php echo $gestionocontacto; ?></span>
                    <h3 class="timeline-header"><a href="#">Tipo seguimiento: </a><?php echo $tiposeguimientocontacto; ?></h3>
                    <div class="timeline-body">
                      <?php echo $bitacoracontacto; ?>
                      <?php
                      if ($perfil == 'administrador') {
                      ?>
                        <a href="#borrarseguimientosesion_<?php echo $idseguimiento; ?>" class="btn btn-danger btn-xs pull-right" data-toggle="modal">Borrar</a>
                        <?php include('crearSeguimientoSesionOtraEspecialidad.php'); ?>
                      <?php
                      } else {
                      }
                      ?>
                    </div>
                  </div>
                </li>
              <?php
            }
              ?>
              <li class="time-label">
                <div class="timeline-footer">
                  <a href="#crearseguimientosesion_<?php echo $row['id']; ?>" class="btn btn-primary btn-xs" data-toggle="modal">Agregar seguimiento</a>
                  <?php include('crearSeguimientoSesionOtraEspecialidad.php'); ?>
                </div>
              </li>
              <li>
                <i class="fa fa-clock-o bg-gray"></i>
              </li>
              </ul>
            </div><!-- /.tab-pane -->
        </div>
      </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
    <!-- Control Sidebar -->
    <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
  </div><!-- ./wrapper -->
  <!--Include footer -->
  <?php include("../../footer.php"); ?>
  <!-- /.Include footer -->
  <!-- jQuery 2.1.4 -->
  <script src="../../plugins/jQuery/jQuery-2.1.4.min.js"></script>
  <!-- Bootstrap 3.3.5 -->
  <script src="../../bootstrap/js/bootstrap.min.js"></script>
  <!-- DataTables -->
  <script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="../../plugins/datatables/dataTables.bootstrap.min.js"></script>
  <!-- SlimScroll -->
  <script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
  <!-- FastClick -->
  <script src="../../plugins/fastclick/fastclick.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../../dist/js/app.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="../../dist/js/demo.js"></script>
  <!-- page script -->
  <script src=" https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.print.min.js"></script>
  <!-- page script -->
  <script>
    $(function() {
      $("#example1").DataTable();
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "responsive": true,
        "autoWidth": true,
        "scrollX": true,
        "language": {
          "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
        }
>>>>>>> Stashed changes
      });
    });
  </script>
  <script>
    var parent = $("ul.sidebar-menu li.active").closest("ul").closest("li");
    if (parent[0] != undefined)
      $(parent[0]).addClass("active");
  </script>
</body>
</html>