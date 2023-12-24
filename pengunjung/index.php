<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FavoRoti - Bakery Cake and Shop</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

  <link rel="shortcut icon" href="../assets/img/tid.png" type="image/x-icon">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

  <!-- My CSS -->
  <link rel="stylesheet" href="style.css">
  <style>
    .banner {
      width: 100%;
      height: 60vh;
      display: flex;
      background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url(../pengunjung/assets/img/banner.jpg);
      background-size: cover;
      align-items: center;
      justify-content: center;
      flex-wrap: wrap;
      box-shadow: 0px 0px 10px black;
      margin-top: 50x;
    }
  </style>

  <!--icon-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

  <!-- AOS Animate -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>

  <!-- Navbar start -->
  <nav class="navbar navbar-expand-lg navbar-light sticky-top" style="background-color: #df531c">
    <div class="container-lg rounded">
      <a class="navbar-brand"> FavoRoti</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mx-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="#tentang">Tentang Kami</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#kategori">Kategori</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#produk">Produk</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#kontak">Kontak</a>
          </li>
        </ul>
        <div class="navbar-nav">
          <div class="nav-item text-nowrap">
            <a class="nav-link px-3" href="../Project_BakeryCakeShop/login.php"> Sign in</a>
          </div>
        </div>
      </div>
    </div>
  </nav>
  <!-- Navbar end -->

  <!-- Carousel start -->
  <div class="container-lg">
    <div class="row">
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="../pengunjung/assets/img/iklan2.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="../pengunjung/assets/img/iklan8.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="../pengunjung/assets/img/iklan.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="../pengunjung/assets/img/iklan6.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <!-- Carousel End -->

      <!-- Top produk start -->
      <div class="container-lg" id="box">
        <div class="row">
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src="../pengunjung/assets/img/top.jpg" alt="">
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src="../pengunjung/assets/img/iklan3.jpg" alt="">
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src="../pengunjung/assets/img/top4.jpg" alt="">
            </div>
          </div>
          <!-- Top produk end -->

          <!-- banner selamat datang start -->
          <div class="banner mt-5">
            <div class="content" style="color: white;">
              <marquee width="98%" direction="left" height="100px">
                WELCOME TO FAVOROTI AND HAPPY SHOPPING..THANK YOU
              </marquee>
              <div class="center-text">
                <h3>SELAMAT DATANG DI TOKO KAMI</h3>
              </div>
              <h2 style="text-align: center;">FAVOROTI</h2>
              <p style="text-align: center;">Kerajinan dari toko roti adalah seni yang dapat dimakan</p>
              <p style="text-align: center;">Yang terdiri dari sedikit cinta dari pembuatnya.</p>
            </div>
          </div>
        </div>
        <!-- banner end-->

        <!-- category -->
        <hr>
        <div class="container-lg" style="margin-top: 80px;">
          <p id="kategori" class="mb-5 mt-lg-5 fw-bolder fs-2" style="text-align: center;">Kategori</p>
          <div class="row mt-3 mb-5">
            <div class="col-md-2 col-sm-6 mb-3">
              <div class="card">
                <img src="../pengunjung/assets/img/cupcake.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <a href="cupcake.php">
                    <button type="button" class="btn btn-outline-danger w-100"> Cupcake</button>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-md-2 col-sm-6 mb-3">
              <div class="card">
                <img src="../pengunjung/assets/img/pink.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <a href="party.php">
                    <button type="button" class="btn btn-outline-danger w-100">Party Cake </button>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-md-2 col-sm-6 mb-3">
              <div class="card">
                <img src="../pengunjung/assets/img/kukis2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <a href="cookies.php">
                    <button type="button" class="btn btn-outline-danger w-100"> Cookies</button>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-md-2 col-sm-6">
              <div class="card">
                <img src="../pengunjung/assets/img/puding.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <a href="dessert.php">
                    <button type="button" class="btn btn-outline-danger w-100"> Dessert</button>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-md-2 col-sm-6 mb-3">
              <div class="card">
                <img src="../pengunjung/assets/img/bolu1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <a href="bolu.php">
                    <button type="button" class="btn btn-outline-danger w-100"> Bolu </button>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-md-2 col-sm-6">
              <div class="card">
                <img src="../pengunjung/assets/img/bread.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <a href="roti.php">
                    <button type="button" class="btn btn-outline-danger w-100"> Roti</button>
                  </a>
                </div>  
              </div>
            </div>
          </div>
          </section>
          <!-- category end-->

          <!-- Produk section -->
          <hr>
          <section class="produk">
            <div class="d-flex" style="margin-top: 100px;">
              <p class="title font-monospace fs-3" id="produk"> Produk Favorit</p>
            </div>
            <div class="box-container justify-content-center">
              <div class="box justify-content-center">

                <div class="row justify-content-center">
                  <div class="col-md-3">
                    <div class="card text-center">
                      <div class="row d-flex mb-4">
                        <img src="../pengunjung/assets/img/rose.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <p class="card-title text-center fs-5">Resh mellow cake</p>
                          <div class="price">Rp. 40.000</div>
                          <div class="stars">
                            <i class="bi bi-star-fill" style="color: gold"></i>
                            <i class="bi bi-star-fill" style="color: gold;"></i>
                            <i class="bi bi-star-fill" style="color: gold"></i>
                            <i class="bi bi-star-fill" style="color: gold;"></i>
                            <i class="bi bi-star-fill" style="color: gold;"></i>
                          </div>
                          <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#DetailModal">
                            Detail
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-3">
                    <div class="card text-center">
                      <div class="row d-flex mb-4">
                        <img src="../pengunjung/assets/img/b_redvel.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <p class=" card-title text-center fs-5">Flower Red Velvet</p>
                          <div class="price">Rp. 50.000</div>
                          <div class="stars">
                            <i class="bi bi-star-fill" style="color: gold"></i>
                            <i class="bi bi-star-fill" style="color: gold;"></i>
                            <i class="bi bi-star-fill" style="color: gold"></i>
                            <i class="bi bi-star-fill" style="color: gold;"></i>
                            <i class="bi bi-star-fill" style="color: gold;"></i>
                          </div>
                          <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#DetailModal2">
                            Detail
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-3">
                    <div class="card text-center">
                      <div class="row d-flex mb-4">
                        <img src="../pengunjung/assets/img/iklan matcha.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h3 class="card-title text-center fs-5">Matcha Gulung</h3>
                          <div class="price">Rp. 30.000</div>
                          <div class="stars">
                            <i class="bi bi-star-fill" style="color: gold"></i>
                            <i class="bi bi-star-fill" style="color: gold;"></i>
                            <i class="bi bi-star-fill" style="color: gold"></i>
                            <i class="bi bi-star-fill" style="color: gold;"></i>
                            <i class="bi bi-star-fill" style="color: gold;"></i>
                          </div>
                          <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#DetailModal3">
                            Detail
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-3">
                    <div class="card text-center">
                      <div class="row d-flex mb-4">
                        <img src="../pengunjung/assets/img/donatnew.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h3 class="card-title text-center fs-5">Happier Donut Mood</h3>
                          <div class="price">Rp. 50.000</div>
                          <div class="stars">
                            <i class="bi bi-star-fill" style="color: gold"></i>
                            <i class="bi bi-star-fill" style="color: gold;"></i>
                            <i class="bi bi-star-fill" style="color: gold"></i>
                            <i class="bi bi-star-fill" style="color: gold;"></i>
                            <i class="bi bi-star-fill" style="color: gold;"></i>
                          </div>
                          <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#DetailModal4">
                            Detail
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
          </section>
          <!-- Product end -->

          <!-- Modal Detail Sekarang 1-->
          <div class="modal fade mt-5" id="DetailModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-fullscreen-md-down">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Detail Deskripsi</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form>
                    <div class="row">
                      <div class="col-lg-4">
                        <div class="form-floating mb-3">
                          <input disabled type="text" class="form-control" id="floatingInput" value="Resh Mellow Cake">
                          <label for="floatingInput">Nama Menu</label>
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="form-floating mb-3">
                          <input disabled type="text" class="form-control" id="floatingInput" value="IDR 20.000 Per potongan">
                          <label for="floatingInput">Harga</label>
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="form-floating mb-3">
                          <input disabled type="number" class="form-control" id="floatingInput" value="5">
                          <label for="floatingInput">Stok</label>
                          <div class="invalid-feedback">
                            Masukkan Stok
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="form-floating mb-3">
                          <input disabled type="text" class="form-control" id="floatingInput" value="Cake dengan rasa red velvet dan campiran marshmellow, dilapisi dengan toping cream dan parutan coklat">
                          <label for="floatingPassword">Keterangan</label>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="form-floating mb-3">
                          <input disabled type="text" class="form-control" id="floatingInput" value="Disajikan dalam kotak, cocok untuk dinikmati bersama keluarga atau teman.">
                          <label for="floatingPassword"> Cara Penyajian</label>
                        </div>
                      </div>
                    </div>

                    <div class="modal-footer">
                      <button type="button" class="btn btn-success" data-bs-dismiss="modal">Close</button>

                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!-- Akhir Modal Detail Sekarang 1-->

          <!-- Modal Detail Sekarang 2-->
          <div class="modal fade mt-5" id="DetailModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-fullscreen-md-down">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Detail Deskripsi</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form>
                    <div class="row">
                      <div class="col-lg-4">
                        <div class="form-floating mb-3">
                          <input disabled type="text" class="form-control" id="floatingInput" value="Flower Red Velvet">
                          <label for="floatingInput">Nama Menu</label>
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="form-floating mb-3">
                          <input disabled type="text" class="form-control" id="floatingInput" value="IDR 50.000 ">
                          <label for="floatingInput">Harga</label>
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="form-floating mb-3">
                          <input disabled type="number" class="form-control" id="floatingInput" value="3">
                          <label for="floatingInput">Stok</label>
                          <div class="invalid-feedback">
                            Masukkan Stok
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="form-floating mb-3">
                          <input disabled type="text" class="form-control" id="floatingInput" value="Bolu dengan varian rasa red velvet">
                          <label for="floatingPassword">Keterangan</label>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="form-floating mb-3">
                          <input disabled type="text" class="form-control" id="floatingInput" value="Dapat dipotong sesuai request dan disajikan dalam kotak, cocok untuk gift">
                          <label for="floatingPassword"> Cara Penyajian</label>
                        </div>
                      </div>
                    </div>

                    <div class="modal-footer">
                      <button type="button" class="btn btn-success" data-bs-dismiss="modal">Close</button>

                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!-- Akhir Modal Detail Sekarang 2-->

          <!-- Modal Detail Sekarang 3-->
          <div class="modal fade mt-5" id="DetailModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-fullscreen-md-down">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Detail Deskripsi</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form>
                    <div class="row">
                      <div class="col-lg-4">
                        <div class="form-floating mb-3">
                          <input disabled type="text" class="form-control" id="floatingInput" value="Matcha Gulung">
                          <label for="floatingInput">Nama Menu</label>
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="form-floating mb-3">
                          <input disabled type="text" class="form-control" id="floatingInput" value="IDR 30.000 per gulungan">
                          <label for="floatingInput">Harga</label>
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="form-floating mb-3">
                          <input disabled type="number" class="form-control" id="floatingInput" value="5">
                          <label for="floatingInput">Stok</label>
                          <div class="invalid-feedback">
                            Masukkan Stok
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="form-floating mb-3">
                          <input disabled type="text" class="form-control" id="floatingInput" value="Dengan isian keju dan dan cream yang melapisi">
                          <label for="floatingPassword">Keterangan</label>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="form-floating mb-3">
                          <input disabled type="text" class="form-control" id="floatingInput" value="Disajikan didalam box mini, cocok untuk dinikmati bersama keluarga atau teman">
                          <label for="floatingPassword"> Cara Penyajian</label>
                        </div>
                      </div>
                    </div>

                    <div class="modal-footer">
                      <button type="button" class="btn btn-success" data-bs-dismiss="modal">Close</button>

                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!-- Akhir Modal Detail Sekarang 3-->

          <!-- Modal Detail Sekarang 4-->
          <div class="modal fade mt-5" id="DetailModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-fullscreen-md-down">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Detail Deskripsi</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form>
                    <div class="row">
                      <div class="col-lg-4">
                        <div class="form-floating mb-3">
                          <input disabled type="text" class="form-control" id="floatingInput" value="Happier Donut Mood">
                          <label for="floatingInput">Nama Menu</label>
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="form-floating mb-3">
                          <input disabled type="text" class="form-control" id="floatingInput" value="IDR 15.000 Per potongan">
                          <label for="floatingInput">Harga</label>
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="form-floating mb-3">
                          <input disabled type="number" class="form-control" id="floatingInput" value="5">
                          <label for="floatingInput">Stok</label>
                          <div class="invalid-feedback">
                            Masukkan Stok
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="form-floating mb-3">
                          <input disabled type="text" class="form-control" id="floatingInput" value="Donat dengan beragam pilihan rasa, termasuk stroberi, cokelat, dan vanilla, dihias dengan warna-warni glazur dan taburan ekspresi">
                          <label for="floatingPassword">Keterangan</label>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="form-floating mb-3">
                          <input disabled type="text" class="form-control" id="floatingInput" value="Donat disajikan dalam kotak berisi berbagai varian, cocok untuk dinikmati bersama keluarga atau teman.">
                          <label for="floatingPassword"> Cara Penyajian</label>
                        </div>
                      </div>
                    </div>

                    <div class="modal-footer">
                      <button type="button" class="btn btn-success" data-bs-dismiss="modal">Close</button>

                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!-- Akhir Modal Detail Sekarang 4-->

          <!-- Tentang kami -->
          <hr>
          <div class="container-lg " style="margin-top: 80px;">
            <p id="tentang" class="mb-5 mt-lg-5 fw-bolder fs-2" style="text-align: center;">Tentang Kami</p>
            <div class="row">
              <div class="col-md-6 mt-5">
                <img src="../pengunjung/assets/img/tentang.jpg" alt="" class="img-fluid">
              </div>
              <div class="col-md-6">
              <!-- PERIKSA SEARCH -->
                <div class="content"> 
                  <p class="text-uppercase fs-3 text-center text-lg-left">Selamat Datang Di FavoRoti</p>
                  <p class="fst-normal text-center text-lg-left">Di sini Anda akan mendapatkan layanan yang luar biasa dan rasa yang menggugah selera.</p>
                  
                  <p class="fw-bold text-center text-lg-left">Toko roti FavoRoti</p>
                  <p class="lh-base text-lg-left" style="text-align: justify;">Kita umumnya akan mengabaikan bahwa kepuasan tidak berasal dari sesuatu
                    yang belum kita miliki
                    melainkan dari memahami dan mengakui apa yang kita lakukan. Kepuasan adalah persekutuan. Kegembiraan
                    adalah pesta. Ini terkait dengan memperoleh kebahagiaan dan memuji kehidupan.

                    Menyebarkan kebahagiaan dan memuji setiap potret kehidupan adalah mantra di 'FavoRoti'. kami
                    memulai usahanya dengan Cokelat Buatan Tangan dan secara bertahap beralih ke Kue, Kue
                    Kering, dan beberapa jenis kue dan roti. Semuanya dimulai dengan menerima sedikit permintaan
                    pengumpulan.

                    Di "FavoRoti" ini kami menyediakan berbagai jenis roti dan kue kering untuk berbagai keperluan.
                    Mulai dari kue untuk acara pernikahan, ulang tahun dan hari-hari besar perayaan lainnya.
                  </p>
                </div>
              </div>
            </div>
            <!-- Tentang kami akhir -->

            <!-- Contact -->
            <hr>
            <section id="kontak">
              <div class="container-lg">
                <div class="row">
                  <div class="d-flex" style="margin-top: 80px;">
                    <p id="kategori" class="mb-3 mt-lg-3 fw-bolder fs-2" style="text-align:center;">Kontak</p>
                  </div>
                  <div class="col-md-4">
                    <div class="card" style="background-color: lightgrey;">
                      <div class="card-body text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-phone" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                          <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2">
                          </path>
                        </svg>
                        <h5 class="card-title">Telepon</h5>
                        <p class="card-text">+62 822-4565-4356</p>
                        <p class="card-text">+62 822-4565-4356</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="card" style="background-color: lightgray">
                      <div class="card-body text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                          <path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z"></path>
                          <path d="M3 7l9 6l9 -6"></path>
                        </svg>
                        <h5 class="card-title">Email</h5>
                        <p class="card-text">bakeryshop@gmail.com</p>
                        <p class="card-text">cakeshop@gmail.com</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="card" style="background-color: lightgray;">
                      <div class="card-body text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-pins" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                          <path d="M10.828 9.828a4 4 0 1 0 -5.656 0l2.828 2.829l2.828 -2.829z"></path>
                          <path d="M8 7l0 .01"></path>
                          <path d="M18.828 17.828a4 4 0 1 0 -5.656 0l2.828 2.829l2.828 -2.829z"></path>
                          <path d="M16 15l0 .01"></path>
                        </svg>
                        <h5 class="card-title">Alamat</h5>
                        <p class="card-text">Aceh Utara, Keude Bungkaih</p>
                        <p class="card-text">Banda Aceh, Aceh - 24355</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12 mt-5">
                  <div class="card">
                    <iframe class="rounded" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127154.35869779903!2d97.0250609434043!3d5.1720556825114175!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x304778e967f2b613%3A0x3039d80b220cc20!2sLhokseumawe%2C%20Kota%20Lhokseumawe%2C%20Aceh!5e0!3m2!1sid!2sid!4v1688712275675!5m2!1sid!2sid" height="" style="border:0; width: 100%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                  </div>
                </div>
              </div>
              <!-- Contact end -->
          </div>
        </div>

        <!-- Footer awal -->
        <footer id="footer">
          <div class="footer-logo text-center mt-4">
            <img src="../pengunjung/assets/img/logo toko.jpg" width="10%" style="border-radius: 50%;">
          </div>
          <div class="social-links text-center mt-3">
            <i class="bi bi-instagram"></i>
            <i class="bi bi-github"></i>
            <i class="bi bi-linkedin"></i>
            <i class="bi bi-facebook"></i>
          </div>
          <div class="Favoroti text-center bg-transparent text-black text center pb-3">
            &copy; Favoroti <strong>Bakery Shop</strong>. All rights reserved
            <div class="text-center">
              <p>2023-2024 <i class="bi bi-search-heart "></i> Workshop Web Lanjut</p>
            </div>
          </div>
      </div>
      </footer>
      <!-- Footer Akhir -->

      <!-- AOS Animate -->
      <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

      <script>
        AOS.init();
      </script>

</body>

</html>