<?php

include("koneksi.php");

if( isset($_GET['id']) ){

    $id = $_GET['id'];

    $sql = "DELETE FROM meja WHERE id='$id'";
    $query = mysqli_query($conn, $sql);

    if( $query ){
        header('Location: list-meja.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>