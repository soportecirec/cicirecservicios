<?php
include_once "../../api/conexion.php";

$sql2 = "SELECT *  from users where correo = '$sesion'";
$result2 = mysqli_query($connection, $sql2);
$row2 = mysqli_fetch_array($result2);
$perfil = $row2['sintomas'];
$sesion = $_SESSION["username"];

?>
<link rel="icon" href="dist\img\cirec logo.png?v=2" type="image/x-icon">
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image" style="padding: 10px 0px 30px 0px;">
        <img src="http://192.168.0.122\cicirecservicios\dist\img\cirec logo.png" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php echo $sesion; ?></p>
        <p><?php echo $perfil; ?></p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">

      <!--perfil administrador-->
      <?php
      if ($perfil == 'administrador') {
      ?>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Administrar</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="http://192.168.0.122\cicirecservicios\pages\forms\usuarioOtraEspecialidad.php"><i class="fa fa-circle-o"></i> Buscar paciente</a></li>
            <li class="active"><a href="http://192.168.0.122\cicirecservicios\pages\tables\masivoexcel.php"><i class="fa fa-circle-o"></i> Cargar masivo</a></li>
            <li class="active"><a href="http://192.168.0.122\cicirecservicios\pages\forms\excelTodosOtrasEspecialidades.php"><i class="fa fa-circle-o"></i> Descargar Excel</a></li>
          </ul>
        </li>
        <li><a href="http://192.168.0.122\cicirecservicios\logout.php"><i class="fa fa-sign-out"></i> <span>Cerrar sesión</span></a></li>
      <?php
      }
      ?>

      <?php
      if ($perfil == 'gestorseguimiento') {
      ?>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Administrar</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="http://192.168.0.122\cicirecservicios\pages\forms\usuarioOtraEspecialidad.php"><i class="fa fa-circle-o"></i> Buscar paciente</a></li>
            <li class="active"><a href="http://192.168.0.122\cicirecservicios\pages\tables\masivoexcel.php"><i class="fa fa-circle-o"></i> Cargar masivo</a></li>
            <li class="active"><a href="http://192.168.0.122\cicirecservicios\pages\forms\excelTodosOtrasEspecialidades.php"><i class="fa fa-circle-o"></i> Descargar Excel</a></li>
          </ul>
        </li>
        <li><a href="http://192.168.0.122\cicirecservicios\logout.php"><i class="fa fa-sign-out"></i> <span>Cerrar sesión</span></a></li>
      <?php
      }
      ?>

      <?php
      if ($perfil == 'lideradmisiones') {
      ?>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Administrar</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="http://192.168.0.122\cicirecservicios\pages\forms\usuarioOtraEspecialidad.php"><i class="fa fa-circle-o"></i> Buscar paciente</a></li>
            <li class="active"><a href="http://192.168.0.122\cicirecservicios\pages\tables\masivoexcel.php"><i class="fa fa-circle-o"></i> Cargar masivo</a></li>
            <li class="active"><a href="http://192.168.0.122\cicirecservicios\pages\forms\excelTodosOtrasEspecialidades.php"><i class="fa fa-circle-o"></i> Descargar Excel</a></li>
          </ul>
        </li>
        <li><a href="http://192.168.0.122\cicirecservicios\logout.php"><i class="fa fa-sign-out"></i> <span>Cerrar sesión</span></a></li>
      <?php
      }
      ?>

      <?php
      if ($perfil == 'comercial') {
      ?>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Administrar</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="http://192.168.0.122\cicirecservicios\pages\forms\usuarioOtraEspecialidad.php"><i class="fa fa-circle-o"></i> Buscar paciente</a></li>
            <li class="active"><a href="http://192.168.0.122\cicirecservicios\pages\tables\masivoexcel.php"><i class="fa fa-circle-o"></i> Cargar masivo</a></li>
            <li class="active"><a href="http://192.168.0.122\cicirecservicios\pages\forms\excelTodosOtrasEspecialidades.php"><i class="fa fa-circle-o"></i> Descargar Excel</a></li>
          </ul>
        </li>
        <li><a href="http://192.168.0.122\cicirecservicios\logout.php"><i class="fa fa-sign-out"></i> <span>Cerrar sesión</span></a></li>
      <?php
      }
      ?>

      <?php
      if ($perfil == 'lidercall') {
      ?>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Administrar</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="http://192.168.0.122\cicirecservicios\pages\forms\usuarioOtraEspecialidad.php"><i class="fa fa-circle-o"></i> Buscar paciente</a></li>
            <li class="active"><a href="http://192.168.0.122\cicirecservicios\pages\tables\masivoexcel.php"><i class="fa fa-circle-o"></i> Cargar masivo</a></li>
            <li class="active"><a href="http://192.168.0.122\cicirecservicios\pages\forms\excelTodosOtrasEspecialidades.php"><i class="fa fa-circle-o"></i> Descargar Excel</a></li>
          </ul>
        </li>
        <li><a href="http://192.168.0.122\cicirecservicios\logout.php"><i class="fa fa-sign-out"></i> <span>Cerrar sesión</span></a></li>
      <?php
      }
      ?>

      <?php
      if ($perfil == 'auxadmisiones') {
      ?>
        <!--perfil auxiliar-->
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Administrar</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="http://192.168.0.122\cicirecservicios\pages\forms\usuarioOtraEspecialidad.php"><i class="fa fa-circle-o"></i> Buscar paciente</a></li>

          </ul>
        </li>
        <li><a href="http://192.168.0.122\cicirecservicios\logout.php"><i class="fa fa-sign-out"></i> <span>Cerrar sesión</span></a></li>
      <?php
      }
      ?>

      <?php
      if ($perfil == 'terapeutaval') {
      ?>
        <!--perfil terapeutaval-->
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Administrar</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="http://192.168.0.122\cicirecservicios\pages\forms\usuarioOtraEspecialidad.php"><i class="fa fa-circle-o"></i> Buscar paciente</a></li>

          </ul>
        </li>
        <li><a href="http://192.168.0.122\cicirecservicios\logout.php"><i class="fa fa-sign-out"></i> <span>Cerrar sesión</span></a></li>
      <?php
      }
      ?>

      <?php
      if ($perfil == 'liderrehabilitacion') {
      ?>
        <!--perfil auxiliar-->
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Administrar</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="http://192.168.0.122\cicirecservicios\pages\forms\usuarioOtraEspecialidad.php"><i class="fa fa-circle-o"></i> Buscar paciente</a></li>
            <li class="active"><a href="http://192.168.0.122\cicirecservicios\pages\forms\excelTodosOtrasEspecialidades.php"><i class="fa fa-circle-o"></i> Descargar Excel</a></li>
          </ul>
        </li>
        <li><a href="http://192.168.0.122\cicirecservicios\logout.php"><i class="fa fa-sign-out"></i> <span>Cerrar sesión</span></a></li>
      <?php
      }
      ?>

      <?php
      if ($perfil == 'agentecall') {
      ?>
        <!--perfil auxiliar-->
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Administrar</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="http://192.168.0.122\cicirecservicios\pages\forms\usuarioOtraEspecialidad.php"><i class="fa fa-circle-o"></i> Buscar paciente</a></li>
            <li class="active"><a href="http://192.168.0.122\cicirecservicios\pages\forms\excelTodosOtrasEspecialidades.php"><i class="fa fa-circle-o"></i> Descargar Excel</a></li>
          </ul>
        </li>
        <li><a href="http://192.168.0.122\cicirecservicios\logout.php"><i class="fa fa-sign-out"></i> <span>Cerrar sesión</span></a></li>
      <?php
      }
      ?>

      <?php
      if ($perfil == 'facturacion') {
      ?>
        <!--perfil auxiliar-->
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Administrar</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="http://192.168.0.122\cicirecservicios\pages\forms\usuarioOtraEspecialidad.php"><i class="fa fa-circle-o"></i> Buscar paciente</a></li>
            <?php
            if ($sesion == 'karem.ruiz@cirec.org') {
            ?>
              <li class="active"><a href="http://192.168.0.122\cicirecservicios\pages\tables\masivoexcelfacturacion.php"><i class="fa fa-circle-o"></i> Cargar masivo facturacion</a></li>
            <?php
            }
            ?>
            <li class="active"><a href="http://192.168.0.122\cicirecservicios\pages\forms\excelTodosOtrasEspecialidades.php"><i class="fa fa-circle-o"></i> Descargar Excel</a></li>
          </ul>
        </li>
        <li><a href="http://192.168.0.122\cicirecservicios\logout.php"><i class="fa fa-sign-out"></i> <span>Cerrar sesión</span></a></li>
      <?php
      }
      ?>






      <?php
      if ($perfil == 'jefeexperiencia') {
      ?>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Administrar</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="http://192.168.0.122\cicirecservicios\pages\forms\usuarioOtraEspecialidad.php"><i class="fa fa-circle-o"></i> Buscar paciente</a></li>
            <li class="active"><a href="http://192.168.0.122\cicirecservicios\pages\tables\masivoexcel.php"><i class="fa fa-circle-o"></i> Cargar masivo</a></li>
            <li class="active"><a href="http://192.168.0.122\cicirecservicios\pages\forms\excelTodosOtrasEspecialidades.php"><i class="fa fa-circle-o"></i> Descargar Excel</a></li>
          </ul>
        </li>
        <li><a href="http://192.168.0.122\cicirecservicios\logout.php"><i class="fa fa-sign-out"></i> <span>Cerrar sesión</span></a></li>
      <?php
      }
      ?>


    </ul>
  </section>
  <!-- /.sidebar -->
</aside>