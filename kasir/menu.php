<html>
<head>
    <title>RESTO</title>
</head>
<style>
    body {
        background-image: url('img/resto.png');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
    }
    img {
        text-align: center;
        width:150px;
        height:150px;
    }
    .menu{
        background-color: rgba(0, 0, 0, 0.5);
        text-align: center;
        width: 500px;
        height: 250px;

    }
    .tbl{
        background-color: pink;
        text-align: center;
        width: 500px;
        height: 70px;
        font:normal 80% Verdana,Trebuchet,Arial,Sans-serif;
        font-weight: bold;
        
    }
    .copyright{
        background-color: pink;
        text-align: center;
        width: 500px;
        height: 20px;
        color: black;
        
        float:center;
        padding-top:5px;
        padding-bottom:5px;
        font:normal 80% Verdana,Trebuchet,Arial,Sans-serif;
        font-weight: bold;
    }
    .tbl2{ 
        font-family:'Times New Roman', Times, serif;
        text-align: center;
        width: 50px;
        height: 50px;
        margin-left: 10px;
        padding-right: 30px;
        padding-left : 30px;
    }
/* Estilos para el contenedor del marquee */
.marque {
  width: 500px; /* Ancho de 500px */
  height: auto;
  overflow: hidden; /* Ocultar el desbordamiento */
}

/* Estilos para el texto dentro del marquee */
.marque p {
  color: black; /* Color del texto */
  background-color: yellow;
  white-space: nowrap; /* Evitar saltos de línea */
  animation: desplazar 10s linear infinite; /* Animación de desplazamiento */
}

/* Animación de desplazamiento */
@keyframes desplazar {
  0% {
    transform: translateX(100%);
  }
  100% {
    transform: translateX(-100%);
  }
}

    
    </style>
    <body>
        <center>
            <br>
            <tr>
                <td>
                <img src="img/logo-resto.png " width="160" height="100";>
                </td>
            </tr>
            <br>
            <div class="marque">
            <p><b>------------| LOGIN BERHASIL |------------</b></p>
            </div>
            <div class="tbl">
            <h3 style="text-align: center;color:black;">APLIKASI</h3>
            <h3 style="text-align: center;color:black;">KASIR RESTORAN</h3>
            <div class="menu">
                <br>
                
               <pre style="color: yellow;"><b><h3> ADMIN            WAITER            KASIR            OWNER</h3></b></pre>
               <hr size="2px" width="90%" align="center" color="yellow">
               <pre><a href="admin.php"><img src="img/adm.png" class="tbl2"> <a href="waiter.php"> <img src="img/aa.png" class="tbl2"> <a href="kasir.php"><img src="img/aaa.png" class="tbl2"> <a href="owner.php"><img src="img/ceo.png" class="tbl2"></pre>
               <hr size="2px" width="90%" align="center" color="yellow">
                <p align="center"><a href="dashboard.php">LOGOUT</a></p>
                <br><br><br><br>
                <div class='copyright'>Copyright © 2023 @ SMK NEGERI 9 SEMARANG<div>       
                </div>
            </div>
            </div>
        </center>
</body>
</html>

