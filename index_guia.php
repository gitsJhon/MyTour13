<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mi perfil guia</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/guia/foto_perfil.css">
  <link rel="stylesheet" href="css/semantic.min.css">
  <link rel="stylesheet" href="css/guia/perfil_guia.css">
  <script src="js/jquery-3.1.1.min.js"></script>
  <script src="js/semantic.js"></script>

</head>

<body style="background-color: #fff">
  <?php 
    session_start();
    include('php/conexion.php');
    $id= $_SESSION['id'];
    $consulta = mysqli_query($conexion, "SELECT * FROM usuario WHERE id_usuario='$id'");
    $valores = mysqli_fetch_array($consulta);  
?>
  <section>
    <br>
    <div class="imagennn" class="column">
      <div class="ui fluid image">
        <!-- foto de perfil donde el usuario pobra cambiarla cuanto guste -->
        <h4 class="estilo_h4"><i style="position: relative; top: 4px; " class="user black icon"></i> <b
            style="color: #fff ; position: relative; top: 4px; ">Guía</b></h4>
        <section class="perfil-usuario">
          <div class="avatar-perfil">
            <img src="<?php echo $valores ['foto_usuario']; ?>" id="fotico">
            <a href="cambiarfoto.php" class="cambiar-foto">
              <span><b style="color: white; font-family: cursive;font-size: 15px;">CAMBIAR FOTO</b></span>
            </a>
          </div>
        </section>
        <!--  -->
      </div>
      <div>
        <div class="caja3">
          <form action="" class="ui form">
            <div class="two fields">
              <div class="field">
                <label for="" style="text-align: center;">Nombres</label>
                <p class="cajaa">
                  <?php echo $valores ['nombre_usuario']; ?>
                </p>
              </div>
              <div class="field">
                <label for="" style="text-align:center;">Apellidos</label>
                <p class="cajaa" style="text-align: center;">
                  <?php echo $valores ['apellido_usuario']; ?>
                </p>
              </div>
            </div>
            <div class="two fields">
              <div class="field">
                <label for="" style="text-align: center;">Numero de documento</label>
                <p class="cajaa">
                  <?php echo $valores ['id_usuario']; ?>
                </p>
              </div>
              <div class="field">
                <label for="" style="text-align: center;">Correo activo</label>
                <p class="cajaa">
                  <?php echo $valores ['gmail_usuario']; ?>
                </p>
              </div>
            </div>
            <div class="one field">
              <div class="field">
                <label for="" style="text-align: center; ">Nivel De Ingles</label>
                <p class="cajaa">B1</p>
              </div>
            </div>
            <div>
              <a class="item model" id="test3">
                <b class="estilos_button">Editar</b>
                <div class="ui modal test3">
                  <i class="close icon"></i>
                  <header>
                    <h3 class="estilos_h3" style="text-align: center; color: #fff;"> Atualiza Tus Datos </h3>
                  </header> <br><br><br><br><br>
                  <div class="description">
                    <div class="ui form">
                      <div class="three fields">
                        <div class="field">
                          <label  style="text-align: center; font-size:15px" ><?php echo $valores ['nombre_usuario']; ?></label>
                          <input style="background-color: rgba(117, 250, 255, 0.349); text-align:center;" type="text"
                            placeholder="Nuevo Nombre" name="" id="">
                        </div>
                        <div class="field">
                          <label  style="text-align: center; font-size:15px"><?php echo $valores ['apellido_usuario']; ?></label>
                          <input style="background-color: rgba(117, 250, 255, 0.349); text-align:center;" type="text"
                            placeholder="Nuevo Apellido" name="" id="">
                        </div>
                        <div class="field">
                          <label  style="text-align: center; font-size:18px"><?php echo $valores ['gmail_usuario']; ?></label>
                          <input style="background-color: rgba(117, 250, 255, 0.349); text-align:center;" type="text"
                            placeholder="Nuevo Correo" name="" id="">
                        </div>
                      </div>
                      <div class="one field">
                        <div class="field">
                          <label  style="text-align: center; font-size:15px">Nivel de Ingles</label>
                          <select name="" id=""style="text-align: center; font-size:15px;box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);background-color: rgba(117, 250, 255, 0.349);" >
                            <option value="A0">A0</option>
                            <option value="A1">A1</option>
                            <option value="A2">A2</option>
                            <option value="B1">B1</option>
                            <option value="B2">B2</option>
                            <option value="c1">C1</option>
                            <option value="c2">C2</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div> <br><br><br>
                  <div class="actions">
                    <div class="ui red deny button" onclick="swal('Datos no Actualizados','','warning')">
                      <a style="color: #fff; font-family:cursive;" name="" id="">
                        Cancelar
                      </a>
                    </div>
                    <div class="ui blue right labeled icon button">
                      <a style="color: #fff; font-family:cursive;" onclick="swal('Datos actualizados','','Succes')"
                        name="" id="">
                        Atualizar
                      </a>
                      <i class="checkmark green icon"></i>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </form>
        </div>
      </div>
      <br>
      <br>
  </section>
  <script>
    $('.ui.dropdown').dropdown();
  </script>

  <script>
    $("#test3").click(function () {
      $(".test3").modal('show');
    });
  </script>



</body>


</html>