<?php 
$Novel = [
    [
        "judul" => "Hujan",
        "penulis" => "Darwin Tere Liye",
        "tebal buku" => "320 Halaman",
        "penerbit" => "PT Gramedia Pustaka Media",
        "tahun terbit" => "januari 2016",
        "sinopsis" => "Lail baru berusia 13 tahun, dirinya harus menjadi seorang anak yatim piatu. Di hari pertama ia sekolah, ada sebuah bencana gunung meletus dan gempa dahsyat sehingga menghancurkan kota di mana ia menetap, bahkan merenggut nyawa ibu serta ayah Lail.
        Letusan Gunung Api Purba melebihi letusan dari Gunung Krakatau dan Gunung Api Tambora. Beruntungnya, ia berhasil ditolong dan diselamatkan oleh seorang anak laki-laki berusia 15 tahun, Esok namanya. Ibu Esok tidak meninggal, tetapi kedua kakinya diharuskan diamputasi.
        Selama kurang lebih satu tahun dari bencana tersebut, Lail dan Esok tinggal di sebuah pengungsian, keduanya tidak terpisahkan bagaikan kakak dan adik, semua orang pun mengetahui mereka berdua. Keduanya pun kerap kali membantu petugas pengungsian. Sampai akhirnya, pemerintah memberikan pemberitahuan untuk menutup tempat pengungsian. Hal itulah yang menyebabkan Esok dan Lail menjadi terpisah.",
        "gambar" => "hujan.jpg"
    ],
    [
        "judul" => "Laskar Pelangi",
        "penulis" => "Andrea Hirata",
        "tebal buku" => "320 Halaman",
        "penerbit" => "Bentsng Pustaka",
        "tahun terbit" => "2005",
        "sinopsis" => "“Bangunan itu nyaris rubuh. Dindingnya miring bersangga sebalok kayu. Atapnya bocor di mana-mana. Tetapi, berpasang-pasang mata mungil menatap penuh harap. Hendak ke mana lagikah mereka harus bersekolah selain tempat itu? Tak peduli seberat apa pun kondisi sekolah itu, sepuluh anak dari keluarga miskin itu tetap bergeming. Di dada mereka, telah menggumpal tekad untuk maju.”
        Begitu banyak hal menakjubkan yang terjadi dalam masa kecil para anggota Laskar Pelangi. Sebelas orang anak Melayu Belitong yang luar biasa ini tak menyerah walau keadaan tak bersimpati pada mereka. Tengoklah Lintang, seorang kuli kopra cilik yang genius dan dengan senang hati bersepeda 80 kilometer pulang pergi untuk memuaskan dahaganya akan ilmu bahkan terkadang hanya untuk menyanyikan padamu negeri di akhir jam sekolah atau Mahar, seorang pesuruh tukang parut kelapa sekaligus seniman dadakan yang imajinatif, tak logis, kreatif, dan sering diremehkan sahabat-sahabatnya, namun berhasil mengangkat derajat sekolah kampung mereka dalam karnaval 17 Agustus, dan juga sembilan orang Laskar Pelangi lain yang begitu bersemangat dalam menjalani hidup dan berjuang meraih cita-cita.",
        "gambar" => "LP.jpg"
    ],
    [
        "judul" => "Mariposa",
        "penulis" => "Luluk HF",
        "tebal buku" => "320 Halaman",
        "penerbit" => "PT Gramedia Pustaka Media",
        "tahun terbit" => "januari 2016",
        "sinopsis" => "Novel Mariposa berkisah tentang perjuangan seorang gadis bernama Natasha Kay Loovi atau Acha dalam mengejar seorang laki-laki yang sulit didekati seperti kupu-kupu. Acha sendiri digambarkan sebagai seorang gadis SMA berparas cantik dan pintar. Pertemuan pertamannya dengan Iqbal di sebuah camp olimpiade membuatnya jatuh hati pada sosok laki-laki itu. Iqbal bukan berasal dari sekolah yang sama dengannya. Berkat informasi dari sahabatnya, Amanda, Acha berhasil mengetahui sekolah Iqbal, yaitu SMA Arwana. Acha kemudian bertekad mengejar Iqbal dengan pindah ke SMA Arwana. Beruntung, karena Acha dan Iqbal adalah siswa berprestasi, keduanya dipilih menjadi perwakilan sekolah untuk mengikuti olimpiade sains tingkat nasional. Ini menjadi kesempatan bagus bagi Acha untuk lebih dekat dengan Iqbal, karena keduanya harus mengikuti bimbingan bersama selama tiga bulan menjelang kompetisi. Kendati demikian, untuk mendapatkan hati Iqbal bukan perkara mudah. Sosok Iqbal terlalu dingin dan tidak pernah membuka hati dengan perempuan manapun. Di mata Acha, Iqbal seperti kupu-kupu mariposa yang selalu lari ketika didekati. Namun, Acha merupakan sosok yang tidak kenal lelah dan terus mencoba mendekati Iqbal dengan berbagai cara. Mulai dari mendekatkan diri dengan sahabat Iqbal hingga memberi Iqbal sekotak kue keju. Sayangnya, berbagai usaha Acha justru membuat Iqbal kesal dan menyebutnya sebagai perempuan murahan. Bisakah Acha meluluhkan hati Iqbal?",
        "gambar" => "hujan.jpg"
    ],
];

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Resensi Novel</title>
    </head>
    <body>
        <h1>Resensi Novel</h1>

        <?php foreach($Novel as $nvl) : ?>
        <ul>
            <li>
                <img src="img/<?= $nvl["gambar"]; ?>">
            </li>
            <li>Judul : <?= $nvl["judul"]; ?></li>
            <li>Penulis : <?= $nvl["penulis"]; ?></li>
            <li>Tebal buku : <?= $nvl["tebal buku"]; ?></li>
            <li>Penerbit: <?= $nvl["penerbit"]; ?></li>
            <li>Tahun terbit: <?= $nvl["tahun terbit"]; ?></li>
            <li>Sinopsis: <?= $nvl["sinopsis"]; ?></li>
        </ul>
        <?php endforeach; ?>
    </body>
</html>