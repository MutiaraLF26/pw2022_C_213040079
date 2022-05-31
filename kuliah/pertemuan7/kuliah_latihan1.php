<?php 
// SUPERGLOBALS
// variabel milik PHP yang bisa kita gunakan
// bentuknya array associative
// $_GET
// $_POST
// $_SERVER
// $_GET["nama"] = "Mutiara";
// $_GET["email"] = "mutiara.213040079@mail.unpas.ac.id";

// var_dump($_POST)
// var_dump($_GET)
if(isset($_GET["nama"])) {
    $nama = $_GET["nama"];
} else {
    $nama = 'Tidaak Diketahui!';
}

?>


<h1>Halo, <?= $nama; ?></h1>
<ul>
    <li>
        <a href="kuliah_latihan1.php?nama=Nadila">Nadila</a>
    </li>
    <li>
        <a href="kuliah_latihan1.php?nama=Mutiara">Mutiara</a>
    </li>
</ul>

