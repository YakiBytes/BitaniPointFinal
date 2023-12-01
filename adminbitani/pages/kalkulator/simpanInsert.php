<?php
  include "../konfigurasi.php"; 
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  $sql = "INSERT INTO kalkulator (tanaman, jarak_panjang, jarak_lebar, harga)
  VALUES ('".$_POST["tanam"]."', '".$_POST["panjang"]."','".$_POST["lebar"]."','".$_POST["harga"]."')";

  if ($conn->query($sql) === TRUE) {
    header("Location:kalkulator.php");
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();

?>