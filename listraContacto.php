<?php
    session_start();
    $id = $_SESSION["id"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/guia/contactos.css">
    <title>Contactos</title>
</head>
<body>
    <h1>Contactos Recientes</h1>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Foto</th>
                <th>Pais</th>
                <th><b style="color:black;">Agregar Contacto</b></th>
                <th><b style="color:black;">Rechazar</b></th>
            </tr>
        </thead>
        <tbody>
            <?php
                include("php/conexion.php");
                $select = mysqli_query($conexion, "SELECT id_turista FROM contactos_pendientes WHERE id_guia = '$id'");
                $row = array();
                while ($Rowselect = mysqli_fetch_assoc($select)) {
                    array_push($row, $Rowselect["id_turista"]);
                }
                $num_registros = count($row);
                for ($i = 0; $i < $num_registros; $i++) { 
                    $id_turista = $row[$i];
                    $foto_result = mysqli_query($conexion, "SELECT foto_usuario FROM usuario WHERE id_usuario = '$id_turista'");
                    $nombre_result = mysqli_query($conexion, "SELECT nombre_usuario FROM usuario WHERE id_usuario = '$id_turista'");
                    $foto_data = mysqli_fetch_assoc($foto_result);
                    $nombre_data = mysqli_fetch_assoc($nombre_result);
                    $foto_usuario = $foto_data['foto_usuario'];
                    $nombre_usuario = $nombre_data['nombre_usuario'];
                    $pais_result = mysqli_query($conexion, "SELECT pais FROM usuario WHERE id_usuario =  '$id_turista'");
                    $pais_data = mysqli_fetch_assoc($pais_result);
                    $pais = $pais_data["pais"];
                    $id = $row[$i];
                    ?>
                        <tr>
                            <td> <?php echo $nombre_usuario; ?> </td>
                            <td>
                                <img src="<?php echo $foto_usuario; ?>" alt="Foto 1">
                            </td>
                            <td> <?php  echo $pais; ?> </td>
                            <form action="listraContacto.php" method="post">
                                <td>
                                    <input type="hidden" value="<?php  echo $id; ?>" name="id">
                                    <button class="button1" type="submit" name="aceptar">Aceptar</button>
                                </td>
                            </form>
                            <form action="listraContacto.php" method="post">
                                <td>
                                    <input type="hidden" value="<?php  echo $id; ?>" name="id">
                                    <button class="button1" type="submit" name="rechazar"> Rechazar </button>
                                </td>
                            </form>
                        </tr>
                    <?php
                }
            ?>

        </tbody>
    </table>
</body>
</html>
<?php
    if (isset($_POST["aceptar"])) {
        $id_user = $_SESSION["id"];
        $id_contact = $_POST["id"];
        $nombre = "";
        $insert_contacto = mysqli_query($conexion, "INSERT INTO contactos(id_usuario, id_contacto, nombre_contacto) VALUES ('$id_user', '$id_contact', '$nombre') ");
        $delate = mysqli_query($conexion, "DELETE FROM contactos_pendientes WHERE id_turista = '$id_contact' and id_guia = '$id_user'");
    }
    if (isset($_POST["rechazar"])) {
        $id_contact = $_POST["id"];
        $id_user = $_SESSION["id"];
        $delate = mysqli_query($conexion, "DELETE FROM contactos_pendientes WHERE id_turista = '$id_contact' and id_guia = '$id_user'");
    }
?>