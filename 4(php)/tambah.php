<?php
include('config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>DW Froz | Frozen Food</title>
</head>
<body>
    
<div class="container my-5">
    <h2>DW Froz</h2>


</div>
<div class="container">
<h5>Tambah Data Produk</h5>
<?php
if(isset($_POST['submit'])) {
    $id_distributor = $_POST['id_distributor'];
    $nama = $_POST['nama'];
    $photos = $_POST['photos'];
    $ket = $_POST['ket'];
    $nutrisi = $_POST['nutrisi'];
    $serving_size = $_POST['serving_size'];

    $cek = mysqli_query($conn, "SELECT * FROM product WHERE nama='$nama'") or die (mysqli_error($conn));

    if (mysqli_num_rows($cek) == 0 ){
        $sql = mysqli_query($conn, "INSERT INTO product (id_distributor, nama, photos, ket, nutrisi, serving_size)
                VALUES('$id_distributor', '$nama','$photos','$ket','$nutrisi','$serving_size')") or die (mysqli_error($conn));
        if ($sql){
            echo '<script> alert("Berhasil menambahkan data"); document.location="tambah.php"</script>';
        } else {
            echo '<div class="alert alert-warning">Gagal Menambahkan data</div>';
        }
    } else {
        echo '<div class="alert alert-warning">Nama produk sudah terdaftar</div>';
    }
}
?>

    <form action="tambah.php" method="post">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">ID Distributor</label>
            <div class="col-sm-10">
                <input type="text" name="id_distributor" class="from-control" size="10" required>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nama Produk</label>
            <div class="col-sm-10">
                <input type="text" name="nama" class="from-control" size="10" required>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nutrisi</label>
            <div class="col-sm-10">
                <input type="text" name="nutrisi" class="from-control" size="10" required>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Serving Size</label>
            <div class="col-sm-10">
                <input type="text" name="serving_size" class="from-control" size="10" required>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Keterangan</label>
            <div class="col-sm-10">
                <input type="text" name="ket" class="from-control" size="10" required>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Foto</label>
            <div class="col-sm-10">
                <input type="text" name="photos" class="from-control" size="10" required>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">SUBMIT</label>
            <div class="col-sm-10">
                <input type="submit" name="submit" class="btn btn-primary" value="SIMPAN">
                <a href="index.php" class="btn btn-primary">KEMBALI</a>
            </div>
        </div>
    </form>
</div>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
</body>
</html>