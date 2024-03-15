<?php
error_reporting(0);
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login/index.php");
    exit;
}
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
  $sesion= $_SESSION["username"];
  $link = "https://" . $host . $url;
    error_reporting(0);
    date_default_timezone_set('America/Bogota');    
    $fecha = date('d-m-Y');
    $buscar = $_POST['buscar'];
    $criterio = $_GET['criterio'];
<<<<<<< Updated upstream


=======
    $actualizaCantidad = $_GET['actualizaCantidad'];
    $editFechaMax = $_GET['editFechaMax'];
>>>>>>> Stashed changes
                 if($criterio == ''){
                    $usuario = $buscar;

                 }else{
                    $usuario = $criterio;

                 }
   // validar rol
    $sql2 = "SELECT *  from users where correo = '$sesion'";
    $result2 = mysqli_query($connection, $sql2);
    $row2 = mysqli_fetch_array($result2);
    $perfil = $row2['sintomas'];
    
     $sql3 = "SELECT *  from otrasespecialidades where documento = '$usuario'" ;
      $result3 = mysqli_query($connection, $sql3);
       $row3 = mysqli_fetch_array($result3);
      $nombres = $row3['nombre'];
<<<<<<< Updated upstream
=======
      $documento = $row3['documento'];
      
>>>>>>> Stashed changes
     
     
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
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
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
  <header class="main-header">
        <!-- Logo -->
        <a href="http://192.168.0.122/cicirecservicios/index.php" class="logo">
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
          </a>
         
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
<<<<<<< Updated upstream
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
=======
      <?php include("../../layout.php"); ?>
>>>>>>> Stashed changes
     
      <!-- Left side column. contains the logo and sidebar -->
  
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
         <section class="content-header">
      
      
      
      
      <style>
      @keyframes zoom {
        0% { transform: scale(1.2); }
        10% { transform: scale(1); }
        20% { transform: scale(1); }
        }
        
        .panel {
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 2);
            animation: zoom 20s infinite alternate;
        }

      </style>
      
      <div class="panel panel-default">
    <div class="panel-heading"><strong>Información autorizaciones paciente</strong></div>
    <div class="panel-body">
        <h3 style="margin: -1px">
            Paciente: <strong><?php echo $nombres;?></strong><br>
            Nro. documento: <strong><?php echo $usuario;?></strong><br>
        </h3>
    </div>
</div>
      
      
      
<<<<<<< Updated upstream
      
      
=======
     <?php
//inicio if valida si se actualizaron sesiones
if($actualizaCantidad == 's'){
  ?>
<div class="alert alert-success alert-dismissible">
                    <h4><i class="icon fa fa-check"></i>Se editaron las sesiones</h4>
                    CANTIDADES ACTUALIZADAS
                     </div>
<?php
//fin if valida si se actualizaron sesiones
}
?> 
>>>>>>> Stashed changes
      
      <?php
//inicio if valida si se actualió fecha max ejcución
if($editFechaMax == 's'){
  ?>
<div class="alert alert-success alert-dismissible">
                    <h4><i class="icon fa fa-check"></i>Se editaron los registros</h4>
                    FECHA LIMITE DE EJECUCIÓN ACTUALIZADA
                     </div>
<?php
//fin if valida si se actualió fecha max ejcución
}
?> 
          
      
      
      
      
    </section>

        <!-- Main content -->
        <section class="content">
      <div class="row">
        <div class="col-xs-12">
        
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Datos del usuario</h3>
               <!--<a role="button" class="btn btn-info pull-right margin" href="../forms/crearNuevoPaciente.php"  title="Crear usuario!">Nuevo paciente</a>--> 

               <a role="button" class="btn btn-success pull-right margin" href="../forms/crearNuevoProceso.php?documento=<?php echo $usuario;?>"  title="Crear proceso!">Nuevo proceso</a> 
            </div>
            <!-- /.box-header -->
            <div class="box-body">

              <table id="example2" class="table table-bordered table-striped">
                <thead>
                <tr>
                 
                  <th style ="width: 10%;">Creación proceso</th> 
                  <th style ="width: 10%;">Autorización</th>
