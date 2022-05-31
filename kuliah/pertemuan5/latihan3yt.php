<?php 
$mahasiswa = [
    ["Mutiara Laelani Firdaus", "213040079", "Teknik Informatika", "mutiara.213040079@mail.unpas.ac.id"],
    ["Wina Agustina", "213040093", "Teknik Informatika", "wina.2130400093@mail.unpas.ac.id"],
    ["Dea Abeliya Sasmita", "213040070", "Teknik Informatika", "dea.213040070@mail.unpas.ac.id"],
];

?>
<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>

<?php foreach( $mahasiswa as $mhs) : ?>
<ul>
    <li>Nama : <?= $mhs[0]; ?></li>
    <li>NRP : <?= $mhs[1]; ?></li>
    <li>Jurusan : <?= $mhs[2]; ?></li>
    <li>Email : <?= $mhs[3]; ?></li>
</ul>
<?php endforeach; ?>


</body>
</html>