<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstraps CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

     <!-- Custom CSS -->
     <link rel="stylesheet" href="css/beranda.css">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img src="img/logo.png" alt="logo"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link" aria-current="page" href="index.php">Home</a>
              <a class="nav-link" href="kuisoner.html">Order</a>
              <a class="nav-link" href="about.html">About Us</a>
              <a class="nav-link signin" href="login.php">Sign In</a>
              <a class="nav-link signup" href="register.html">Sign Up</a>
            </div>
          </div>
        </div>
      </nav>
    <!-- End Navbar -->

    <!-- Hero -->
        <!-- <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/Hero2.jpg" class="d-block w-100" style="transform: translateY(-50px);" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h1>Blood Plus</h1>
                <p>Order dan cek stock darah yang tersedia di Rumah Sakit terdekat.</p>
                <a href="#" class="btn">Order</a>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/Hero3.jpg" class="d-block w-100" style="transform: translateY(-50px);" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h1>Blood Plus</h1>
                <p>Order dan cek stock darah yang tersedia di Rumah Sakit terdekat.</p>
                <a href="#" class="btn">Order</a>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/hero.jpg" class="d-block w-100" s tyle="transform: translateY(-50px);" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h1>Blood Plus</h1>
                <p>Order dan cek stock darah yang tersedia di Rumah Sakit terdekat.</p>
                <a href="#" class="btn">Order</a>
            </div>
          </div>
        </div>
      </div> -->
    <!-- End Hero -->


    <!-- Hero -->
    <section class="hero">  
        <div class="hero-image">
            <div class="text">
                <h1>Blood Plus</h1>
                <p>Order dan cek stock darah yang tersedia di Rumah Sakit terdekat.</p>
                <a href="kuisoner.html" class="btn">Order</a>
            </div>
        </div>
    </section>
    <!-- End Hero -->

    <!-- Form Pencarian -->
    <section class="form">
        <form action="">
            <div class="row">
                <div class="col col-md-9">
                    <input type="text" placeholder="Cari Daerah..." style="padding-left: 100px">
                </div>
                <div class="col col-md-3">
                    <a href="Tampilanrs.html"></a>
                        <button>Cari</button> 
                </div>
            </div>
        </form>
    </section>
    <!-- End Form Pencarian -->

    <!-- darah -->
    <section class="darah">
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">
                        <img src="img/Asset 5.png" alt="">
                    </div>
                    <div class="card-footer">
                        <h3>Golongan Darah A</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">
                        <img src="img/Asset 6.png" alt="">
                    </div>
                    <div class="card-footer">
                        <h3>Golongan Darah B</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">
                        <img src="img/Asset 8.png" alt="">
                    </div>
                    <div class="card-footer">
                        <h3>Golongan Darah AB</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">
                        <img src="img/Asset 7.png" alt="">
                    </div>
                    <div class="card-footer">
                        <h3>Golongan Darah O</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end darah -->

    <!-- menu -->
    <section class="menu">
        <div class="row">
            <div class="col-md-4">
                <a href="Tampilanrs.html">
                    <div class="menu">
                        <img src="img/hospital.png" alt="">
                        <p>Pelayanan kesehatan terdekat</p>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="#">
                    <div class="menu">
                        <img src="img/History.png" alt="">
                        <p>Riwayat Pemesanan</p>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="#">
                    <div class="menu">
                        <img src="img/Rekam medis.png" alt="">
                        <p>Riwayat Medis</p>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <!-- end menu -->

    <!-- saran -->
    <section class="saran"> 
        <div class="row">
            <div class="col-md-4">
                <img src="img/Gambar Bawah.png" alt="">
            </div>
            <div class="col-md-8">
                <img src="img/Komen.png" alt="">

                <form action="">
                    <label for="saran">Masukan dan Saran:</label><br>
                    <textarea name="saran" id="saran" cols="60" rows="6" placeholder="Ketik Disini..."></textarea>
                    <br><button class="btn btn-danger ml-auto">Kirim</button>
                </form>
            </div>
        </div>
    </section>
    <!-- end saran -->

    <!-- footer -->
    <section class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img src="img/logo.png" alt="">
                    <p>Blood Plus App by Kelompok 2 - <br>
                        MK Rekayasa Perangkat Lunak</p>
                </div>
                <div class="col-md-4">
                    <h5>Explore us</h5>
                    <a href="about.html">About Us</a>
                    <a href="#">Privacy policy</a>
                    <a href="#">Terms & conditions</a>
                </div>
                <div class="col-md-4">
                    <h5>Getting Touch</h5>
                    <p>faruq@mhs.unsyiah.ac.id</p>
                    <p>021-123-098-987</p>
                </div>
            </div>
            <p class="text-center mt-5 copy">Copyright 2022 . All rights reserved . Blood Plus</p>
        </div>
    </section>
    <!-- end footer -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>