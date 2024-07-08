<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/chat/estilo_chat.css">
  <link rel="stylesheet" href="css/chat/img.css">
  <link rel="stylesheet" href="css/chat/h1.css">
  <link rel="stylesheet" href="css/chat/scrollbar.css">
  <link rel="stylesheet" href="css/chat/ifrainput.css">
  <link rel="stylesheet" href="css/chat/ifracontac.css">
  <!-- fonts de google -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <!--  -->
  <title>Chat</title>
</head>
<body>
      <?php
        session_start();
        include('php/conexion.php');
        $id= $_SESSION['id'];
        $consulta = mysqli_query($conexion,"SELECT * FROM usuario WHERE id_usuario='$id'");
        $valores = mysqli_fetch_array($consulta);
      ?>
      <div class="container">
          <div class="contact-list">
            <div>
              <img class="sepa2" src="<?php echo $valores ['foto_usuario']; ?>" width="50px" height="50px" style="border-radius: 90px;border: 2px solid rgb(108, 30, 180);" >
              <h1 class="sepa3"> <?php echo $valores ['nombre_usuario']; ?></h1>
              
            </div>
            <hr class="hr2">
            <iframe scrolling="si"  class="ifraco" src="iframe_contactos.php" frameborder="0"></iframe>
          </div>
          <iframe  scrolling="no" src="" frameborder="0"  name="iframe" class="ifa2"></iframe>
      </div>
  <script src="js/chat/desplegar.js" ></script>
</body>
</html>