      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="http://192.168.0.122\cicirecservicios\dist\img\user1-128x128.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p><?php echo $sesion; ?></p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>

          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
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

          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>