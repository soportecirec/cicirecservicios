<?php
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../login/index.php");
    exit;
}
include_once "../../api/conexionConvenio.php"; 
  function isActive($menu, $mode="full"){
    global $active_menu;
    if ($mode == "partial")
      echo ($active_menu == $menu? "active": "");
    else
      echo ($active_menu == $menu? "class='active'": "");
  }
include_once "../../api/conexionConvenio.php"; 
require_once('vendor/php-excel-reader/excel_reader2.php');
require_once('vendor/SpreadsheetReader.php');
$gestiono= $_SESSION["username"];

if (isset($_POST["import"]))
{
    date_default_timezone_set('America/Bogota');
     $fecha = date("Y-m-d H:i:s");
    
$allowedFileType = ['application/vnd.ms-excel','text/xls','text/xlsx','application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'];
  
  if(in_array($_FILES["file"]["type"],$allowedFileType)){

        $targetPath = 'subidas/'.$_FILES['file']['name'];
        move_uploaded_file($_FILES['file']['tmp_name'], $targetPath);
        
        $Reader = new SpreadsheetReader($targetPath);
        
        $sheetCount = count($Reader->sheets());
        for($i=0;$i<1;$i++)
        {
            
            $Reader->ChangeSheet($i);
            
            foreach ($Reader as $Row)
            {

             
              $estado = 'sinsubir';
          

                $nombres = "";
                if(isset($Row[0])) {
                    $nombres = mysqli_real_escape_string($connection,$Row[0]);
                }
                
                $tipodocumento = "";
                if(isset($Row[1])) {
                    $tipodocumento = mysqli_real_escape_string($connection,$Row[1]);
                }
				
                $documento = "";
                if(isset($Row[2])) {
                    $documento = mysqli_real_escape_string($connection,$Row[2]);
                }
				
                $telefono = "";
                if(isset($Row[3])) {
                    $telefono = mysqli_real_escape_string($connection,$Row[3]);
                }
                $especialidad = "";
                if(isset($Row[4])) {
                    $especialidad = mysqli_real_escape_string($connection,$Row[4]);
                }
                $convenio = "";
                if(isset($Row[5])) {
                    $convenio = mysqli_real_escape_string($connection,$Row[5]);
                }
                $dias = "";
                if(isset($Row[6])) {
                    $dias = mysqli_real_escape_string($connection,$Row[6]);
                }
                $jornada = "";
                if(isset($Row[7])) {
                    $jornada = mysqli_real_escape_string($connection,$Row[7]);
                }
                
                $presentasintomas = "";
                if(isset($Row[8])) {
                    $presentasintomas = mysqli_real_escape_string($connection,$Row[8]);
                }
                $muestra = "";
                if(isset($Row[9])) {
                    $muestra = mysqli_real_escape_string($connection,$Row[9]);
                }
                
                 $direccion = "";
                if(isset($Row[10])) {
                    $direccion = mysqli_real_escape_string($connection,$Row[10]);
                }
                
                $correo = "";
                if(isset($Row[11])) {
                    $correo = mysqli_real_escape_string($connection,$Row[11]);
                }
                
                $fechanacimiento= "";
                if(isset($Row[12])) {
                    $fechanacimiento= mysqli_real_escape_string($connection,$Row[12]);
                }
                
                $edad = "";
                if(isset($Row[13])) {
                    $edad = mysqli_real_escape_string($connection,$Row[13]);
                }
                
                $eps = "";
                if(isset($Row[14])) {
                    $eps = mysqli_real_escape_string($connection,$Row[14]);
                }
                
                 $tipocliente = "";
                if(isset($Row[15])) {
                    $tipocliente = mysqli_real_escape_string($connection,$Row[15]);
                }
                 $codigodescuento = "";
                if(isset($Row[16])) {
                    $codigodescuento = mysqli_real_escape_string($connection,$Row[16]);
                }
                
                
                
                
                if (!empty($nombres) || !empty($muestra) || !empty($presentasintomas) || !empty($jornada)) {
                    
                  
                    
                    
                    
                   
                    $insertarpaciente = "INSERT INTO autorizacion_prueba VALUES (null, 
                        '$nombres', 
                        '$tipodocumento', 
                        '$documento', 
                        '$telefono', 
                        '$direccion', 
                        '', 
                        'Aprobada', 
                        '$fecha', 
                        '$correo', 
                        '$especialidad',
                        
                        '$convenio', 
                        '', 
                        '', 
                        'Pendiente por Atender', 
                        '',
                        '',
                        '',
                        '',
                        '',
                        '$edad', 
                        '', 
                        '', 
                        '',
                        '',
                        '$dias', 
                        '$jornada',
                        '$gestiono',
                        '$presentasintomas', 
                        '$muestra', 
                        '$fechanacimiento', 
                        '', 
                        '', 
                        '$eps', 
                        '', 
                        '',
                        '$estado',
                        '', 
                        '$tipocliente', 
                        '$codigodescuento')";
                    
                    
                    
                    
                    
                    
                    $resultados = mysqli_query($connection, $insertarpaciente);
                    }
                
                    if (! empty($resultados)) {
                        $type = "success";
                        $message = "Excel importado correctamente";
                    } else {
                        $type = "error";
                        $message = "Hubo un problema al importar registros";
                    }
                }
             }
        
         }
  }
  else
  { 
        $type = "error";
        $message = "El archivo enviado es invalido. Por favor vuelva a intentarlo";
  }
  

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SolucionesCOVID-19 | CIREC</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <!--sweet-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"/></script>
     <!--sweet-->
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
        <a href="../../index2.php" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>CI</b>REC</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Solución COVID-19</b></span>
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
          <a href="#">
            <i class="fa fa-user"></i> <span>Particulares</span>
             <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>          </a>
          <ul class="treeview-menu">          

            <li <?php isActive("boxed") ?>>
              <a href="usuarioParticular.php"><i class="fa fa-circle-o"></i> Buscar usuario</a>
            </li>

            <li <?php isActive("collapsed_sidebar") ?>>
              <a href="excelTodosParticular.php"><i class="fa fa-circle-o"></i> Descargar Excel </a>
            </li>

            

          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i> <span>Convenios</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            

            <li <?php isActive("boxed") ?>>
              <a href="usuarioConvenio.php"><i class="fa fa-circle-o"></i> Buscar usuario</a>
            </li>

            <li <?php isActive("fixed") ?>>
              <a href="agendarUsuarioConvenio.php"><i class="fa fa-circle-o"></i>Agendar Usuario</a>
            </li>
            <li <?php isActive("fixed") ?>>
              <a href="gendarUsuarioConvenioMasivo.php"><i class="fa fa-circle-o"></i>Agendar Masivamente</a>
            </li>

            <li <?php isActive("collapsed_sidebar") ?>>
              <a href="excelTodosConvenio.php"><i class="fa fa-circle-o"></i> Descargar Excel </a>
            </li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i> <span>Facturación</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            

            <li <?php isActive("boxed") ?>>
              <a href="informeFacturacion.php"><i class="fa fa-circle-o"></i> Buscar informe</a>
            </li>
            <li <?php isActive("boxed") ?>>
              <a href="cambiarEstado.php"><i class="fa fa-circle-o"></i> Cambiar estado</a>
            </li>
           
          </ul>
        </li> 
        <li><a href="../../logout.php"><i class="fa fa-book"></i> <span>Cerrar sesión</span></a></li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Agendar  usuarios particulares y/o de convenio masivamente
        <small>Agendamiento COVID-19 <?php echo $nombres;?></small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
       
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Ingrese la siguiente informació para agendar</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
              <div class="box-body">
                

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Archivo Excel:</label>

                  <div class="col-sm-10">
                    <input type="file" class="form-control" id="inputEmail3" name = "file" accept=".xls,.xlsx,"  >
                  </div>
                </div>


                
             
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                
                <button type="submit" class="btn btn-info pull-right" name = "import" >Subir archivo </button>
              </div>
              
              <!-- /.box-footer -->
            </form>
             <div id="response" class="<?php if(!empty($type)) { echo $type . " display-block"; } ?>"><?php if(!empty($message)) { echo $message; } ?></div>
          </div>
          <!-- /.box -->
          <!-- general form elements disabled -->
         
          <!-- /.box -->
        </div>
        <!--/.col (right) -->

      </div>
      <!-- /.row -->
     
     
    </section>
    
     <?php
    $gestiono= $_SESSION["username"];
    $sqlSelect = "SELECT * FROM autorizacion_prueba where estadocargue = 'sinsubir' and gestiono = '$gestiono'";
    $result = mysqli_query($connection, $sqlSelect);

