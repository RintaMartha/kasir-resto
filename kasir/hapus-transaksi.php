<?php

include("koneksi.php");

if( isset($_GET['id']) ){

    $id = $_GET['id'];

    $sql = "DELETE FROM transaksi WHERE id='$id'";
    $query = mysqli_query($conn, $sql);

    if( $query ){
        header('Location: list-transaksi.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>