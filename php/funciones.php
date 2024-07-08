<?php
    include('conexion.php');
    if (isset($_POST['btn_enviar_crear_cuenta'])) { //se Ejecuta con el boton de crear cuenta
        //registrar usuario
        //tomo los datos enviados por post
        $nombre = $_POST["nombre"]; // Nombre de usuario
        $apellido = $_POST["apellidos"]; // Apellido del usuario
        $contraseña = $_POST["confirm-password"];  //Contraseña del usuario
        $contraseña2 = md5($contraseña); //Confirmacion de la contraseña
        $gmail = $_POST["correo"]; //Correo del usuario
        $pais = $_POST["pais"]; //Pais del usuario
        $numero_identificacion = $_POST["n_identificacion"]; //numero de identificacion
        $tipo_usuario = $_POST["tipo_usu"]; // tipo de usuario (guia/turista/admin)
        //codigo para tomar la foto, moverla a una carpeta y a la BD
        $foto = $_FILES['nfoto']['name'];
        $imagen = $_FILES['nfoto']['tmp_name'];
        $ruta = "../img/fotoperfil/". $foto;
        $bd_imagen ="img/fotoperfil/". $foto;
        move_uploaded_file($imagen,$ruta);
        //primero verifico que el usuario no exista
        $existe = mysqli_query($conexion,"SELECT id_usuario FROM usuario WHERE id_usuario = '$numero_identificacion'"); //Busco si la identificacion ya esta en la BD
        $existe_consulta = mysqli_fetch_array($existe); // tomo los resultados de la consulta
        if ($existe_consulta >= 1) {
            header("location:../index.php?alerta=cuenta_ya_existente");
        }
        else{
            $insert = mysqli_query($conexion,"INSERT INTO usuario(id_usuario, nombre_usuario, pass, apellido_usuario, gmail_usuario, rol_usuario, foto_usuario) VALUES ('$numero_identificacion','$nombre','$contraseña2','$apellido','$gmail','$tipo_usuario','$bd_imagen')");
            header("location:../index.php");
        }
    }
?>