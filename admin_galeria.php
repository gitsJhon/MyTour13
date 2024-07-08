<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="css/subestilos/estilos_subida_Admin.css">
    <link rel="stylesheet" href="css/semantic.min.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body class="Fondo">
    <div class="ui container">
        <!-- form permite mandar esta informacion al php para que se haga la ejecucion de las cartas -->
        <form action="php/registrarcard.php" method="POST" enctype="multipart/form-data">
            <div class="conte">
            <div class="contendor3">
                <div >            
                    <button class="galeria">
                        Subir imagen  <b style="color: red; text-align: center;">:</b>
                        <input  class="ocultar"  type="file" name="imagen_carta" id="imagen_Card" onchange="return Exten()" required>      
                    </button>         
                </div>
                <div class="text_galeria">
                    <div class="cuerpo">
                        <input type="text" class="galeria_texto" name="nombre_graffiti" id="nombre_graffiti" required>
                        <span class="movimiento"></span>
                        <span class="pie"></span>
                        <label id="manzana">Ingrese el nombre de la imagen <b style="color:red;">:</b></label>
                    </div>
                </div>
                <div class="text_galeria2">
                    <div class="cuerpo">
                        <input type="text" class="galeria_texto" name="nombre_autor" id="nombre_autor" required>
                        <span class="movimiento"></span>
                        <span class="pie"></span>
                        <label id="manzana">Ingrese el nombre del autor <b style="color:red;">:</b></label>
                    </div>
                </div >
                <div class="text_galeria3">
                    <div class="ui  form" >
                        <div class="field">
                        <label>DESCRIPCIÓN DE LA IMAGEN</label>
                        <textarea  name="descripcion_graffiti" id="descripcion_graffiti"  requiered></textarea>
                        </div>
                    </div>
                </div>
                <div class="text_galeria4">
                    <button class="enviar" type="submit">
                        Enviar
                    </button>

                </div>
            </div>
            </div>
        </form>
    </div>
    
<script >
    /* FUNCION EN JAVASCRIPT PERMITE VALIDAR EL INPUT FILE , CONTROLAMOS SUBIDAS UNICAMENTE IMGANES CON ESTAS REFERENCIAS */
    function Exten(){
    var imagen_Card =document.getElementById('imagen_Card')
    var ruta =imagen_Card.value
    var extenciones= /(.jpg|.png|.jpeg)$/i

    if(!extenciones.exec(ruta)){
        swal( 'Archivo desconocido','Debes subir imagenes tipo png,jpg  o jpeg','error');
        imagen_Card.value=''
        return false
    }
    
    
    }
</script>   
</body>
</html>