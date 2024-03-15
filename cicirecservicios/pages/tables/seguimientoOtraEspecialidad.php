<?php
error_reporting(0);
session_start();
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
  header("location: ../../login/index.php");
  exit;
}
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
  <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.0/css/buttons.dataTables.min.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  <!-- Cambiar color paciente -->
  <script>
    var colores = ['#777076', '#386775', '#386775', '#20504e', '#193d31', '#17292b'];

    function cambiarColor() {
      var texto = document.getElementById('texto-cambiar-color');
      var colorAleatorio = colores[Math.floor(Math.random() * colores.length)];
      texto.style.transition = 'color 0.5s'; // Cambio de color en 1 segundo
      texto.style.color = colorAleatorio;
    }

    setInterval(cambiarColor, 2000); // Cambiar cada 3 segundos (3000 milisegundos)
  </script>

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
            <h3 id="texto-cambiar-color" style="margin: -2px 0px 10px 5px">
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
              $entidadMayus1 = strtoupper($row['entidad']);
              $numCodServ = $row['numCodServ'];
              $autfilrofactura = $row['autorizacion'];
              $telefono = $row['telefono'];



              //VALIDAR CAMPOS TABLA FACTURACION

              $buscarFacturacion = "SELECT * FROM facturacion WHERE autorizacion = '$autfilrofactura'";
              $resultFacturacion = mysqli_query($connection, $buscarFacturacion);
              $rowFacturacion = mysqli_fetch_array($resultFacturacion);
              //validar si la consulta trajo datos
              $num_rows = mysqli_num_rows($resultFacturacion);
              if ($num_rows > 0) {
                $autorizacionFacturacion = $rowFacturacion['autorizacion'];
                $numerofactura = $rowFacturacion['numerofactura'];
                $fechaFactura = $rowFacturacion['fechafactura'];
                $cuotamoderadora = $rowFacturacion['cuotamoderadora'];
                $copago = $rowFacturacion['copago'];
              }

              // Incluir el archivo de validación de códigos de tarifa
              include_once 'validacionCodEntidadTarifa.php';

              /*echo 'tarifa: ' . $tarifaDefinida . 
          ' para el paciente: ' . $nombre . 
          ' con codigo de servicio: ' . $numCodServ . 
          ' y entidad: '. $entidad;*/

              //Obtener datos en mayuscula entidad



              ?>
              Paciente: <strong><?php echo $nombre; ?></strong><br>
              Nro. documento: <strong><?php echo $documento; ?></strong><br>
              Telefono: <strong><?php echo $telefono; ?></strong><br>
            </h3>

            <!-- inicio footer -->
            <div class="panel-footer">
              <div class="row">
                <div class="col-xs-6 col-sm-3">
                  <p><strong>Seguimiento Autorización No.</strong> <?php echo $autorizacion; ?></p>
                </div>
                <div class="col-xs-6 col-sm-3">
                  <p><strong>Servicio:</strong> <?php echo $numCodServ; ?> - <?php echo $nombreSinAcentosCodServicio; ?></p>
                </div>
                <div class="col-xs-6 col-sm-3">
                  <p><strong>Entidad:</strong> <?php echo $entidadMayus1; ?></p>
                </div>
                <div class="col-xs-6 col-sm-3">
                  <p><strong>Estado:</strong> <?php echo $estadoautorizado; ?></p>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-6 col-sm-3">
                  <p><strong>Numero factura:</strong> <?php echo $numerofactura; ?></p>
                </div>
                <div class="col-xs-6 col-sm-3">
                  <p><strong>Fecha factura:</strong> <?php echo $fechaFactura; ?></p>
                </div>
                <div class="col-xs-6 col-sm-3">
                  <p><strong>Valor unitario:</strong> $<?php echo number_format($tarifaDefinida, 0, ',', '.'); ?></p>
                </div>
                <div class="col-xs-6 col-sm-3">
                  <p><strong>Cuota Moderadora:</strong> $<?php echo number_format($cuotamoderadora, 0, ',', '.'); ?></p>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-6 col-sm-3">
                  <p><strong>Valor Copago:</strong> $<?php echo number_format($copago, 0, ',', '.'); ?></p>
                </div>
                <div class="col-xs-6 col-sm-3">
                  <?php
                  // Operación matemática para obtener el valor real del servicio                      
                  $valorreal = $tarifaDefinida;
                  ?>
                  <!-- <p><strong>Valor unitario:</strong> $<?php echo number_format($valorreal, 0, ',', '.');; ?></p> -->
                </div>
              </div>
              <div class="row">
                <div class="col-xs-6 col-sm-6">
                  <?php include('BorrarEditarAutorizacionOtraEspecilidad.php'); ?>
                </div>
                <div class="col-xs-6 col-sm-6 text-right">
                  <?php
                  if($estadoautorizado != 'FACTURADO'){
                    ?>
                    <a href="#edit_<?php echo $id; ?>" class="btn btn-warning btn-sm" data-toggle="modal">
                    <span class="glyphicon glyphicon-edit"></span>&ensp;<span style="font-size: 14px;">Editar estado</span>
                  </a>
                  <?php
                  }
                  ?>
                  <a href="usuarioOtraEspecialidadBuscar.php?criterio=<?php echo $documento; ?>" class="btn btn-sm btn-default btn-sm" data-toggle="modal">
                    <span class="fa fa-reply"></span>&ensp;<span style="font-size: 14px;">Volver</span>
                  </a>
                </div>
              </div>
            </div>
            <!-- Fin footer -->


          </div>
        </div>
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




          
          <?php //total facturado con asistencias
          $valorporasitencia = ($valorreal * $asistio);
          
          $valorTotalRealAsistenciass = $valorporasitencia-$cuotamoderadora; 
          $valorTotalRealAsistencias = $valorTotalRealAsistenciass-$copago;          
          $variableIncludeExcel = $valorTotalRealAsistencias;
          ?>
          <div class="col-md-4 col-sm-12 col-xs-12">
            <div class="info-box">
              <span class="info-box-icon bg-green"><i class="fa fa-money"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Valor facturado</span>
                <span class="info-box-number">$<?php echo number_format($valorTotalRealAsistencias, 0, ',', '.');; ?></span>
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
            $cuotamoderadora = $rowFacturacion['cuotamoderadora'];
            $copago = $rowFacturacion['copago'];
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
                    <input type="hidden" class="form-control" id="inputEmail3" name = "valor" value = "' . $valorreal . ' ">
                    <input type="hidden" class="form-control" id="inputEmail3" name = "sesion" value = "' . $sesion . ' ">
                    <input type="hidden" class="form-control" id="inputEmail3" name = "asistio" value = "' . $asistio . ' ">
                    
                    </div>
                    </div> 
                    <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Cuota moderadora</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" name = "cuotamoderadora" placeholder="00000" required>
                    </div>
                    </div>
                    <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Valor Copago</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" name = "copago" placeholder="00000" required>
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

          <?php
          //echo $perfil;

          if ($perfil == 'facturacion') {

            echo $formulario;
          }
          ?>
        <?php
          if ($perfil == 'administrador') {

            echo $formulario;
          }
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
                        <th>Bitacora</th>
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
                          <td><?php echo $estado; ?></td>
                          <td><?php echo $bitacorasesion; ?></td>
                          <td>
                            <?php
                            if ($perfil == 'auxadmisiones') {
                            ?>
                              <a href="#editsesion_<?php echo $roww['id']; ?>" class="btn btn-default btn-sm" data-toggle="modal"><span class="glyphicon glyphicon-edit"></span> Modificar sesión</a>
                              <a href="#deletesesion_<?php echo $roww['id']; ?>" class="btn btn-default btn-sm" data-toggle="modal"><span class="glyphicon glyphicon-trash"></span> Eliminar sesión</a>
                            <?php
                            } else {
                            ?>
                              <!--<a href="#editsesion_<?php echo $roww['id']; ?>" class="btn btn-default btn-sm" data-toggle="modal"><span class="glyphicon glyphicon-edit"></span> Modificar sesión</a>-->
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
                
                <?php
                if ($perfil == 'auxadmisiones') {
                ?>
                  <a href="#crear_<?php echo $row['id']; ?>" class="btn btn-sm btn-info btn-flat pull-left" data-toggle="modal">Agregar sesión</a>
                  <?php include('crearSesionOtraEspecialidad.php'); ?>
                <?php
                } 
                ?>
                
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