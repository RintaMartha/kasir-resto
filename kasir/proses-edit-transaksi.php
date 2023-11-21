<?php

include("koneksi.php");

if(isset($_POST['edit'])){

    $id = $_POST['id'];
    $idbarang = $_POST['idbarang'];
    $total = $_POST['total'];
    $bayar = $_POST['bayar'];

    $sql = "UPDATE transaksi SET id='$id', idbarang='$idbarang', total='$total', bayar='$bayar' WHERE id='$id'";
    $query = mysqli_query($conn, $sql);

    if( $query ) {
        header('Location: list-transaksi.php');
    } else {
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>