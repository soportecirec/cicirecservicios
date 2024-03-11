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
    $nombrePaciente = $_GET['nombrePaciente'];
    $autorizacionGet = $_GET['autorizacion'];
    $cantidadAutorizada = $_GET['cantidadAutorizada'];
    $cantidadProgramada = $_GET['cantidadProgramada'];
    $PendientesProgramar = $_GET['PendientesProgramar'];
    $criterio = $_GET['criterio'];



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
    <div class="panel-heading"><strong>Información autorización</strong></div>
    <div class="panel-body">
        <h3 style="margin: -1px">
            Paciente: <strong><?php echo $nombrePaciente;?></strong><br>
            Nro. autorizacion: <strong><?php echo $autorizacionGet;?></strong><br>
        </h3><br><br><br>




<form method="POST" action="" id="editarCantidadSesiones_<?php echo $id; ?>">
    <div class="row form-group">
        <div class="col-sm-4">
            <label class="control-label" style="position:relative; top:7px;">Cantidad Autorizada :</label>
        </div>
        <div class="col-sm-8">
            <input type="text" class="form-control" name="cantidad" value="<?php echo $cantidadAutorizada; ?>" disabled>
            <input type="hidden" class="form-control" name="documento" value="<?php echo $usuario; ?>">
        </div>
    </div>

    <div class="row form-group">
        <div class="col-sm-4">
            <label class="control-label" style="position:relative; top:7px;">Cantidad ya programada :</label>
        </div>
        <div class="col-sm-8">
            <input type="text" class="form-control" name="sesionesProgramadas" value="<?php echo $cantidadProgramada; ?>" disabled>
        </div>
    </div>

    <div class="row form-group">
        <div class="col-sm-4">
            <label class="control-label" style="position:relative; top:7px;">Cantidad pendiente por programar :</label>
        </div>
        <div class="col-sm-8">
            <?php if ($PendientesProgramar == 0): ?>
                <input type="text" class="form-control" name="cantidadPendienteProgramar" value="<?php echo $PendientesProgramar; ?>" disabled><br>

                <label style="color: red;">Ya se programaron todas las sesiones autorizadas</label><br>

                <a href="usuarioOtraEspecialidadBuscar.php?criterio=<?php echo $documento; ?>" class="btn btn-info pull-right margin" data-toggle="modal">
                <span class="fa fa-reply"></span>&ensp;<span style="font-size: 14px;">Volver</span>
                </a>
            <?php else: ?>
                <input type="text" class="form-control" name="cantidadPendienteProgramar" value="<?php echo $PendientesProgramar; ?>" min="0" max="<?php echo $PendientesProgramar; ?>" onclick="validarCantidad()" required>
                <input type="submit" name="submit" class="btn btn-success pull-right margin" value="Actualizar" id="actualizarBtn">
                <a href="usuarioOtraEspecialidadBuscar.php?criterio=<?php echo $documento; ?>" class="btn btn-info pull-right margin" data-toggle="modal">
                <span class="fa fa-reply"></span>&ensp;<span style="font-size: 14px;">Volver</span>
                </a>
            <?php endif; ?>
        </div>
    </div>
</form>

<script>

  //validar cantidades sea maor a lo que permite o nros negativos
    function validarCantidad() {
        var cantidadPendiente = <?php echo $PendientesProgramar; ?>;
        var cantidadIngresada = parseInt(document.getElementById('cantidadPendienteProgramar').value);
        var btnActualizar = document.getElementById('actualizarBtn');

        if (cantidadIngresada < 0 || cantidadIngresada > cantidadPendiente) {
            btnActualizar.disabled = true;
            alert('La cantidad ingresada es inválida. Por favor, ingrese un valor entre 0 y ' + cantidadPendiente + '.');
        } else {
            btnActualizar.disabled = false;
        }
    }
</script>





<?php

    $cantidadPendienteProgramar = $_POST['cantidadPendienteProgramar'];

  $insertarCantidadNueva = $cantidadPendienteProgramar + $cantidadProgramada;
  //echo $insertarCantidadNueva;

  //echo $autorizacionGet;

  if(isset($_POST['submit'])){

    //validar cantidad ingresada
    if($cantidadPendienteProgramar < 0 || $cantidadPendienteProgramar > $PendientesProgramar){
      echo '<span style="color: red;">La canrtidad pendiente por programar no puede ser menor que 0 ni mayor a ' . $PendientesProgramar . '</span>';
    }else{
      $sql = "UPDATE `otrasespecialidades` SET `cantidadprogramada` = '$insertarCantidadNueva' WHERE `otrasespecialidades`.`autorizacion` = '$autorizacionGet';";
      if (mysqli_query($connection, $sql)) {
        // Redirige automáticamente a la página especificada
            echo "<script>window.location.href = 'usuarioOtraEspecialidadBuscar.php?criterio=$criterio&actualizaCantidad=s';</script>";
            exit();
      } else {
        echo "Error al actualizar: " . mysqli_error($connection);
      }




    }//fin else

  }//fin if isset




?>








    </div>
</div>
      
     
      
      
      
      
    </section>

        <!-- Main content -->
        <section class="content">
      <div class="row">
        <div class="col-xs-12">
        
          


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
