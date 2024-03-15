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
require_once('vendor/php-excel-reader/excel_reader2.php');
require_once('vendor/SpreadsheetReader.php');
$sesion = $_SESSION["username"];
if (isset($_POST["import"])) {
  $fecha = date("Y-m-d H:i:s");
  $allowedFileType = ['application/vnd.ms-excel', 'text/xls', 'text/xlsx', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'];
  if (in_array($_FILES["file"]["type"], $allowedFileType)) {
    $targetPath = 'subidas_app/' . $_FILES['file']['name'];
    move_uploaded_file($_FILES['file']['tmp_name'], $targetPath);
    $Reader = new SpreadsheetReader($targetPath);
    $sheetCount = count($Reader->sheets());
    for ($i = 0; $i < 1; $i++) {
      $Reader->ChangeSheet($i);
      foreach ($Reader as $Row) {
        $estado = 'sinsubir';
        $documento = "";
        if (isset($Row[0])) {
          $documento = mysqli_real_escape_string($connection, $Row[0]);
        }
        $autorizacion = "";
        if (isset($Row[1])) {
          $autorizacion = mysqli_real_escape_string($connection, $Row[1]);
        }
        $codigoServicio = "";
        if (isset($Row[2])) {
          $codigoServicio = mysqli_real_escape_string($connection, $Row[2]);
        }
        $numCodServ = "";
        if (isset($Row[3])) {
          $numCodServ = mysqli_real_escape_string($connection, $Row[3]);
        }
        $fechasolicitud = "";
        if (isset($Row[4])) {
          $fechasolicitud  = mysqli_real_escape_string($connection, $Row[4]);
        }
        $nombre = "";
        if (isset($Row[5])) {
          $nombre = mysqli_real_escape_string($connection, $Row[5]);
        }
        $telefono = "";
        if (isset($Row[6])) {
          $telefono = mysqli_real_escape_string($connection, $Row[6]);
        }
        $entidad = "";
        if (isset($Row[7])) {
          $entidad = mysqli_real_escape_string($connection, $Row[7]);
        }
        $codigoentidad = "";
        if (isset($Row[8])) {
          $codigoentidad = mysqli_real_escape_string($connection, $Row[8]);
        }
        $fechaautorizacion = "";
        if (isset($Row[9])) {
          $fechaautorizacion = mysqli_real_escape_string($connection, $Row[9]);
        }
        $tipodocumento = "";
        if (isset($Row[10])) {
          $tipodocumento = mysqli_real_escape_string($connection, $Row[10]);
        }
        $valorautorizado = "";
        if (isset($Row[11])) {
          $valorautorizado = mysqli_real_escape_string($connection, $Row[11]);
        }
        $identificador = "";
        if (isset($Row[12])) {
          $identificador = mysqli_real_escape_string($connection, $Row[12]);
        }
        $especialidad = "";
        if (isset($Row[13])) {
          $especialidad = mysqli_real_escape_string($connection, $Row[13]);
        }
        $cantidadautorizada = "";
        if (isset($Row[14])) {
          $cantidadautorizada = mysqli_real_escape_string($connection, $Row[14]);
        }
        $cantidaprogramada = "";
        if (isset($Row[15])) {
          $cantidaprogramada = mysqli_real_escape_string($connection, $Row[15]);
        }
        $fechalimiteejecucion = "";
        if (isset($Row[16])) {
          $fechalimiteejecucion = mysqli_real_escape_string($connection, $Row[16]);
        }
        $estadogeneral = "";
        if (isset($Row[17])) {
          $estadogeneral = mysqli_real_escape_string($connection, $Row[17]);
        }
        $bitacoraasitio = "";
        if (isset($Row[18])) {
          $bitacoraasitio = mysqli_real_escape_string($connection, $Row[18]);
        }
        $bitacoranoasistio = "";
        if (isset($Row[19])) {
          $bitacoranoasistio = mysqli_real_escape_string($connection, $Row[19]);
        }
        $fechacontacto = "";
        if (isset($Row[20])) {
          $fechacontacto = mysqli_real_escape_string($connection, $Row[20]);
        }
        $fechanocontacto = "";
        if (isset($Row[21])) {
          $fechanocontacto = mysqli_real_escape_string($connection, $Row[21]);
        }
        $solicitudespecial = "";
        if (isset($Row[22])) {
          $solicitudespecial = mysqli_real_escape_string($connection, $Row[22]);
        }
        $gestiono = "";
        if (isset($Row[23])) {
          $gestiono = mysqli_real_escape_string($connection, $Row[23]);
        }
        if (!empty($nombre) || !empty($documento) || !empty($telefono) || !empty($autorizacion)) {
          $fechaActual = date('Y-m-d'); // Obtiene la fecha actual
          $insertarpaciente = "INSERT INTO app_cargue VALUES (
                         null, 
                        '$documento', 
                        '$autorizacion', 
                        '$codigoServicio', 
                        '$numCodServ',
                        '$fechaActual', 
                        '$nombre', 
                        '$telefono',
                        '$entidad',
                        '$codigoentidad',
                        '$fechaautorizacion',
                        '$tipodocumento',
                        '$valorautorizado',
                        '$identificador',
                        '$especialidad', 
                        '$cantidadautorizada',
                        '$cantidaprogramada',
                        '$fechalimiteejecucion', 
                        '$estadogeneral',
                        '$bitacoraasitio',
                        '$bitacoranoasistio',
                        '$fechacontacto',
                        '$fechanocontacto', 
                        '$solicitudespecial',
                        '$sesion',
                        'sinsubir'
                        )";
          $resultados = mysqli_query($connection, $insertarpaciente);
        }
        if (!empty($resultados)) {
          $type = "success";
          $message = "Excel importado correctamente";
        } else {
          $type = "error";
          $message = "Hubo un problema al importar registros";
        }
      }
    }
  }
} else {
  $type = "error";
  //$message = "El archivo enviado es invalido. Por favor vuelva a intentarlo";
}
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js" />
</script>
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
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <?php include("../../layout.php"); ?>
      <!-- /.sidebar -->
    </aside>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Procesos Masivos
          <small>Cicirec servicios</small>
        </h1>
      </section>
      <!-- Main content -->
      <div class="content-page">
        <!-- Start content -->
        <div class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-xl-12">
                <div class="breadcrumb-holder">
                  <div class="clearfix"></div>
                </div>
              </div>
            </div>
            <!-- end row -->
            <div>
              <h5>Subir archivo Excel con los Procesos para gestionar</h5>
            </div>
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card mb-3">
                  <div class="card-header">
                    </h3>
                  </div>
                  <div class="card-body">
                  <form action="" method="post" name="frmExcelImport" id="frmExcelImport" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="userName">Elija Archivo Excel<span class="text-danger">*</span></label>
                        <input type="file" name="file" id="file" data-parsley-trigger="change" placeholder="" class="form-control" accept=".xls,.xlsx,">
                    </div>
                    <div class="form-group text-right m-b-0">
                        <button class="btn btn-primary" type="submit" name="import" id="uploadButton">
                            Cargar archivo Excel
                        </button>                    
                </form>

                <br>
                <div class="text-left">Progreso: </div>
        <progress style="width: 15%;" id="progressBar" value="0" max="100" class="form-control progress"></progress> <br>
                <div id="loadingMessage" style="display:none;" class="text-left">Su archivo se está cargando...</div>
                    </div>

                
        
                <script>
