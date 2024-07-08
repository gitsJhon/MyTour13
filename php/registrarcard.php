<?php
        include ("conexion.php");
        $nombre = $_POST['nombre_graffiti'];
        $nombre_autor= $_POST['nombre_autor'];
        $descripcion =  $_POST['descripcion_graffiti'];
        $imagen_Card = $_FILES['imagen_carta']['name'];
        $image = $_FILES['imagen_carta']['tmp_name'];

       
        //Aca usarmos la ruta y a bd_img para almacenar tanto la imagen m el base de datos que en la carpera imagencard//

        $ruta = "../img/imagencard/". $imagen_Card;
        $bd_img = "img/imagencard/". $imagen_Card; 

        move_uploaded_file($image,$ruta);  /* mover imagen hacia una carpeta */

       //aca usasamos el insert into para mandar la informacion a la base de datos y esta quede registrada//
        $sql = mysqli_query($conexion,"INSERT INTO `graffitis`(`nombre_graffiti`, `nombre_autor`, `imagen_carta`, `descripcion_graffiti`) VALUES ('$nombre','$nombre_autor','$bd_img','$descripcion');" );
       
        ///aca usamos el if para que nos muestre una alerta si los datos se registraron correctamente y si no usamos el else para decirle no se registro/
        if($sql){
            echo "
            <script>
                alert('Registro exitoso');
                window.location='../galeria_de_arte.php';
            </script>";
        }else{
            echo "
            <script>
                alert('el registro no fue exitoso, intentalo nuevamente');
            </script>";
           
        }
?>