<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Edit Profil Supplier</title>
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
    table {
            width: 100%;
            border-collapse: collapse;
            border-radius: 8px; /* Rounded corners for the entire table */
            overflow: hidden; /* Ensure rounded corners are visible */
        }
    .f-control {
      background-color: #E7E7E7;
      box-shadow: none;
      border: 0;
      color: #4D4B34;
      margin-bottom: 24px;
      padding-top: 13px;
      padding-bottom: 13px;
      outline: none;
      font-size: 14px;
      border-radius: 10px;
      }
    
      .buttonedit {
      font-size: 16px;
      border-radius: 5px;
      padding: 10px 25px;
      border: none;
      font-weight: 600;
      background-color: #678441;
      color: #fff;
      cursor: pointer;}

      .buttonhapus {
      font-size: 16px;
      border-radius: 5px;
      padding: 10px 25px;
      border: none;
      font-weight: 600;
      background-color: #DC3545;
      color: #fff;
      cursor: pointer;}

      .buttoncenter{
      text-align: center;
    }
  </style>

</head>
<?php
    include "koneksi.php";

    $id = (int)$_GET['id'];
    $query = "SELECT * FROM table_user WHERE id = $id";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        $profil = mysqli_fetch_assoc($result);
    } else {
        echo "Query execution failed: " . mysqli_error($koneksi);
    }
?>
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
                    <li><a class="active" href="sig.php" class="nav-link">SIG</a></li>
                    <li><a href="qna.php" class="nav-link">QnA</a></li>
                  </ul>
                </li>
                <li class="active"><a href="#" class="nav-link active">Profil</a></li>
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
                  <h1 data-aos="fade-up" data-aos-delay="">Edit Profil Supplier</h1>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </div>
        <br>
      <div class="container" style="margin-top:20px">
      <section class="donate-section">
            <div class="section-overlay"></div>
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12 mx-auto custom-form donate-form ">
                        <form action="simpanprofilsupplier.php" method="post" >

                            <div class="row">
                                
                            <div class="col-lg-12 col-12">
                                    <h5 style="color:#4d4b34;font-weight:bold;">Nama</h5>
                                </div>

                                <div class="col-lg-12 col-12 mt-2">
                                    <input type="text" name="nama" id="nama" class="form-control"
                                    placeholder="Masukkan nama" value="<?php echo $profil["nama"]; ?>">
                                </div>

                                <div class="col-lg-12 col-12">
                                    <h5 style="color:#4d4b34;font-weight:bold;">Username</h5>
                                </div>

                                <div class="col-lg-12 col-12 mt-2">
                                    <input type="text" name="username" id="username" class="form-control" 
                                        placeholder="Masukkan username" value="<?php echo $profil["username"]; ?>">
                                </div>

                                <div class="col-lg-12 col-12">
                                    <h5 style="color:#4d4b34;font-weight:bold;">Email</h5> 
                                </div>

                                <div class="col-lg-12 col-12 mt-2">
                                    <input type="text" name="email" id="email" class="form-control" 
                                        placeholder="Masukkan email"value="<?php echo $profil["email"]; ?>">
                                </div>

                                <!--<div class="col-lg-12 col-12">
                                    <h5 style="color:#4d4b34;font-weight:bold;">Password</h5> 
                                </div>

                                <div class="col-lg-12 col-12 mt-2">
                                    <input type="text" name="password" id="password" class="form-control" 
                                        placeholder="Masukkan password"value="<?php /*echo $profil["password"]; */?>">
                                </div>-->
                                
                                <div class="row col-lg-12 col-12 align-items-center" style="justify-content: center;">
                                <div style="margin:5px">
                                    <input type="hidden" name="id" value="<?php echo $profil["id"]; ?>">
                                    <input type="submit" class="buttonedit" value="Simpan">
                                </div>  

                                <div style="margin:5px">
                                    <a href="profilsupplier.php"><button class="buttonedit">Batal</button></a>
                                </div>

                                <div style="margin:5px">
                                    <button class="buttonhapus">Hapus</button>
                                </div> 
                                </div>
                            </div>
                            </div>
                        </form>
                        
                    </div>

                </div>
            </div>
        </section>

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
