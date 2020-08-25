<!doctype html>
<html lang="en">
<?php
require 'modeldb.php';
$id = $_GET['id'];
$data = query("SELECT * FROM orang WHERE id='$id'")[0];
var_dump($data);
if (isset($_POST['ubah'])) {
    // var_dump($_POST);
    if (update($_POST, $id) > 0) {
        echo "
    <script>
    alert('Data Berhasil Ditambahkan');
    document.location.href='orang.php';
    </script>
    ";
    } else {
        echo "
    <script>
    alert('Data Gagal Ditambahkan');
    </script>
    ";
    }
}
?>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Detail</title>
</head>

<body>
    <div class="container">
        <?php include('navbar.php'); ?>
        <form action="" method="POST">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?= $data['nama'] ?>">
            </div>
            <div class="form-group">
                <label for="umur">Umur</label>
                <input type="text" class="form-control" id="umur" name="umur" value="<?= $data['umur'] ?>">
            </div>
            <button type="submit" class="btn btn-success" name="ubah">Ubah</button>
        </form>
    </div> .


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
</body>

</html>