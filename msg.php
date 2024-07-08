<?php
    include('php/conexion.php');
    session_start();
    $id_send = $_SESSION["id"];
    $id_receiver = $_SESSION["id_receiver"];
    $consulta =mysqli_query( $conexion,"SELECT * FROM chat WHERE (id_send = '$id_send' AND id_receiver = '$id_receiver') OR (id_send = '$id_receiver' AND id_receiver = '$id_send') ORDER BY id_mensaje ASC");
    $chatData = array();    
    while ($row = mysqli_fetch_assoc($consulta)) {
        $chatData[] = array(
            'mensaje' => $row['mensaje'],
            'id_send' => $row['id_send'],
            'id_receiver' => $row['id_receiver']
        );
        
        if ($row["id_send"] == $id_send) {
            $posicion = "end";
        }
        else {
            $posicion = "right";
        }
        ?>
        <div id="datos-chat" <?php if (strlen($row["mensaje"]) <= 10 ) { echo 'class="mensaje-corto" '; }  ?>>
            <span style=""><?php echo $row["mensaje"]; ?></span>  
        </div>
        <?php
    }
?>