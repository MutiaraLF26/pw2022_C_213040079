<php 
// array
// variabel yang dapat memiliki banyak nilai
// elemen pada array boleh memiliki tipe data yang berbeda
// pasangan antara key dan aria-valuemax
// key-nya adalah index, yang dimulai dari 0

// membuat array
// cara lama 
$hari = array("Senin", "Selasa", "Rabu");
// cara baru 
$bulan = ["Januari", "Februari", "Maret"];
$arri = [123, "tulisan", false];

// menampilkan array
// var_dump() / print_r()
// var_dump($hari);
// echo "<br>";
// print_r($bulan);
// echo "<br>";

// menampilkan 1 elemen pada array 
// echo $arr[0]
// echo "<br>";
// echo$bulan[1]

// menambahkan elemen baru pada array
Var_dump($hari);
$hari[] = "kamis";
$hari[] = "Jumat";
echo "<br>";
var_dump($hari);





?>