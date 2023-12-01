<?php
include 'konfigurasi.php';
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $result = mysqli_query($conn, "SELECT * FROM table_user WHERE username = '$username'");
    $row = mysqli_fetch_assoc($result);

    if (mysqli_num_rows($result) > 0) {
        if ($password == $row['password']) {
            if ($row['role'] == 'admin') {
                $_SESSION["login"] = true;
                $_SESSION["id"] = $row["id"];
                $_SESSION["username"] = $row["username"];
                $_SESSION["nama"] = $row["nama"];
                $_SESSION["email"] = $row["email"];
                $_SESSION["role"] = "admin";
                header("Location: ../index.php");
            } else {
                echo "<script>alert('Tidak Diizinkan. Halaman ini hanya dapat diakses oleh admin.');</script>";
            }
        } else {
            echo "<script>alert('Password Salah');</script>";
        }
    } else {
        echo "<script>alert('Pengguna Belum Terdaftar');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="../dist/img/logo.png">
  <title>Bitani Point | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <style>

      .button {
      font-size: 16px;
      border-radius: 5px;
      padding: 10px 25px;
      border: none;
      font-weight: bold;
      background-color: #678540;
      color: #fff;
      cursor: pointer;
      }
    
      .button:hover {
      font-size: 16px;
      border-radius: 5px;
      padding: 10px 25px;
      border: none;
      font-weight: bold;
      background-color: #4D4B34;
      color: #fff;
      cursor: pointer;
      }
  </style>
</head>
<body class="hold-transition login-page" style= "background: #f5f7f1;">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary" style="border-color: #678540;">
    <div class="card-header text-center">
      <a class="h1"><img src="../dist/img/logo.png" alt="Bitani Point" width="33px" class="brand-image"></a>
      <a class="h2" style="color:#4d4b34;font-weight:bold;text-align:center;margin-bottom:30px"><b>Bitani Point</b></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg" style="font-family:'Poppins',sans-serif; color:#4d4b34">Log in Admin</p>

      <form action="" method="post" class="" role="form" autocomplete="off">
        <div class="input-group mb-3">
          <input type="text" name="username" id="username" class="form-control" placeholder="Username" required value="">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" id="password" class="form-control" placeholder="Password" required value="">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row text-center" style="display:flex; justify-content:center; align-items:center;">
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" name="submit" class="button">Log In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <!-- /.social-auth-links -->

    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
</body>
</html>
