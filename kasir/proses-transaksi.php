<?php 
include("koneksi.php");
if (isset($_POST['masuk'])){
    $id = $_POST['id'];
    $idbarang = $_POST['idbarang'];
    $total = $_POST['total'];
    $bayar = $_POST['bayar'];
    
    $query = "INSERT INTO transaksi (id, idbarang, total, bayar) VALUES ('$id','$idbarang', '$total', '$bayar')";
    $sql = mysqli_query($conn, $query);

// apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: list-transaksi.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: list-transaksi.php?status=gagal');
    } 
} else {
    die("Akses dilarang...");
}