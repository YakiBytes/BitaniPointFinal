<?php
// Assuming you have a MySQL connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bitani";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the database
$sql = "SELECT * FROM tabel_supplier";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $features = array();

    // Fetch associative array
    while ($row = $result->fetch_assoc()) {
        $feature = array(
            "type" => "Feature",
            "properties" => array(
                "id" => $row["id"],
                "jenis" => $row["jenis"],
                "supplier" => $row["supplier"],
                "email" => $row["email"],
                "lokasi" => $row["lokasi"],
                "alamat" => $row["alamat"],
                "kontak" => $row["kontak"],
                "longitude" => $row["longitude"],
                "latitude" => $row["latitude"],
                "deskripsi" => $row["deskripsi"],
                "gambar" => $row["gambar"],
            ),
            "geometry" => array(
                "type" => "Point",
                "coordinates" => array($row["longitude"], $row["latitude"]),
            ),
        );

        array_push($features, $feature);
    }

    // Create the final JSON structure
    $json_data = array(
        "type" => "FeatureCollection",
        "name" => "suppliersigcsv_1",
        "crs" => array(
            "type" => "name",
            "properties" => array(
                "name" => "urn:ogc:def:crs:OGC:1.3:CRS84",
            ),
        ),
        "features" => $features,
    );

    // Convert the array to JSON format
    $json_output = json_encode($json_data, JSON_PRETTY_PRINT);

    // Output the JSON data
    echo $json_output;
} else {
    echo "0 results";
}

// Close the MySQL connection
$conn->close();
?>
