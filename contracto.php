<?php
    session_start();
    $id = $_SESSION["id_receiver"];
    include("php/conexion.php");
    $nombre_result = mysqli_query($conexion,"SELECT nombre_usuario FROM usuario where id_usuario = '$id'");
    $nombre_data = mysqli_fetch_assoc($nombre_result);
    $nombre = $nombre_data["nombre_usuario"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/chat/contracto y reporte/contractos.css">
    <title>CONTRACTO</title>
</head>
<body>
    <H1>CONTRATO</H1>
    <div class="cuadro">
        <div class="container">
            <form class="formulariooi" action="contracto.php" method="POST" onsubmit="return validar_contrato();">
                <label class="labell" for="nombre_guia">Nombre del Guía:</label>
                <p class="estilo_input"> <?php echo $nombre; ?> </p><br>
                <label class="labell" for="nombre_guia">Fechas del Tour:</label><br>
                <div class="estilo_dates">
                    <label class="labell1" for="fecha_inicio">Inicio:</label>
                    <input class="estilo_date" type="date" id="fecha_inicio" name="fecha_inicio">
                    <label class="labell1" for="fecha_fin">Fin:</label>
                    <input class="estilo_date" type="date" id="fecha_fin" name="fecha_fin">
                </div><br>
                <label class="labell" for="cant_personas">Cantidad De Pago:</label>
                <input  class="estilo_input" type="text" name="pago" placeholder="Cantidad De Pago"><br>
                <label class="labell" for="metodo_pago">Metodo de pago:</label>
                <select class="estilos_boton" name="metodo_pago" id="metodo_pago">
                    <option class="color_inputs" value="">Selecciona:</option>
                    <option class="color_inputs" value="Nequi">Nequi</option>
                    <option class="color_inputs" value="Bancolombia">Bancolombia</option>
                    <option class="color_inputs" value="Efectivo">Efectivo</option>
                    <option class="color_inputs" value="Tarjeta de crédito">Tarjeta de crédito</option>
                    <option class="color_inputs" value="Tarjeta de débito">Tarjeta de débito</option>
                </select>
                <br>
                <br>
                <label class="labell" for="cant_personas">Cantidad de personas que asistirán:</label>
                <input class="estilo_input" type="text" id="cant_personas" name="cant_personas">

                    <button class="boton" type="button"><b>CANCELAR</b></button>
                    <button class="boton" type="submit" name="enviar"><b>CONTRATAR</b></button>
            </form>
        </div>
    </div>
</body>
</html>
<?php
    if (isset($_POST["enviar"])) {
        $currentDate = date('Y-m-d');  // Formato: Año-Mes-Día (ejemplo: 2023-06-15)
        $fecha_inicio = $_POST["fecha_inicio"];
        $fecha_fin = $_POST["fecha_fin"];
        $pago = $_POST["pago"];
        $metodo_pago = $_POST["metodo_pago"];
        $cant_personas = $_POST["cant_personas"];
        $estado = "por confirmar";
        $id_usuario = $_SESSION["id"];
        $insert = mysqli_query($conexion, "INSERT INTO contrato(fecha_realizado, fecha_inicio, fecha_fin, pago_realizado, id_usuario, id_guia, metodo_pago, cantidad_personas, estado) VALUES ('$currentDate', '$fecha_inicio', '$fecha_fin', '$pago', '$id_usuario', '$id', '$metodo_pago', '$cant_personas', '$estado')");        
    }
?>