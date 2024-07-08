<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!--  -->
     <link rel="stylesheet" href="css/estilos_admin.css">
    <link rel="stylesheet" href="css/admin/mensajes.css">
    <link rel="stylesheet" href="css/admin/file.css">
    <link rel="stylesheet" href="css/admin/file2.css">
    <link rel="stylesheet" href="css/admin/foto_perfil.css">
    <link rel="stylesheet" href="css/semantic.min.css">

    <!--  -->
    <link rel="stylesheet" href="css/admin/ifras.css">
    <link rel="stylesheet" href="css/chat/h1.css">
    <link rel="stylesheet" href="css/chat/scrollbar.css">
    <link rel="stylesheet" href="css/chat/ifracontac.css">
    <!--  -->
    <title></title>
    <!-- fuentes -->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Mende+Kikakui&family=Rubik+Bubbles&display=swap" rel="stylesheet">
    <!--  -->  
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
</head>
<body style="background-color: #FFF ; cursor: pointer  ;">   


  
<?php 
    session_start();
    include('php/conexion.php');
    $myID = $_SESSION["id"];
    $id= $_SESSION["id_reportante"];
    $_SESSION["id_receiver"] = $_SESSION["id_reportante"];
    $id_reporte= $_SESSION["id_reporte"];
    $id_reportado = $_SESSION["id_reportado"];
    $consulta = mysqli_query($conexion, "SELECT * FROM usuario WHERE id_usuario='$id'");
    $valores = mysqli_fetch_array($consulta);  

    $ape = mysqli_query($conexion,"SELECT apellido_usuario from usuario where id_usuario='$id'");
    $valor2 = mysqli_fetch_array($ape);
?>
    <div class="cuadro">
      <div class="container">
            <!-- foto de perfil donde el usuario pobra cambiarla cuanto guste -->
          <section class="perfil-usuario">
            <div class="avatar-perfil">
                <img src="<?php echo $valores['foto_usuario']; ?>" id="fotico">
            </div>
          </section>
          <h1 class="posicion"><?php echo $valores['nombre_usuario']; ?><i class="share teal icon"></i></h1>
          <!-- LA CLASE POS LA USAMOS DENTRO DE ESTILOS_ADMIN PARA ACOMODAR LA POSICION DE LOS 3 BOTONES -->
            <form action="chat_admin.php" method="post">
              <button class="ui primary inverted button" type="submit" name="aceptar">Aceptar Reporte</button>
              <button class="ui red inverted button" type="submit" name="rechazar">Rechazar Reporte</button>
            </form>
          <table class="ui very basic collapsing celled table" style="width: 50%;">
              <thead>
                  <tr>
                      <th>DESCRIPCIÓN DEL PROBLEMA <i class="archive icon"></i></th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <td>
                        <?php
                          $reporte_result = mysqli_query($conexion, "SELECT descripcion_reporte FROM reportes where id_reporte = '$id_reporte'");
                          $reporte_data = mysqli_fetch_assoc($reporte_result);
                          $reporte = $reporte_data["descripcion_reporte"];
                          echo $reporte;
                        ?>
                      </td>
                  </tr>
              </tbody>
          </table>
      </div>
    </div>
    <div class="cuadro2">
      <div class="container2">
        <div>
          <div class="img">
          <iframe src="encabezado_admin.php" frameborder="0"scrolling="no" style="background-color:rgba(63, 63, 63, 0.863);"  width="100%" height="70px"></iframe>
        </div>
        <hr class="la_pos">
        <div id="caja-chat">
          <div  id="chat">
                    
          </div>     
        </div>
        <iframe scrolling="no" id="mi-iframe" class="ifraa" src="iframe_Input.php" frameborder="0"></iframe>
      </div> 
    </div>
      <script>
        $('.ui.dropdown').dropdown();
      </script>
      <!-- script que permite extraer la informacion de js -->
      <script src="js/subvalidacion/valida.js"></script>
       <!-- script que permite extraer la informacion de js -->
      <script src="js/mostrartext.js"></script>  
</body>
</html>
<?php
  if (isset($_POST["aceptar"])) {
    $select = mysqli_query($conexion, "SELECT strikes FROM usuario WHERE id_usuario = '$id_reportado'");
    $row = mysqli_fetch_assoc($select);
    $strikes = $row['strikes'];
    $strikes = $strikes + 1;
    $update = mysqli_query($conexion, "UPDATE usuario set strikes = '$strikes' where id_usuario = '$id_reportado'");
    $update_report = mysqli_query($conexion, "UPDATE reportes set estado='resuelto' where id_reporte = '$id_reporte'");
  }
  if (isset($_POST["rechazar"])) {
    $update_report = mysqli_query($conexion, "UPDATE reportes set estado='resuelto' where id_reporte = '$id_reporte'");
  }
?>