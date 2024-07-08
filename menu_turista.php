<?php
    session_start();
    if ($_SESSION['id'] == "" or $_SESSION['id'] == null) { //el codigo se ejecuta si $validadar no tiene ningun valor, osea que no se inicio session 
         session_destroy(); // destruyo la session que debe venir nula, para que no haya conflicto una ves lo rediriga al index
         header("location: index.php"); // redirigo al index
         die(); // impido que el resto del codigo se ejecute en la pagina si no tiene una session iniciada
    }
?>

<!DOCTYPE HTML>
<HTML lang="es-en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial_scale=1.0">
    <link rel="shortcut icon" href="img/imagenes_probar/logoMytour.png">
    <link rel="stylesheet" href="css/estilos_chat_turi.css">
    <link rel="stylesheet" href="css/semantic.min.css">
    
    <!-- estilos de las letras  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Mende+Kikakui&family=Rubik+Bubbles&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gloock&display=swap" rel="stylesheet">
    <!--  -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/semantic.js"></script>
 	<title>Turista</title> 
</head>
<body style="background-color: #fff; cursor: grab;">
  <style>

    body{
      overflow-y: scroll;
    }

    body::-webkit-scrollbar {
      width: 8px;
    }
  
    body::-webkit-scrollbar-track {
      background: transparent;
    }
  
    body::-webkit-scrollbar-thumb{
      background: transparent;
      border-radius: 4px;
    }
  
    body::-webkit-scrollbar-thumb:hover  {
      background: teal;
    }
    nav{
      display: flex;
      position: sticky;
        flex-wrap:nowrap;
      align-items: center;
      justify-content: space-between;
      
      padding-left: -8%;
    }
     
    ul li{
      display: inline-block;
      padding: 0% 25px;
      margin:5px 5px 5px 5px;
    }
    a{
        color: rgb(0, 0, 0);
        text-decoration: none;
        font-size: 16px;
        font-family: 'Gloock', serif;

        
    }
    a:hover{
        color:  #000;
        transition: all .3s;
        border: 1px solid teal;
        background-color: rgb(212, 212, 212);
        padding: 7px 10px 10px 7px;
        border-radius: 12px;


    }
    a:focus {
        border: 1px solid teal;
        background-color: rgb(218, 218, 218);
        padding: 7px 10px 10px 7px;
        border-radius: 12px;

    }

    @media(min-width: 700px){
      nav{
        display: flex;
        position: sticky;
        align-items: center;
        justify-content: space-between;
        padding-top: 23px;
        padding-left: -8%;
      }
        
      ul li{
        display: inline-block;
        padding: 0% 20px;
        margin:5px 5px 5px 5px;
      }
      a{
          color: rgb(0, 0, 0);
          text-decoration: none;
          font-size: 16px;
          border: none;
          
          
      }
      a:hover{
          color:  #000;
          transition: all .3s;
          border: 1px solid teal;
          background-color: rgb(212, 212, 212);
          padding: 7px 10px 10px 7px;
          border-radius: 12px;

          
      }
      a:focus {
          border: 1px solid teal;
          background-color: rgb(218, 218, 218);
          padding: 7px 10px 10px 7px;
          border-radius: 12px;

      }
    }
  </style>
  <header>
    <nav class="nave">
      <h1 class="tit" id="estiloh1">My tour 13</h1>
      <ul>
        <li><a href="inicio_turista.html" target="iframe_menuu">Inicio</a></li>
        <li><a href="perfil_turista.php" target="iframe_menuu">Mi perfil</a></li>
        <li><a href="galeria_de_arte.php" target="iframe_menuu"><b style="color:red
        ">Galeria</b> <b style="color: rgb(21, 255, 0)">De</b> <b style="color:rgb(0, 60, 255)">Arte</b></a></li>
        <li><a href="listaviajes.html" target="iframe_menuu">Mis Viajes</a></li>
        <li><a href="guiadispo.php" target="iframe_menuu">Guías disponibles</a></li>
        <li><a href="chat.php" target="iframe_menuu">Chat</a></li>
        <li><a onclick="cerrar()">Cerrar sesion</a></li>
      </ul>
    </nav>
    <hr class="Linea_menu">
  </header>
  <iframe name="iframe_menuu" src="inicio_turista.html" frameborder="0" width="100%" height="85%" border:none;></iframe>
  <script src="js/alerta.js"></script>

</body> 
</html> 