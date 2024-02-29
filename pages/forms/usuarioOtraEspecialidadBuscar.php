<?php
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
    $buscar = $_POST['buscar'];
    $criterio = $_GET['criterio'];


                 if($criterio == ''){
                    $usuario = $buscar;

                 }else{
                    $usuario = $criterio;

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
              <a href="../forms/usuarioParticular.php"><i class="fa fa-circle-o"></i> Buscar usuario</a>
            </li>

            <li <?php isActive("collapsed_sidebar") ?>>
              <a href="../forms/excelTodosParticular.php"><i class="fa fa-circle-o"></i> Descargar Excel </a>
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
              <a href="../forms/usuarioConvenio.php"><i class="fa fa-circle-o"></i> Buscar usuario</a>
            </li>

            <li <?php isActive("fixed") ?>>
              <a href="../forms/agendarUsuarioConvenio.php"><i class="fa fa-circle-o"></i>Agendar Usuario</a>
            </li>
            <li <?php isActive("fixed") ?>>
              <a href="../forms/agendarUsuarioConvenioMasivo.php"><i class="fa fa-circle-o"></i>Agendar Masivamente</a>
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
              <a href="../forms/informeFacturacion.php"><i class="fa fa-circle-o"></i> Buscar informe</a>
            </li>
            <li <?php isActive("boxed") ?>>
              <a href="../forms/cambiarEstado.php"><i class="fa fa-circle-o"></i> Cambiar estado</a>
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
        Información usuario <?php echo $usuario;?>
        <small>Agendamiento COVID-19 <?php echo $idcita;?></small>
      </h1>     
    </section>

        <!-- Main content -->
        <section class="content">
      <div class="row">
        <div class="col-xs-12">
        
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Datos del usuario</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Autorización No.</th>
                  <th>Nombres</th>
                  <th>Documento</th>
                  <th>Muestra</th>
                  
                  <th>Fecha toma</th>
                  <th>Teléfono</th>
                  <th>Correo</th>
                  <th>Dirección</th>
                  <th>Es. pago</th>
                  <th>Atender</th>
                  <th>Autorización</th>
                  <th>Resultado</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                  error_reporting(0);
                        //$buscar = $_POST['buscar'];
                                                                     
                        $sql = "SELECT *  from autorizacion 
                          WHERE documento = '$usuario'  
                          order by id desc ";
                          $result = mysqli_query($connection, $sql);
                            while($row = mysqli_fetch_array($result)):
                              $idcita = $row['id_cita'];
                              $sql2 = "SELECT * from domicilios where id = '$idcita' ";
                              $result2 = mysqli_query($connection, $sql2);
                              $row2 = mysqli_fetch_array($result2);
                              $idauto = $row[0];
                              $nombres = $row['nombre'];
                              $tipodocumento = $row['tipodocumento'];
                              $documento = $row['documento'];
                              $telefono = $row['telefono'];
                              $correo = $row['correo'];
                              $estadoservicio = $row['estadoservicio'];
                              $resultado = $row['resultado'];
                              $especialidad = $row['especialidad'];
                              $direccion = $row['direccion'];
                              $estadopago = $row['estadopago'];
                              $dia = $row2['dia'];
                              $jornada = $row2['jornada'];
                              


                                                        
   
    
                    ?>  

                <tr>
                  <td><?php echo $idauto;?></td>
                  <td><?php echo  $nombres;?></td>
                  <td><?php echo $tipodocumento. "-".$documento;?></td>
                  <?php 
                    if($row2['muestra'] != ''){
                  ?>
                    <td><?php echo $row2['muestra']; ?></td>
                  <?php
                  }else{
                  ?>
                    <td><?php echo $row['tipoprueba']; ?></td>
                  <?php
                  }
                  ?>
                  
                  <td><?php echo $dia. "-".$jornada;?></td>
                  <td><?php echo $telefono;?></td>
                 
                  <td><?php echo $correo;?></td>
                  <td><?php echo $direccion;?></td>
                  <td><?php echo $estadopago;?></td>
                 
                  <td>
                    <?php 
                    if($estadoservicio == 'Pendiente por Atender'){
                  ?>
                    <a href="atender.php?id_auto=<?php echo $row['id'];?>&criterio=<?php echo $usuario;?>" class="btn-upload btn btn-danger" title="Sin atender!" role="button"><i class="fa fa-times" aria-hidden="true"></i></a>
                  <?php
                  }else{
                  ?>
                    <a class="btn btn-success" href = "#" title="Atendido"><i class='fa fa-check' aria-hidden='true'></i></a>
                  <?php
                  }
                  ?>                  
                  </td>
                  <td>
                   
                    <!--autorizacion-->                 
                    <a role="button" class="btn-descargar-doc btn btn-warning" href="autorizacionParticular/index.php?id_cita=<?php echo $idcita; ?>&idauto=<?php echo $idauto; ?>&especialidad=<?php echo $especialidad; ?>" title="Descargar Autorización!" target="blank"><i class="fa fa-file-pdf-o bigfonts" aria-hidden="true"></i></a>

                  </td>
                  <td> 


                    <a href='../forms/misResultados.php?id_auto=<?php echo $row[id];?>' class='btn-descargar-doc btn btn-info' role='button' ><i class='fa fa-upload bigfonts' aria-hidden='true'></i></a> 
                     <?php
                      if($resultado!=""){
                      ?>
                        
                    <a  class="btn-descargar-doc btn btn-default" href = "https://fundacioncirec.org/version2covid/pages/forms/<?php echo $resultado; ?>" target = "blank"><i class="fa fa-eye" aria-hidden="true"></i></a>
                    <?php } else{
                    ?>
                    
                    <?php
                    }
                    ?>  





                  </td>
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
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 1.2.0
        </div>
        <strong>Copyright &copy; 2021 <a href=#>CIREC</a>.</strong> Desarrolloado por el Departamento de Sistemas CIREC..
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
          dom: 'Bfrtip',
            buttons: [
                'copyHtml5',
                'excelHtml5',
                'pdfHtml5'
            ]
          
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
