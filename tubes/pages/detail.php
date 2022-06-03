<?php 

require 'functions.php';
// mendapatkan id produk dari url
$id_drama = $_GET["id"];
$drama = query("SELECT * FROM drama WHERE id = $id_drama");
 
// tombol cari ditekan
if( isset($_POST["cari"]) ) {
  $drama = cari($_POST["keyword"]);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark " style="background-color:#ff0099 ;">
      <div class="container">
          <a class="navbar-brand">
              <img src="../img/logoremove.png" alt="" width="150" height="auto" class="d-inline-block">
          
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <form class="d-flex ms-auto my-2 my-lg-0">
                <input class="form-control me-2" type="search" placeholder="Cari Barang Anda" aria-label="Search">
                <button type="button" class="btn btn-light">Cari</button>
              </form>
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link" href="registrasi.php">Registrasi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="samples/login.php">Masuk</a>
              </li>
            </ul>
          </div>
      </div>
    </nav>
    <section class="kontent">
    <div class="container">
    <h1>Details</h1>

       <div class="row">
       <?php foreach($drama as $drakor) :?>
           <div class="col-md-6">
               <img src="../img/<?php echo $drakor["gambar"]; ?>"alt="" class="img-responsive" width="500" height="auto">
           </div>

           <?php endforeach; ?>
        <div class="col-md-6">
            <h2><?php echo $drakor["judul_drama"] ?></h2>
            <h5 class="bg-secondary d-inline rounded-pill p-1 "><?php echo $drakor["rating_usia"] ?></h5>
            <h5 class="mt-5">genre:</h5>
            <h5 ><?php echo $drakor["genre"] ?></h5>
            <h5 class="mt-5">sinopsis:</h5>
            <h5><?php echo $drakor["sinopsis"] ?></h5>
            <h5 class="mt-5">sutradara:</h5>
            <h5><?php echo $drakor["sutradara"] ?></h5>
           
            
            

            <form method="post">
                <div class="form-grup">
                    <div class="input-group">
                    </div>
                </div>

            </form>
        </div>
       </div>
    </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
</body>
</html>