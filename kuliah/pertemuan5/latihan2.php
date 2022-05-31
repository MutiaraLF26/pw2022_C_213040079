<?php
// ARRAY Multidimensi
// Array di dalam array

$mahasiswa = [
    ["Mutiara Laelani Firdaus", "213040079", "mutiara.213040079@mail.unpas.ac.id", "Teknik Informatika"],
["Dea Abeliya Sasmita", "213040070", [1,[2],3,], "dea.213040070@mail.unpas.ac.id", "Teknik Informatika"]
];
echo $mahasiswa[1][2][1][0]; 
?>