<?php 
// 
// VARIABEL
// Tempat penyimpanan nilai
// Nilai : angka (interger), tulisan (string), boolean (true/false)
// Nama bebas, tidak boleh ada spasi
// Boleh ada angka tapi diawal

$nama1 = "Mutiara Laelani Firdaus";
echo $nama1;
echo "<hr>";

// OPERATOR
// Aritmatika
// +, -, *, /, %

echo 10 * 10;
echo "<br>";
echo 20 - 10;
echo "<br>" ;
echo 1 + 2 * 3 - 4; // kukabataku
echo "<br>" ;
echo 10 % 5;
echo "<hr>";

// Perbandingan
// <, >, <=, >=, ==, !=

echo 1 < 2; //true / 1
echo "<br>";
echo 10 < 5; //false / null (hilang/tidak bernilai/tidak tampil)
echo "<br>";
echo 10 == "10"; //true

// Identitas
// ===, !==
// Mengecek nilai beserta tipe data nya

echo 10 === "10";
echo "<hr>";

// Increment / Decrement
// Penambahan / Pengurangan 1
//==, --

$x = 10;
echo $x++; 
echo "<br>";
echo ++$x;
echo "<br>";

// Concat, Penggabung String
// .

$nama_depan = "abang tukang bakso borax";
$nama_belakang = "didenda 100 juta etherium";
// echo $nama_depan . $nama_belakang (TANPA SPASI)
echo $nama_depan . " " . $nama_belakang

?>