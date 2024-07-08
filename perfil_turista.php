<!DOCTYPE html>
<html lang="es-en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MyTour 13</title>
  <link rel="stylesheet" href="css/estilos_chat_turi.css">
  <link rel="stylesheet" href="css/turista/perfil_turista.css">
  <link rel="stylesheet" href="css/semantic.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="js/jquery-3.1.1.min.js"></script>
  <script src="js/semantic.js"></script>

</head>

<body style="background-color: #fff;">

  <?php 
    session_start();
    include('php/conexion.php');
    
    $id= $_SESSION['id'];
    $consulta = mysqli_query($conexion,"SELECT * FROM usuario WHERE id_usuario='$id'");
    $valores = mysqli_fetch_array($consulta);
  ?>
  
  <section>
    <br>
    <div class="ui one column grid">
      <div class="imagennn" class="column">
        <div class="ui fluid image">
          <!-- foto de perfil donde el usuario pobra cambiarla cuanto guste -->
          <h4 class="estilo_h4"><i style="position: relative; top: 4px; " class="user black icon"></i> <b
              style="color: #fff ; position: relative; top: 4px;">Turista</b></h4>
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
      </div>
    </div>
    <div>
      <div class="caja1">
        <form action="" class="ui form">
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
                        <label>Nombre</label>
                        <input class="place" style="background-color: rgba(117, 250, 255, 0.349); text-align:center;" type="text"
                          placeholder="<?php echo $valores ['nombre_usuario']; ?>" name="" id="">
                      </div>
                      <div class="field">
                        <label>Apellido </label>
                        <input  class="place" style="background-color: rgba(117, 250, 255, 0.349); text-align:center;" type="text"
                          placeholder="<?php echo $valores ['apellido_usuario']; ?>" name="" id="">
                      </div>
                      <div class="field">
                        <label>Telefono</label>
                        <input  class="place" style="background-color: rgba(117, 250, 255, 0.349); text-align:center;" type="number"
                          placeholder="Telefono" name="" id="">
                      </div>
                    </div>
                    <div class="one field">
                      <div class="field">
                        <label>Correo</label>
                        <input  class="place" style="background-color: rgba(117, 250, 255, 0.349); text-align:center;" type="text"
                          placeholder="<?php echo $valores ['gmail_usuario']; ?>" name="" id="">
                      </div>
                    </div>
                    <div class="one field">
                        <div class="field">
                          <select class="estilos_boton" name="pais" id="pais" style="background-color: rgba(117, 250, 255, 0.349); text-align:center;">
                              <option class="color_inputs" value="">Selecciona tu pais:</option>
                              <option class="color_inputs" value="Afganistán">Afganistán</option>
                              <option class="color_inputs" value="Albania">Albania</option>
                              <option class="color_inputs" value="Alemania">Alemania</option>
                              <option class="color_inputs" value="Andorra">Andorra</option>
                              <option class="color_inputs" value="Angola">Angola</option>
                              <option class="color_inputs" value="Antigua y Barbuda">Antigua y Barbuda</option>
                              <option class="color_inputs" value="Arabia Saudita">Arabia Saudita</option>
                              <option class="color_inputs" value="Argelia">Argelia</option>
                              <option class="color_inputs" value="Argentina">Argentina</option>
                              <option class="color_inputs" value="Armenia">Armenia</option>
                              <option class="color_inputs" value="Australia">Australia</option>
                              <option class="color_inputs" value="Austria">Austria</option>
                              <option class="color_inputs" value="Azerbaiyán">Azerbaiyán</option>
                              <option class="color_inputs" value="Bahamas">Bahamas</option>
                              <option class="color_inputs" value="Bangladesh">Bangladesh</option>
                              <option class="color_inputs" value="Barbados">Barbados</option>
                              <option class="color_inputs" value="Bahréin (Baréin)">Bahréin (Baréin)</option>
                              <option class="color_inputs" value="Bélgica">Bélgica</option>
                              <option class="color_inputs" value="Belice">Belice</option>
                              <option class="color_inputs" value="Benín">Benín</option>
                              <option class="color_inputs" value="Bielorrusia">Bielorrusia</option>
                              <option class="color_inputs" value="Birmania/Myanmar">Birmania/Myanmar</option>
                              <option class="color_inputs" value="Bolivia">Bolivia</option>
                              <option class="color_inputs" value="Bosnia y Herzegovina">Bosnia y Herzegovina</option>
                              <option class="color_inputs" value="Botsuana">Botsuana</option>
                              <option class="color_inputs" value="Brasil">Brasil</option>
                              <option class="color_inputs" value="Brunéi">Brunéi</option>
                              <option class="color_inputs" value="Bulgaria">Bulgaria</option>
                              <option class="color_inputs" value="Burkina Faso">Burkina Faso</option>
                              <option class="color_inputs" value="Burundi">Burundi</option>
                              <option class="color_inputs" value="Bután">Bután</option>
                              <option class="color_inputs" value="Cabo Verde">Cabo Verde</option>
                              <option class="color_inputs" value="Camboya">Camboya</option>
                              <option class="color_inputs" value="Camerún">Camerún</option>
                              <option class="color_inputs" value="Canadá">Canadá</option>
                              <option class="color_inputs" value="Catar">Catar</option>
                              <option class="color_inputs" value="Chad">Chad</option>
                              <option class="color_inputs" value="Chile">Chile</option>
                              <option class="color_inputs" value="China">China</option>
                              <option class="color_inputs" value="Chipre">Chipre</option>
                              <option class="color_inputs" value="Ciudad del Vaticano">Ciudad del Vaticano</option>
                              <option class="color_inputs" value="Colombia">Colombia</option>
                              <option class="color_inputs" value="Comoras">Comoras</option>
                              <option class="color_inputs" value="Corea del Norte">Corea del Norte</option>
                              <option class="color_inputs" value="Corea del Sur">Corea del Sur</option>
                              <option class="color_inputs" value="Costa de Marfil">Costa de Marfil</option>
                              <option class="color_inputs" value="Costa Rica">Costa Rica</option>
                              <option class="color_inputs" value="Croacia">Croacia</option>
                              <option class="color_inputs" value="Cuba">Cuba</option>
                              <option class="color_inputs" value="Dinamarca">Dinamarca</option>
                              <option class="color_inputs" value="Dominica">Dominica</option>
                              <option class="color_inputs" value="Ecuador">Ecuador</option>
                              <option class="color_inputs" value="Egipto">Egipto</option>
                              <option class="color_inputs" value="El Salvador">El Salvador</option>
                              <option class="color_inputs" value="Emiratos Árabes Unidos">Emiratos Árabes Unidos</option>
                              <option class="color_inputs" value="Eritrea">Eritrea</option>
                              <option class="color_inputs" value="Eslovaquia">Eslovaquia</option>
                              <option class="color_inputs" value="Eslovenia">Eslovenia</option>
                              <option class="color_inputs" value="España">España</option>
                              <option class="color_inputs" value="Estados Unidos">Estados Unidos</option>
                              <option class="color_inputs" value="Estonia">Estonia</option>
                              <option class="color_inputs" value="Etiopía">Etiopía</option>
                              <option class="color_inputs" value="Filipinas">Filipinas</option>
                              <option class="color_inputs" value="Finlandia">Finlandia</option>
                              <option class="color_inputs" value="Fiyi">Fiyi</option>
                              <option class="color_inputs" value="Francia">Francia</option>
                              <option class="color_inputs" value="Gabón">Gabón</option>
                              <option class="color_inputs" value="Gambia">Gambia</option>
                              <option class="color_inputs" value="Georgia">Georgia</option>
                              <option class="color_inputs" value="Ghana">Ghana</option>
                              <option class="color_inputs" value="Granada">Granada</option>
                              <option class="color_inputs" value="Grecia">Grecia</option>
                              <option class="color_inputs" value="Guatemala">Guatemala</option>
                              <option class="color_inputs" value="Guyana">Guyana</option>
                              <option class="color_inputs" value="Guinea">Guinea</option>
                              <option class="color_inputs" value="Guinea ecuatorial">Guinea ecuatorial</option>
                              <option class="color_inputs" value="Guinea-Bisáu">Guinea-Bisáu</option>
                              <option class="color_inputs" value="Haití">Haití</option>
                              <option class="color_inputs" value="Honduras">Honduras</option>
                              <option class="color_inputs" value="Hungría">Hungría</option>
                              <option class="color_inputs" value="India">India</option>
                              <option class="color_inputs" value="Indonesia">Indonesia</option>
                              <option class="color_inputs" value="Irak">Irak</option>
                              <option class="color_inputs" value="Irán">Irán</option>
                              <option class="color_inputs" value="Irlanda">Irlanda</option>
                              <option class="color_inputs" value="Islandia">Islandia</option>
                              <option class="color_inputs" value="Islas Marshall">Islas Marshall</option>
                              <option class="color_inputs" value="Islas Salomón">Islas Salomón</option>
                              <option class="color_inputs" value="Israel">Israel</option>
                              <option class="color_inputs" value="Italia">Italia</option>
                              <option class="color_inputs" value="Jamaica">Jamaica</option>
                              <option class="color_inputs" value="Japón">Japón</option>
                              <option class="color_inputs" value="Jordania">Jordania</option>
                              <option class="color_inputs" value="Kazajistán">Kazajistán</option>
                              <option class="color_inputs" value="Kenia">Kenia</option>
                              <option class="color_inputs" value="Kirguistán">Kirguistán</option>
                              <option class="color_inputs" value="Kiribati">Kiribati</option>
                              <option class="color_inputs" value="Kuwait">Kuwait</option>
                              <option class="color_inputs" value="Laos">Laos</option>
                              <option class="color_inputs" value="Lesoto">Lesoto</option>
                              <option class="color_inputs" value="Letonia">Letonia</option>
                              <option class="color_inputs" value="Líbano">Líbano</option>
                              <option class="color_inputs" value="Liberia">Liberia</option>
                              <option class="color_inputs" value="Libia">Libia</option>
                              <option class="color_inputs" value="Liechtenstein">Liechtenstein</option>
                              <option class="color_inputs" value="Lituania">Lituania</option>
                              <option class="color_inputs" value="Luxemburgo">Luxemburgo</option>
                              <option class="color_inputs" value="Macedonia del Norte">Macedonia del Norte</option>
                              <option class="color_inputs" value="Madagascar">Madagascar</option>
                              <option class="color_inputs" value="Malasia">Malasia</option>
                              <option class="color_inputs" value="Malaui">Malaui</option>
                              <option class="color_inputs" value="Maldivas">Maldivas</option>
                              <option class="color_inputs" value="Malí">Malí</option>
                              <option class="color_inputs" value="Malta">Malta</option>
                              <option class="color_inputs" value="Marruecos">Marruecos</option>
                              <option class="color_inputs" value="Mauricio">Mauricio</option>
                              <option class="color_inputs" value="Mauritania">Mauritania</option>
                              <option class="color_inputs" value="México">México</option>
                              <option class="color_inputs" value="Micronesia">Micronesia</option>
                              <option class="color_inputs" value="Moldavia">Moldavia</option>
                              <option class="color_inputs" value="Mónaco">Mónaco</option>
                              <option class="color_inputs" value="Mongolia">Mongolia</option>
                              <option class="color_inputs" value="Montenegro">Montenegro</option>
                              <option class="color_inputs" value="Mozambique">Mozambique</option>
                              <option class="color_inputs" value="Namibia">Namibia</option>
                              <option class="color_inputs" value="Nauru">Nauru</option>
                              <option class="color_inputs" value="Nepal">Nepal</option>
                              <option class="color_inputs" value="Nicaragua">Nicaragua</option>
                              <option class="color_inputs" value="Níger">Níger</option>
                              <option class="color_inputs" value="Nigeria">Nigeria</option>
                              <option class="color_inputs" value="Noruega">Noruega</option>
                              <option class="color_inputs" value="Nueva Zelanda">Nueva Zelanda</option>
                              <option class="color_inputs" value="Omán">Omán</option>
                              <option class="color_inputs" value="Países Bajos">Países Bajos</option>
                              <option class="color_inputs" value="Pakistán">Pakistán</option>
                              <option class="color_inputs" value="Palaos">Palaos</option>
                              <option class="color_inputs" value="Panamá">Panamá</option>
                              <option class="color_inputs" value="Papúa Nueva Guinea">Papúa Nueva Guinea</option>
                              <option class="color_inputs" value="Paraguay">Paraguay</option>
                              <option class="color_inputs" value="Perú">Perú</option>
                              <option class="color_inputs" value="Polonia">Polonia</option>
                              <option class="color_inputs" value="Portugal">Portugal</option>
                              <option class="color_inputs" value="Reino Unido">Reino Unido</option>
                              <option class="color_inputs" value="República Centroafricana">República Centroafricana</option>
                              <option class="color_inputs" value="República Checa">República Checa</option>
                              <option class="color_inputs" value="República del Congo">República del Congo</option>
                              <option class="color_inputs" value="República Democrática del Congo">República Democrática del Congo</option>
                              <option class="color_inputs" value="República Dominicana">República Dominicana</option>
                              <option class="color_inputs" value="República Sudafricana">República Sudafricana</option>
                              <option class="color_inputs" value="Ruanda">Ruanda</option>
                              <option class="color_inputs" value="Rumanía">Rumanía</option>
                              <option class="color_inputs" value="Rusia">Rusia</option>
                              <option class="color_inputs" value="Samoa">Samoa</option>
                              <option class="color_inputs" value="San Cristóbal y Nieves">San Cristóbal y Nieves</option>
                              <option class="color_inputs" value="San Marino">San Marino</option>
                              <option class="color_inputs" value="San Vicente y las Granadinas">San Vicente y las Granadinas</option>
                              <option class="color_inputs" value="Santa Lucía">Santa Lucía</option>
                              <option class="color_inputs" value="Santo Tomé y Príncipe">Santo Tomé y Príncipe</option>
                              <option class="color_inputs" value="Senegal">Senegal</option>
                              <option class="color_inputs" value="Serbia">Serbia</option>
                              <option class="color_inputs" value="Seychelles">Seychelles</option>
                              <option class="color_inputs" value="Sierra Leona">Sierra Leona</option>
                              <option class="color_inputs" value="Singapur">Singapur</option>
                              <option class="color_inputs" value="Siria">Siria</option>
                              <option class="color_inputs" value="Somalia">Somalia</option>
                              <option class="color_inputs" value="Sri Lanka">Sri Lanka</option>
                              <option class="color_inputs" value="Suazilandia">Suazilandia</option>
                              <option class="color_inputs" value="Sudán">Sudán</option>
                              <option class="color_inputs" value="Sudán del Sur">Sudán del Sur</option>
                              <option class="color_inputs" value="Suecia">Suecia</option>
                              <option class="color_inputs" value="Suiza">Suiza</option>
                              <option class="color_inputs" value="Surinam">Surinam</option>
                              <option class="color_inputs" value="Tailandia">Tailandia</option>
                              <option class="color_inputs" value="Tanzania">Tanzania</option>
                              <option class="color_inputs" value="Tayikistán">Tayikistán</option>
                              <option class="color_inputs" value="Timor Oriental">Timor Oriental</option>
                              <option class="color_inputs" value="Togo">Togo</option>
                              <option class="color_inputs" value="Tonga">Tonga</option>
                              <option class="color_inputs" value="Trinidad y Tobago">Trinidad y Tobago</option>
                              <option class="color_inputs" value="Túnez">Túnez</option>
                              <option class="color_inputs" value="Turkmenistán">Turkmenistán</option>
                              <option class="color_inputs" value="Turquía">Turquía</option>
                              <option class="color_inputs" value="Tuvalu">Tuvalu</option>
                              <option class="color_inputs" value="Ucrania">Ucrania</option>
                              <option class="color_inputs" value="Uganda">Uganda</option>
                              <option class="color_inputs" value="Uruguay">Uruguay</option>
                              <option class="color_inputs" value="Uzbekistán">Uzbekistán</option>
                              <option class="color_inputs" value="Vanuatu">Vanuatu</option>
                              <option class="color_inputs" value="Venezuela">Venezuela</option>
                              <option class="color_inputs" value="Vietnam">Vietnam</option>
                              <option class="color_inputs" value="Yemen">Yemen</option>
                              <option class="color_inputs" value="Yibuti">Yibuti</option>
                              <option class="color_inputs" value="Zambia">Zambia</option>
                              <option class="color_inputs" value="Zimbabue">Zimbabue</option>
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
                    <a style="color: #fff; font-family:cursive;" onclick="swal('Datos actualizados','','Succes')" name="" id="">
                      Atualizar
                    </a>
                    <i class="checkmark green icon"></i>
                  </div>
                </div>
              </div>
            </a>
            <div class="two fields">
              <div class="field">
                <label for="">Nombres</label>
                <p class="cajaa">
                  <?php echo $valores ['nombre_usuario']; ?>
                </p>
              </div>
              <div class="field">
                <label for="">Apellidos</label>
                <p class="cajaa">
                  <?php echo $valores ['apellido_usuario']; ?>
                </p>
              </div>
            </div>
            <div class="two fields">
              <div class="field">
                <label for="">Numero de documento</label>
                <p class="cajaa">
                  <?php echo $valores ['id_usuario']; ?>
                </p>
              </div>
              <div class="field">
                <label for="">Fecha de creación</label>
                <p class="cajaa">10/2/2022</p>
              </div>
          </div>
        </form>
      </div>
      <div class="caja3">
        <form action="" class="ui form">
          <div class=" one field">
            <div class="field">
              <label for="">Correo activo</label>
              <p class="cajaa">
                <?php echo $valores ['gmail_usuario']; ?>
              </p>
            </div>
          </div>
          <div class=" one field">
            <div class="field">
              <label for="">Pais</label>
              <p class="cajaa">
                colombia
              </p>
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>
  <script>
    $('.ui.dropdown').dropdown();
  </script>
  <script>
    $("#test3").click(function () {
      $(".test3").modal('show');
    });
  </script>
  <script src="js/valida_perfil.js"></script>
</body>


</html>