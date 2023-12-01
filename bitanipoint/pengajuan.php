<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['id'])) {
    header('Location: loginsup.php');
}

// Check the user's role for access control
$allowed_roles = ['supplier'];
$user_role = $_SESSION['role'];

if (!in_array($user_role, $allowed_roles)) {
    // Redirect if the user doesn't have the required role
    header('Location: loginsup.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Pengajuan Supplier</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- logo -->
  <link href="img/logobipo.png" rel="icon">
  <link href="img/logobipo2.png" >

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,700|Roboto:300,400,700&display=swap" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="vendor/line-awesome/css/line-awesome.min.css" rel="stylesheet">
  <link href="vendor/aos/aos.css" rel="stylesheet">
  <link href="vendor/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/formcss.css" rel="stylesheet">
  <style>
    .footer {
      padding: 5rem 0 2.5rem 0;
      background-color: #f6f7f1;
    }
    .footer h2 {
      color: #678441 !important;
      font-weight:bold!important;
    }
    .footer p {
      color: #4D4B34 !important;
    }
    .footer h3 {
      color: #4D4B34!important;
      font-weight:bold!important;
    }
    .foota > li > a {
      color: #4D4B34 !important;
      font-weight: medium!important;
    }
    .foota > li > a:hover{
      color: #678441 !important;
      text-decoration: none !important;
      font-weight:bold!important;
    }
  </style>
  <style> 
   .button {
      font-size: 16px;
      border-radius: 5px;
      padding: 14px 25px;
      border: none;
      font-weight: 600;
      background-color: #678540;
      color: #fff;
      cursor: pointer;
      margin-top: 25px;
    }
    .buttoncenter{
      text-align: center;
    }
  </style>

  <!-- =======================================================
    Template Name: SoftLand
    Template URL: https://bootstrapmade.com/softland-bootstrap-app-landing-page-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com/
  ======================================================= -->
</head>

<body>
    
  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icofont-close js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

    <header class="site-navbar js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center">

          <div class="col-6 col-lg-2">
            <h1 class="mb-0 site-logo"><a href="index.php" class="mb-0">Bitani Point</a></h1>
          </div>

          <div class="col-12 col-md-10 d-none d-lg-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="index.php" class="nav-link">Beranda</a></li>
                <li><a href="supplier.php" class="nav-link">Supplier</a></li>
                <li class="active"><a href="pengajuan.php" class="nav-link">Pengajuan</a></li>
                <li class="has-children">
                  <a href="#" class="nav-link">Layanan</a>
                  <ul class="dropdown">
                    <li><a href="kalkulator.php" class="nav-link">Kalkulator</a></li>
                    <li><a href="sig.php" class="nav-link">SIG</a></li>
                    <li><a href="qna.php" class="nav-link">QnA</a></li>
                  </ul>
                </li>
                <li><a href="profilsupplier.php" class="nav-link">Profil</a></li>
                <li><a href="logout.php" class="nav-link">Logout</a></li>
              </ul>
            </nav>
          </div>


          <div class="col-6 d-inline-block d-lg-none ml-md-0 py-3" style="position: relative; top: 3px;">

            <a href="#" class="burger site-menu-toggle js-menu-toggle" data-toggle="collapse"
              data-target="#main-navbar">
              <span></span>
            </a>
          </div>

        </div>
      </div>

    </header>


    <main id="main">
      <div class="hero-section inner-page">
        <div class="wave">
          
          <svg width="1920px" height="265px" viewBox="0 0 1920 265" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g id="Apple-TV" transform="translate(0.000000, -402.000000)" fill="#FFFFFF">
                      <path d="M0,439.134243 C175.04074,464.89273 327.944386,477.771974 458.710937,477.771974 C654.860765,477.771974 870.645295,442.632362 1205.9828,410.192501 C1429.54114,388.565926 1667.54687,411.092417 1920,477.771974 L1920,667 L1017.15166,667 L0,667 L0,439.134243 Z" id="Path"></path>
                  </g>
              </g>
          </svg>

        </div>

        <div class="container">
          <div class="row align-items-center">
            <div class="col-12">
              <div class="row justify-content-center">
                <div class="col-md-7 text-center hero-text">
                  <br>
                  <br>
                  <h1 data-aos="fade-up" data-aos-delay="">Pengajuan Supplier</h1>
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </div>

      

      <section class="volunteer-section section-padding" id="section_4">
        <div class="container">
        <div class="row">
        <div class="col-lg-12 col-12">
          
        <?php 
        require 'koneksi.php';

        if( isset($_POST["tambah"]) ) {
          if( tambah($_POST) > 0 ) {
            echo "<script>
                alert('data berhasil ditambahkan!');
                document.location.href = 'pengajuan.php';
                </script>";
          } else {
            echo "<script>
                alert('data gagal ditambahkan!');
                document.location.href = 'pengajuan.php';
                </script>";
          }
        }
        ?>

                        <form class="custom-form volunteer-form mb-5 mb-lg-0" action="" method="post" enctype="multipart/form-data">
                            <br><br>
                            <h3 style="color:#4d4b34;font-weight:bold;text-align:center;">Form Pengajuan Supplier Bibit dan Benih</h3>
                            <br>
                            
                            
                            <div class="col-lg-12 col-12">
                              <label class="formbold-form-label">Jenis Supplier</label>
                              <select class="form-control" name="jenis" id="jenis">
                                <option value="Bibit">Bibit</option>
                                <option value="Benih">Benih</option>
                                <option value="Benih dan Bibit">Benih dan Bibit</option>
                              </select>
                            </div>

                            
                            <div class="col-lg-12 col-12">
                            <label for="nama" class="formbold-form-label"> Nama Supplier </label>
                            <div>
                              <input 
                                type="text"
                                name="nama"
                                id="nama"
                                placeholder="Masukkan nama supplier"
                                class="form-control"
                                required value=""
                              />
                            </div>
                            </div>

                            <div class="col-lg-12 col-12">
                            <label for="email" class="formbold-form-label"> Email </label>
                            <div>
                              <input 
                                type="text"
                                name="email"
                                id="email"
                                placeholder="Masukkan email"
                                class="form-control"
                                value="<?php echo $_SESSION["email"]; ?>" readonly
                              />
                            </div>
                            </div>

                            <div class="col-lg-12 col-12">
                            <label for="alamat" class="formbold-form-label"> Alamat </label>
                            <div>
                              <select class="form-control" name="lokasi" id="lokasi">
                                <option value="Kota Bogor">Kota Bogor</option>
                                <option value="Kabupaten Bogor">Kabupaten Bogor</option>
                              </select>
                              <input 
                                type="text"
                                name="alamat"
                                id="alamat"
                                placeholder="Masukkan alamat lengkap"
                                class="form-control"
                                required value=""
                              />
                            </div>
                            </div>

                            <div class="col-lg-12 col-12">
                            <label for="kontak" class="formbold-form-label"> Kontak </label>
                            <div>
                              <input 
                                type="text"
                                name="kontak"
                                id="kontak"
                                placeholder="Masukkan kontak"
                                class="form-control"
                                required value=""
                              />
                            </div>
                            </div>

                            <div class="col-lg-12 col-12">
                            <label for="longitude" class="formbold-form-label"> Longitude (x) </label>
                            <div>
                              <input 
                                type="text"
                                name="longitude"
                                id="longitude"
                                placeholder="Masukkan longitude (x)"
                                class="form-control"
                              />
                            </div>
                            </div>

                            <div class="col-lg-12 col-12">
                            <label for="latitude" class="formbold-form-label"> Latitude (y) </label>
                            <div>
                              <input 
                                type="text"
                                name="latitude"
                                id="latitude"
                                placeholder="Masukkan latitude (y)"
                                class="form-control"
                              />
                            </div>
                            </div>

                            <div class="col-lg-12 col-12">
                            <label for="deskripsi" class="formbold-form-label"> Deskripsi </label>
                            <div>
                              <textarea 
                                type="text-area"
                                name="deskripsi"
                                id="deskripsi"
                                placeholder="Masukkan deskripsi supplier"
                                class="form-control"
                                required value=""
                              ></textarea>
                            </div>
                            </div>

                            <div class="col-lg-12 col-12">
                            <label for="gambar" class="formbold-form-label">
                              Gambar Produk
                            </label>
                            <input
                              type="file"
                              name="gambar"
                              id="gambar"
                              class="form-control formbold-form-file"
                              required value=""
                            />
                          </div>

                          <div class="buttoncenter">
                          <button class="button" type="submit" name="tambah">Submit</button>
                          </div>

                        </form>

        </div>
        </div>
        <br> <br> <br>

      


    </main>
    <footer class="footer" role="contentinfo">
      <div class="container">
        <div class="row">
          <div class="col-md-4 mb-4 mb-md-0">
            <h2>Bitani Point</h2><br>
            <p>Sebuah platform yang menyediakan informasi terkait supplier benih dan bibit pertanian. </p>
          </div>
          <div class="col-md-7 ml-auto">
            <div class="row site-section pt-0">
              <div class="col-md-4 mb-4 mb-md-0">
                <h3>Navigasi</h3>
                
                <ul class="list-unstyled foota">
                  <li><a href="index.php">Beranda</a></li>
                  <li><a href="supplier.php">Supplier</a></li>
                  <li><a href="pengajuan.php">Pengajuan</a></li>
                </ul>
                
              </div>
              <div class="col-md-4 mb-4 mb-md-0">
                <h3>Layanan</h3>
                <ul class="list-unstyled foota">
                  <li><a href="kalkulator.php">Kalkulator</a></li>
                  <li><a href="sig.php">SIG</a></li>
                  <li><a href="qna.php">QnA</a></li>
                </ul>
              </div>
              <div class="col-md-4 mb-4 mb-md-0">
              <img src="img/logobipo.png" class="img-fluid" style="margin-top:-20px">
              </div>
            </div>
          </div>
        </div>

        <div class="row justify-content-center text-center">
          <div class="col-md-7">
            <p class="copyright">&copy; Bitani Point </p>
          </div>
        </div>

      </div>
    </footer>
  </div> <!-- .site-wrap -->
  
  <!-- Vendor JS Files -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/jquery/jquery-migrate.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="vendor/easing/easing.min.js"></script>
  <script src="vendor/php-email-form/validate.js"></script>
  <script src="vendor/sticky/sticky.js"></script>
  <script src="vendor/aos/aos.js"></script>
  <script src="vendor/owlcarousel/owl.carousel.min.js"></script>
  <script>
    document.getElementById("email").readOnly = true;
  </script>

  <!-- Template Main JS File -->
  <script src="js/main.js"></script>

  </body>
</html>
