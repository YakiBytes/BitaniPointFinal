<?php
include "../konfigurasi.php";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }

    echo $sql = "DELETE FROM diskusi WHERE id=".$_GET['id'];
    if (mysqli_query($conn, $sql)) {
        header("Location:diskusi.php");
    } else {
      echo "Error updating record: " . mysqli_error($conn);
    }

    mysqli_close($conn);
?>