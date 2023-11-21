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
    <h2 style="color: white;"><u>LIST DATA ORDER</u></h2>
    <br>
    <a href="form-order.php" style="color: white;">Tambah Baru [+] </a> | <a href="dashboard.php" style="color: white;">Beranda</a>
    </div>
    <br><br>
    <table border = "1">
    <thead style="background-color: yellow;">
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>No Hp</th>
        <th>Alamat</th>
        <th>Aksi</th>
    </tr>
    </thead>

        <tbody style="background-color: white">
            <?php 
            $sql = "SELECT * FROM tb_order";
            $query = mysqli_query($conn, $sql);

            while ($or = mysqli_fetch_array($query)){
                echo "<tr>";

                echo "<td>" .$or['id']. "</td>";
                echo "<td>" .$or['nama']. "</td>";
                echo "<td>" .$or['jeniskelamin']. "</td>";
                echo "<td>" .$or['nohp']. "</td>";
                echo "<td>" .$or['alamat']. "</td>";
                echo "<td>";
                echo "<a href = 'edit-order.php?id=".$or['id']."'>Edit</a> | ";
                echo "<a href = 'hapus-order.php?id=".$or['id']."'>Hapus</a> ";
                
                echo "</tr>";
            }
            ?>
        </tbody>
        </table>
        <br>
        <button>Total: <?php echo mysqli_num_rows($query)?> </button>
        <h4 style="padding-bottom:10px;background-color: rgba(0, 0, 0, 0.5); text-align: center; width: 500px; height: 10px; color:white">Copyright @ Rinta chann - Aplikasi Kasir Restoran 2023 </h4>
        </center>
</body>                                           
</html>