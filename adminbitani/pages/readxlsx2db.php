<html>
    <head>
        <meta http-equiv="refresh" content="2;url=selengkapnya.php">
    </head>
    <body>
        <p>Refresh Page</p>
    <?php
        include "konfigurasi.php";
        require '../vendor/autoload.php';
        use PhpOffice\PhpSpreadsheet\Spreadsheet;
        $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
        $spreadsheet = $reader->load("supplier.xlsx");
        $data=$spreadsheet->getSheet(0)->toArray();

        $conn = new mysqli($servername, $username, $password, $dbname);

        $i=1;
        $n=count($data);
        for($i; $i<$n; $i++){
            $checkQuery = "SELECT * FROM `grafik02` WHERE `nama` = '" . $data[$i][0] . "' AND `kontak` = '" . $data[$i][1] . "'";
            $result = mysqli_query($conn, $checkQuery);

            if (mysqli_num_rows($result) == 0) {
                $insertQuery = "INSERT INTO `grafik02` (`id`, `nama`, `kontak`, `benih`, `bibit`) 
                    VALUES (NULL, '" . $data[$i][0] . "', '" . $data[$i][1] . "', '" . $data[$i][2] . "', '" . $data[$i][3] . "')";
                mysqli_query($conn, $insertQuery);
            } else {
                echo "Data sudah ada untuk supplier '" . $data[$i][0] . "' dengan kontak '" . $data[$i][1] . "'. Insert dilewatkan.<br>";
            }
        }
    ?>
    </body>
</html>