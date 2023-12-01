<?php

$b1 = array(
       "caption"=>"Jumlah Jenis Produk Tanaman Yang Tersedia",
        "subCaption"=>"Pada Setiap Supplier",
        "xAxisName"=>"Produk Supplier",
        "formatnumberscale"=>"0",  
        "showvalues"=>"0",
        "theme"=>"fint"
);
$b2  =array();
$b3  =array();
$b4  =array();
$koneksi = mysqli_connect("localhost","root","","bitani");
$hasil   = mysqli_query($koneksi,"SELECT * FROM grafik02");
while($record = mysqli_fetch_assoc($hasil)){
  $datum1 = array("label"=>$record['nama']);
  array_push($b2,$datum1);
}
$cat = array("category"=>$b2);

$hasil   = mysqli_query($koneksi,"SELECT * FROM grafik02");
while($record = mysqli_fetch_assoc($hasil)){
  $datum2 = array("value"=>$record['benih']);
  array_push($b3,$datum2);
}
$dat1 = array("seriesname"=>"Benih", "data"=>$b3);

$hasil   = mysqli_query($koneksi,"SELECT * FROM grafik02");
while($record = mysqli_fetch_assoc($hasil)){
  $datum3 = array("value"=>$record['bibit']);
  array_push($b4,$datum3);
}
$dat2 = array("seriesname"=>"Bibit", "data"=>$b4);

$gab = array("chart"=>$b1, "categories"=>array($cat), "dataset"=>array($dat1,$dat2));
echo  json_encode($gab);
?>