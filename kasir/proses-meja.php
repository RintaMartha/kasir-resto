<?php 
include("koneksi.php");
if (isset($_POST['masuk'])){
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    
    $query = "INSERT INTO meja (id, nama, harga) VALUES ('$id','$nama','$harga')";
    $sql = mysqli_query($conn, $query);

// apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: list-meja.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: list-meja.php?status=gagal');
    } 
} else {
    die("Akses dilarang...");
}