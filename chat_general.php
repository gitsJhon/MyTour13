<?php
    session_start();    
    $id = $_SESSION["id"];
    include("php/conexion.php");
    $id_user = $_GET["id"];
    $_SESSION["id_receiver"] = $id_user;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/chat/estilo_chat.css">
    <link rel="stylesheet" href="css/chat/img.css">
    <link rel="stylesheet" href="css/chat/h1.css">
    <link rel="stylesheet" href="css/chat/scrollbar.css">
    <link rel="stylesheet" href="css/chat/busqueda.css">
    <link rel="stylesheet" href="css/chat/ifrainput.css">
    <link rel="stylesheet" href="css/chat/ifracontac.css">
    <!-- fonts de google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <!--  -->
    <script>
        function ajax() {
            var req =new XMLHttpRequest();
            req.onreadystatechange = function(){
                if (req.readyState == 4 && req.status == 200) {
                    document.getElementById('chat').innerHTML = req.responseText;
                }
            }
            req.open('GET', 'msg.php', true);
            req.send();
        }
        setInterval(function(){ajax();}, 1000);
    </script>
    <title>Document</title>
</head>
<body>
    <div >
        <div class="img">
            <iframe src="cabeza_guia.php" frameborder="0"scrolling="no" style="background-color: rgba(36, 190, 190, 0.863);"  width="100%" height="70px"></iframe>
            <!-- aca iria el del turista tu ya lo acomodas con su repectivo codigo -->
            <!-- <iframe src="cabeza_turis.php" frameborder="0"scrolling="no" style="background-color: rgba(36, 190, 190, 0.863);"  width="100%" height="70px"></iframe> -->
        </div>
        <hr>
        <div id="caja-chat">
                <div  id="chat">
                    
                </div>     
        </div>
        <hr>
        <iframe scrolling="no" id="mi-iframe" class="ifra" src="iframe_Input.php" frameborder="0"></iframe>
    
    </div>
</body>
</html>