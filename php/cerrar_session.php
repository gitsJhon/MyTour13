<?php
    if (isset($_POST["btn_cerrar"])) { //se ejecuta para cualquier usuario si le da al boton de cerrar sesion
        session_destroy(); // destruye su sesion actual
        header('.../index.php'); // redirige al index
        die(); // aqui acabo la ejecucion de todo codigo, por si acaso
    }
?>