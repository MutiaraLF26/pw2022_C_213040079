<?php 

require 'functions.php';
$drama = query("SELECT * FROM drama");

// tombol cari ditekan
if( isset($_POST["cari"]) ) {
  $drama = cari($_POST["keyword"]);
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">

    <title>M-Flix</title>
  </head>
  <body>

    <!-- Awal Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark  fixed-top" style="background-color:#ff0099 ;">
      <div class="container">
          <a class="navbar-brand">
              <img src="../img/logoremove.png" alt="" width="150" height="auto" class="d-inline-block">
          
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <form class="d-flex ms-auto my-2 my-lg-0" method="post" action="">
                <input class="form-control me-2" type="search" name="keyword" placeholder="Cari Drama Anda" aria-label="Search">
                <button type="submit" class="btn btn-light" name="cari">Cari</button>
              </form>
            <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Beranda</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="samples/registrasi.php">Registrasi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="samples/login.php">Masuk</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#drama">Drama</a>
              </li>
            </ul>
          </div>
      </div>
    </nav>
      <!-- Akhir Navbar-->
      <!-- awal carousel -->
      <!-- awal kategori -->

      <div class=" mt-0 " style="background-image:url('../img/banner.jpg') ; height:700px;"> 
      <div class="bg-secondary d-inline rounded-pill p-1 ">WELCOME TO M-FLIX</div>
        <div class="row text-center row-container mt-0">
          <div class="col-lg2 col-mg-3 col-sm-4 col-6">
          </div>
        </div>
      </div>
      <div class="container">
        <!-- <div id="carouselExampleIndicators" class="carousel slide mt-4" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" 
            class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" 
            aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" 
            aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" 
            aria-label="Slide 4"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/header.jpg" class="d-block img-fluid" alt="header1">
            </div>
            <div class="carousel-item">
              <img src="img/header2.jpg" class="d-block img-fluid" alt="header2">
            </div>
            <div class="carousel-item">
              <img src="img/header3.jpg" class="d-block img-fluid" alt="header3">
            </div>
            <div class="carousel-item">
              <img src="img/header4.jpg" class="d-block img-fluid" alt="header3">
            </div>
          </div>
        </div> -->
      <!-- </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div> -->
      <!-- akhir carousel -->


      

      <!-- akhir kategori -->
      <!-- awal produk -->
      <div class="container mt-5" id="drama">
          <div class="category-title"  style="background-color: #fff; padding: 5px 10px;">
            <h1 class="text-center" style="margin-top: 5px;">Drama</h1>
          </div>
          <div class="row">
            <?php foreach($drama as $drakor) :?>
            <div class="col-lg-4 col-md-4 col-sm-4 col-4 mt-4">
              <div class="card text-center">
                <img src="../img/<?= $drakor["gambar"];?>" class="card-img-top" alt="product1">
                <div class="card-body">
                  <h5 class="card-title text-center"><?= $drakor["judul_drama"];?></h5>
                  <a href="detail.php?id=<?= $drakor["id"];?>" class="btn btn-primary d-grid">Selengkapnya</a>
                </div>
              </div>
            </div>
            <?php endforeach; ?>
            </div>
          </div>
      </div>
      <!-- akhir produk -->
      <!-- Footer -->
      <footer class="bg-light p-5 mt-5">
        <div class="container">
          <div class="row">
            <div class="col-md-6 text-md-start text-center pt-2 pb-2">
              <a href="#">
                <img src="../img/logo.png" style="width: 30px;">
              </a>
              <span>Copyright @2022 | created by M-Flix</span>
            </div>
            <div class="col-md-6 text-md-end text-center pt-2 pb-2">
              <a href="#">
                <img src="../img/WhatsApp_Logo_6-removebg-preview.png" class="ms-2" style="width: 50px;">
              </a>

              <a href="https://www.instagram.com/mutiaralaelani/">
                <img src="../img/instagram-1581266_1280-2-removebg-preview (1).png" class="ms-2" style="width: 30px;">
              </a>
            </div>
          </div>
        </div>
      </footer>
      <!-- akhir footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
    crossorigin="anonymous"></script>

  </body>
</html>