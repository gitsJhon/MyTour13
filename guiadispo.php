<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guias disponibles</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tilt+Warp&display=swap" rel="stylesheet">
    <!-- otros esilos de fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap" rel="stylesheet">
    <!--  -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/estilos_cartas.css">
    <link rel="stylesheet" href="css/turista/modal.css">
    <link rel="stylesheet" href="css/semantic.min.css">
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/semantic.js"></script>
</head>
<body class="imagen_fondo" style="background-repeat: repeat;">
    <style>
        .imagen_fondo {
            overflow-y: scroll;
        }
        .imagen_fondo::-webkit-scrollbar {
            width: 0px;
        }
        .imagen_fondo::-webkit-scrollbar-track {
            background: transparent;
        }
        .imagen_fondo::-webkit-scrollbar-thumb {
            background: transparent;
            border-radius: 4px;
        }
        .imagen_fondo::-webkit-scrollbar-thumb:hover {
            background: transparent;
        }
    </style>
    <?php
        session_start();
        include("php/conexion.php");
        $resultado = mysqli_query($conexion, "SELECT id_usuario FROM vista_guia");
        $row = array();
        while ($fila = mysqli_fetch_assoc($resultado)) {
            array_push($row, $fila["id_usuario"]);
        }
        $num_registros = count($row);

        $total_paginas = ceil($num_registros / 6);

        if (isset($_GET['pagina'])) {
            $pagina_actual = $_GET['pagina'];
        } else {
            $pagina_actual = 1;
        }
        $inicio = ($pagina_actual - 1) * 6;
        $fin = $inicio + 6;

        for ($i = $inicio; $i < $fin; $i++) {
            if ($i >= $num_registros) {
                break; 
            }
            $foto_user_result = mysqli_query($conexion, "SELECT foto_usuario FROM vista_guia WHERE id_usuario = '{$row[$i]}'");
            $foto_user_data = mysqli_fetch_assoc($foto_user_result);
            $foto_user = $foto_user_data['foto_usuario'];

            $nombre_result = mysqli_query($conexion, "SELECT nombre_usuario FROM vista_guia WHERE id_usuario = '{$row[$i]}'");
            $nombre_data = mysqli_fetch_assoc($nombre_result);
            $nombre_usuario = $nombre_data['nombre_usuario'];
            $id = $row[$i];
            
    ?>
            <div class="margeen">
                <div class="card-client">
                    <div class="user-picture">
                        <img src="<?php echo $foto_user; ?>" alt="" width="100px" height="100px">
                    </div>
                    <p class="name-client">
                        <?php echo $nombre_usuario; ?>
                        <span>
                            <b style="color:green; font-family: 'Merriweather Sans', sans-serif;">
                                Idiomas:</b> <b> ingles</b>
                        </span>
                    </p>
                    <div class="social-media">
                        <a class="open-modal" data-modal="myModal<?php echo $i; ?>">
                            <label for="" style="font-family: 'Tilt Warp', cursive;">Chatea con el guía</label>
                            <span class="tooltip-social">Contacto</span>
                        </a>
                    </div>
                </div>
            </div>
            <div id="myModal<?php echo $i; ?>" class="modal">
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <h1 class="Agregar">Añador a contactos</h1><br>
                    <p class="nom"><?php echo $nombre_usuario; ?></p><br>
                    <form action="guiadispo.php" method="post">
                        <div class="Centro">
                            <input type="hidden" value="<?php echo $id; ?>" name="id">
                            <input type="submit" class="Accept"  name="añadir">
                                <span class="span1">Si</span>
                            </input>
                            <button class="NO_Accept">
                                <span class="span2">No</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
    <?php

         }
    ?> 
            <!-- Botones de navegación -->
            <div class="pagination">
                <?php
                    if ($pagina_actual > 1) {
                        echo '<a class="Pagina1" href="?pagina=' . ($pagina_actual - 1) . '">Anterior</a>';    
                    }
                    for ($i = 1; $i <= $total_paginas; $i++) {
                        if ($i == $pagina_actual) {
                            
                        } else {
                        }
                    }
                    if ($pagina_actual < $total_paginas) {
                        echo '<a  class="Pagina2" href="?pagina=' . ($pagina_actual + 1) . '"> Siguiente</a>';
                    }
                ?>
            </div>
    <!-- java script -->
    <script>
        $('.ui.dropdown').dropdown();
    </script>
    <script src="js/turista/modal.js"></script>
</body>
</html>
<?php
        if (isset($_POST['añadir'])) {
            $id_user = $_SESSION['id'];
            $id_contact = $_POST['id'];
            $nombre_contac = $nombre_usuario;
            $insertar_contacto = mysqli_query($conexion, "INSERT into contactos(id_usuario, id_contacto, nombre_contacto) values ('$id_user', '$id_contact', '$nombre_contac')");
            $insert_contacto_G = mysqli_query($conexion, "INSERT INTO contactos_pendientes(id_turista, id_guia) values ('$id_user','$id_contact')");
        }
?>