<<<<<<< Updated upstream

                  <th style ="width: 10%;">Servicio</th>
                  <th style ="width: 10%;">Estado</th>
                  <th style ="width: 10%;">Fecha Autorización</th>
                  <th style ="width: 10%;">Fecha Solicitud</th>                  
                  <th style ="width: 10%;">Fecha Ejecución</th>                 
=======
                  <th style ="width: 10%;">Número factura</th>
                  <th style ="width: 10%;">Servicio</th>
                  <th style ="width: 10%;">Estado</th>
                  <th style ="width: 10%;">Fecha Autorización</th>                 
                  <th style ="width: 10%;">Fecha máxima ejecución</th>
                  <!-- <th style ="width: 10%;">Días restantes</th>                  -->
>>>>>>> Stashed changes
                  <th style ="width: 10%;">Cantidad autorizada</th>
                  <th style ="width: 10%;">Entidad</th>
                  <th style ="width: 10%;">Acciones</th>
                 
                  
                </tr>
                </thead>
                <tbody>
<<<<<<< Updated upstream
                  <?php
                  error_reporting(0);
                        //$buscar = $_POST['buscar'];
                                                                     
                        $sql = "SELECT *  from otrasespecialidades where documento = '$usuario' 
                          order by id desc ";
                          $result = mysqli_query($connection, $sql);
                            while($row = mysqli_fetch_array($result)):
                              $id = $row['id'];
                              $autorizacion = $row['autorizacion'];
                              //corregir caracteres especiales en codigoServicio
                              $nombreSinAcentosCodSrv = mb_convert_encoding($row['codigoServicio'], 'UTF-8', 'ASCII');
                              

                              $fechasolicitud = $row['fechasolicitud'];
                              $fechaautorizacion = $row['fechaautorizacion'];
                              $cantidadautorizada = $row['cantidadautorizada'];
                              $entidad = $row['entidad'];
                              $fechalimiteejecucion = $row['fechalimiteejecucion'];
                              $entidad = $row['entidad'];
                              $estado = $row['estadogeneral'];



                              $nuevafecha = strtotime ( '+30 day' , strtotime ( $fechasolicitud ) ) ;
                              $nuevafecha = date ( 'd-m-Y' , $nuevafecha );
                              
 
                    ?>  

                  <tr>
                  
                    <td> <?php echo $autorizacion;?></td>
                    <td> <?php echo $nombreSinAcentosCodSrv;?></td>
                    <td><label style = "color:red;"><?php echo $estado;?></label></td>                    
                    <td><?php echo $fechaautorizacion; ?></td>
                    <td><?php echo $fechasolicitud;?></td>
                    <td><?php echo $nuevafecha; ?></td>
                    <td><?php echo $cantidadautorizada;?></td>
                    <td><?php echo $entidad;?></td>
                   
                    
                      <!--subir resultado-->
                     <td>
                      <?php                   
                        if($perfil == 'administrador'){
                      ?>

                      
                            <!--<a href="#edit_<?php echo $id; ?>" class="btn btn-warning btn-sm" data-toggle="modal"><span class="glyphicon glyphicon-edit"></span></a>-->

                            <script>
                                $(document).ready(function(){
                                    $('[data-toggle="tooltip"]').tooltip();   
                                });
                                $(document).ready(function(){
                                    $('[data-toggle="modal"]').modal();   
                                });

                            </script>

                            <a href="seguimientoOtraEspecialidad.php?autorizacion=<?php echo $autorizacion;?>&criterio=<?php echo $autorizacion;?>" data-toggle="tooltip" title="Modificar seguimiento" class="btn btn-primary btn-sm" data-toggle="modal"><span class="glyphicon glyphicon-list-alt"></span> </a>

                            <a href="#delete_<?php echo $id; ?>" data-toggle="modal" title="Eliminar proceso" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span> </a>

                      <?php 
                        }else{
                      ?>
                          <a href="#edit_<?php echo $id; ?>" class="btn btn-warning btn-sm" data-toggle="modal"><span class="glyphicon glyphicon-edit"></span></a>


                          <a href="seguimientoOtraEspecialidad.php?autorizacion=<?php echo $autorizacion;?>&criterio=<?php echo $autorizacion;?>" class="btn btn-success btn-sm" data-toggle="modal"><span class="glyphicon glyphicon-list-alt"></span> </a>
                      <?php
                        }
                      ?>
                       
                      
                    </td>
                    <?php include('BorrarEditarAutorizacionOtraEspecilidad.php'); ?>
                </tr>
                <?php
                endwhile;
                ?>
                
                </tbody>
               
              </table>

