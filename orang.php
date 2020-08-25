<?php
require 'modeldb.php';
$data = query("SELECT * FROM orang");
// var_dump($data);
if (isset($_POST['btncari'])) {
    $inputan = $_POST['inputcari'];
    $data = query("SELECT * FROM orang WHERE nama='$inputan'");
}
?>
<!doctype html>
<html lang="en">


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Halaman Orang</title>
</head>

<body>
    <div class="container">
        <?php include('navbar.php'); ?>
        <h1>Data Orang</h1>
        <a href="tambah.php">Tambah Data</a>
        <form action="" method="post">
            <input type="text" name="inputcari">
            <button type="submit" name="btncari">cari</button>
        </form>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>
                            No
                        </th>
                        <th>
                            Nama
                        </th>
                        <th>
                            Umur
                        </th>
                        <th>
                            Aksi
                        </th>
                    </tr>

                </thead>

                <tbody>
                    <?php
                    foreach ($data as $dt) :
                    ?>
                        <tr>
                            <td>

                                <!-- <?php echo $dt['id']; ?> -->
                                <?= $dt['id']; ?> </td>
                            <td>
                                <?= $dt['nama']; ?>
                            </td>
                            <td>
                                <?= $dt['umur']; ?>
                            </td>
                            <td>
                                <a href="hapus.php?id=<?= $dt['id']; ?>">Hapus
                                </a>
                                <br>
                                <a href="edit.php?id=<?= $dt['id']; ?>">Edit
                                </a>
                            </td>
                        </tr>

                    <?php
                    endforeach;
                    ?>
                </tbody>
            </table>
        </div>
    </div>

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