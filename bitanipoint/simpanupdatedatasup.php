<?php

print_r($_POST);

include "koneksi.php";


echo $sql = "UPDATE tabel_supplier
        SET jenis='".$_POST["jenis"]."', alamat='".$_POST["alamat"]."', 
            kontak='".$_POST["kontak"]."', deskripsi='".$_POST["deskripsi"]."', gambar='".$_POST["gambar"]."'
        WHERE id='".$_POST["id"]."'"; 


if ($koneksi->query($sql) === TRUE) {
    header("Location: supplierdetail.php?id=".$_POST["id"]."");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$koneksi->close();
?>