=======
    <?php
    error_reporting(0);
    //$buscar = $_POST['buscar'];
    //echo $usuario;
    $sql = "SELECT *  from otrasespecialidades where documento = '$usuario' order by id desc ";
    $result = mysqli_query($connection, $sql);
    while ($row = mysqli_fetch_array($result)) :
        $id = $row['id'];
        $autorizacion = $row['autorizacion'];
        $documentoEditCantidad = $row['documento'];
        //corregir caracteres especiales en codigoServicio
        $nombreSinAcentosCodSrv = mb_convert_encoding($row['codigoServicio'], 'UTF-8', 'ASCII');
        $fechasolicitud = $row['fechasolicitud'];
        $fechaautorizacion = $row['fechaautorizacion'];
        $cantidadautorizada = $row['cantidadautorizada'];
        $entidad = $row['entidad'];
        $fechalimiteejecucion = $row['fechalimiteejecucion'];
        $entidad = $row['entidad'];
        $estado = $row['estadogeneral'];
        $nuevafecha = strtotime('+31 day', strtotime($fechaautorizacion));
        $nuevafecha = date('Y-m-d', $nuevafecha);

        //sql buscar factura
        $sqlFactura = "SELECT *  from facturacion where autorizacion = $autorizacion";
    $resultFactura = mysqli_query($connection, $sqlFactura);
    $rowFactura = mysqli_fetch_array($resultFactura);
    $nroFactura = $rowFactura['numerofactura'];

    if($nroFactura == ""){
      $nroFactura = "<p style='color: red;'>Sin factura</p>";
    }

        //Días restantes
        $fecha1 = new DateTime($nuevafecha);
        $fecha2 = new DateTime($fechasolicitud);

        $diferencia = $fecha1->diff($fecha2);
        $dias_restantes = $diferencia->days;

        // Realizar la consulta adicional sin sobrescribir $result
        $sql_autorizacion = "SELECT COUNT(*) AS total_autorizacion_asistio FROM agendaotras WHERE estado = 'Asistio' AND autorizacion = '$autorizacion';";
        $result_autorizacion = mysqli_query($connection, $sql_autorizacion);
        // Verifica si la consulta se ejecutó correctamente
        if ($result_autorizacion) {
            $row_autorizacion = mysqli_fetch_assoc($result_autorizacion);
            $total_autorizacion_asistio = $row_autorizacion['total_autorizacion_asistio'];
        } else {
            echo "Error al ejecutar la consulta: " . mysqli_error($connection);
        }
    ?>
        <tr>
            <td><?php echo $fechasolicitud; ?></td>
            <td><?php echo $autorizacion; ?></td>
            <td><?php echo $nroFactura; ?></td>
            <td><?php echo $nombreSinAcentosCodSrv; ?></td>
            <td><label style="color:red;"><?php echo $estado; ?></label></td>
            <td><?php echo $fechaautorizacion; ?></td>            
            <td><?php echo $fechalimiteejecucion; ?></td>
            <!-- <td><?php echo $dias_restantes; ?></td> -->
            <td><?php echo $cantidadautorizada; ?></td>
            <td><?php echo $entidad; ?></td>
            <td>
                <?php include('accionesSeguimiento.php'); ?>
            </td>
            <?php include('BorrarEditarAutorizacionOtraEspecilidad.php'); ?>
            <?php include('editarFechaMaxEjecucion.php'); ?>
        </tr>
    <?php
    endwhile;
    ?>
</tbody>               
              </table>
>>>>>>> Stashed changes
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
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
      });
      
    </script>
    <script>
  var parent = $("ul.sidebar-menu li.active").closest("ul").closest("li");
  if (parent[0] != undefined)
    $(parent[0]).addClass("active");
</script>
  </body>
</html>
