<?php

include("koneksi.php");

if(isset($_POST['edit'])){

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $jeniskelamin = $_POST['jeniskelamin'];
    $nohp = $_POST['nohp'];
    $alamat = $_POST['alamat'];
    
    

    $sql = "UPDATE tb_order SET id='$id', nama='$nama', jeniskelamin='$jeniskelamin', nohp='$nohp', alamat='$alamat' WHERE id='$id'";
    $query = mysqli_query($conn, $sql);

    if( $query ) {
        header('Location: list-order.php');
    } else {
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>