<?php
  include "konfigurasi.php";
  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  echo $sql = "UPDATE table_user 
          SET nama='".$_POST["nama"]."', username='".$_POST["username"]."',
              email='".$_POST["email"]."', password='".$_POST["password"]."'
          WHERE id=".$_POST["id"];

  if (mysqli_query($conn, $sql)) {
      header("Location:profilsupplier.php");
  } else {
    echo "Error updating record: " . mysqli_error($conn);
  }

  mysqli_close($conn);
?>