<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/subestilos/estilos_galeria.css">
    <link rel="stylesheet" href="css/semantic.min.css">
    <title>Galeria de arte</title>
    <!-- fuentes de letras -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alkatra&display=swap" rel="stylesheet">
    <!-- otras fuentes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
    <!--  -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/semantic.js"></script>
</head>
<body class="imagen_body">
    <style>
        .imagen_body{
            overflow-y: scroll;
        }
        .imagen_body::-webkit-scrollbar {
            width: 0px;
        }

        .imagen_body::-webkit-scrollbar-track {
            background: transparent;
        }

        .imagen_body::-webkit-scrollbar-thumb{
            background: transparent;
            border-radius: 4px;
        }

        .imagen_body::-webkit-scrollbar-thumb:hover  {
            background: transparent;
        }
    </style>
    <?php
        include('php/conexion.php');
        $consulta= "SELECT * FROM graffitis";
        $resultado = $conexion -> query($consulta);
        while ($conexion = $resultado ->fetch_assoc()){
    ?>
            <div class="conte">
                <div class="card">  
                    <picture class="imagen_estilo">
                        <img src="<?php echo $conexion ['imagen_carta']; ?>" alt="">
                        <img src="<?php echo $conexion ['imagen_carta']; ?>" alt="">
                    </picture>
                    <div class="detalles">
                        <div class="contenedor">
                            <label class="titel1">Nombre Imagen:</label>
                            <p class="titel2"> <b> <?php echo $conexion['nombre_graffiti']; ?> </b></p>
                            <label class="titel3">Nombre Autor:</label>
                            <p class="titel4"><b><?php echo $conexion ['nombre_autor']; ?></b></p>
                            <label class="titel5">Descripcion:</label>
                            <p class="titel6"> <b><?php  echo $conexion ['descripcion_graffiti'];?></b> </p>
                        </div>
                    </div>
                </div>
            </div>
    <?php    
        }
    ?>
</body>
</html>  