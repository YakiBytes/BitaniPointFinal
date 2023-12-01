<?php
$koneksi = mysqli_connect("localhost","root","","bitani");

function tambah($data) {
	global $koneksi;

	$jenis = htmlspecialchars($data["jenis"]);
	$supplier = htmlspecialchars($data["nama"]);
	$email = htmlspecialchars($data["email"]);
	$lokasi = htmlspecialchars($data["lokasi"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $kontak = htmlspecialchars($data["kontak"]);
	$longitude = htmlspecialchars($data["longitude"]);
	$latitude = htmlspecialchars($data["latitude"]);
    $deskripsi = htmlspecialchars($data["deskripsi"]);

	// jika user tidak pilih gambar
	if( $_FILES['gambar']['error'] == 4 ) {
		echo "<script>
				alert('harap pilih gambar terlebih dahulu!');
				document.location.href = 'pengajuan.php';
			  </script>";
		return false;
	}

	if( ! cek_gambar() ) {
		return false;
	}

	// buat nama file baru
	$ekstensiGambar = explode('.', $_FILES['gambar']['name']);
	$ekstensiGambar = strtolower(end($ekstensiGambar));
	$nama_file_baru = uniqid() . '.' . $ekstensiGambar;
	$gambar = $nama_file_baru;

	move_uploaded_file($_FILES['gambar']['tmp_name'], 'img/' . $gambar);

	$sql = "INSERT INTO pengajuan
				VALUES
			('', '$jenis', '$supplier', '$email', '$lokasi', '$alamat', '$kontak', '$longitude','$latitude', '$deskripsi', '$gambar')";

	mysqli_query($koneksi, $sql);

	return mysqli_affected_rows($koneksi);
}

function cek_gambar() {
	// ambil data gambar
	$gambar = $_FILES["gambar"]["name"];
	$tmp_name = $_FILES["gambar"]["tmp_name"];
	$ukuran = $_FILES["gambar"]["size"];
	$tipe = $_FILES["gambar"]["type"];
	$error = $_FILES["gambar"]["error"];

	// pengecekan gambar
	// jika ukuran file melebihi 5MB
	if( $ukuran > 5000000 ) {
		echo "<script>
				alert('ukuran file terlalu besar!');
				document.location.href = '';
			  </script>";
		return false;
	}

	// jika bukan gambar
	$tipeGambarAman = ['jpg', 'jpeg', 'png', 'gif'];
	$ekstensiGambar = explode('.', $gambar);
	$ekstensiGambar = strtolower(end($ekstensiGambar));

	if( ! in_array($ekstensiGambar, $tipeGambarAman) ) {
		echo "<script>
				alert('yang anda pilih bukan gambar!');
				document.location.href = '';
			  </script>";
		return false;
	}
	return true;
}




?>