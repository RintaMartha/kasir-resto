<?php

include("koneksi.php");

if(isset($_POST['edit'])){

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    
    

    $sql = "UPDATE meja SET id='$id', nama='$nama', harga='$harga' WHERE id='$id'";
    $query = mysqli_query($conn, $sql);

    if( $query ) {
        header('Location: list-meja.php');
    } else {
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>