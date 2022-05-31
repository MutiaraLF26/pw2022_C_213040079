<?php 
require 'functions.php';

// ambil data di URL
$id = $_GET["id"];

// query data mahasiswa berdasarkan id
$drakor = query("SELECT * FROM drama WHERE id = $id")[0];
// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"])) {
    
    // cek apakah data berhasil diubah atau tidak
    if( ubah($_POST) > 0 ) {
        echo "
        <script>
            alert('data berhasil diubah!');
            document.locationhref = 'Admin.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('data gagal diubah!');
            document.locationhref = 'Admin.php';
        </script>
        ";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>ubah data drama</title>
</head>
<body>
    <h1>ubah data dsrama</h1>

    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $drakor["id"]; ?>">
        <ul>
            <li>
                <label for="judul_drama">judul_drama</label>
                <input type="text" name="judul_drama" id="judul_drama" required value="<?= $drakor["judul_drama"]; ?>">
            </li>
            <li>
                <label for="genre">genre</label>
                <input type="text" name="genre" id="genre" value="<?= $drakor["genre"]; ?>">
            </li>
            <li>
                <label for="sinopsis">sinopsis</label>
                <input type="text" name="sinopsis" id="sinopsis" value="<?= $drakor["sinopsis"]; ?>">
            </li>
            <li>
                <label for="sutradara">sutradara</label>
                <input type="text" name="sutradara" id="sutradara" value="<?= $drakor["sutradara"]; ?>">
            </li>
            <li>
                <label for="actors">actors</label>
                <input type="text" name="actors" id="actors" value="<?= $drakor["actors"]; ?>">
            </li>
            <li>
                <label for="rating_usia">rating_usia</label>
                <input type="text" name="rating_usia" id="rating_usia" value="<?= $drakor["rating_usia"]; ?>">
            </li>
            <li>
                <label for="gambar">gambar</label>
                <input type="text" name="gambar" id="gambar" value="<?= $drakor["gambar"]; ?>">
            </li>
            <li>
                <button type="submit" name="submit">ubah Data!</button>
            </li>
        </ul>
    </form>
</body>
</html>