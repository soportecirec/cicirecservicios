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
  error_reporting(0);
  $sesion= $_SESSION["username"];

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
        <a href="http://fundacioncirec.org/cicirecservicios/index.php" class="logo">
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
      <!-- Left side column. contains the logo and sidebar -->
    

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
                    <input type="text" class="form-control" id="codigo" name = "documento" required placeholder="" >                   
                  </div>
                </div>

                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Tipo documento:</label>

                  <div class="col-sm-10">
                    <select required class="form-control" name = "tipodocumento" id="tipo_documento">
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
                    <input type="text" class="form-control" id= "nombres_usuario" name = "nombres" placeholder="" required >
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Telefono:</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id= "telefono_usuario" name = "telefono" placeholder="" required >
                  </div>
                </div>               

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Entidad:</label>

                  <div class="col-sm-10">
                      
<input list="entidades" class="form-control" name="entidad" id="entidad_usuario">
<datalist id="entidades">
    <option value="ALIANSALUD EPS">ALIANSALUD EPS</option>
    <option value="ALLIANZ SEGUROS DE VIDA S A">ALLIANZ SEGUROS DE VIDA S A</option>
    <option value="ASEGURADORA DE VIDA COLSEGUROS">ASEGURADORA DE VIDA COLSEGUROS</option>
    <option value="AXA COLPATRIA SEGUROS DE VIDA S A">AXA COLPATRIA SEGUROS DE VIDA S A</option>
    <option value="BBVA SEGUROS DE VIDA COLOMBIA S A">BBVA SEGUROS DE VIDA COLOMBIA S A</option>
    <option value="CAJA DE COMPENSACION FAMILIAR CAFAM">CAJA DE COMPENSACION FAMILIAR CAFAM</option>
    <option value="COLMEDICA MEDICINA PREPAGADA S A">COLMEDICA MEDICINA PREPAGADA S A</option>
    <option value="COMPA&Ntilde;IA DE SEGUROS BOLIVAR S A">COMPA&Ntilde;IA DE SEGUROS BOLIVAR S A</option>
    <option value="COMPA&Ntilde;IA DE SEGUROS DE VIDA COLMENA S A">COMPA&Ntilde;IA DE SEGUROS DE VIDA COLMENA S A</option>
    <option value="COMPENSAR S.A">COMPENSAR S.A</option>
    <option value="EPS FAMISANAR SAS">EPS FAMISANAR SAS</option>
    <option value="LA EQUIDAD SEGUROS DE VIDA">LA EQUIDAD SEGUROS DE VIDA</option>
    <option value="MAPFRE COLOMBIA VIDA SEGUROS S A">MAPFRE COLOMBIA VIDA SEGUROS S A</option>
    <option value="NUEVA EMPRESA PROMOTORA DE SALUD S A">NUEVA EMPRESA PROMOTORA DE SALUD S A</option>
    <option value="POSITIVA COMPA&Ntilde;IA DE SEGUROS S A">POSITIVA COMPA&Ntilde;IA DE SEGUROS S A</option>
    <option value="SALUD TOTAL S A  E P S"></option>
    <option value="SEGUROS DE VIDA ALFA S.A.">SEGUROS DE VIDA ALFA S.A.</option>
    <option value="SEGUROS DE VIDA SURAMERICANA S.A.">SEGUROS DE VIDA SURAMERICANA S.A.</option>
    <option value="UNIVERSIDAD NACIONAL DE COLOMBIA">UNIVERSIDAD NACIONAL DE COLOMBIA</option>
</datalist>

                      
                    
                  </div>
                </div> 
                 
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Ciudad:</label>

                  <div class="col-sm-10">
                      
<input list="ciudades" class="form-control" name="ciudad" id="ciudad_usuario">
<datalist id="ciudades">
    <option value="ARAUCA">ARAUCA</option>
    <option value="ARMENIA">ARMENIA</option>
    <option value="BARRANQUILLA">BARRANQUILLA</option>
    <option value="BOGOTA">BOGOTA</option>
    <option value="CALI">CALI</option>
    <option value="CUCUTA">CUCUTA</option>
    <option value="MANIZALES">MANIZALES</option>
    <option value="MEDELLIN">MEDELLIN</option>
    <option value="PASTO">PASTO</option>
    <option value="PEREIRA">PEREIRA</option>
    <option value="YOPAL">YOPAL</option>
</datalist>

                      
                      
                   
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
                                mysqli_set_charset($connection, "utf8");
                                if(isset($_POST['Submit'])){
                                $tipodocumento = $_POST['tipodocumento'];
                                $nombres = $_POST['nombres'];
                                $documento = $_POST['documento'];
                                $telefono = $_POST['telefono'];
                                $ciudad = $_POST['ciudad'];                             
                              
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
                                  '$sesion',
                                  '$entidad',
                                  '$tipodocumento',
                                  '$documento',
                                  '$nombres',
                                  '$telefono',
                                  '',
                                  '$ciudad',
                                  NULL,
                                  NULL,
                                  NOW()
                                  )";
                                 
                                   mysqli_query($connection, $insertarpaciente);
                                ?>
                               
                                 <script language="JavaScript" type="text/javascript">
                                        swal({  title: "Paciente registrado",   
                                                text: " ",   
                                                type: "success",   
                                                confirmButtonText: "Continuar" },
                                         function () {

                                        window.location.href = 'crearNuevoProceso.php?documento=<?php echo $documento ?>';
                                    });

                                        </script>
                                        
                                        
                                        
                                        <script language="JavaScript" type="text/javascript">
                                        swal({
                                        title: "Usuario Creado",
                                          text: "Seleccione el servicio",
                                          imageUrl: 'http://www.cirec.org/solucioncovid19/particulares/img/iconoazul.png',
                                        imageHeight: 20,
                                        imageAlt: 'A tall image' ,
                                          showCancelButton: true,
                                          confirmButtonClass: "btn-success",
                                          confirmButtonText: "Hidroterapia",
                                          cancelButtonText: "Otra Especialidad",
                                          closeOnConfirm: false,
                                          closeOnCancel: false
                                        },
                                        function(isConfirm) {
                                          if (isConfirm) {
                                            
                                          } else {
                                            window.location.href = 'crearNuevoProceso.php?documento=<?php echo $documento ?>';
                                          }
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
        <!--<strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights reserved.-->
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
