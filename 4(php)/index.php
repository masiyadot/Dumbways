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
    <style>
        .text-dist {
            color : grey;
        }
        .btn-primary-1 {
            padding : 0.375rem 6.7rem !important;
        }
        .btn-primary {
            padding : 0.375rem 3rem !important;
        }
    </style>
</head>
<body>

<div class="container my-5">
    <div class="row">
        <div class="col-md-3">
            <div class=" col">
                <h2>DW Froz</h2>
            </div>
        </div>
        <div class="col-md-auto float-right">
            <div class=" col">
                <a href="edit.php"><button type="button" class="btn btn-primary mt-2 mb-5 float-rig">Edit</button></a>
            </div>
        </div>
        <div class="col-md-auto float-right">
            <div class="col">
                <a href="tambah.php"><button type="button" class="btn btn-primary mt-2 mb-5">Tambah</button></a>
            </div>
        </div>
    </div>
</div>

<div class="container my-5 justify-content-start">
    <div class="row">
<?php
    $sql = mysqli_query($conn, "SELECT * FROM product ORDER BY id") or die (mysqli_error($conn));
    if ( mysqli_num_rows($sql) > 0){
        while ($data = mysqli_fetch_assoc($sql)) {
            echo 
            '
                    <div class="col-md-3">
                        <div class="card">
                            <div class="col mt-2 text-center">
                                <img class="img-fluid mt-5" src="assets/'.$data['photos'].'" width = "200">
                            </div>
                            <div class="col-lg-auto mt-5">
                                <p class ="font-weight-bolder">'.$data['nama'].'</p>
                            </div>
                            ';
    $sqld = mysqli_query($conn, "SELECT * FROM distributor ORDER BY id") or die (mysqli_error($conn));
    if ( mysqli_num_rows($sqld) > 0 ){
        $data = mysqli_fetch_assoc($sqld);
            echo '
                            <div class="col text-dist mt-1">
                            <p>'.$data['nama'].'<p>
                            </div>
                        </div>
                    <button type="button" class="btn btn-primary-1 mt-2 mb-5">Detail</button>
                </div>
                ';
            }  
            
        }
    }                            
                                               
?>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
</script>
</body>
</html>