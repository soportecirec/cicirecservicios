<?php
error_reporting(0);
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../../login/index.php");
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
    $actualizaCantidad = $_GET['actualizaCantidad'];
                 if($criterio == ''){
                    $usuario = $buscar;
                 }else{
                    $usuario = $criterio;
                 }
   // validar rol
    $sql2 = "SELECT *  from users where correo = '$sesion'";
    $result2 = mysqli_query($connection, $sql2);
    $row2 = mysqli_fetch_array($result2);
    $perfil = $row2[10];
    
    
     $sql3 = "SELECT *  from otrasespecialidades where documento = '$usuario'" ;
      $result3 = mysqli_query($connection, $sql3);
       $row3 = mysqli_fetch_array($result3);
      $nombres = $row3['nombre'];
      $documento = $row3['documento'];
      
     
     
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
      <?php include("../../layout.php"); ?>
     
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
      
      
      
      
      
      
    </section>
        <!-- Main content -->
        <section class="content">
      <div class="row">
        <div class="col-xs-12">
        
          <div class="box">
            <div class="box-header">
              
              <h3 class="box-title">Datos del usuario</h3>
               <!--<a role="button" class="btn btn-info pull-right margin" href="../forms/crearNuevoPaciente.php"  title="Crear usuario!">Nuevo paciente</a>--> 
               <?php
          
               if ($perfil == 'administrador' ) {
                
               if($nombres != ''){
                ?>
                <a role="button" class="btn btn-success pull-right margin" href="../forms/crearNuevoProceso.php?documento=<?php echo $usuario;?>"  title="Crear proceso!">Nuevo proceso</a>
               <?php 
                }
             else{
              ?>
              <a role="button" class="btn btn-success pull-right margin" href="../forms/crearNuevoProcesoServinte.php?documento=<?php echo $usuario;?>"  title="Crear proceso!">Nuevo proceso servinte</a>
              <?php 
              }}
                
               ?>
              <?php
               if ($perfil = 'lidercall') {
                
               if($nombres != ''){
                ?>
                <a role="button" class="btn btn-success pull-right margin" href="../forms/crearNuevoProceso.php?documento=<?php echo $usuario;?>"  title="Crear proceso!">Nuevo proceso</a>
               <?php 
                }
             else{
              ?>
              <a role="button" class="btn btn-success pull-right margin" href="../forms/crearNuevoProcesoServinte.php?documento=<?php echo $usuario;?>"  title="Crear proceso!">Nuevo proceso servinte</a>
              <?php 
              }}
                
               ?>
              <?php
               if ($perfil == 'agentecall') {
                
               if($nombres != ''){
                ?>
                <a role="button" class="btn btn-success pull-right margin" href="../forms/crearNuevoProceso.php?documento=<?php echo $usuario;?>"  title="Crear proceso!">Nuevo proceso</a>
               <?php 
                }
             else{
              ?>
              <a role="button" class="btn btn-success pull-right margin" href="../forms/crearNuevoProcesoServinte.php?documento=<?php echo $usuario;?>"  title="Crear proceso!">Nuevo proceso servinte</a>
              <?php 
             }}
                
               ?>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-striped">
                <thead>
                <tr>
                 
                  <th style ="width: 10%;">Creación proceso</th> 
                  <th style ="width: 10%;">Autorización</th>
                  <th style ="width: 10%;">Servicio</th>
                  <th style ="width: 10%;">Estado</th>
                  <th style ="width: 10%;">Fecha Autorización</th>                 
                  <th style ="width: 10%;">Fecha Ejecución</th>
                  <!-- <th style ="width: 10%;">Días restantes</th>                  -->
                  <th style ="width: 10%;">Cantidad autorizada</th>
                  <th style ="width: 10%;">Entidad</th>
                  <th style ="width: 10%;">Acciones</th>
                 
                  
                </tr>
                </thead>
                <tbody>
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
            <td><?php echo $nombreSinAcentosCodSrv; ?></td>
            <td><label style="color:red;"><?php echo $estado; ?></label></td>
            <td><?php echo $fechaautorizacion; ?></td>            
            <td><?php echo $nuevafecha; ?></td>
            <!-- <td><?php echo $dias_restantes; ?></td> -->
            <td><?php echo $cantidadautorizada; ?></td>
            <td><?php echo $entidad; ?></td>
            <td>
                <?php include('accionesSeguimiento.php'); ?>
            </td>
            <?php include('BorrarEditarAutorizacionOtraEspecilidad.php'); ?>
        </tr>
    <?php
    endwhile;
    ?>
</tbody>               
              </table>
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
      
<!--Include footer -->
<?php include("../../footer.php"); ?>
      <!-- /.Include footer -->
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
