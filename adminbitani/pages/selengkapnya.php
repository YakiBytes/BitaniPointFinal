<?php
  include 'konfigurasi.php';
  $conn = new mysqli($servername, $username, $password, $dbname);

  if (!isset($_SESSION['id'])) {
      header('Location: login.php');
  }

  $allowed_roles = ['admin'];
  $user_role = $_SESSION['role'];

  if (!in_array($user_role, $allowed_roles)) {
      header('Location: login.php');
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>    
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="../dist/img/logo.png">
  <title>Bitani Point</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.min.css">
  <link rel="stylesheet" href="">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
  <link href="https://cdn.datatables.net/v/ju/jq-3.7.0/dt-1.13.6/datatables.min.css" rel="stylesheet">
  <script src="https://cdn.datatables.net/v/ju/jq-3.7.0/dt-1.13.6/datatables.min.js"></script>
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

    table.dataTable thead tr {
      background-color: #678441;
      color: white;
    }

    .dataTables_wrapper .dataTables_paginate .paginate_button {
      padding: 0em 0em;
    }
    
    .dataTables_paginate {
      margin-top: 10px;
    }

    .dataTables_paginate a {
      padding: 5px 10px;
      margin: 0 5px;
      border: 1px solid #ccc;
      color: #333;
      text-decoration: none;
      background-color: #fff;
      border-radius: 4px;
      text-decoration: none;
    }

    .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
      background-color: #ddd;
      border-radius: 5px;
      color: #678441 !important;
      border: 0px solid #678441;
      background: none;
    }

    .dataTables_paginate .paginate_button.page-item.active .page-link {
      background-color: #678441;
      border-color: #678441;
      color: white;
      border-radius: 5px;
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
        <a href="../index.php" class="nav-link">Home</a>
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
    <a href="../index.php" class="brand-link">
      <img src="../dist/img/logo2.png" alt="Bitani Point" class="brand-image">
      <span class="brand-text ">Bitani Point</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../dist/img/sehun.jpeg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="profile.php" class="d-block"><?php echo $_SESSION["username"]?></a>
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
            <a href="akun/akun.php" class="nav-link">
              <i class="nav-icon fas fa-user-alt"></i>
              <p>
                Akun
              </p>
            </a>
          </li>
          <li class="nav-item menu">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Data
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../form/form.php" class="nav-link">
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
            <a href="diskusi/diskusi.php" class="nav-link">
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
            <h1 class="m-0">Data Grafik</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
              <li class="breadcrumb-item"><a href="../index.php">Dashboard</a></li>
              <li class="breadcrumb-item active">Data Grafik</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col">
            <div class="card">
            <div class="container mt-3 d-flex flex-column">
            <div class="d-inline-flex align-items-center" style="padding-left: 23px; padding-right: 23px;">      
              <div class="container-fluid">        
              <div class="card card-body shadow">
                <div class="row align-items-center">
                  <div class="col-sm my-auto">
                    <a style="padding-left: 23px;">Ambil Data pada File supplier.xlsx</a>
                  </div>
                  <div class="col-sm">
                    <a href="readxlsx2db.php">
                    <button type="button" class="button btn btn-primary">
                        Fetch Data
                    </button>
                    </a>
                  </div>
                </div>
              </div>
              </div>
            </div>
            <div class="d-inline-flex align-items-center" style="padding-left: 23px; padding-right: 23px;">
            <div class="container-fluid">
            <?php
              if (isset($_SESSION["status"])) {
                echo"<h5>". $_SESSION["status"] ."</h5>";
                unset($_SESSION["status"]);
              }
            ?>
                <form action="uploadfile.php" method="post" enctype="multipart/form-data">
                    <div class="card card-body shadow">
                        <div class="row align-items-center">
                            <div class="col-sm my-auto">
                                <a style="padding-left: 23px">Ambil Data dari Import File</a>
                            </div>
                            <div class="col-sm custom-file">
                                <input type="file" name="import_file" class="form-control custom-file-input" id="validatedCustomFile" onchange="updateFileName()" />
                                <label class="custom-file-label" for="validatedCustomFile" id="fileLabel">Pilih file...</label>
                            </div>
                            <script>
                                function updateFileName() {
                                    var fileName = document.getElementById('validatedCustomFile').value.split('\\').pop();
                                    document.getElementById('fileLabel').innerHTML = fileName;
                                }
                            </script>
                            <div class="col-sm">
                                <button type="submit" name="import_btn" class="button btn btn-primary">Upload</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="myTabelUtama" class="table table-bordered table-hover table-striped">
                  <thead>
                    <tr>
                      <th class="all">No</th>
                      <th class="all">Nama supplier</th>
                      <th class="all">Kontak</th>
                      <th class="all">Jumlah Produk Benih</th>
                      <th class="all">Jumlah Produk Bibit</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody id="myTable">
                  <?php
                          // Check connection
                          if ($conn->connect_error) {
                          die("Connection failed: " . $conn->connect_error);
                          }

                          $sql = "SELECT * FROM grafik02";
                          $result = $conn->query($sql);

                          if ($result->num_rows > 0) {
                            $nomor = 1;
                          while($row = $result->fetch_assoc()) {
                              echo "<tr>
                                      <td>$nomor</td>
                                      <td>".$row["nama"]."</td>
                                      <td>".$row["kontak"]."</td>
                                      <td>".$row["benih"]."</td>
                                      <td>".$row["bibit"]."</td>                                      
                                      <td></td>
                                  </tr>";  
                                  $nomor++;
                          }
                          } else {
                          echo "0 results";
                          }
                          $conn->close();
                  ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->              
              <div class="row align-items-center" style="padding-bottom: 30px;">
                  <div class="col-sm d-flex justify-content-center align-items-center">
                      <a href="export2pdf.php">
                          <button type="button" class="button btn btn-primary">
                              Export Data
                          </button>
                      </a>
                  </div>
              </div>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
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
        pageLength: 5,
        lengthChange: false,
        searching: false,
        ordering: true,
        info: true,
        autoWidth: true,
        order: [ [ 0, "asc" ] ],
        responsive: {
              details: {
                  type: 'column',
                  target: 'tr'
              }
          },
          columnDefs: [ {
              className: 'control',
              orderable: false,
              targets: -1
          } ],
        language: {
        info: "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
        paginate: {previous: "Sebelumnya", next: "Selanjutnya"}}
      });
    });
  </script>
</body>
</html>
