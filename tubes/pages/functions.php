<?php 
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "tubes_213040079");


function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data) {
    global $conn;
    
    $judul_drama = htmlspecialchars($data["judul_drama"]);
    $genre = htmlspecialchars($data["genre"]);
    $sinopsis = htmlspecialchars($data["sinopsis"]);
    $sutradara = htmlspecialchars($data["sutradara"]);
    $actors = htmlspecialchars($data["actors"]);
    $rating_usia = htmlspecialchars($data["rating_usia"]);
    $gambar = htmlspecialchars($data["gambar"]);

    // query insert data
    $query = "INSERT INTO drama VALUES
    ('', '$judul_drama', '$genre', '$sinopsis', '$sutradara', '$actors', '$rating_usia', '$gambar')
    ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");

    return mysqli_affected_rows($conn);
}


function ubah($data) {
    global $conn;
    
    $id = $data["id"];
    $judul_drama = htmlspecialchars($data["judul_drama"]);
    $genre = htmlspecialchars($data["genre"]);
    $sinopsis = htmlspecialchars($data["sinopsis"]);
    $sutradara = htmlspecialchars($data["sutradara"]);
    $actors = htmlspecialchars($data["actors"]);
    $rating_usia = htmlspecialchars($data["rating_usia"]);
    $gambar = htmlspecialchars($data["gambar"]);

    // query insert data
    $query = "UPDATE drama SET
            judul_drama = '$judul_drama',
            genre = '$genre',
            sinopsis = '$sinopsis',
            sutradara = '$sutradara',
            actors = '$actors',
            rating_usia = '$rating_usia',
            gambar = '$gambar'
            WHERE id = $id
            ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function cari($keyword) {
    $query = "SELECT * FROM drama
                WHERE
            judul_drama LIKE '%$keyword%' OR
            genre LIKE '%$keyword%' OR
            sinopsis LIKE '%$keyword%' OR
            sutradara LIKE '%$keyword%' OR
            actors LIKE '%$keyword%' OR
            rating_usia LIKE '%$keyword%'
        ";
    return query($query);

}
?>

