<?php
  include "../konfigurasi.php"; 
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  $sql = "INSERT INTO tabel_supplier (jenis, supplier, email, lokasi, alamat, kontak, longitude, latitude, deskripsi, gambar)
  VALUES ('".$_POST["jenis"]."', '".$_POST["supplier"]."','".$_POST["email"]."','".$_POST["lokasi"]."', '".$_POST["alamat"]."','".$_POST["kontak"]."','".$_POST["longitude"]."','".$_POST["latitude"]."','".$_POST["deskripsi"]."','".$_POST["gambar"]."')";

  if ($conn->query($sql) === TRUE) {
    header("Location:supplier.php");
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();

?>