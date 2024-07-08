<?php
        session_start();
        $id_reportado = $_SESSION["id_receiver"];
        include("php/conexion.php");
        $nombre_result = mysqli_query($conexion,"SELECT nombre_usuario FROM usuario where id_usuario = '$id_reportado'");
        $nombre_data = mysqli_fetch_assoc($nombre_result);
        $nombre = $nombre_data["nombre_usuario"];
        $id_reportante = $_SESSION["id"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/chat/contracto y reporte/reportes.css">
    <title>REPORTE</title>
</head>
<body>
    <H1>Reporte De Usuario  </H1>
    <div class="cuadro">
        <div class="container">
            <form class="formulariooi" action="" method="POST" onsubmit="return validar_contrato();">
                <label class="labell" for="nombre_guia">Nombre De La Persona Reportada:</label>
                <p class="estilo_input"><?php echo $nombre ?></p><br>
                <label class="labell" for="metodo_pago">Tipo De Reporte:</label>
                <select class="estilos_boton" name="tipo_reporte" id="metodo_pago">
                    <option class="color_inputs" value="">Selecciona:</option>
                    <option class="color_inputs" value="Estafa">Estafa</option>
                    <option class="color_inputs" value="Incumplimiento">Incumplimiento</option>
                    <option class="color_inputs" value="OTRO">Otro</option>
                </select>
                <br>
                <br>
                <label class="labell" for="Descripcion">Descripcion del Problema</label>
                <textarea class="estilo_input" type="text" id="Descripcion" name="Descripcion" required> </textarea>
                    <button class="boton" type="button"><b>CANCELAR</b></button>
                    <button class="boton" type="submit" name="reportar"><b>REPORTAR</b></button>
            </form>
        </div>
    </div>
</body>
</head>
</html>
<?php
    if (isset($_POST["reportar"])) {
        $tipo_reporte = $_POST["tipo_reporte"];
        $Descripcion = $_POST["Descripcion"];
        $desicion = "por confirmar";
        $insert = mysqli_query($conexion, "INSERT INTO reportes(razon_reporte, descripcion_reporte, id_reportante, id_reportado, estado) VALUES ('$tipo_reporte', '$Descripcion', '$id_reportante', '$id_reportado', '$desicion')");
    }
?>
    
    