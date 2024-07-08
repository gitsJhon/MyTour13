<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lista de Grafittis</title>

    <!-- Otros estilos -->
    <link rel="stylesheet" href="css/admin/reportes.css">
</head>
<body class="fondo">

  <?php
  include('php/conexion.php');
  ?>
    <table>
        <thead>
            <tr>
                <th>Foto</th>
                <th>Nombre Grafitti</th>
                <th>Nombre autor</th>
                <th style=" background-color: #5dfff7;"><b style="color:red;">Eliminar</b></th>
            </tr>
        </thead>
        <tbody>
            <?php
                include("php/conexion.php");
                $select = mysqli_query($conexion, "SELECT * FROM graffitis");
                while ($rowLista = mysqli_fetch_assoc($select)) {
                    $foto = $rowLista["imagen_carta"];
                    $nombre = $rowLista["nombre_graffiti"];
                    $autor = $rowLista["nombre_autor"];
                    $id = $rowLista["id_grafiti"];
                    echo  $id;
                    ?>
                        <tr>
                        <td><img src="<?php echo $foto; ?>" alt="Foto 1"></td>
                        <td><?php echo $nombre; ?></td>
                        <td><?php echo $autor; ?></td>
                        <td>
                            <form action="listaGrafitis.php" method="post">
                                <button class="button1" type="submit" name="eliminar">Eliminar</button>
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
    if (isset($_POST["eliminar"])) {
        $delate = mysqli_query($conexion, "DELETE FROM graffitis WHERE id_grafiti = '$id'");
    }
?>