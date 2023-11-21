<?php

include("koneksi.php");

if( !isset($_GET['id']) ){
    header('Location: list-barang.php');
}

$id = $_GET['id'];

$sql = "SELECT * FROM barang WHERE id='$id'";
$query = mysqli_query($conn, $sql);
$barang = mysqli_fetch_assoc($query);

if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM EDIT</title>
</head>
<body>
    <style>
     body{
            background-image: url(img/resto.png);
            font-family: times new roman;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;

    }
    table{
            border-color: white;
            color: black;
            margin-right: auto;
            margin-left: auto;
            background-color: rgba(0, 0, 0, 0.5);
            
        }
        h4{
            color: white;
            width: 300px;
            background-color: rgba(0, 0, 0, 0.5);
        }
        td{
            color: white;
            font-family: 'Times New Roman', Times, serif;
        }
    </style>
    <center>

    <br>
    <h2 style="color: white;"><u>EDIT DATA BARANG</u></h2>
    <form action="proses-edit-barang.php" method="POST">
    <table border="1">
        <tr>
            <td>ID</td>
            <td>:</td>
            <td><input type="text" name="id" placeholder=""  value="<?php echo $barang['id'];?>"></td>
        </tr>

        <tr>
            <td>ID Meja </td>
            <td>:</td>
            <td><input type="text" name="idmeja" placeholder="" value="<?php echo $barang['idmeja'];?>"></td>
        </tr>

        <tr>
            <td>ID Order</td>
            <td>:</td>
            <td><input type="text" name="idorder" placeholder="" value="<?php echo $barang['idorder'];?>"></td>
        </tr>

        <tr>
            <td>Jumlah</td>
            <td>:</td>
            <td><input type="text" name="jumlah" placeholder="" value="<?php echo $barang['jumlah'];?>"></td>
        </tr>

        <tr>
            <td>ID User</td>
            <td>:</td>
            <td><input type="text" name="iduser" placeholder="" value="<?php echo $barang['iduser'];?>"></td>
        </tr>
    </table>
    <br>
    <input type="submit" value="EDIT" name="edit">
    <br>
</form>  
    </center>
</body>
</html>