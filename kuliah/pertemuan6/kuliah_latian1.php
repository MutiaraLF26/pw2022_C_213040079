<?php
//array numerik
// array yang index-nya ber-asosiasi / berpasangan dengan angka

$mahasiswa = [
    [" Mutiara Laelani Firdaus", "213040079", "mutiara.213040079@mail.unpas.ac.id", "Teknik Informatika"],
    ["Dea Abeliya", "213040070", "dea.213040070@mail.unpas.ac.id", "Teknik Mesin"],
    [ "wina", "213040093", "wina.213040093@mail.unpas.ac.id", "Teknik Lingkungan"],
];

// var_dump($mahasiswa[1][3]);
?>

<?php foreach($mahasiswa as $mhs) { ?>
<ul>
    <li>Nama : <?php echo $mhs[0]; ?></li>
    <li>NPM : <?php echo $mhs[1]; ?></li>
    <li>Email : <?php echo $mhs[2]; ?></li>
    <li>Juruasan : <?php echo $mhs[3]; ?></li>
</ul>
<?php } ?>


