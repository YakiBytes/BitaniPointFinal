<?php
  include "../konfigurasi.php"; 
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  $sql = "INSERT INTO diskusi (topik, komentar)
  VALUES ('".$_POST["topik"]."', '".$_POST["komentar"]."')";

  if ($conn->query($sql) === TRUE) {
    header("Location:diskusi.php");
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();

?>