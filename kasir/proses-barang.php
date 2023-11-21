<?php 
include("koneksi.php");
if (isset($_POST['masuk'])){
    $id = $_POST['id'];
    $idmeja = $_POST['idmeja'];
    $idorder = $_POST['idorder'];
    $jumlah = $_POST['jumlah'];
    $iduser = $_POST['iduser'];
    
    $query = "INSERT INTO barang (id, idmeja, idorder, jumlah, iduser) VALUES ('$id','$idmeja', '$idorder', '$jumlah', '$iduser')";
    $sql = mysqli_query($conn, $query);

// apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: list-barang.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: list-barang.php?status=gagal');
    } 
} else {
    die("Akses dilarang...");
}