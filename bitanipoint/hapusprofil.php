<?php
include "konfigurasi.php";
session_start();
$_SESSION = array();

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$id = (int)$_GET['id'];
$sql = "DELETE FROM table_user WHERE id=$id";

if (mysqli_query($conn, $sql)) {
    session_destroy();
    echo "<script>alert('Akun berhasil dihapus');</script>";
    echo "<script>window.location.href='index.php';</script>";
    exit; // Ensure that no content is sent after this point
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

session_destroy();

mysqli_close($conn);
?>
