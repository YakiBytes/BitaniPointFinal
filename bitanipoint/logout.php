<?php
session_start();

// Menghapus semua variabel sesi
$_SESSION = array();

// Hancurkan sesi
session_destroy();

// Redirect ke halaman login atau halaman lainnya
header("Location: index.php");
exit;
?>