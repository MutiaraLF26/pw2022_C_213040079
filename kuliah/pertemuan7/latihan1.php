<?php 
// $_GET
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
        <title>GET</title>
    </head>
    <body>
<h1>Daftar Mahasiswa</h1>
<ul>
<?php foreach( $mahasiswa as $mhs) : ?>
    <li>
    <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
    </li>
<?php endforeach; ?>
</ul>
    </body>
</html>