<?php
$id = $_GET['id'];
require 'modeldb.php';
if (hapus($id) > 0) {
    echo "
    <script>
    alert('Data Berhasil Dihapus');
    document.location.href='orang.php';
    </script>
    ";
} else {
    echo "
    <script>
    alert('Data Gagal Dihapus');
    </script>
    ";
}