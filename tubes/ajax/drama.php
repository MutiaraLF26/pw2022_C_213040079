<?php 
require '../pages/functions.php';
$keyword = $_GET["keyword"];

$query =  "SELECT * FROM drama inner join genre on genre.id_genre = drama.genre
            WHERE
        judul_drama LIKE '%$keyword%' OR
        genre LIKE '%$keyword%' OR
        sinopsis LIKE '%$keyword%' OR
        sutradara LIKE '%$keyword%' OR
        actors LIKE '%$keyword%' OR
        rating_usia LIKE '%$keyword%'
    ";
$drama = query($query);
?>
 <table class="table table-striped">
                      <thead>
                        <tr>
                          <th >No.</th>
                          <th >aksi</th>
                          <th >gambar</th>
                          <th >judul_drama</th>
                          <th >genre</th>
                          <th >sinopsis</th>
                          <th >sutradara</th>
                          <th >rating_usia</th>
                      </tr>
                      </thead>
                      <tbody>
                        <?php $i = 1; ?>
                        <?php foreach( $drama as $row) : ?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td>
                                <a class="btn btn-primary btn-sm" href="ubah.php?id=<?= $row["id"]; ?>">ubah</a>
                                <a class="btn btn-danger btn-sm mt-1" href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?');">hapus</a>
                            </td>
                            <td><img src="../img/<?= $row["gambar"]; ?>" width="100" style="border-radius: 0%; width:100px; height:auto;"></td>
                            <td><?= $row["judul_drama"] ?></td>
                            <td><?= $row["nama_genre"] ?></td>
                            <td class="text-center"><?= $row["sinopsis"] ?></td>
                            <td><?= $row["sutradara"] ?></td>
                            <td><?= $row["rating_usia"] ?></td>
                        </tr>
                        <?php $i++ ?>
                        <?php endforeach; ?>
                      </tbody>
                    </table>