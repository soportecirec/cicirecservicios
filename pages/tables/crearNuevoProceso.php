<?php
include_once "../../api/conexion.php"; 
  function isActive($menu, $mode="full"){
    global $active_menu;
    if ($mode == "partial")
      echo ($active_menu == $menu? "active": "");
    else
      echo ($active_menu == $menu? "class='active'": "");
  }
  error_reporting(0);

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
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
 <!-- buscar paciente existe -->
    <script type="text/javascript">
        $(function() {
            $("#codigo").autocomplete({
                source: "buscarPacienteExiste.php",
                minLength: 2,
                select: function(event, ui) {
          event.preventDefault();
          $('#codigo').val(ui.item.codigo);
          $('#tipo_documento').val(ui.item.tipo_documento);
          $('#nombres_usuario').val(ui.item.nombres_usuario);
          $('#telefono_usuario').val(ui.item.telefono_usuario);          
          $('#entidad_usuario').val(ui.item.entidad_usuario);
          $('#ciudad_usuario').val(ui.item.ciudad_usuario);
        
           }
          });
    });
</script>
  </head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"/></script>

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
              <a href="agendarUsuarioConvenioMasivo.php"><i class="fa fa-circle-o"></i>Agendar Masivamente</a>
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
       Crear nuevo paciente
        <small>Cicirec servicios</small>
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
              <h3 class="box-title">Ingrese la siguiente información para crear el paciente</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            
            <form class="form-horizontal" id="fupForm" action="crearNuevoPaciente.php" method="POST" enctype="multipart/form-data">
              <div class="box-body">
                 

                  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Documento:</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="codigo" name = "documento" placeholder="" >                   
                  </div>
                </div>

                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Tipo documento:</label>

                  <div class="col-sm-10">
                    <select class="form-control" name = "tipodocumento" id="tipo_documento">
                         <option disabled selected>--Seleccione--</option>
                          <option value = "CC">CC</option>
                          <option value = "CE">CE</option>
                          <option value = "TI">TI</option>
                          <option value = "Otro">Otro</option>
                    </select>
                  </div>
                </div> 

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nombres y Apellidos:</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id= "nombres_usuario" name = "nombres" placeholder=""  >
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Telefono:</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id= "telefono_usuario" name = "telefono" placeholder=""  >
                  </div>
                </div>               

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Entidad:</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id = "entidad_usuario" name = "entidad" >
                  </div>
                </div> 
                 
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Ciudad:</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="ciudad_usuario" name = "ciudad" >
                  </div>
                </div> 
              </div>
              <div id = "mensaje"></div>
              <!-- /.box-body -->
              <div class="box-footer">
                
                <button type="submit" class="btn btn-info pull-right" id="butsave" name = "Submit">Crear paciente </button>
              </div>
              <!-- /.box-footer -->
            </form>

            <?php 
                                error_reporting(0); 
                                include('../../api/conexion.php');
                                if(isset($_POST['Submit'])){
                                $tipodocumento = $_POST['tipodocumento'];
                                $nombres = $_POST['nombres'];
                                $documento = $_POST['documento'];
                                $telefono = $_POST['telefono'];                             
                              
                                $entidad = $_POST['entidad'];
                                
                                $consutar= "SELECT documento from paciente where documento = '$documento'";
                                $result = mysqli_query($connection, $consutar);
                                 $num_rows = mysqli_num_rows($result);
                                if($num_rows >0){
                                    ?>                                            <script language="JavaScript" type="text/javascript">
                                        swal({  title: "El paciente ya se encuentra registrado",   
                                                text: " ",   
                                                type: "warning",   
                                                confirmButtonText: "Continuar" },
                                         function () {

                                        window.location.href = 'crearNuevoPaciente.php';
                                    });

                                        </script>
                                <?php 
                                }
                                else{
                                 
                                  $insertarpaciente = "INSERT INTO paciente VALUES(
                                  NULL, 
                                  NOW(),
                                  'GESTIONO',
                                  '$entidad',
                                  '$tipodocumento',
                                  '$documento',
                                  '$nombres',
                                  '$telefono',
                                  '',
                                  ''
                                  )";
                                 
                                   mysqli_query($connection, $insertarpaciente);
                                ?>
                               
                                 <script language="JavaScript" type="text/javascript">
                                        swal({  title: "Paciente registrado",   
                                                text: " ",   
                                                type: "success",   
                                                confirmButtonText: "Continuar" },
                                         function () {

                                        window.location.href = '../tables/gestionUsuarios.php';
                                    });

                                        </script>
                                          
                                            
                                <?php 
                                }

                                }
                            ?>
           
           
          </div>

          
          <!-- /.box -->
          <!-- general form elements disabled -->
         
          <!-- /.box -->
        </div>
        <!--/.col (right) -->

      </div>
      <!-- /.row -->
     
     
    </section>
    
                    
    
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.3.0
        </div>
        <strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights reserved.
      </footer>

      <!-- Control Sidebar -->
     
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    
    <!-- Bootstrap 3.3.5 -->
    <script src="../../bootstrap/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../../plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
    <script src="../../dist/js/jquery.blockUI.js"></script>
    <script>
  var parent = $("ul.sidebar-menu li.active").closest("ul").closest("li");
  if (parent[0] != undefined)
    $(parent[0]).addClass("active");
  </script>

  
  </body>
</html>
