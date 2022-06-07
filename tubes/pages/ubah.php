<?php 
session_start();

// if( !isset($_SESSION["LOGIN"]) ) {
//     header("Location: login.php");
//     exit;
// }
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
            document.location.href = 'basic-table.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('data gagal diubah!');
            document.location.href = 'basic-table.php';
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
    <h1>ubah data drama</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $drakor["id"]; ?>">
        <input type="hidden" name="gambarLama" value="<?= $drakor["gambar"]; ?>">
        <ul>
            <li>
                <label for="judul_drama">judul_drama</label>
                <input type="text" name="judul_drama" id="judul_drama" required value="<?= $drakor["judul_drama"]; ?>">
            </li>
           
            <div class="mb-3">
                            <label for="genre" class="form-label">genre</label>
                            <select class="form-select" name="genre" required="" id="genre">
                                <option disabled="" selected="">Pilih Genre</option>
                                <option value="1"<?php if($drakor['genre'] == "1") { echo "selected";} ?>
>Romantis</option>
                                <option value="2" <?php if($drakor['genre'] == "2") { echo "selected";} ?>
>komedi</option>
                                <option value="3" <?php if($drakor['genre'] == "3") { echo "selected";} ?>
>fantasi</option>

                                <option value="4" <?php if($drakor['genre'] == "4") { echo "selected";} ?>>laga</option>
                                <option value="5" <?php if($drakor['genre'] == "5") { echo "selected";} ?>>komedi romantis</option>
                                <option value="6" <?php if($drakor['genre'] == "6") { echo "selected";} ?>>komedi hitam</option>

                            </select>
                        </div>
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
                <label for="gambar">gambar</label><br>
                <img src="../img/<?= $drakor['gambar']; ?>" width="40"><br>
                <input type="file" name="gambar" id="gambar">
            </li>
            <li>
                <button type="submit" name="submit">ubah Data!</button>
            </li>
        </ul>
    </form>
</body>
</html>