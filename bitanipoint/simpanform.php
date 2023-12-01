<?php
session_start();
  //print_r($_POST);

  include "konfigurasi.php"; 
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  // Insert data into 'diskusi' table
  $sql = "INSERT INTO diskusi (topik, komentar) VALUES ('".$_POST["topik"]."','".$_POST["komentar"]."')";
  if ($conn->query($sql) === TRUE) {
    // Retrieve the last inserted ID from 'diskusi' table
    $sql = "SELECT max(id) AS last_id FROM diskusi LIMIT 1";
    $result = $conn->query($sql); // Execute the query
    if ($result) {
      $data = mysqli_fetch_array($result); // Fetch the data
      $last_id = $data['last_id']; // Get the last ID
  
      // Insert the last ID and user ID into 'tambahdiskusi' table
      $sql = "INSERT INTO tambahdiskusi (id_user, id_diskusi) VALUES ('" . $_SESSION['id'] . "', '$last_id')";
      if ($conn->query($sql) === TRUE) {
        header("Location:qna.php");
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();
  

?>