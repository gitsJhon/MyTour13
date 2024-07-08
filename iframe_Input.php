<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/chat/ifrainput.css">
</head>
<body>
    <div class="input-container">
        <form action="iframe_Input.php" method="post">
            <textarea scrolling="no" type="text" autocomplete="off" id="mensaje" name="msg" class="input" frameborder="0" placeholder="Mensaje..."></textarea>
            <button class="boton" type="submit" name="btn_enviar" value="Enviar">
                <img src="img/imagenes_probar/6496189.png" width="30px" height="30px">
            </button>
        </form>
    </div>  
</body>
</html>
<?php
    session_start();
    include("php/conexion.php");
    if (isset($_POST["btn_enviar"])) {
        $msg = $_POST["msg"];
        $id_send = $_SESSION["id"];
        $id_receiver = $_SESSION["id_receiver"];
        $insert = mysqli_query($conexion, "INSERT INTO chat(mensaje, id_send, id_receiver) values ('$msg', '$id_send', '$id_receiver')");
    }
?>