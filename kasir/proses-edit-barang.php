<?php

include("koneksi.php");

if(isset($_POST['edit'])){

    $id = $_POST['id'];
    $idmeja = $_POST['idmeja'];
    $idorder = $_POST['idorder'];
    $jumlah = $_POST['jumlah'];
    $iduser = $_POST['iduser'];
    
    

    $sql = "UPDATE barang SET id='$id', idmeja='$idmeja', idorder='$idorder', jumlah='$jumlah', iduser='$iduser' WHERE id='$id'";
    $query = mysqli_query($conn, $sql);

    if( $query ) {
        header('Location: list-barang.php');
    } else {
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>