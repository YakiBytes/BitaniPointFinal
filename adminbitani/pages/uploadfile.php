<?php
    include "konfigurasi.php";
    $conn = new mysqli($servername, $username, $password, $dbname);

    require '../vendor/autoload.php';
    use PhpOffice\PhpSpreadsheet\Spreadsheet;
    use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

    if(isset($_POST['import_btn'])){
        $allowed_ext = ['xls', 'csv', 'xlsx'];
        $fileName = $_FILES['import_file']['name'];
        $checking = explode('.', $fileName);
        $file_ext = end($checking);

        if(in_array($file_ext, $allowed_ext)){
            $targetPath = $_FILES['import_file']['tmp_name'];
            $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($targetPath);
            $data = $spreadsheet->getActiveSheet()->toArray();
            
            $i=1;
            $n=count($data);
            for($i; $i<$n; $i++){
                $row = $data[$i];
                $nama = $row['0'];
                $kontak = $row['1'];
                $benih = $row['2'];
                $bibit = $row['3'];

                $checkQuery = "SELECT * FROM `grafik02` WHERE `nama` = '$nama' AND `kontak` = '$kontak'";
                $result = mysqli_query($conn, $checkQuery);

                if (mysqli_num_rows($result) == 0) {
                    $insertQuery = "INSERT INTO `grafik02` (`id`, `nama`, `kontak`, `benih`, `bibit`) 
                        VALUES (NULL, '$nama', '$kontak', '$benih', '$bibit')";
                    mysqli_query($conn, $insertQuery);
                    $msg = 1;
                } else {
                    echo "Data sudah ada untuk supplier '$nama' dengan kontak '$kontak'. Insert dilewatkan.<br>";
                }

                if(isset($msg)){
                    $_SESSION['status']= "File Berhasil Di-<i>import</i><br>";
                    header("Location: selengkapnya.php");
                }
            }            
        
        } else{ 
            $_SESSION['status']= "File Tidak Valid<br>";
            header("Location: selengkapnya.php");
            exit(0);
        }
    }
?>