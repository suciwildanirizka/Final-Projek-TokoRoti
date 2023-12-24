<?php
    include "proses/connect.php";
    $query = mysqli_query($conn, "SELECT * FROM tb_user WHERE username='$_SESSION[username_favoroti]'");
    $records = mysqli_fetch_array($query);
?>

<!-- Navbar star -->
<nav class="navbar navbar-expand navbar-dark sticky-top custom-header" style="background-color: #df531c">
  <div class="container-lg">
    <a class="navbar-brand" href="."><i class="bi bi-shop-window"></i> FavoRoti</a>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?php echo $hasil['username']; ?>
          </a>
          <ul class="dropdown-menu dropdown-menu-end mt-2">
            <li><a class="dropdown-item" href="#"><i class="bi bi-person-square"></i> Profile</a></li>
            <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#ModalUbahPassword">  <i class="bi bi-key"></i> Ubah Password</a></li>
            <li><a class="dropdown-item" href="logout"><i class="bi bi-box-arrow-left"></i> Logout</a></li>
            <li><a class="dropdown-item" href="../pengunjung/index.php"><i class="bi bi-person-down"></i> Halaman pengunjung</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- Navbar end -->

<!-- Modal ubah password -->
<div class="modal fade" id="ModalUbahPassword" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-fullscreen-md-down">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Ubah Password</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form class="needs-validation" novalidate action="proses/proses_ubah_password.php" method="POST">
          <div class="row">
            <div class="col-lg-6">
              <div class="form-floating mb-3">
                <input disabled type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="username" required value="<?php echo $_SESSION['username_favoroti'] ?>">
                <label for="floatingInput">Username</label>
                <div class="invalid-feedback">
                  Masukkan Username
                </div>
              </div>
            </div>
            <div class="col-lg-6">
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="floatingPassword" name="passwordlama" required>
                <label for="floatingInput">Password Lama</label>
                <div class="invalid-feedback">
                  Masukkan Password Lama
                </div>
              </div>
            </div>
          </div>
        
          <div class="row">
            <div class="col-lg-6">
              <div class="form-floating mb-3">
                <input type="password" class="form-control" id="floatingInput" name="passwordbaru" required>
                <label for="floatingInput">Password Baru</label>
                <div class="invalid-feedback">
                  Masukkan Password baru.
                </div>
              </div>
            </div>
            <div class="col-lg-6">
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="floatingPassword" name="repasswordbaru" required>
                <label for="floatingInput">Ulangi Password baru</label>
                <div class="invalid-feedback">
                  Masukkan Ulangi Password baru
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" name="ubah_password_validate" value="12345">Save changes</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- End Modal Ubah Password -->