document.getElementById('frmExcelImport').addEventListener('submit', function(event) {
    var fileInput = document.getElementById('file');
    if (fileInput.files.length > 0) {
        var file = fileInput.files[0];
        var formData = new FormData();
        formData.append('file', file);
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'upload.php', true);
        xhr.upload.onprogress = function(e) {
            if (e.lengthComputable) {
                var percentComplete = (e.loaded / e.total) * 90;
                document.getElementById('progressBar').value = percentComplete;
            }
        };
        xhr.onload = function() {
            document.getElementById('loadingMessage').style.display = 'block'; // Mostrar mensaje de carga
            setTimeout(function() {
                swal({
                    title: "Su archivo se está cargando",
                    text: "Tiempo aproximado: 15 segundos",
                    imageHeight: 20,
                    imageAlt: "A tall image",
                    buttons: false, // Ocultar botones
                    timer: 10000, // Mostrar durante 15 segundos
                });
            }, 0); // Mostrar el SweetAlert después de 0 segundos
        };
        xhr.send(formData);
    } else {
        alert('Por favor, seleccione un archivo para cargar.');
        event.preventDefault(); // Evitar que se envíe el formulario
    }
});
</script>
        
        


                    
                    <div id="response" class="<?php if (!empty($type)) {
                                                echo $type . " display-block";
                                              } ?>"><?php if (!empty($message)) {
                                                                                                                echo $message;
                                                                                                              } ?></div>
                    <?php
                    $gestiono = $_SESSION["username"];
                    $sqlSelect = "SELECT * FROM app_cargue where estadocargue = 'sinsubir' ";
                    $result = mysqli_query($connection, $sqlSelect);
                    if (mysqli_num_rows($result) > 0) {
                    ?>
                      <table class="table table-responsive-xl">
                        <thead>
                          <tr>
                            <th>Nombres</th>
                            <th>Tipo Documento</th>
                            <th>Documento</th>
                            <th>Numero de Autorizacion</th>
                            <th>Fecha de Autorizacion</th>
                            <th>Entidad</th>
                            <th>Nombre Servicio</th>
                            <th>Codigo Servicio</th>
                            <th>Cantidad Autorizada</th>
                          </tr>
                        </thead>
                        <?php
                        while ($row = mysqli_fetch_array($result)) {
                        ?>
                          <tbody>
                            <tr>
                              <td><?php echo $row['nombre']; ?></td>
                              <td><?php echo $row['tipodocumento']; ?></td>
                              <td><?php echo $row['documento']; ?></td>
                              <td><?php echo $row['autorizacion']; ?></td>
                              <td><?php echo $row['fechaautorizacion']; ?></td>
                              <td><?php echo $row['entidad']; ?></td>
                              <td><?php echo $row['codigoServicio']; ?></td>
                              <td><?php echo $row['numCodServ']; ?></td>
                              <td><?php echo $row['cantidadautorizada']; ?></td>
                            </tr>
                          <?php
                          // validar duplicados que est��n en otras especialidades
                          $autorizacionValidaDuplicados = $row['autorizacion'];
                          $documentoValidaDuplicados = $row['documento'];
                          $sqlValidaDuplicado = "SELECT 
                                    CASE
                                        WHEN EXISTS (
                                            SELECT 1
                                            FROM otrasespecialidades
                                            WHERE autorizacion = '$autorizacionValidaDuplicados'
                                        ) THEN 1
                                        ELSE 0
                                    END AS hay_registros_con_autorizacion ";
                          $resultValidaDuplicado = mysqli_query($connection, $sqlValidaDuplicado);
                          $rowValidaDuplicado = mysqli_fetch_array($resultValidaDuplicado);
                          $ValidaHayRegistrosDuplicados = $rowValidaDuplicado['hay_registros_con_autorizacion'];
                          if ($ValidaHayRegistrosDuplicados == '1') {
                            echo '<script language="JavaScript" type="text/javascript">
                                    swal({
                                        title: "Las siguientes autorizaciones ya existen",
                                        text: "Nro. ' . $autorizacionValidaDuplicados . '",
                                        imageUrl: "http://www.cirec.org/solucioncovid19/particulares/img/iconoazul.png",
                                        imageHeight: 20,
                                        imageAlt: "A tall image",
                                    },
                                    function(isConfirm) {
                                        if (isConfirm) {
                                            window.location.href = "eliminaDuplicado.php?idEliminaDuplicado=' . $autorizacionValidaDuplicados . '&documento=' . $documentoValidaDuplicados . '";
                                        } else {
                                            window.location.href = "eliminaDuplicado.php?idEliminaDuplicado=' . $autorizacionValidaDuplicados . '&documento=' . $documentoValidaDuplicados . '";
                                        }
                                    });
                                </script>';
                          } //FIN VALIDA DUPLICADOS
                          else {
                            //echo "Archivos correcto";
                          } //fin else valida duplicados
                        } //fin while que muestra datos antes de cargar
                          ?>
                          </tbody>
                      </table>
                      <div>
                        <a class="btn btn-success" href="masivoexcel.php?accion=importar">Importar</a>
                        <a class="btn btn-danger" href="masivoexcel.php?accion=eliminar">eliminar cargue</a>
                      </div>
                    <?php
                    }
                    ?>
                    <?php
                    if ($_GET['accion'] == "eliminar") {
                    ?>
                      <script language="JavaScript" type="text/javascript">
                        swal({
                            title: "Eliminar datos de cargue",
                            text: "Se eliminaran los datos registrados antes del cargue",
                            imageUrl: 'http://www.cirec.org/solucioncovid19/particulares/img/iconoazul.png',
                            imageHeight: 20,
                            imageAlt: 'A tall image',
                            showCancelButton: true,
                            confirmButtonClass: "btn-success",
                            confirmButtonText: "Borrar registros",
                            cancelButtonText: "Cancelar",
                            closeOnConfirm: false,
                            closeOnCancel: false
                          },
                          function(isConfirm) {
                            if (isConfirm) {
                              window.location.href = 'eliminarcargue.php?sesion=<?php echo $gestiono ?>';
                            } else {
                              window.location.href = 'masivoexcel.php';
                            }
                          });
                      </script>
                    <?php
                    }
                    ?>
                    <?php
                    if ($_GET['accion'] == "importar") {
                    ?>
                      <script language="JavaScript" type="text/javascript">
                        swal({
                            title: "Registrar Pacientes",
                            text: "Se registraran los datos de los pacientes",
                            imageUrl: 'http://www.cirec.org/solucioncovid19/particulares/img/iconoazul.png',
                            imageHeight: 20,
                            imageAlt: 'A tall image',
                            showCancelButton: true,
                            confirmButtonClass: "btn-success",
                            confirmButtonText: "Registrar Pacientes",
                            cancelButtonText: "Cancelar",
                            closeOnConfirm: false,
                            closeOnCancel: false
                          },
                          function(isConfirm) {
                            if (isConfirm) {
                              window.location.href = 'importar.php?sesion=<?php echo $sesion ?>';
                            } else {
                              window.location.href = 'masivoexcel.php';
                            }
                          });
                      </script>
                    <?php
                    }
                    ?>
                  </div>
                </div><!-- end card-->
              </div>
            </div>
          </div>
          <!-- END container-fluid -->
        </div>
        <!-- END content -->
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