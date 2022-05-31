<?php $mahasiswa = [
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
 ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Daftar mahasiswa</title>
  </head>
  <body>
    
    <div claas="container">
        <h1>Daftar Mahasiswa</h1>

        <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Gambar</th>
      <th scope="col">Nama</th>
      <th scope="col">NPM</th>
      <th scope="col">Email</th>
      <th scope="col">Jurusan</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>

    <tr>
      <th scope="row">1</th>
      <td>
      <img src="img/wanita.png" height="50"
      class="rounded-circle">
      </td>
      <td>Mutiara Laelani Firdaus</td>
      <td>213040079</td>
      <td>mutiara.213040079@mail.unpas.ac.id</td>
      <td>Teknik Informatika</td>
      <td>
          <a href="" class="btn badge bg-warning">edit</a>
          <a href="" class="btn badge bg-danger">delete</a>
      </td>
    </tr>
    
    <tr>
      <th scope="row">2</th>
      <td>
      <img src="img/download.jpg" height="50"
      class="rounded-circle">
      </td>
      <td>park seo joon</td>
      <td>213040078</td>
      <td>seojoon.213040078@mail.unpas.ac.id</td>
      <td>Teknik Informatika</td>
      <td>
          <a href="" class="btn badge bg-warning">edit</a>
          <a href="" class="btn badge bg-danger">delete</a>
      </td>
    </tr>

    <tr>
      <th scope="row">3</th>
      <td>
      <img src="img/perempuan.png" height="50"
      class="rounded-circle">
      </td>
      <td>shin ha ri</td>
      <td>213040077</td>
      <td>HaRi.213040077@mail.unpas.ac.id</td>
      <td>Teknik Pangan</td>
      <td>
          <a href="" class="btn badge bg-warning">edit</a>
          <a href="" class="btn badge bg-danger">delete</a>
      </td>
    </tr>

    <tr>
      <th scope="row">4</th>
      <td>
      <img src="img/orang 2.png" height="50"
      class="rounded-circle">
      </td>
      <td>Kang Tae Moo</td>
      <td>213040070</td>
      <td>Kang.21304007o@mail.unpas.ac.id</td>
      <td>Teknik Mesin</td>
      <td>
          <a href="" class="btn badge bg-warning">edit</a>
          <a href="" class="btn badge bg-danger">delete</a>
      </td>
    </tr>

    <tr>
      <th scope="row">5</th>
      <td>
      <img src="img/orang.png" height="50"
      class="rounded-circle">
      </td>
      <td>lee Min Ho</td>
      <td>213040071</td>
      <td>lee.213040071@mail.unpas.ac.id</td>
      <td>Teknik Industri</td>
      <td>
          <a href="" class="btn badge bg-warning">edit</a>
          <a href="" class="btn badge bg-danger">delete</a>
      </td>
    </tr>

  </tbody>
</table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>