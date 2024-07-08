<?php
    include("php/conexion.php");
    session_start();
    $id = $_SESSION["id"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/guia/contractos.css">
    <title>contratos</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th style=" background-color: #5dfff7;">Nombre</th>
                <th>Foto</th>
                <th>Método de Pago</th>
                <th>Cantidad de Pago</th>
                <th>Cantidad de Personas</th>
                <th>Fecha de Inicio</th>
                <th>Fecha de Fin</th>
                <th style=" background-color: #5dfff7;"><b style="color:red;">Rechzar</b></th>
                <th style=" background-color: #5dfff7;">Aceptar</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $select = mysqli_query($conexion, "SELECT * FROM contrato where id_guia = '$id' and estado ='por confirmar'");
                while ($rowLista = mysqli_fetch_assoc($select)) {
                    $id_turista = $rowLista["id_usuario"];
                    $fecha_incio = $rowLista["fecha_inicio"];
                    $fecha_fin = $rowLista["fecha_fin"];
                    $metodo_pago = $rowLista["metodo_pago"];
                    $pago = $rowLista["pago_realizado"];
                    $cantidad_personas = $rowLista["cantidad_personas"];
                    $estado = $rowLista["estado"];
                    $id_contrato = $rowLista["id_contrato"];
                    $nombre_result = mysqli_query($conexion, "SELECT nombre_usuario FROM usuario where id_usuario = '$id_turista'");
                    $nombre_data = mysqli_fetch_assoc($nombre_result);
                    $nombre = $nombre_data["nombre_usuario"];
                    $foto_result = mysqli_query($conexion, "SELECT foto_usuario FROM usuario WHERE id_usuario = '$id_turista'");
                    $foto_data = mysqli_fetch_assoc($foto_result);
                    $foto = $foto_data["foto_usuario"];
                    ?>
                        <tr>
                            <td> <?php echo $nombre; ?> </td>
                            <td><img src="<?php  echo $foto; ?>" alt="Foto 1"></td>
                            <td> <?php echo $metodo_pago; ?> </td>
                            <td> 
                                <img src="img/imagenes_probar/preview.png" alt="">
                                <?php echo $pago; ?>
                            </td>
                            <td><?php echo $cantidad_personas; ?></td>
                            <td><?php echo $fecha_incio; ?></td>
                            <td><?php echo $fecha_fin; ?></td>
                            <td>
                                <form action="listacontratos.php" method="post">
                                    <input type="hidden" name="id" value="<?php  echo $id_contrato;?>">
                                    <button class="button1" type="submit" name="rechazar">Rechzar</button>
                                </form>
                            </td>
                            <td>
                                <form action="listacontratos.php" method="post">
                                    <input type="hidden" name="id" value="<?php  echo $id_contrato;?>">
                                    <button class="button1" type="submit" name="aceptar">Aceptar</button>
                                </form>
                            </td>
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
        $idUpdate = $_POST["id"];
        $update = mysqli_query($conexion, "UPDATE contrato SET estado = 'aceptado' where id_contrato = '$idUpdate'");
    }
    if (isset($_POST["rechazar"])) {
        $idUpdate = $_POST["id"];
        $update = mysqli_query($conexion, "UPDATE contrato SET estado = 'rechazado' where id_contrato = '$idUpdate'");
    }
?>