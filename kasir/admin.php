<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>ADMIN</title>
    <style>
        body{
            font-family: 'Times New Roman', Times, serif;
            background-image: url(img/resto.png);
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }

        .bg{
            margin-top: 50px;
            background-color: rgba(0, 0, 0, 0.5);
            text-align: center;
            width: 500px;
            height: 190px;
            color: white;
        }

        table{
            background-color:rgba(145, 560, 80, 0.5)
        }
        a{
            color: white;
        }
    </style>
</head>
<body>
    <center>
        <br>
        <tr>
                <td>
                <img src="img/logo-resto.png " width="140" height="140";>
                </td>
        </tr>
        <div class="bg">
            <br>
            <h3>MENU APLIKASI KASIR RESTORAN</h3>
            <hr size="2px" width="90%" align="center" color="yellow">
                <table align="center">
                    <br>
                    <tr>
                        <td><a href="login.php">LOGIN    |</a></td>
                        <td><a href="dashboard.php">LOGOUT</a></td>
                    </tr>

                    <tr>
                        <td><a href="form-meja.php">PESAN MEJA   |</a></td>
                        <td><a href="form-barang.php">PESAN BARANG </a></td>
                    </tr>
                </table>
                <br>
                <br>
                <p>Copyright @2023|KASIR RESTORAN</p>
        </div>
    </center>
</body>
</html>