<!-- <div class="col-lg-9 mt-2">
    <div class="card">
        <div class="card-header">
            Report
        </div>
        <div class="card-body">
            <h5 class="card-title">Ini adalah bagian Report</h5>
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
    JOIN tb_bayar ON tb_bayar.id_bayar = tb_order.id_order
    GROUP BY id_order ORDER BY waktu_order ASC");

while ($record = mysqli_fetch_array($query)) {
    $result[] = $record;
}

//$select_kat_menu = mysqli_query($conn, "SELECT id_kat_menu,kategori_menu FROM tb_kategori_menu");
?>
<div class="col-lg-9 mt-2">
    <div class="card">
        <div class="card-header">
            Halaman Report
        </div>
        <div class="card-body">

            <?php
            if (empty($result)) {
                echo "Data Menu Makanan atau Minuman tidak ada";
            } else {
            foreach ($result as $row) {
            ?>

            <?php
                }
            ?>

                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr class="text-nowrap">
                                <th scope="col">No</th>
                                <th scope="col">Kode Order</th>
                                <th scope="col">Waktu Order</th>
                                <th scope="col">Waktu Bayar</th>
                                <th scope="col">Pelanggan</th>
                                <th scope="col">Total Harga</th>
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
                                        <?php echo $row['waktu_order'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row['waktu_bayar'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row['pelanggan'] ?>
                                    </td>
                                    <td>
                                        <?php echo number_format((int)$row['harganya'],0,',','.')?>
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                        <!-- button view-->
                                        <a class="btn btn-info btn-sm me-1" href="./?x=viewitem&order=<?php echo $row['id_order'].
                                        "&pelanggan=".$row['pelanggan'] ?>"><i class="bi bi-eye"></i></a>
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
