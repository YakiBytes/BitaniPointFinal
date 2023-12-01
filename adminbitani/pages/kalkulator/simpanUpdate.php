<?php
  include "../konfigurasi.php";
  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  echo $sql = "UPDATE kalkulator 
          SET tanaman='".$_POST["tanam"]."', jarak_panjang='".$_POST["panjang"]."',
              jarak_lebar='".$_POST["lebar"]."', harga='".$_POST["harga"]."'
          WHERE id=".$_POST["id"];

  if (mysqli_query($conn, $sql)) {
      header("Location:kalkulator.php");
  } else {
    echo "Error updating record: " . mysqli_error($conn);
  }

  mysqli_close($conn);
?>