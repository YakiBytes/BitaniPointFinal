<?php
  include "../konfigurasi.php";
  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  echo $sql = "UPDATE tabel_supplier 
          SET jenis='".$_POST["jenis"]."', supplier='".$_POST["supplier"]."',
              email='".$_POST["email"]."', lokasi='".$_POST["lokasi"]."',
              alamat='".$_POST["alamat"]."', kontak='".$_POST["kontak"]."',
              alamat='".$_POST["longitude"]."', kontak='".$_POST["latitude"]."',
              deskripsi='".$_POST["deskripsi"]."', gambar='".$_POST["gambar"]."'
          WHERE id=".$_POST["id"];

  if (mysqli_query($conn, $sql)) {
      header("Location:supplier.php");
  } else {
    echo "Error updating record: " . mysqli_error($conn);
  }

  mysqli_close($conn);
?>