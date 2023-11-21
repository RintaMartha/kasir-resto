<?php

include("koneksi.php");

if( isset($_GET['id']) ){

    $id = $_GET['id'];

    $sql = "DELETE FROM user WHERE id='$id'";
    $query = mysqli_query($conn, $sql);

    if( $query ){
        header('Location: list-login.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>