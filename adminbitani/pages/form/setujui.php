<?php
include "../konfigurasi.php";
 
$conn = new mysqli($servername, $username, $password, $dbname);
 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$checkDuplicateSql = "SELECT * FROM tabel_supplier 
                      WHERE jenis = '" . $_POST["jenis"] . "' 
                      AND supplier = '" . $_POST["supplier"] . "' 
                      AND email = '" . $_POST["email"] . "'";
$result = $conn->query($checkDuplicateSql);

if ($result->num_rows > 0) { 
    echo "<script>alert('Data sudah pernah disetujui!');</script>";
} else { 
    $insertSql = "INSERT INTO tabel_supplier (id, jenis, supplier, email, lokasi, alamat, kontak, longitude, latitude, deskripsi, gambar)
                  VALUES ('',
                  '" . $_POST["jenis"] . "', '" . $_POST["supplier"] . "', '" . $_POST["email"] . "', '" . $_POST["lokasi"] . "',
                  '" . $_POST["alamat"] . "', '" . $_POST["kontak"] . "', '" . $_POST["longitude"] . "', '" . $_POST["latitude"] . "',
                  '" . $_POST["deskripsi"] . "', '" . $_POST["gambar"] . "')";

    if ($conn->query($insertSql) === TRUE) { 
        echo "<script>alert('Data berhasil disetujui!');</script>";
    } else {
        echo "Error: " . $insertSql . "<br>" . $conn->error;
    }
}

$conn->close(); 

header("Location: form.php");
?>