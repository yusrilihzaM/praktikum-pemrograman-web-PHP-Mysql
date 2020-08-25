<?php
// namahost, username, password, database
$koneksi = mysqli_connect("localhost", "root", "", "apbw");
// select uang from dompet
function query($query)
{
    global $koneksi;
    // p koneksi, script query
    $hasil = mysqli_query($koneksi, $query);
    $datas = [];
    // pecah objek ambil datanya
    while ($data = mysqli_fetch_assoc($hasil)) {
        $datas[] = $data;
    }
    return $datas;
}
function hapus($id)
{
    //koneksi
    global $koneksi;
    //ini querynya
    $hasil = mysqli_query($koneksi, "DELETE FROM orang WHERE id=$id");
    return mysqli_affected_rows($koneksi);
}               
function tambah($datainput)
{
    global $koneksi;
    // INSERT INTO orang VALUES(id,"nama","umur");
    $nama = $datainput['nama'];
    $umur = $datainput['umur'];
    $query = "INSERT INTO orang VALUES(
        '',
        '$nama',
        '$umur'
    )";
    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}
function update($datainput, $id_){
    global $koneksi;
    $id = $id_;
    $nama = $datainput['nama'];
    $umur = $datainput['umur'];
    $query = "UPDATE orang SET
        nama='$nama',
        umur='$umur'
        WHERE id=$id
    ";
    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}