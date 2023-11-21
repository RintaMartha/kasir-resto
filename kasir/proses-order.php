<?php 
include("koneksi.php");
if (isset($_POST['masuk'])){
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $jeniskelamin = $_POST['jeniskelamin'];
    $nohp = $_POST['nohp'];
    $alamat = $_POST['alamat'];
    
    $query = "INSERT INTO tb_order (id, nama, jeniskelamin, nohp, alamat) VALUES ('$id','$nama', '$jeniskelamin', '$nohp', '$alamat')";
    $sql = mysqli_query($conn, $query);

// apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: list-order.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: list-order.php?status=gagal');
    } 
} else {
    die("Akses dilarang...");
}