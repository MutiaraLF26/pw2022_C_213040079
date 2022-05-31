<?php 
// array associative
// array yang di indexnya string
$mahasiswa = [
    [
        "nama" => " Mutiara Laelani Firdaus",
        "npm" => "213040079",
        "email" => "mutiara.213040079@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Dea Abeliya",
        "npm" => "213040070",
        "email" => "dea.213040070@mail.unpas.ac.id",
        "jurusan" => "Teknik Mesin"
    ],
    [
        "nama" => "wina",
        "npm" => "213040093",
        "email" => "wina.213040093@mail.unpas.ac.id",
        "jurusan" => "Teknik Lingkungan"
    ],
];


// var_dump($mahasiswa [1]["nilai_tugas"]["tugas2"]); 
?>

<?php foreach($mahasiswa as $mhs) { ?>
    <ul>
        <li>Nama : <?php echo $mhs["nama"]; ?></li>
        <li>NPM : <?php echo $mhs["npm"]; ?></li>
        <li>Email : <?php echo $mhs["email"]; ?></li>
        <li>Juruasan : <?php echo $mhs["jurusan"]; ?></li>
    </ul>
    <?php } ?>
    
    <?php foreach($mahasiswa as $mhs) { ?>
        <ul>
            <?php foreach($mhs as $key => $value) { ?>
                <li><?php echo $key; ?>: <?php echo $value; ?></li>
                <?php } ?>
        </ul>
<?php } ?>
 