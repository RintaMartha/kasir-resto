<?php include("koneksi.php")?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LIST</title>
</head>
<body>
    <style>
        body{
            background-image: url(img/resto.png);
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            font-family: times new roman;
        }

        .image-2{
            margin-top: 50px;
        }
        list{
            background-color: rgba(0, 0, 0, 0.5);;
        }
    </style>
    <center> 
    <br><br>
    <h2 style="color: white;"><u>LIST DATA MEJA</u></h2>
    <br>
    <a href="form-meja.php" style="color: white;">Tambah Baru [+] </a> | <a href="dashboard.php" style="color: white;">Beranda</a>
    </div>
    <br><br>
    <table border = "1">
    <thead style="background-color: yellow;">
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Harga</th>
        <th>Aksi</th>
    </tr>
    </thead>

        <tbody style="background-color: white">
            <?php 
            $sql = "SELECT * FROM meja";
            $query = mysqli_query($conn, $sql);

            while ($meja = mysqli_fetch_array($query)){
                echo "<tr>";

                echo "<td>" .$meja['id']. "</td>";
                echo "<td>" .$meja['nama']. "</td>";
                echo "<td>" .$meja['harga']. "</td>";
                echo "<td>";
                echo "<a href = 'edit-meja.php?id=".$meja['id']."'>Edit</a> | ";
                echo "<a href = 'hapus-meja.php?id=".$meja['id']."'>Hapus</a> ";
                
                echo "</tr>";
            }
            ?>
        </tbody>
        </table>
        <br>
        <button>Total: <?php echo mysqli_num_rows($query)?> </button>
        <h4 style="padding-bottom:10px;background-color: rgba(0, 0, 0, 0.5); text-align: center; width: 500px; height: 10px; color:white">Copyright @ Aplikasi Kasir Restoran 2023 </h4>
        </center>
</body>                                           
</html>