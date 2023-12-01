<?php
  include "../konfigurasi.php"; 
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  $sql = "INSERT INTO topik (blog_id, name, description)
  VALUES ('".$_POST["blog_id"]."', '".$_POST["name"]."','".$_POST["description"]."')";

  if ($conn->query($sql) === TRUE) {
    header("Location:Diskusi.php");
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();

?>