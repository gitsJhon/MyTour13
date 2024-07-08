<?php
    include("conexion.php");
    include("funciones.php");
    if (isset($_POST['btn_iniciar'])) { // btn_iniciar viene del inicio de sesion 
        $id = $_POST["n_identificacionn"];
        $contraseña = $_POST["password"];
        $contraseña2 = md5($contraseña);
        $sql = mysqli_query($conexion,("SELECT id_usuario from usuario where id_usuario = '$id'"));
        $contar_user = mysqli_fetch_array($sql);
        if ($contar_user == 0) {
            header("location:../index.php?alerta=usuario_no_encontrado");
        }else{
            $pass_query = mysqli_query($conexion,("SELECT pass from usuario where id_usuario = '$id'"));
            $pass_assoc = mysqli_fetch_array($pass_query);
            $pass = $pass_assoc[0];
            if ($contraseña2 == $pass) {
                $rol_query = mysqli_query($conexion,("SELECT rol_usuario from usuario where id_usuario = '$id' and pass = '$contraseña2'"));
                $rol_assoc = mysqli_fetch_assoc($rol_query);
                $rol = $rol_assoc['rol_usuario'];
                session_start();
                switch ($rol) {
                    case 'G':
                        $_SESSION['id'] = $id;
                        header("location:../menu_guia.php");
                        break;
                    case 'T':
                        $_SESSION['id'] = $id;
                        header("location:../menu_turista.php");
                        break;
                    case 'A':
                        $_SESSION['id'] = $id;
                        header("location:../menu_administrador.php");
                        break;  
                    default:
                        header("location:../perfil_turista.php");
                        break;
                }
            } else {
                header("location:../index.php?alerta=contraseña_incorrecta");
            }
        }

    }
?>