if (mysqli_num_rows($result) > 0)
{
?>
       	
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
        
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Datos previos al cargue</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                 
                  <th>Nombres</th>
                  <th>Documento</th>
                  <th>Muestra</th>
                  <th>Fecha toma</th>
                  <th>Dirección</th>
                  <th>Modalidad</th>
                  
                </tr>
                </thead>
                <tbody>
<?php
    while ($row = mysqli_fetch_array($result)) {
?>                  
        <tbody>
        <tr>
            <td><?php  echo $row['nombre']; ?></td>
            <td><?php  echo $row['tipodocumento']."-".$row['documento']; ?></td>
            <td><?php  echo $row['muestra']; ?></td>
            <td><?php  echo $row['dias']."-".$row['jornada']; ?></td>
            <td><?php  echo $row['direccion']; ?></td>
            <td><?php  echo $row['especialidad']; ?></td>
             
             
             
          
        </tr>
<?php
    }
?>
        </tbody>
    </table>
    </div>
            <!-- /.box-body -->
            
          </div>
          <a  class="btn btn-info pull-right margin" href= "agendarUsuarioConvenioMasivo.php?accion=importar">Realizar agendamiento</a>
         <a  class="btn btn-danger pull-right margin"  href= "agendarUsuarioConvenioMasivo.php?accion=eliminar">Eliminar cargue</a>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
   
     
<?php 
} 
?>
<?php
  if($_GET['accion'] == "eliminar" ){ 
      
      ?>
                                    
                    <script language="JavaScript" type="text/javascript">
                                        swal({
                                        title: "Eliminar datos de cargue",
                                          text: "Se eliminaran los datos registrados antes del cargue",
                                          imageUrl: 'http://www.cirec.org/solucioncovid19/particulares/img/iconoazul.png',
                                        imageHeight: 20,
                                        imageAlt: 'A tall image' ,
                                          showCancelButton: true,
                                          confirmButtonClass: "btn-success",
                                          confirmButtonText: "Borrar registros",
                                          cancelButtonText: "Cancelar",
                                          closeOnConfirm: false,
                                          closeOnCancel: false
                                        },
                                        function(isConfirm) {
                                          if (isConfirm) {
                                            window.location.href = 'eliminarcargue.php?sesion=<?php echo $gestiono?>';
                                          } else {
                                            window.location.href = 'agendarUsuarioConvenioMasivo.php';
                                          }
                                        });
                                         

                                        </script>   
                                        
                                        <?php
                                    
  }
                                    
                                    ?>
                                    
                                    
                                    
