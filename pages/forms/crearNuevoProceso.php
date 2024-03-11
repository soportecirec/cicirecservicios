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
  date_default_timezone_set('America/Bogota');
  $fecha = date('d-m-Y');
  $documento = $_GET['documento'];
  $sesion= $_SESSION["username"];
  $sql = "SELECT *  from otrasespecialidades where documento = '$documento'";
      $result = mysqli_query($connection, $sql);
      $row = mysqli_fetch_array($result);
        $nombres = $row['nombre'];
        $tipodocumento = $row['tipodocumento'];       
        $telefono = $row['telefono'];
        $entidad = $row['entidad'];
       
        

        //conexión a servinte

        try {

          $usuario = "BDCIREC";
          $password = "C1r3c2020";
          $nombredb = "SCSE";
      
      
          //para oracle el tipo es oci
          $conn = new PDO("oci:dbname" . $nombredb, $usuario, $password);
      
          $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
          echo "Error: " . $e->getMessage();
        }
        

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf8">
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
<<<<<<< Updated upstream
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
=======
    <?php include("../../layout.php"); ?>
>>>>>>> Stashed changes
    <!-- /.sidebar -->
  </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Crear nuevo proceso
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
            
            

            
            
            
            
            <form class="form-horizontal" id="fupForm" action="crearNuevoProceso.php" method="POST" enctype="multipart/form-data">
              <div class="box-body">
                 

                  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Documento:</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="codigo" name = "documento" placeholder="" value = "<?php echo $documento;?>" readonly >
                     <input type="hidden" class="form-control" id="codigo" name = "sesion" placeholder="" value = "<?php echo $sesion;?>"  >                    
                  </div>
                </div>

                  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Tipo Documento:</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="codigo" name = "tipodocumento" placeholder="" value = "<?php echo $tipodocumento;?>" readonly >                   
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nombres y Apellidos:</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id= "nombres_usuario" name = "nombres" placeholder="" value = "<?php echo $nombres;?>" readonly  >
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Telefono:</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id= "telefono_usuario" name = "telefono" placeholder=""  value = "<?php echo $telefono;?>" readonly >
                  </div>
                </div>               

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Entidad:</label>

                  <div class="col-sm-10">

                  <input list="entidades" class="form-control" name="entidad" id="entidad_usuario" oninput="actualizarCodigoEntidad()">

                        
                        <datalist id="entidades">
                        <?php
                        //buscar entidad
                        $consultaEntidad = "select * from intar";
                        $resultEntidad = $conn->query($consultaEntidad);

                        while($rowEntidad = $resultEntidad->fetch()){

                        $codigoEntidad = $rowEntidad['TARCOD'];
                        $nombreEntidad = $rowEntidad['TARNOM'];
                        ?>
                          <option value="<?php echo $nombreEntidad;?>" data-codigo="<?php echo $codigoEntidad; ?>"><?php echo $codigoEntidad;?></option>
                          <?php
                        }
                        ?>
                        </datalist>

                        <input type='text' name="codigoEntidadSeleccionado" id="codigoEntidadSeleccionado">
                    
                    <script>
                      //FUNCIÓN PARA AGREGAR EL CODIGO EN EL INPUT OCULTO
                        function actualizarCodigoEntidad() {
                            var input = document.getElementById('entidad_usuario');
                            var codigoInput = document.getElementById('codigoEntidadSeleccionado');
                            var option = document.querySelector('#entidades option[value="' + input.value + '"]');
                            if (option) {
                                codigoInput.value = option.getAttribute('data-codigo');
                            } else {
                                codigoInput.value = '';
                            }
                        }
                    </script>

                </div>
                </div> 
                 
                <!-- nuevos camnpos -->

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Autorización No:</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="ciudad_usuario" name = "autorizacion" >
                  </div>
                </div>
                
                
                <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Servicio:</label>
                
                
            <div class="col-sm-10">
                  
                      
                      <input list="browsers" id="myBrowser" name="servicios" class="form-control" oninput="actualizarCodigoServicio()">
                    <datalist id="browsers">
                        <?php
                        $sqlLista = "SELECT * FROM servicios";
                        $resultlista = mysqli_query($connection, $sqlLista);
                    
                        while ($valores = mysqli_fetch_array($resultlista)) {
                            // Eliminar acentos y convertir a mayúsculas
                            $nomServicioSinAcentosMayus = strtoupper(iconv('UTF-8', 'ASCII//TRANSLIT', $valores['nombreServicio']));
                            echo '<option value="'.$nomServicioSinAcentosMayus.'" data-codigo="'.$valores['codigoServicio'].'">'.$valores['codigoServicio'].'</option>';
                        }
                        ?>
                    </datalist>
                    <input type='hidden' name="codigoServicioSeleccionado" id="codigoServicioSeleccionado">
                    
                    <script>
                        function actualizarCodigoServicio() {
                            var input = document.getElementById('myBrowser');
                            var codigoInput = document.getElementById('codigoServicioSeleccionado');
                            var option = document.querySelector('#browsers option[value="' + input.value + '"]');
                            if (option) {
                                codigoInput.value = option.getAttribute('data-codigo');
                            } else {
                                codigoInput.value = '';
                            }
                        }
                    </script>

                </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Fecha Autorización:</label>

                  <div class="col-sm-10">
                    <input type="date" class="form-control"  name = "fechaautorizacion" >
                  </div>
                
                </div>
                
                
                
                 <!--FUNCIÓN PARA VALIDAR CANTIDADES-->      
         <script>
            document.addEventListener('DOMContentLoaded', function() {
                var inputs = document.getElementsByName('cantidad');
                var cantidadAutorizada = inputs[0];
                inputs = document.getElementsByName('cantidad_programada');
                var cantidadProgramada = inputs[0];
                var botonGuardar = document.getElementById('butsave');
        
                function validarCantidad() {
                    var valorAutorizada = parseInt(cantidadAutorizada.value.trim());
                    var valorProgramada = parseInt(cantidadProgramada.value.trim());
        
                    if (!isNaN(valorAutorizada) && !isNaN(valorProgramada) && valorAutorizada >= valorProgramada) {
                        botonGuardar.disabled = false;
                    } else {
                        botonGuardar.disabled = true;
                    }
                }
        
                cantidadAutorizada.addEventListener('input', validarCantidad);
                cantidadProgramada.addEventListener('input', validarCantidad);
            });
         </script>
         <!--FIN FUNCIÓN PARA VALIDAR CANTIDADES-->
                
                
                
                
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Cantidad autorizada:</label>

                  <div class="col-sm-10">
                    <input type="number" class="form-control" id="ciudad_usuario" name = "cantidad" >
                  </div>
                </div>
                <div class="form-group">
                  <label for="cantidad_programada" class="col-sm-2 control-label">Cantidad Programada:</label>

                  <div class="col-sm-10">
                    <input type="number" class="form-control" id="cantidad_programada" name = "cantidad_programada" >
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Fecha Solicitud:</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="ciudad_usuario" name = "fechasolicitud" value="<?php echo $fecha;?>" readonly>
                  </div>
                </div>
              </div>
              <div id = "mensaje"></div>
              <!-- /.box-body -->
              <div class="box-footer">
                
                <button type="submit" class="btn btn-info pull-right" id="butsave" name = "Submit" disabled>Crear proceso </button>
                
                
              </div>
              <!-- /.box-footer -->
            </form>
            <?php
                                
                                
            
            
            if(isset($_POST['Submit'])){
                                $tipodocumento = $_POST['tipodocumento'];
                                $nombres = $_POST['nombres'];
                                $documento = $_POST['documento'];
                                $telefono = $_POST['telefono'];
                                $correo = $_POST['correo'];
                                $entidad = $_POST['entidad'];
                                $fechasolicitud = $_POST['fechasolicitud'];
                                $autorizacion = $_POST['autorizacion'];
                                $codigoServicio = $_POST['codigoServicio'];
                                $fechaautorizacion= $_POST['fechaautorizacion'];
                                $valorautorizado= $_POST['valorautorizado'];
                                $especialidad= $_POST['especialidad'];
                                $cantidad= $_POST['cantidad'];
                                $cantidad_programada = $_POST['cantidad_programada'];
                                $sesion= $_POST['sesion'];
                                $servicios= $_POST['servicios'];
                                $codigoServicioSeleccionado = $_POST['codigoServicioSeleccionado'];
                                $codigoEntidadSeleccionado = $_POST['codigoEntidadSeleccionado'];
                                
                                $consutar= "SELECT autorizacion from otrasespecialidades where documento = '$documento' and autorizacion = '$autorizacion'";
                                $result = mysqli_query($connection, $consutar);
                                $num_rows = mysqli_num_rows($result);
                                if($num_rows >0){
                                      
                                            ?>
                               <!--
                                             <script language="JavaScript" type="text/javascript">
                                                swal({  title: "La autorización ya existe",   
                                                text: " ",   
                                                type: "warning",   
                                                confirmButtonText: "Continuar" },
                                                function () {

                                                  window.location.href = '../tables/usuarioOtraEspecialidadBuscar.php?criterio=<?php echo $documento ?>';
                                                 });

                                            </script>
                                          
                                            -->
                                            
                                            
                                            
                                            
                                            
                                            <?php 
                                            echo $tipodocumento;
                                echo $nombres;
                                echo $documento;
                           
                            
                                }
                                else{
                            
                                 
                                  $insertarpaciente = "INSERT INTO `otrasespecialidades` (`id`, `documento`, `autorizacion`, `codigoServicio`, `numCodServ`, `fechasolicitud`, `nombre`, `telefono`, `entidad`, `codEntidad`, `fechaautorizacion`, `tipodocumento`, `valorautorizado`, `identificador`, `especialidad`, `cantidadautorizada`, `cantidadprogramada`, `fechalimiteejecucion`, `estadogeneral`, `bitacoraasitio`, `bitacoranoasistio`, `fechacontacto`, `fechanocontacto`, `solicitudespecial`, `gestiono`, `estadocargue`) VALUES (NULL, '$documento', '$autorizacion', '$servicios', '$codigoServicioSeleccionado', '$fechasolicitud', '$nombres', '$telefono', '$entidad', '$codigoEntidadSeleccionado', '$fechaautorizacion', '$tipodocumento', '$valorautorizado', '123', 'NULL', '$cantidad', '$cantidad_programada', 'NULL', 'AUTORIZADO', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', '$sesion', 'NULL ');";
                                 
                                  mysqli_query($connection, $insertarpaciente);

                                  //echo $insertarpaciente;

                                           
                                            
                                            ?>
                               
                                             <script language="JavaScript" type="text/javascript">
                                                swal({  title: "Proceso creado",   
                                                text: " ",   
                                                type: "success",   
                                                confirmButtonText: "Continuar" },
                                                function () {

                                                 window.location.href = '../tables/seguimientoOtraEspecialidad.php?criterio=<?php echo $autorizacion ?>&autorizacion=<?php echo $autorizacion ?>';
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
