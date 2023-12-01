<?php
  include 'konfigurasi.php';
  $conn = new mysqli($servername, $username, $password, $dbname);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
  if(isset($_POST["submit"])){
    $nama = $_POST["nama"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $role = $_POST["role"];
    $duplicate = mysqli_query($conn, "SELECT * FROM table_user WHERE username = '$username' OR email = '$email'");
    if(mysqli_num_rows($duplicate) > 0){
      echo
      "<script> alert('Username atau Email Sudah Terdaftar'); </script>";
    }
    else{
      $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
      $query = "INSERT INTO table_user VALUES('', '$role', '$nama', '$username', '$email', '$hashedPassword')";
      mysqli_query($conn, $query);
      echo
      "<script> alert('Registrasi Berhasil'); document.location='login.php';</script>";
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <title>Sign Up</title>
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
    .donate-section {
  background-image: url('img/bgberanda.png');
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
  position: relative;
  padding-top: 150px;
  padding-bottom: 150px;
}

.donate-form {
  background: #f5f7f1;
  border-radius: 10px;
  position: relative;
  overflow: hidden;
  padding: 50px;
}
.custom-form .form-control,
.input-group-file {
  background-color: #fff;
  box-shadow: none;
  border: 0;
  color: var(--p-color);
  margin-bottom: 24px;
  padding-top: 13px;
  padding-bottom: 13px;
  outline: none;
  border-radius:10px;
}

.custom-form label {
  margin-bottom: 10px;
}
.section-padding {
  padding-top: 100px;
  padding-bottom: 100px;
}

.section-bg {
  background-color: var(--section-bg-color);
}

.section-overlay {
  background: rgba(0, 0, 0, 0.35);
  position: absolute;
  top: 0;
  left: 0;
  pointer-events: none;
  width: 100%;
  height: 100%;
}

.section-overlay + .container {
  position: relative;
}

.button {
      font-size: 16px;
      border-radius: 5px;
      padding: 10px 25px;
      border: none;
      font-weight: 600;
      background-color: #678540;
      color: #fff;
      cursor: pointer;}
.buttonsignup {
      font-size: 16px;
      border-radius: 5px;
      padding: 10px 25px;
      border: none;
      font-weight: 600;
      background-color: transparent;
      color: #f5f7f1;
      cursor: pointer;
      margin-top:10px;
    }
    .buttoncenter{
      text-align: center;
    }
  </style>
</head>
<body>
<section class="donate-section">
            <div class="section-overlay"></div>
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12 mx-auto custom-form donate-form">
                        <form action="" method="post" class="" role="form" autocomplete="off" href="login.php">
                            <h3 style="color:#4d4b34;font-weight:bold;text-align:center;margin-bottom:30px">Sign Up</h3>

                            <div class="row">
                                
                                <div class="col-lg-12 col-12">
                                    <h5 for="nama" style="color:#4d4b34;font-weight:bold;">Nama</h5>
                                </div>

                                <div class="col-lg-12 col-12 mt-2">
                                    <input type="text" name="nama" id="nama" class="form-control" required value=""
                                        placeholder="Masukkan nama">
                                </div>

                                <div class="col-lg-12 col-12">
                                    <h5 for="username" style="color:#4d4b34;font-weight:bold;">Username</h5>
                                </div>

                                <div class="col-lg-12 col-12 mt-2">
                                    <input type="text" name="username" id="username" class="form-control" required value=""
                                        placeholder="Masukkan username">
                                </div>

                                <div class="col-lg-12 col-12">
                                    <h5 for="email" style="color:#4d4b34;font-weight:bold;">Email</h5>
                                </div>

                                <div class="col-lg-12 col-12 mt-2">
                                    <input type="email" name="email" id="email" class="form-control" required value=""
                                        placeholder="Masukkan email">
                                </div>

                                <div class="col-lg-12 col-12">
                                    <h5 for="password" style="color:#4d4b34;font-weight:bold;">Password</h5>
                                </div>

                                <div class="col-lg-12 col-12 mt-2">
                                    <input type="password" name="password" id="password" class="form-control" required value=""
                                        placeholder="Masukkan password">
                                </div>
                                <p>Sudah punya akun? <a href="login.php">Log in</a></p>
                                <div class="col-lg-12 col-12 mt-2 buttoncenter">
                                    <input type="hidden" name="role" value="public">
                                    <button type="submit" name="submit" class="button" href="login.php">Sign Up</button>
                                </div> 
                            </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </section>
</body>
</html>