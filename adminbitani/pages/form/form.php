<?php
  include "../konfigurasi.php";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="../../dist/img/logo.png">
  <title>Bitani Point | Form</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Include Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
  <!-- Include DataTables CSS -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap4.min.css">
  <!-- Include DataTables Buttons CSS -->
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.bootstrap4.min.css">
</head>
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
  <link href="https://cdn.datatables.net/v/ju/jq-3.7.0/dt-1.13.6/datatables.min.css" rel="stylesheet">
  <script src="https://cdn.datatables.net/v/ju/jq-3.7.0/dt-1.13.6/datatables.min.js"></script>
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="script.js"></script>
  <style>
  .button {
      font-size: 16px;
      border-radius: 5px;
      padding: 10px 25px;
      border: none;
      font-weight: 600;
      background-color: #678540;
      color: #fff;
      cursor: pointer;
    }

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
    </style>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../../index.php" class="nav-link">Home</a>
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
    <a href="../../index.php" class="brand-link">
      <img src="../../dist/img/logo2.png" alt="Bitani Point" class="brand-image">
      <span class="brand-text">Bitani Point</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../dist/img/sehun.jpeg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="../profile.php" class="d-block"><?php echo $_SESSION["username"]?></a>
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
          <li class="nav-item menu">
            <a href="../../index.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item menu">
            <a href="../akun/akun.php" class="nav-link">
              <i class="nav-icon fas fa-user-alt"></i>
              <p>
                Akun
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Data
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Form</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../supplier/supplier.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Supplier</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../kalkulator/kalkulator.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kalkulator</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item menu">
            <a href="../diskusi/diskusi.php" class="nav-link">
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
            <h1 class="m-0">Pengajuan Supplier</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../../index.php">Home</a></li>
              <li class="breadcrumb-item active">Pengajuan Supplier</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- /.col-md-6 -->
          <div class="col-lg">                     
                <?php
                  // Check connection
                  if ($conn->connect_error) {
                  die("Connection failed: " . $conn->connect_error);
                  }

                  $sql = "SELECT pengajuan.*, tabel_supplier.email AS supplier_email FROM pengajuan LEFT JOIN tabel_supplier ON pengajuan.email = tabel_supplier.email WHERE tabel_supplier.email IS NULL";
                  $result = $conn->query($sql);

                  if ($result->num_rows > 0) {
                      while ($row = $result->fetch_assoc()) {
                          echo "<div data-card-id='".$row["id"]."' class='card card-primary card-outline' style='border-color: #678540;'>";
                          echo "<div class='card-header'> 
                                  <h5 class='m-0'>".$row["kontak"]."</h5>
                                </div>
                                <div class='card-body'> 
                                  <h1 style='font-size: 30px; padding-bottom: 15px;' class='card-title'>".$row["supplier"]."</h1>
                                  <p class='card-text'>".$row["deskripsi"]."</p>
                                  <a href='detailForm.php?id=".$row["id"]."' class='button btn btn-primary'>Lihat Detail</a>
                                </div>
                              </div>";
                      }
                  }
                  $sql_existing = "SELECT pengajuan.*, tabel_supplier.email AS supplier_email FROM pengajuan INNER JOIN tabel_supplier ON pengajuan.email = tabel_supplier.email";
                  $result_existing = $conn->query($sql_existing);

                  if ($result_existing->num_rows > 0) {
                      while ($row_existing = $result_existing->fetch_assoc()) {
                        echo "<div data-card-id='".$row_existing["id"]."' class='card card-primary card-outline' style='border-color: #4D4B34;opacity:0.8;'>";
                        echo "<div class='card-header' style='background-color:#DEE2E6'> 
                                <h5 class='m-0' style='opacity:0.8;'>".$row_existing["kontak"]."</h5>
                              </div>
                              <div class='card-body'style='background-color:#DEE2E6'> 
                                <h1 style='font-size: 30px; padding-bottom: 15px; opacity:0.8;' class='card-title'>".$row_existing["supplier"]."</h1>
                                <p class='card-text'style='opacity:0.8;'>".$row_existing["deskripsi"]."</p>
                                <a href='detailForm.php?id=".$row_existing["id"]."' class='button btn btn-primary' style='background-color:#4D4B34; opacity:0.8;'>Lihat Detail</a>
                              </div>
                            </div>";
                      }
                  }
                  $conn->close();
                  ?>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
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
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- Include DataTables JavaScript -->
  <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap4.min.js"></script>
  <!-- Include DataTables Responsive JavaScript -->
  <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
  <script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap4.min.js"></script>
  <!-- Include DataTables Buttons JavaScript -->
  <script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.bootstrap4.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.5/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.70/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.70/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.print.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
    $(document).ready(function() {
      $('#myTabelUtama').DataTable({
        paging: true,
        pagingType: 'simple_numbers',
        lengthChange: true,
        searching: true,
        ordering: true,
        info: true,
        autoWidth: false,
        responsive: true
      });
    });
</script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</body>
</html>
