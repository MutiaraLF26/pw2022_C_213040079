<?php 
// Pertemuan 5 - ARRAY
// ARRAY adlah variabel yang bisa menampung/menyimpan banyak nilai sekaligus

$hari1 = "senin";
$hari2 = "selasa";

$bulan1 = "januari";
$bulan2 = "februari";

$mahasiswa1 ="Sandhika";

// Membuat ARRAY
$hari = ["Senin", "Selasa", "Rabu", "kamis"]; // cara baru
$bulan = array("Januari", "Februari", "Maret"); //cara lama
$myarr = [10, "Sandhika", true];

// Mencetak ARRAY
// Mencetak 1 elemen di dalam array, menggunakan index
// dimulai dari 0
echo $hari[0];
echo "<br>";
echo $bulan[2];
echo "<br>";
echo $myarr[0];
echo "<hr>";

// mencetak menggunakan var_dump() atau print_rt()
// khusus untuk debugging
var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<hr>";

// mencetak isi array menggunakan looping
//for
for($i = 0; $i <count($hari); $i++) {
    echo $hari[$i];
    echo "<br>";
}
echo "<hr>";

// foreach
foreach($bulan as $b) {
    echo $b;
    echo "<br>";
}
echo "<hr>";

foreach ($bulan as $key => $value) {
    echo "key; $key - value; $value";
    echo "<br>";
}

echo "<hr>";
// Memanipulasi ARRAY
// menambah elemen baru di akhir array
$hari[] = "kamis";
$hari[] = "jumat";
print_r($hari);
?>
