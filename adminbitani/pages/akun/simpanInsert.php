<?php
  include "../konfigurasi.php"; 
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  $sql = "INSERT INTO table_user (nama, username, email, role, password)
  VALUES ('".$_POST["nama"]."', '".$_POST["username"]."','".$_POST["email"]."','".$_POST["role"]."','".$_POST["password"]."')";

  if ($conn->query($sql) === TRUE) {
    header("Location:akun.php");
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();

?>