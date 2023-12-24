<?php
    // $conn = mysqli_connect("tiduapnl.com","u901156130_FavoRoti","SuciProject2A","u901156130_FavoRoti");

    $conn = mysqli_connect("localhost","root","","db_favoroti");
    if(!$conn){
        echo "Gagal koneksi";
    }
?>