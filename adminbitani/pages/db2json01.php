<?php
    $b1 = array(
        "caption"=>"Jumlah Supplier",
        "subCaption"=>"Tiap Jenisnya",
        "xAxisName"=>"Supplier",
        "numberPrefix"=>"",
        "theme"=>"fint"
    );
    $b2 = array();
    $koneksi = mysqli_connect("localhost","root","","bitani");
    $hasil = mysqli_query($koneksi, "SELECT jenis, COUNT(*) as jumlah FROM tabel_supplier GROUP BY jenis");

    while ($record = mysqli_fetch_assoc($hasil)) {
        $datum = array("label" => $record['jenis'], "value" => $record['jumlah']);
        array_push($b2, $datum);
    }

    $gab = array("chart"=>$b1,"data"=>$b2);
    echo json_encode($gab);
?>