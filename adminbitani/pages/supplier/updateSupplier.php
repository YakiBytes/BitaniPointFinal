<?php
  include "../konfigurasi.php";
  $conn = new mysqli($servername, $username, $password, $dbname);
  $sql = "SELECT * FROM tabel_supplier WHERE id='".$_GET["id"]."'";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc()
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="../../dist/img/logo.png">
  <title>Bitani Point | Update Supplier</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
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
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <style>
    .button {
      font-size: 16px;
      border-radius: 5px;
      padding: 10px 25px;
      border: none;
      font-weight: 600;
      background-color: #678540;
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
      <span class="brand-text ">Bitani Point</span>
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
                <a href="../form/form.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Form</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link active">
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
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Data Supplier</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../../index.php">Home</a></li>
              <li class="breadcrumb-item"><a href="supplier.php">Data Supplier</a></li>
              <li class="breadcrumb-item active">Edit Data Supplier</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="container mt-3 d-flex justify-content-end">
              <!-- /.card-header -->
              <div class="card-body">
              <div class="container mt-3">
              <form action="simpanUpdate.php" method="post" class="" role="form" autocomplete="off">
                    <div class="mb-3 mt-3">
                      <label for="jenis">Jenis Supplier</label>
                      <?php 
                        function aksingeselect($x, $match){
                          if ($x==$match)
                              { echo "selected";}
                        }
                        function aksingecheck($x, $match){
                          if ($x==$match)
                            { echo "checked";}
                      }
                    ?>
                      <select class="form-select mt-3" id="jenis" name="jenis">
                      <option value="Benih" <?php aksingeselect($row["jenis"], "Benih"); ?>>Benih</option>
                      <option value="Bibit"  <?php aksingeselect($row["jenis"], "Bibit"); ?>>Bibit</option>
                      <option value="Benih dan Bibit"  <?php aksingeselect($row["jenis"], "Benih dan Bibit"); ?>>Benih dan Bibit</option>
                    </select>   
                    </div>
                    <div class="mb-3 mt-3">
                      <label for="supplier">Nama Supplier</label>
                      <input value="<?php echo $row["supplier"]; ?>" type="text" class="form-control" id="supplier" placeholder="Masukan Nama" name="supplier">
                    </div>
                    <div class="mb-3 mt-3">
                      <label for="email">Email</label>
                      <input value="<?php echo $row["email"]; ?>" type="email" class="form-control" id="email" placeholder="Masukan Email" name="email">
                    </div> 
                    <div class="mb-3 mt-3">
                      <label for="lokasi">Lokasi</label>
                      <select class="form-select" id="lokasi" name="lokasi">
                        <option value="Kota" <?php aksingeselect($row["lokasi"], "Kota Bogor"); ?>>Kota Bogor</option>
                        <option value="Kabupaten" <?php aksingeselect($row["lokasi"], "Kabupaten Bogor"); ?>>Kabupaten Bogor</option>
                      </select>   
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="alamat">Alamat</label>
                          <input value="<?php echo $row["alamat"]; ?>" type="text" class="form-control" id="alamat" placeholder="Masukan Alamat" name="alamat">
                    </div> 
                    <div class="mb-3 mt-3">
                      <label for="kontak">Kontak</label>
                      <input value="<?php echo $row["kontak"]; ?>" type="text" class="form-control" id="kontak" placeholder="Masukan Kontak" name="kontak">
                    </div> 
                    <div class="mb-3 mt-3">
                      <label for="longitude">Longitude</label>
                      <input value="<?php echo $row["longitude"]; ?>" type="text" class="form-control" id="longitude" placeholder="Masukan Longitude" name="longitude">
                    </div> 
                    <div class="mb-3 mt-3">
                      <label for="latitude">Latitude</label>
                      <input value="<?php echo $row["latitude"]; ?>" type="text" class="form-control" id="latitude" placeholder="Masukan Latitude" name="latitude">
                    </div>  
                    <div class="mb-3 mt-3">
                      <label for="deskripsi">Deskripsi</label>
                      <input value="<?php echo $row["deskripsi"]; ?>" type="text" class="form-control" id="deskripsi" placeholder="Masukan Deskripsi" name="deskripsi">
                    </div>   
                    <div class="mb-3 mt-3">
                      <label for="gambar">Gambar Produk</label>
                      <input value="<?php echo $row["gambar"]; ?>" type="file" class="form-control" id="gambar" placeholder="Masukan Gambar Produk" name="gambar">
                    </div>
                    <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
                    <button type="submit" class="button btn btn-primary" style="color:#4d4b34;font-weight:bold;margin-bottom:30px;">Simpan!</button>
                    <a href="supplier.php" class="button btn btn-primary" style="color:#4d4b34;font-weight:bold;margin-bottom:30px;">Kembali</a>
                  </form>
              </div>
              </div>
              <!-- /.card-body -->
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

</body>
</html>
