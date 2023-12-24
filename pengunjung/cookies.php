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

  <!--icon-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

  <!-- AOS Animate -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>

  <!-- Navbar start -->
  <nav class="navbar navbar-expand-lg navbar-light mb-md-2 sticky-top" style="background-color: #df531c">
    <div class="container rounded">
      <a class="navbar-brand"> FavoRoti</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mx-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="index.php#tentang">Tentang Kami</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php#kategori">Kategori</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php#produk">Produk</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="index.php#kontak">Kontak</a>
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
  <div class="container">
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

      <!-- category cookies -->
      <div class="container-fluid py-3">
        <div class="col-3 mt-5">
        </div>
      </div>
      <h4 class="text-center mb-4"> Aneka Cookies</h4>
      <a href="index.php" class="btn btn-info mb-3"> <i class="bi bi-arrow-left"></i>
      </a>

      <div class="row">
        <div class="col-md-3 mb-4">
          <div class="card">
            <img src="../pengunjung/assets/img/kelapa kk.jpg" class="card-img-top" alt="">
            <div class="card-body">
              <h5 class="card-title text-center text-warning ">
                <strong>Coconut cip</strong>
              </h5>
              <h4 class="text-center text-dark mb-3">Rp 18.000</h4>
              <button type="button" class="btn btn-outline-warning w-100" data-bs-toggle="modal" data-bs-target="#DetailModal">
                Detail</button>
            </div>
          </div>
        </div>

        <div class="col-md-3 mb-4">
          <div class="card">
            <img src="../pengunjung/assets/img/k_matcha.jpg" class="card-img-top" alt="">
            <div class="card-body">
              <h5 class="card-title text-center text-warning">
                <strong>Matcha Crunch</strong>
              </h5>
              <h4 class="text-center text-dark mb-3">Rp 25.000</h4>
              <button type="button" class="btn btn-outline-warning w-100" data-bs-toggle="modal" data-bs-target="#DetailModal2">
                Detail</button>
            </div>
          </div>
        </div>

        <div class="col-md-3 mb-4">
          <div class="card">
            <img src="../pengunjung/assets/img/k_cereal.jpg" class="card-img-top" alt="">
            <div class="card-body">
              <h5 class="card-title text-center text-warning ">
                <strong>Cereal Buah</strong>
              </h5>
              <h4 class="text-center text-dark mb-3">Rp 10.000</h4>
              <button type="button" class="btn btn-outline-warning w-100" data-bs-toggle="modal" data-bs-target="#DetailModal3">
                Detail</button>
            </div>
          </div>
        </div>

        <div class="col-md-3 mb-4">
          <div class="card">
            <img src="../pengunjung/assets/img/k_Thumbprint Raspberry.jpg" class="card-img-top" alt="">
            <div class="card-body">
              <h5 class="card-title text-center text-warning ">
                <strong>Thumbprint Raspberry</strong>
              </h5>
              <h4 class="text-center text-dark mb-3">Rp 25.000</h4>
              <button type="button" class="btn btn-outline-warning w-100" data-bs-toggle="modal" data-bs-target="#DetailModal4">
                Detail</button>
            </div>
          </div>
        </div>

        <div class="col-md-3 mb-4">
          <div class="card">
            <img src="../pengunjung/assets/img/k_gula.jpg" class="card-img-top" alt="">
            <div class="card-body">
              <h5 class="card-title text-center text-warning ">
                <strong>Gula Kelapa</strong>
              </h5>
              <h4 class="text-center text-dark mb-3">Rp 27.000</h4>
              <button type="button" class="btn btn-outline-warning w-100" data-bs-toggle="modal" data-bs-target="#DetailModal5">
                Detail</button>
            </div>
          </div>
        </div>

        <div class="col-md-3 mb-4">
          <div class="card">
            <img src="../pengunjung/assets/img/K_Lemon Zest.jpg" class="card-img-top" alt="">
            <div class="card-body">
              <h5 class="card-title text-center text-warning ">
                <strong>Lemon Zest</strong>
              </h5>
              <h4 class="text-center text-dark mb-3">Rp 21.000</h4>
              <button type="button" class="btn btn-outline-warning w-100" data-bs-toggle="modal" data-bs-target="#DetailModal6">
                Detail</button>
            </div>
          </div>
        </div>

        <div class="col-md-3 mb-4">
          <div class="card">
            <img src="../pengunjung/assets/img/k_chococip.jpg" class="card-img-top" alt="">
            <div class="card-body">
              <h5 class="card-title text-center text-warning ">
                <strong>Choco cip</strong>
              </h5>
              <h4 class="text-center text-dark mb-3">Rp 23.000</h4>
              <button type="button" class="btn btn-outline-warning w-100" data-bs-toggle="modal" data-bs-target="#DetailModal7">
                Detail</button>
            </div>
          </div>
        </div>

        <div class="col-md-3 mb-4">
          <div class="card">
            <img src="../pengunjung/assets/img/banana kk.jpg" class="card-img-top" alt="">
            <div class="card-body">
              <h5 class="card-title text-center text-warning ">
                <strong>Cho Pisang</strong>
              </h5>
              <h4 class="text-center text-dark mb-3">Rp 20.000</h4>
              <button type="button" class="btn btn-outline-warning w-100" data-bs-toggle="modal" data-bs-target="#DetailModal8">
                Detail</button>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
  </div>
  <!-- category end-->

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
                  <input disabled type="text" class="form-control" id="floatingInput" value="Coconut Cip">
                  <label for="floatingInput">Nama Menu</label>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-floating mb-3">
                  <input disabled type="text" class="form-control" id="floatingInput" value="IDR 18.000 Per Kg">
                  <label for="floatingInput">Harga</label>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-floating mb-3">
                  <input disabled type="number" class="form-control" id="floatingInput" value="6">
                  <label for="floatingInput">Stok</label>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="form-floating mb-3">
                  <input disabled type="text" class="form-control" id="floatingInput" value="Dengan varian rasa coklat yang renyah dan gurih">
                  <label for="floatingPassword">Keterangan</label>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="form-floating mb-3">
                  <input disabled type="text" class="form-control" id="floatingInput" value="Disajikan dalam bentuk kaleng dan dalam kemasan plastik">
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
                  <input disabled type="text" class="form-control" id="floatingInput" value="Matcha Crunch">
                  <label for="floatingInput">Nama Menu</label>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-floating mb-3">
                  <input disabled type="text" class="form-control" id="floatingInput" value="IDR 25.000 Per Kg">
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
                  <input disabled type="text" class="form-control" id="floatingInput" value="Dengan rasa matcha yang menggugah selera dan toping peanut almond">
                  <label for="floatingPassword">Keterangan</label>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="form-floating mb-3">
                  <input disabled type="text" class="form-control" id="floatingInput" value="Disajikan dalam bentuk kaleng dan dalam kemasan plastik">
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
                  <input disabled type="text" class="form-control" id="floatingInput" value="Cereal Buah">
                  <label for="floatingInput">Nama Menu</label>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-floating mb-3">
                  <input disabled type="text" class="form-control" id="floatingInput" value="IDR 80.000 Per Kg">
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
                  <input disabled type="text" class="form-control" id="floatingInput" value="Dibuat dengan kacang kecang mente yang digiling">
                  <label for="floatingPassword">Keterangan</label>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="form-floating mb-3">
                  <input disabled type="text" class="form-control" id="floatingInput" value="Disajikan dalam bentuk kaleng dan dalam kemasan plastik">
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
                  <input disabled type="text" class="form-control" id="floatingInput" value="Thumprint Raspberry">
                  <label for="floatingInput">Nama Menu</label>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-floating mb-3">
                  <input disabled type="text" class="form-control" id="floatingInput" value="IDR 25.000 Per kg">
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
                  <input disabled type="text" class="form-control" id="floatingInput" value="Kue kering dengan isian selai rasberry">
                  <label for="floatingPassword">Keterangan</label>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="form-floating mb-3">
                  <input disabled type="text" class="form-control" id="floatingInput" value="Disajikan dalam bentuk kaleng dan dalam kemasan plastik">
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

  <!-- Modal Detail Sekarang 5-->
  <div class="modal fade mt-5" id="DetailModal5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                  <input disabled type="text" class="form-control" id="floatingInput" value="Gula Kelapa">
                  <label for="floatingInput">Nama Menu</label>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-floating mb-3">
                  <input disabled type="text" class="form-control" id="floatingInput" value="IDR 27.000 Per toples">
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
                  <input disabled type="text" class="form-control" id="floatingInput" value="Kue kering dengan isian vanilla dan lapisan gula pasir dan parutan kelapa">
                  <label for="floatingPassword">Keterangan</label>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="form-floating mb-3">
                  <input disabled type="text" class="form-control" id="floatingInput" value="Disajikan dalam bentuk kaleng (toples) dengan ukuran 800ml">
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
  <!-- Akhir Modal Detail Sekarang 5-->

  <!-- Modal Detail Sekarang 6-->
  <div class="modal fade mt-5" id="DetailModal6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                  <input disabled type="text" class="form-control" id="floatingInput" value="Lemon Zest">
                  <label for="floatingInput">Nama Menu</label>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-floating mb-3">
                  <input disabled type="text" class="form-control" id="floatingInput" value="IDR 21.000 Per Kaleng">
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
                  <input disabled type="text" class="form-control" id="floatingInput" value="Memiliki rasa yang manis, renyah dan gurih">
                  <label for="floatingPassword">Keterangan</label>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="form-floating mb-3">
                  <input disabled type="text" class="form-control" id="floatingInput" value="Disajikan dalam bentuk kaleng">
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
  <!-- Akhir Modal Detail Sekarang 6-->

  <!-- Modal Detail Sekarang 7-->
  <div class="modal fade mt-5" id="DetailModal7" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                  <input disabled type="text" class="form-control" id="floatingInput" value="Choco Cip">
                  <label for="floatingInput">Nama Menu</label>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-floating mb-3">
                  <input disabled type="text" class="form-control" id="floatingInput" value="IDR 23.000 Per Kg">
                  <label for="floatingInput">Harga</label>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-floating mb-3">
                  <input disabled type="number" class="form-control" id="floatingInput" value="8">
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
                  <input disabled type="text" class="form-control" id="floatingInput" value="Kue kering dengan toping coklat dan dicetak dengan tekstur renyah">
                  <label for="floatingPassword">Keterangan</label>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="form-floating mb-3">
                  <input disabled type="text" class="form-control" id="floatingInput" value="Disajikan dalam bentuk kaleng dan dalam kemasan plastik">
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
  <!-- Akhir Modal Detail Sekarang 7-->

  <!-- Modal Detail Sekarang 8-->
  <div class="modal fade mt-5" id="DetailModal8" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                  <input disabled type="text" class="form-control" id="floatingInput" value="Cho Pisang">
                  <label for="floatingInput">Nama Menu</label>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-floating mb-3">
                  <input disabled type="text" class="form-control" id="floatingInput" value="IDR 20.000 Per Kg">
                  <label for="floatingInput">Harga</label>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-floating mb-3">
                  <input disabled type="number" class="form-control" id="floatingInput" value="7">
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
                  <input disabled type="text" class="form-control" id="floatingInput" value="Kue kering dengan rasa pisang dan dicetak dengan berbagai bentuk">
                  <label for="floatingPassword">Keterangan</label>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="form-floating mb-3">
                  <input disabled type="text" class="form-control" id="floatingInput" value="Disajikan dalam bentuk kaleng dan dalam kemasan plastik">
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
  <!-- Akhir Modal Detail Sekarang 8-->

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
      &copy; Favoroti <strong><span>Bakery Shop</span></strong>. All rights reserved
      <div class="text-center">
        <p>2023-2024 <i class="bi bi-search-heart "></i> Workshop Web Lanjut</p>
      </div>
    </div>
    </div>
  </footer>
  <!-- Footer Akhir -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

  <!-- AOS Animate -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <script>
    AOS.init();
  </script>
</body>

</html>