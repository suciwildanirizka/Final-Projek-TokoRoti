<!-- <div class="col-lg-9 mt-2">  -->
    <!-- <div class="card">
        <div class="card-header">
            Order
        </div>
        <div class="card-body">
            <h5 class="card-title">Ini adalah bagian Order</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content. Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae molestiae quas, quae alias minus eveniet maiores voluptatem laudantium eos, ex corrupti error blanditiis ducimus reprehenderit neque repellat maxime tenetur dolores!</p>
            <a href="#" class="btn btn-white link-light" style="background-color: #df531c;">Go somewhere</a>
        </div>
    </div>
</div> -->

<?php
include "proses/connect.php";
date_default_timezone_set('Asia/Jakarta');
$query = mysqli_query ($conn, "SELECT tb_order.*,tb_bayar.*, SUM(harga*jumlah) AS harganya FROM tb_order
    LEFT JOIN tb_list_order ON tb_list_order.kode_order = tb_order.id_order
    LEFT JOIN tb_daftar_menu ON tb_daftar_menu.id = tb_list_order.menu
    LEFT JOIN tb_bayar ON tb_bayar.id_bayar = tb_order.id_order
    GROUP BY id_order ORDER BY waktu_order DESC");

while ($record = mysqli_fetch_array($query)) {
    $result[] = $record;
}

//$select_kat_menu = mysqli_query($conn, "SELECT id_kat_menu,kategori_menu FROM tb_kategori_menu");
?>
<div class="col-lg-9 mt-2">
    <div class="card">
        <div class="card-header">
            Halaman Order
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col d-flex justify-content-end">
                <button class="btn btn-white link-light" style="background-color: #df531c;"  data-bs-toggle="modal" data-bs-target="#ModalTambahOrder"> Tambah Order </button>
                </div>
            </div>

            <!-- Modal Tambah Order Baru-->
            <div class="modal fade" id="ModalTambahOrder" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-fullscreen-md-down">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Order Roti dan Kue</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <div class="modal-body">
                            <form class="needs-validation" novalidate action="proses/proses_input_order.php" 
                            method="POST">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="uploadfoto" 
                                            name="kode order" value="<?php echo date('ymdHi').rand(100,999) ?>" readonly>
                                            <label for="uploadfoto">Kode Order</label>
                                            <div class="invalid-feedback">
                                                Masukkan Kode Order
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="pelanggan" 
                                            placeholder="Nama Pelanggan" name="pelanggan" required>
                                            <label for="pelanggan">Nama Pelanggan</label>
                                            <div class="invalid-feedback">
                                                Masukkan Nama Pelanggan
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" 
                                    data-bs-dismiss="modal">Close</button>

                                    <button type="submit" class="btn btn-white link-light" style="background-color: #df531c;" name="input_order_validate" 
                                    value="12345">Buat Order</button>
                                </div>
                            </form>
                        </div>  
                    </div>
                </div>
            </div>
            <!-- Akhir Modal Tambah Order Baru-->

            <?php
            if (empty($result)) {
                echo "Data Menu Makanan atau Minuman tidak ada";
            } else {
            foreach ($result as $row) {
            ?>

                <!-- Modal Edit-->
                <div class="modal fade" id="ModalEdit<?php echo $row['id_order'] ?>" tabindex="-1"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Menu Roti dan Kue</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <div class="modal-body">
                        <form class="needs-validation" novalidate action="proses/proses_edit_order.php" 
                            method="POST">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="form-floating mb-3">
                                            <input readonly type="text" class="form-control" id="uploadfoto" 
                                            name="kode order" value="<?php echo $row['id_order'] ?>" readonly>
                                            <label for="uploadfoto">Kode Order</label>
                                            <div class="invalid-feedback">
                                                Masukkan Kode Order
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="pelanggan" 
                                            placeholder="Nama Pelanggan" name="pelanggan" required
                                            value="<?php echo $row['pelanggan'] ?>">
                                            <label for="pelanggan">Nama Pelanggan</label>
                                            <div class="invalid-feedback">
                                                Masukkan Nama Pelanggan
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" 
                                    data-bs-dismiss="modal">Close</button>

                                    <button type="submit" class="btn btn-success"  name="edit_order_validate" 
                                    value="12345">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
                <!-- Akhir Modal Edit-->

                <!-- Modal Delete-->
                <div class="modal fade" id="ModalDelete<?php echo $row['id_order'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-md modal-fullscreen-md-down">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Data Menu</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form class="needs-validation" novalidate action="proses/proses_delete_order.php" method="POST">
                                    <input type="hidden" value="<?php echo $row['id_order'] ?>" name="kode_order">
                                    
                                    <div class="col-lg-12">
                                        Apakah anda ingin menghapus order atas nama <b><?php echo $row['pelanggan'] ?>
                                        </b> dengan kode order <b><?php echo $row['id_order'] ?></b>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-danger" name="delete_order_validate" value="12345">Hapus</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Akhir Modal Delete-->

            <?php
                }
            ?>

                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr class="text-nowrap">
                                <th scope="col">No</th>
                                <th scope="col">Kode Order</th>
                                <th scope="col">Pelanggan</th>
                                <th scope="col">Total Harga</th>
                                <th scope="col">Waktu Order</th>
                                <th scope="col">Status</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($result as $row) {
                            ?>
                                <tr>
                                    <th scope="row">
                                        <?php echo $no++ ?>
                                    </th>
                                    
                                    <td>
                                        <?php echo $row['id_order'] ?>
                                    </td>

                                    <td>
                                        <?php echo $row['pelanggan'] ?>
                                    </td>
                                    

                                    <td>
                                        <?php echo number_format((int)$row['harganya'],0,',','.')?>
                                    </td>
                                    <td>
                                        <?php echo $row['waktu_order'] ?>
                                    </td>

                                    <td>
                                        <?php echo (!empty($row['id_bayar'])) ? "<span class='badge text-bg-success'>dibayar</span>" : "" ; ?>
                                    </td>

                                    
                                    <td>
                                        <div class="d-flex">
                                        <!-- button view-->
                                        <a class="btn btn-info btn-sm me-1" href="./?x=orderitem&order=<?php echo $row['id_order']."&pelanggan=".$row['pelanggan'] ?>"><i class="bi bi-eye"></i></a>
                                        <!-- button edit-->
                                        <button class="<?php echo (!empty($row['id_bayar'])) ? "btn btn-secondary
                                        btn-sm me-1 disabled" : "btn btn-warning btn-sm me-1" ; ?>" 
                                        data-bs-toggle="modal" data-bs-target="#ModalEdit<?php echo $row['id_order'] ?>">
                                        <i class="bi bi-pencil-square"></i></button>
                                        <!-- button delete-->
                                        <button class="<?php echo (!empty($row['id_bayar'])) ? "btn btn-secondary 
                                        btn-sm me-1 disabled" : "btn btn-danger btn-sm me-1" ; ?>" 
                                        data-bs-toggle="modal" data-bs-target="#ModalDelete<?php echo $row['id_order'] ?>">
                                        <i class="bi bi-trash"></i>
                                        </button>

                                        </div>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>

<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (() => {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        const forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
        })
    })()
</script>