<?php
  if($_GET['accion'] == "importar" ){ 
      
      ?>
                                    
                    <script language="JavaScript" type="text/javascript">
                                        swal({
                                        title: "Registrar usuarios",
                                          text: "Se realizará el agendamiento de los ususarios",
                                          imageUrl: 'http://www.cirec.org/solucioncovid19/particulares/img/iconoazul.png',
                                        imageHeight: 20,
                                        imageAlt: 'A tall image' ,
                                          showCancelButton: true,
                                          confirmButtonClass: "btn-success",
                                          confirmButtonText: "Registrar Usuarios",
                                          cancelButtonText: "Cancelar",
                                          closeOnConfirm: false,
                                          closeOnCancel: false
                                        },
                                        function(isConfirm) {
                                          if (isConfirm) {
                window.location.href = 'importar.php?sesion=<?php echo $gestiono?>';
                                          } else {
                                            window.location.href = 'agendarUsuarioConvenioMasivo.php';
                                          }
                                        });
                                         

                                        </script>   
                                        
                                        <?php
                                    
  }
                                    
                                    ?>
                      
    
                    
    
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.3.0
        </div>
        <strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights reserved.
      </footer>

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
          <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
          <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
          <!-- Home tab content -->
          <div class="tab-pane" id="control-sidebar-home-tab">
            <h3 class="control-sidebar-heading">Recent Activity</h3>
            <ul class="control-sidebar-menu">
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-birthday-cake bg-red"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>
                    <p>Will be 23 on April 24th</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-user bg-yellow"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>
                    <p>New phone +1(800)555-1234</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>
                    <p>nora@example.com</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-file-code-o bg-green"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>
                    <p>Execution time 5 seconds</p>
                  </div>
                </a>
              </li>
            </ul><!-- /.control-sidebar-menu -->

            <h3 class="control-sidebar-heading">Tasks Progress</h3>
            <ul class="control-sidebar-menu">
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Custom Template Design
                    <span class="label label-danger pull-right">70%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Update Resume
                    <span class="label label-success pull-right">95%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Laravel Integration
                    <span class="label label-warning pull-right">50%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Back End Framework
                    <span class="label label-primary pull-right">68%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                  </div>
                </a>
              </li>
            </ul><!-- /.control-sidebar-menu -->

          </div><!-- /.tab-pane -->
          <!-- Stats tab content -->
          <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div><!-- /.tab-pane -->
          <!-- Settings tab content -->
          <div class="tab-pane" id="control-sidebar-settings-tab">
            <form method="post">
              <h3 class="control-sidebar-heading">General Settings</h3>
              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Report panel usage
                  <input type="checkbox" class="pull-right" checked>
                </label>
                <p>
                  Some information about this general settings option
                </p>
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Allow mail redirect
                  <input type="checkbox" class="pull-right" checked>
                </label>
                <p>
                  Other sets of options are available
                </p>
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Expose author name in posts
                  <input type="checkbox" class="pull-right" checked>
                </label>
                <p>
                  Allow the user to show his name in blog posts
                </p>
              </div><!-- /.form-group -->

              <h3 class="control-sidebar-heading">Chat Settings</h3>

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Show me as online
                  <input type="checkbox" class="pull-right" checked>
                </label>
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Turn off notifications
                  <input type="checkbox" class="pull-right">
                </label>
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Delete chat history
                  <a href="javascript::;" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
                </label>
              </div><!-- /.form-group -->
            </form>
          </div><!-- /.tab-pane -->
        </div>
      </aside><!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="../../plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../../bootstrap/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../../plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
    <script>
  var parent = $("ul.sidebar-menu li.active").closest("ul").closest("li");
  if (parent[0] != undefined)
    $(parent[0]).addClass("active");
</script>
  </body>
</html>
