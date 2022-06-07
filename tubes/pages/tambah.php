<?php 
session_start();

// if( !isset($_SESSION["LOGIN"]) ) {
//     header("Location: login.php");
//     exit;
// }
require 'functions.php';
// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"])) {
    
    // cek apakah data berhasil di tambahkan atau tidak
    if( tambah($_POST) > 0 ) {
        echo "
        <script>
            alert('data berhasil ditambahkan!');
            document.location.href = 'basic-table.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('data gagal ditambahkan!');
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
    <title>Tambah data drama</title>
</head>
<body>
    <h1>Tambah data drama</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="judul_drama">judul_drama</label>
                <input type="text" name="judul_drama" id="judul_drama" required>
            </li>
            <!-- <li>
                <label for="genre">genre</label>
                <input type="text" name="genre" id="genre">
            </li> -->
            <div class="mb-3">
                            <label for="genre" class="form-label">genre</label>
                            <select class="form-select" name="genre" required="" id="genre">
                                <option disabled="" selected="">Pilih Genre</option>
                                <option value="1">Romantis</option>
                                <option value="2">komedi</option>
                                <option value="3">fantasi</option>
                                <option value="4">laga</option>
                                <option value="5">komedi romantis</option>
                                <option value="6">komedi hitam</option>

                            </select>
                        </div>
            <li>
                <label for="sinopsis">sinopsis</label>
                <input type="text" name="sinopsis" id="sinopsis">
            </li>
            <li>
                <label for="sutradara">sutradara</label>
                <input type="text" name="sutradara" id="jsutradara">
            </li>
            <li>
                <label for="actors">actors</label>
                <input type="text" name="actors" id="actors">
            </li>
            <li>
                <label for="rating_usia">rating_usia</label>
                <input type="text" name="rating_usia" id="rating_usia">
            </li>
            <li>
                <label for="gambar">gambar</label>
                <input type="file" name="gambar" id="gambar">
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data!</button>
            </li>
        </ul>
    </form>
</body>
</html>