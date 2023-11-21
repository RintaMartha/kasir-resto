<?php 
include("koneksi.php");
if (isset($_POST['masuk'])){
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    
    $query = "INSERT INTO user (id, nama) VALUES ('$id','$nama')";
    $sql = mysqli_query($conn, $query);

// apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: menu.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: menu.php?status=gagal');
    } 
} else {
    die("Akses dilarang...");
}