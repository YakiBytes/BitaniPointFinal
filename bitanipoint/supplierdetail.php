<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Supplier Detail</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
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

 
    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-edu-meeting.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">

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

.up-section {
  background: url(img/beranda.png);
  position: relative;
}


.up-section .wave {
  width: 100%;
  overflow: hidden;
  position: absolute;
  z-index: 1;
  bottom: -150px;
}

.up-section .wave svg {
  width: 100%;
}

.up-section,
.up-section > .container > .row {
  height: 50vh;
  min-height: 500px;
}

.up-section.inner-page {
  height: 30vh;
  min-height: 0;
}

.det-section {
  padding: 0 0;
}

.button {
      font-size: 14px;
      border-radius: 5px;
      padding: 10px 25px;
      border: none;
      background-color: #4D4B34;
      color: #fff;
      cursor: pointer;
      text-align: left;
    }
  </style>
    
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
            <li class="active"><a href="supplier.php" class="nav-link">Supplier</a></li>
            <li><a href="pengajuan.php" class="nav-link">Pengajuan</a></li>

            <li class="has-children">
              <a href="#" class="nav-link">Layanan</a>
              <ul class="dropdown">
                <li><a href="kalkulator.php" class="nav-link">Kalkulator</a></li>
                <li><a href="sig.php" class="nav-link">SIG</a></li>
                <li><a href="login.php" class="nav-link">QnA</a></li>
                  </ul>
                </li>
          </ul>
        </nav>
        </div>

          <div class="col-6 d-inline-block d-lg-none ml-md-0 py-3" style="position: relative; top: 3px;">

            <a href="#" class="burger site-menu-toggle js-menu-toggle" data-toggle="collapse" data-target="#main-navbar">
              <span></span>
            </a>
          </div>

        </div>
      </div>
      
    </header>

    <main id="main">
      <div class="up-section inner-page">
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
                  <h1 data-aos="fade-up" data-aos-delay=""></h1> 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


  <main id="main">
  <div class="sdet-section" >
        <br><br><br>


      <<?php
    include "koneksi.php";

    $id = (int)$_GET['id'];
    $query = "SELECT * FROM tabel_supplier WHERE id = $id";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        $supplier = mysqli_fetch_assoc($result);
    } else {
        echo "Query execution failed: " . mysqli_error($koneksi);
    }
?>


        <div class="container">
        <div class="row">
        <div class="col-md-5">
                    <div class="rebox">
                        <h3 style="color:#4D4B34; font-weight:bold"><?= $supplier['supplier'];?></h3><br>
                        <p style="color:#4D4B34;"><?= $supplier['alamat'];?></p><br>
                        <h5 style="color:#4D4B34; font-weight:bold; margin-bottom:10px;">Kontak</h5>
                        <p style="color:#4D4B34;"><?= $supplier['kontak'];?></p><br>
                        <!--<h5 style="color:#4D4B34; font-weight:bold; margin-bottom:10px;">Jarak Lokasi Supplier</h5>
                        <button class="button"> <a style="color:#fff;" href="https://www.google.com/maps/dir/?api=1&origin=current+location&destination=Botani+Seed+IPB" target="_blank">Rute</a></button>-->
                    </div>
        </div>
        <div class="col-md-7">
                    <div class="rebox">
                        <p style="color:#4D4B34;"><?= $supplier['deskripsi'];?></p>
                        <br>
                        <h5 style="color:#4D4B34; font-weight:bold; margin-bottom:10px;" >Jenis Supplier</h5>
                        <p style="color:#4D4B34;"> Supplier <?= $supplier['jenis'];?></p>
                        <br>
                        <h5 style="color:#4D4B34; font-weight:bold; margin-bottom:10px;">Foto Produk</h5>
                        <img src="img/<?= $supplier["gambar"]; ?>" width="50">

                        
                    </div>
        </div> 
        </div>
</div>
  </div>
 
  </main>
<br><br><br>

    <!--Footer-->
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
    
    </div>

    
</section>





  
  <!-- Vendor JS Files -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/jquery/jquery-migrate.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="vendor/easing/easing.min.js"></script>
  <script src="vendor/php-email-form/validate.js"></script>
  <script src="vendor/sticky/sticky.js"></script>
  <script src="vendor/aos/aos.js"></script>
  <script src="vendor/owlcarousel/owl.carousel.min.js"></script>

  <!-- Template Main JS File -->
  <script src="js/main.js"></script>
  
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/video.js"></script>
    <script src="assets/js/slick-slider.js"></script>
    <script src="assets/js/custom.js"></script>
    
        
  </body>
</html>
