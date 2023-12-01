<?php
  include 'pages/konfigurasi.php';
  $conn = new mysqli($servername, $username, $password, $dbname);

  if (!isset($_SESSION['id'])) {
      header('Location: pages/login.php');
  }

  $allowed_roles = ['admin'];
  $user_role = $_SESSION['role'];

  if (!in_array($user_role, $allowed_roles)) {
      header('Location: pages/login.php');
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>    
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="dist/img/logo.png">
  <title>Bitani Point</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <style>
    .button {
      font-size: 16px;
      border-radius: 5px;
      padding: 10px 25px;
      border: none;
      font-weight: 600;
      background-color: #4D4B34;
      color: #fff;
      cursor: pointer;}
      .button:hover {
      font-size: 16px;
      border-radius: 5px;
      padding: 10px 25px;
      border: none;
      font-weight: 600;
      background-color: #678441;
      color: #fff;
      cursor: pointer;}
    a {
      color: #678441;
    }

    .sidebar-dark-primary .nav-sidebar>.nav-item>.nav-link.active, .sidebar-light-primary .nav-sidebar>.nav-item>.nav-link.active {
      background-color: #F6F7F1;
      color: #678441;
    }

    .main-sidebar{
      background-color: #678441;
    }

    .sidebar .user-panel {
      border-bottom: 0px solid #F6F7F1;
    }
    .sidebar-dark-primary .sidebar a {
      color: #F6F7F1;
      font-family: 'Poppins', sans-serif;
    }

    .sidebar-dark-primary .brand-link {
      border-bottom: 0px solid #F6F7F1;
      margin-top: 7px;
    }
    .brand-text{
      font-family: 'Poppins', sans-serif;
      font-weight: bold;
      color: #F6F7F1;
    }
    .sidebar-dark-primary .btn-sidebar {
      background-color: #F6F7F1;
      color: #678441;
      border: 0px;
    }
    .sidebar-dark-primary .btn-sidebar:hover {
      background-color: #678441;
      color: #F6F7F1;
      border: 0px;
    }

    .sidebar-dark-primary .form-control-sidebar{
      background-color: #F6F7F1;
      color: #678441;
      border: 0px;
    }
    .content-wrapper{
      background-color: #F6F7F1;
    }

    .navbar-light .navbar-nav .nav-link {
      color: #9DAE77;font-family: 'Poppins', sans-serif;
    }
    .navbar-light .navbar-nav .nav-link:hover {
      color: #678441;font-family: 'Poppins', sans-serif;
    }
    .content-header h1 {
      color:#678441;font-family:'Poppins',sans-serif;font-weight: bold;font-size: 1.8rem;
    }
    .bg-info {
      background-color: #59B3D3!important;
    }
    .bg-success {
      background-color: #8DA95E!important;
    }
    .bg-warning {
      background-color: #DDA73D!important;
    }
    .bg-warning, .bg-warning>a {
      color:#fff!important;
    }
    .small-box>.inner {
    padding: 30px;
    }
    .small-box p {
      font-family:'Poppins',sans-serif;
    }
    .bg-gradient-primary {
    background: #9DAE77 repeat-x!important;
    color: #fff;
    }
    .btn-primary {
    color: #fff;
    background-color: #4D4B34;
    box-shadow: none;
    border:none;
    }
    .btn-primary:hover {
    color: #fff;
    background-color: #678441;
    border:none;
    box-shadow: none;
    }

  </style>
  <script type="text/javascript" src="dist/js/fusioncharts.js"></script>
  <script type="text/javascript" src="dist/js/themes/fusioncharts.theme.fint.js"></script>
  <script>
      FusionCharts.ready(function(){
          var grafik01 = new FusionCharts(
              {
                  "type":"column2d",
                  "renderAt":"lokasi01",
                  "width":"100%",
                  "height":"450px",
                  "dataFormat":"jsonurl",
                  "dataSource":"pages/db2json01.php"
              }
          );
          grafik01.render();
      });
  </script>
  <script>
      FusionCharts.ready(function(){
          var grafik02 = new FusionCharts(
              {
                  "type":"mscolumn2d",
                  "renderAt":"lokasi02",
                  "width":"100%",
                  "height":"450px",
                  "dataFormat":"jsonurl",
                  "dataSource":"pages/db2json02.php"
              }
          );
          grafik02.render();
      });
  </script>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>  -->

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php" class="nav-link">Home</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="dist/img/logo2.png" alt="Bitani Point" class="brand-image" >
      <span class="brand-text">Bitani Point</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/sehun.jpeg" class="img-circle" alt="User Image">
        </div>
        <div class="info">
          <a href="pages/profile.php" class="d-block"><?php echo $_SESSION["username"]?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item menu">
            <a href="pages/akun/akun.php" class="nav-link">
              <i class="nav-icon fas fa-user-alt"></i>
              <p>
                Akun
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Data
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/form/form.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Form</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/supplier/supplier.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Supplier</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/kalkulator/kalkulator.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kalkulator</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item menu">
            <a href="pages/diskusi/diskusi.php" class="nav-link">
              <i class="nav-icon fas fa-comments"></i>
              <p>
                Diskusi
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <?php
                  $dash_supplier_query= "SELECT * FROM tabel_supplier";
                  $dash_supplier_query_run = mysqli_query($conn, $dash_supplier_query);
                  if($supplier_total = mysqli_num_rows($dash_supplier_query_run)){
                    echo '<h3>'.$supplier_total.'</h3>';
                  } else {
                    echo '<h3>0</h3>';
                  }
                ?>                
                <p>Supplier</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-stalker"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <?php
                  $dash_tanaman_query= "SELECT * FROM kalkulator";
                  $dash_tanaman_query_run = mysqli_query($conn, $dash_tanaman_query);
                  if($tanaman_total = mysqli_num_rows($dash_tanaman_query_run)){
                    echo '<h3>'.$tanaman_total.'</h3>';
                  } else {
                    echo '<h3>0</h3>';
                  }
                ?>
                <p>Tanaman</p>
              </div>
              <div class="icon">
                <i class="ion ion-leaf"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <?php
                  $dash_jenis_query = "SELECT COUNT(DISTINCT jenis) AS type_count FROM tabel_supplier";
                  $dash_jenis_query_run = mysqli_query($conn, $dash_jenis_query);

                  if ($dash_jenis_query_run) {
                      $row = mysqli_fetch_assoc($dash_jenis_query_run);
                      $jenis_total = $row['type_count'];
                      echo '<h3>' . $jenis_total . '</h3>';
                  } else {
                      echo '<h3>0</h3>';
                  }
                ?>
                <p>Jenis Suppliers</p>
              </div>
              <div class="icon">
                <i class="ion ion-filing"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <!-- <div class="row"> 
          <section class="col-lg connectedSortable">
            <div class="card bg-gradient-primary">
              <div class="card-header border-0">
                <h3 class="card-title">
                  <i class="fas fa-map-marker-alt mr-1"></i>
                  SIG
                </h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-primary btn-sm" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div id="world-map" style="height: 450px; width: 100%;"></div>
              </div>
            </div>
          </section>
        </div>-->
        <!-- /.row (main row) -->
        <div class="row">
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          <section class="col-lg connectedSortable">

            <!-- Map card -->
            <div class="card bg-gradient-primary">
              <div class="card-header border-0">
                <h3 style="color:#4D4B34; margin-left:5px; font-weight:bold;"class="card-title">
                  <i style="color:#4D4B34; margin-right:5px"class="fas fa-chart-bar"></i>
                   Grafik Jumlah Supplier
                </h3>
                <!-- card tools -->
                <div class="card-tools">
                  <button type="button" class="btn btn-primary btn-sm" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <div class="card-body">
                <div id="lokasi01" style="height: 450px; width: 100%;"></div>
              </div>
              <!-- /.card-body-->
            </div>

            <!-- Map card -->
            <div class="card bg-gradient-primary">
              <div class="card-header border-0">
              <h3 style="color:#4D4B34; margin-left:5px; font-weight:bold;"class="card-title">
                  <i style="color:#4D4B34; margin-right:5px"class="fas fa-chart-bar"></i>
                   Grafik Jumlah Jenis Produk Tanaman
                </h3>
                <!-- card tools -->
                <div class="card-tools">
                  <button type="button" class="btn btn-primary btn-sm" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <div class="card-body">
                <div id="lokasi02" style="height: 450px; width: 100%;"></div>
              </div>
              <div class="row justify-content-center align-items-center">
                <a href="pages/selengkapnya.php" name="submit" class="button" style="color:#fff;font-weight:bold;margin-bottom:30px;">Selengkapnya</a>
              </div>
              <!-- /.card-body-->
            </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>
