<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body{
            background-image: url(img/resto.png);
            font-family:'Times New Roman', Times, serif ;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }
        .logo{
            margin: auto;
            width: fit-content;
            padding-top: 75px;
        }
        h2,h3{
            text-align: center;
            padding: 10px;
            color: white;
            font-weight: bold;
            font-family: 'Times New Roman', Times, serif;
        }
        button{
            position: absolute;
            left: 50%;
            margin-top: 20px;
            border-radius: 5px;
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
    <title>BARANG</title>
</head>
<body>
    <br><br>
    <br><br><br>
    <center>
        <b><h2 class="aplikasi">| FORM ENTRI BARANG|</h2><b>
        <form action="proses-barang.php" method="POST">
        <table border="1">
         <tr>
                <td>ID</td>
                <td>:</td>
                <td><input type="text" name="id" placeholder="id"></td>
        </tr>

        <tr>
                <td>ID Meja</td>
                <td>:</td>
                <td><input type="text" name="idmeja" placeholder="idmeja"></td>
        </tr>

            <tr>
                <td>ID Order </td>
                <td>:</td>
                <td><input type="text" name="idorder" placeholder="idorder"></td>
          </tr>

          <tr>
                <td>Jumlah</td>
                <td>:</td>
                <td><input type="text" name="jumlah" placeholder="jumlah"></td>
          </tr>

          <tr>
                <td>ID User</td>
                <td>:</td>
                <td><input type="text" name="iduser" placeholder="iduser"></td>
          </tr>
        </table>
        <br>
        <div class="jarak">
        <input type="submit" value="Masuk" name="masuk">
        </div>
        <br>
        <h4 style="padding-bottom:10px;">Copyright @ SMK N 9 SEMARANG 2023 </h4>
        </div>
    </form>
    </center>
</head>
<body>
    
</body>
</html>