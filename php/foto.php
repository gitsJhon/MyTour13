<?php 
    session_start();
    include ('conexion.php');
    $id= $_SESSION['id'];
    $foto = $_FILES['foto']['name'];
    $imagen = $_FILES['foto']['tmp_name'];

    if ($foto == "" or $foto == null) {
        header("location:../perfil_turista.php");
    }


        //¿Tenemos permisos para subir la imágen?
        $ruta = "../img/fotoperfil/". $foto;
        $bd_imagen ="img/fotoperfil/". $foto;

        move_uploaded_file($imagen,$ruta);

        $sql= mysqli_query($conexion, "UPDATE usuario SET foto_usuario = '$bd_imagen' WHERE id_usuario = '$id' ");


        header("location:../perfil_turista.php");
        
?>
