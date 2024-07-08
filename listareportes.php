<?php
    include("php/conexion.php");
    session_start();
    $id = $_SESSION["id"];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lista de reportes</title>

    <!-- Otros estilos -->
    <link rel="stylesheet" href="css/admin/reportes.css">
</head>
<body class="fondo">
    <table>
        <thead>
            <tr>
                <th style=" background-color: #5dfff7;">Persona Acusada</th>
                <th>Foto</th>
                <th>Persona Afectada</th>
                <th>Foto</th>
                <th>Tipo Reporte</th>
                <th style=" background-color: #5dfff7;">Contactar</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $select = mysqli_query($conexion, "SELECT * FROM reportes where estado = 'por confirmar'");
                while ($rowLista = mysqli_fetch_assoc($select)) {
                    $id_reportante = $rowLista["id_reportante"];
                    $nombre_reportante_result = mysqli_query($conexion, "SELECT nombre_usuario FROM usuario WHERE id_usuario = '$id_reportante'");
                    $nombre_reportante_data = mysqli_fetch_assoc($nombre_reportante_result);
                    $nombre_reportante = $nombre_reportante_data["nombre_usuario"];
                
                    $id_reportado = $rowLista["id_reportado"];
                    $nombre_reportado_result = mysqli_query($conexion, "SELECT nombre_usuario FROM usuario WHERE id_usuario = '$id_reportado'");
                    $nombre_reportado_data = mysqli_fetch_assoc($nombre_reportado_result);
                    $nombre_reportado = $nombre_reportado_data["nombre_usuario"];
                
                    // Obtener foto_usuario del reportante
                    $foto_reportante_result = mysqli_query($conexion, "SELECT foto_usuario FROM usuario WHERE id_usuario = '$id_reportante'");
                    $foto_reportante_data = mysqli_fetch_assoc($foto_reportante_result);
                    $foto_reportante = $foto_reportante_data["foto_usuario"];
                
                    // Obtener foto_usuario del reportado
                    $foto_reportado_result = mysqli_query($conexion, "SELECT foto_usuario FROM usuario WHERE id_usuario = '$id_reportado'");
                    $foto_reportado_data = mysqli_fetch_assoc($foto_reportado_result);
                    $foto_reportado = $foto_reportado_data["foto_usuario"];
                    
                    //demas datos
                    $tipo_reporte = $rowLista["razon_reporte"];
                    $id_reporte = $rowLista["id_reporte"];
                    ?>
                        <tr>
                            <td> <?php echo $nombre_reportado;?></td>
                            <td><img src="<?php echo $foto_reportado;?>" alt="Foto 1"></td>
                            <td><?php echo $nombre_reportante;?></td>
                            <td><img src="<?php echo $foto_reportante;?>" alt="Foto 1"></td>
                            <td>Estafa</td>
                            <td>
                                <?php 
                                    $_SESSION["id_reportante"] = $id_reportante;
                                    $_SESSION["id_reporte"] =$id_reporte;
                                    $_SESSION["id_reportado"] = $id_reportado;
                                ?>
                                <a href="chat_admin.php" class="button2">Contactar</a>
                            </td>
                        </tr>
                    <?php
                }  
            ?>
        </tbody>
    </table>
</body>
</html>