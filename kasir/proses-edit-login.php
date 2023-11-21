<?php

include("koneksi.php");

if(isset($_POST['edit'])){

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    

    $sql = "UPDATE user SET id='$id', nama='$nama' WHERE id='$id'";
    $query = mysqli_query($conn, $sql);

    if( $query ) {
        header('Location: list-login.php');
    } else {
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>