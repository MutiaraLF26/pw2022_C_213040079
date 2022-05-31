<?php 
// $mahasiswa = [
//     ["Mutiara Laelani Firdaus", "213040079", "mutiara.213040079@mail.unpas.ac.id", "Teknik Informatika"],
//     ["Emilia Paradila Supriatna", "213040079", "emilia.213040043@mail.unpas.ac.id", "Teknik Industri"]
// ];

// array associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
$mahasiswa = [
    [
        "nama" => "Mutiara Laelani Firdaus",
        "nrp" => "213040079",
        "email" => "mutiara.213040079@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "muti.jpg"
    ],
    [
        "nama" => "Emilia Paradila Supriatna",
        "nrp" => "213040043",
        "email" => "emilia.213040043@mail.unpas.ac.id",
        "jurusan" => "Teknik Industri",
        "gambar" => "lail.jpg"
    ]
];

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Daftar Mahasiswa</title>
    </head>
    <body>
        <h1>Daftar Mahasiswa</h1>

        <?php foreach($mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"]; ?>">
            </li>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NRP : <?= $mhs["nrp"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
            <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
        </ul>
        <?php endforeach; ?>
    </body>
</html>