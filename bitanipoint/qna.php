<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['id'])) {
    header('Location: login.php');
}

// Check the user's role for access control
$allowed_roles = ['public'];
$user_role = $_SESSION['role'];

if (!in_array($user_role, $allowed_roles)) {
    // Redirect if the user doesn't have the required role
    header('Location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>QnA</title>
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
      padding: 10px 25px;
      border: none;
      font-weight: 600;
      background-color: #678540;
      color: #fff;
      cursor: pointer;
      
    }
    .bdetail {
      font-size: 14px;
      border-radius: 5px;
      padding: 10px 25px;
      border: none;
      font-weight: 550;
      background-color: #678540;
      color: #fff;
      cursor: pointer;
      
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
                <li><a href="supplier.php" class="nav-link">Supplier</a></li>
                <li><a href="pengajuan.php" class="nav-link">Pengajuan</a></li>

                <li class="has-children">
                  <a class="active" href="#" class="nav-link">Layanan</a>
                  <ul class="dropdown">
                    <li><a href="kalkulator.php" class="nav-link">Kalkulator</a></li>
                    <li><a href="sig.php" class="nav-link">SIG</a></li>
                    <li><a class="active" href="qna.php" class="nav-link">QnA</a></li>
                  </ul>
                </li>
                <li><a href="profilpublic.php" class="nav-link">Profil</a></li>
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
        

        <div class="container" >
          <div class="row align-items-center">
            <div class="col-12">
              <div class="row justify-content-center">
                <div class="col-md-7 text-center hero-text">
                  <br>
                  <br>
                  <h1 data-aos="fade-up" data-aos-delay="">QnA</h1>
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </div>
        <br>
      <div class="container" style="margin-top:20px" >
        <h4 style="color:#4d4b34;font-weight:bold;text-align:center;">Diskusi Seputar Bibit dan Benih</h4>
    
        <div class="col-lg-12 grid-margin stretch-card" style="margin-top:50px">
              <div class="card">
                <div class="card-body">
                  <p class="card-description">
                    <button class="button"><a href="qnaform.php" style="color:#fff">Tambah Topik Diskusi</a></button>
                  </p>
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>User</th>
                          <th>Topik Diskusi</th>
                          <th colspan="2">Pertanyaan</th>

                        </tr>
                      </thead>
                      <?php
                      include "koneksi.php";

                      $no=1;
                      $ambildata = mysqli_query($koneksi,"select * from tambahdiskusi, table_user, diskusi where tambahdiskusi.id_user=table_user.id and tambahdiskusi.id_diskusi=diskusi.id");
                      while($tampil = mysqli_fetch_array($ambildata)){
                          echo "
                          <tr>
                              <td>$no</td>
                              <td>$tampil[username]</td>
                              <td>$tampil[topik]</td>
                              <td>$tampil[komentar]</td>
                              <td><a href=\"qnadetail.php?blogid=".$tampil["id"]."\"> Detail </a></td>
                          <tr>";
                          $no++;
                      }
                      ?>
                      
                    </table>
                  </div>
                </div>
              </div>
            </div>



      </div>


    </main>

    <br><br><br>
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

  <!-- Template Main JS File -->
  <script src="js/main.js"></script>

  </body>
</html>
