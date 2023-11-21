<?php

include("koneksi.php");

if( !isset($_GET['id']) ){
    header('Location: list-meja.php');
}

$id = $_GET['id'];

$sql = "SELECT * FROM meja WHERE id='$id'";
$query = mysqli_query($conn, $sql);
$meja = mysqli_fetch_assoc($query);

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
    <h2 style="color: white;"><u>EDIT DATA MEJA</u></h2>
    <form action="proses-edit-meja.php" method="POST">
    <table border="1">
        <tr>
            <td>ID</td>
            <td>:</td>
            <td><input type="text" name="id" placeholder=""  value="<?php echo $meja['id'];?>"></td>
        </tr>

        <tr>
            <td>Nama </td>
            <td>:</td>
            <td><input type="text" name="nama" placeholder="" value="<?php echo $meja['nama'];?>"></td>
        </tr>

        <tr>
            <td>Harga </td>
            <td>:</td>
            <td><input type="text" name="total" placeholder="" value="<?php echo $meja['harga'];?>"></td>
        </tr>
    </table>
    <br>
    <input type="submit" value="EDIT" name="edit">
    <br>
</form>  
    </center>
</body>
</html>