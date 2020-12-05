<?php
$conn = mysqli_connect("localhost", "root","","frozen_food");
if (mysqli_connect_errno()){
    echo "Koneksi Gagal:". mysqli_connect_error();
}
?>