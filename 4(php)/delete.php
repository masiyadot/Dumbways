<?php 
include("config.php");

if (isset($_GET["id"])){
    $id = $_GET["id"];

    $cek = mysqli_query($conn, "SELECT * FROM product WHERE id='$id'") or die(mysqli_error($conn));
    if(mysqli_num_rows($cek) > 0 ){
        $del = mysqli_query($conn, "DELETE FROM product WHERE id='$id'") or die(mysqli_error($conn));
        if($del){
            echo '<script>alert("Berhasil menghapus data."); document.location="index.php";</script>';
        } else {
            echo '<script>alert("Gagal menghapus data."); document.location="index.php";</script>';
        }
    }else {
        echo '<script>alert("ID produk Tidak ditemukan"); document.location="index.php";</script>';
    }
} else {
    echo '<script>alert("ID produk Tidak ditemukan"); document.location="index.php";</script>';
}

?>