<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/chat/ifracontac.css">
    <link rel="stylesheet" href="css/chat/estilo_chat.css">
    <link rel="stylesheet" href="css/chat/h1.css">
</head>
<body>
<?php
session_start();
$id = $_SESSION['id']; // tomo la id del usuario
include('php/conexion.php');
$datos = "SELECT id_contacto FROM contactos WHERE id_usuario = '$id'";
$ejecutar = mysqli_query($conexion, $datos);
$row = array();
while ($fila = mysqli_fetch_assoc($ejecutar)) {
    array_push($row, $fila["id_contacto"]);
}
$num_registros = count($row);
for ($i = 0; $i < $num_registros; $i++) {
    $id_contacto = $row[$i];
    $foto_result = mysqli_query($conexion, "SELECT foto_usuario FROM usuario WHERE id_usuario = '$id_contacto'");
    $nombre_result = mysqli_query($conexion, "SELECT nombre_usuario FROM usuario WHERE id_usuario = '$id_contacto'");
    $foto_data = mysqli_fetch_assoc($foto_result);
    $nombre_data = mysqli_fetch_assoc($nombre_result);
    $foto_usuario = $foto_data['foto_usuario'];
    $nombre_usuario = $nombre_data['nombre_usuario'];
    ?>
    <div class="contact">
        <ul>
            <li>
                <a href="chat_general.php?id=<?php echo $row[$i]; ?>" target="iframe">
                    <img class="bord" src="<?php echo $foto_usuario; ?>" width="50px" height="50px">
                    <b id="nombre"><?php echo $nombre_usuario; ?></b>
                    
                </a>
            </li>
        </ul>
    </div>
    <?php
  }
?>

</body>
</html>

