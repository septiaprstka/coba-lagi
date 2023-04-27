<?php 
//array
//variable yang dapat memeliki banyak nilai
//elemen pada array boleh memiliki tipe data yang berbeda 
//pasangan antara key dan value
//key nya adalah index, yang di mulai dari 0

//membuaut array cara lama
$hari = array("senin", "selasa", "rabu");
//membuat array cara baru
$bulan = ["januari", "februari", "rabu"];
$arr1 = [123, "tulisan", false];

//menampilkan variable 
//tidak bisa pakai echo
//var_dump() / print_r()
// var_dump($hari);
// echo "<br>";
// print_r($bulan);
// echo "<br>";

//menampilkan 1 elemen pada array
// echo $arr1[0];
// echo "<br>";
// echo $bulan[2]; 

//menambahkan elemen baru pada array
var_dump($hari);
$hari[] = "kamis";
echo"<br";
var_dump($hari);

 ?>