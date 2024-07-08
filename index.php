<?php
  session_start();
  session_destroy();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="img/Untitled (1).png" type="image/x-icon">
  <link rel="stylesheet" href="css/stylee.css">
  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <!-- links del css para cargar los estilos de botones  -->
  <link rel="stylesheet" href="css/index/botones.css">
  <link rel="stylesheet" href="css/index/boton2.css">
  <link rel="stylesheet" href="css/index/boton3.css">
  <link rel="stylesheet" href="css/index/boton4.css">
  <!-- otro estilos -->
  <link rel="stylesheet" href="css/index/logo.css">
  <link rel="stylesheet" href="css/index/subida_foto.css">
  <link rel="stylesheet" href="css/index/contra.css">
  <!--  -->

  <!--  -->

  <script src="js/jquery-3.1.1.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <title>My tour 13</title>
</head>

<body>
  <div class="container-form sign-up">
    <div class="formulario_iniciarsesion">
      <br><br>
      <br><br>
      <br><br>
      <br><br>
      <img class="imagen_tour1" src="img/logo_final.png">
      <b class="create-account1">INICIAR SESIÓN</b>
      <div>
        <abbr title="Terminos de uso" class="abbrr">
          <a class="iconos1" data-bs-toggle="modal" data-bs-target="#terminos_de_uso">
            <div class="border-icon">
              <i class='bx bx-folder-plus'></i>
            </div>
          </a>
        </abbr>
        <abbr title="Sobre nosotros" class="abbrr">
          <a class="iconos2" data-bs-toggle="modal" data-bs-target="#acerca_de">
            <div class="border-icon">
              <i class='bx bx-group'></i>
            </div>
          </a>
        </abbr>
        <abbr title="Como usar My tour 13" class="abbrr">
          <a class="iconos3" data-bs-toggle="modal" data-bs-target="#manual">
            <div class="border-icon">
              <i class='bx bxs-file-pdf'></i>
            </div>
          </a>
        </abbr>
      </div>
      <br>
      <form class="formulario_position" action="php/inicio_sesion.php" method="post" onsubmit="return validar2();">
        <br>
        <input class="estilos_boton" type="text" placeholder="Numero de identificación" name="n_identificacionn"
          id="n_identificacionn">
        <input class="estilos_boton" type="password" placeholder="Contraseña" name="password" id="password">
        <a href="#" id="show-passwords"><img class="boton_ojo" src="img/eyee4.png"></a>
        <br><br>
        <button type="submit" class="boton1" name="btn_iniciar" id="btn2"><b>Iniciar sesión</b></button>
        <br><br>
        <a data-bs-toggle="modal" data-bs-target="#olvidaste_contra" class="olvidaste_contraseña">
          ¿Olvidaste tu contraseña?
        </a>
      </form>
      <br><br>
      <div class="welcome-back">
        <div class="message">
          <button class="sign-in-btn">Crear cuenta nueva</button>
        </div>
      </div>
    </div>
  </div>
  <div class="container-form sign-in">
    <div class="formulario_crearcuenta">
      <br>
      <br><br>
      <img class="imagen_tour2" src="img/logo_final.png">
      <b class="create-account2">CREAR CUENTA</b>
      <div>
        <abbr title="Terminos de uso" class="abbrr">
          <a class="iconos4" data-bs-toggle="modal" data-bs-target="#terminos_de_uso">
            <div class="border-icon">
              <i class='bx bx-folder-plus'></i>
            </div>
          </a>
        </abbr>
        <abbr title="Sobre nosotros" class="abbrr">
          <a class="iconos5" data-bs-toggle="modal" data-bs-target="#acerca_de">
            <div class="border-icon">
              <i class='bx bx-group'></i>
            </div>
          </a>
        </abbr>
        <abbr title="Como usar My tour 13" class="abbrr">
          <a class="iconos6" data-bs-toggle="modal" data-bs-target="#manual">
            <div class="border-icon">
              <i class='bx bxs-file-pdf'></i>
            </div>
          </a>
        </abbr>
      </div>
      <br><br>
      <form class="formulario_positionn" action="php/funciones.php" method="POST" enctype="multipart/form-data"
        onsubmit="return validar();">
        <input class="estilos_boton" type="text" placeholder="Nombres:" name="nombre" id="nombre"
          onkeypress="return soloLetras(event)">
        <input class="estilos_boton" type="text" placeholder="Apellidos:" name="apellidos" id="apellidos"
          onkeypress=" return soloLetras(event)">
        <input class="estilos_boton" type="text" placeholder="Numero de identificación:" name="n_identificacion"
          id="n_identificacion">
        <input class="estilos_boton" type="email" placeholder="Correo electrónico:" name="correo" id="correo">
        <input class="estilos_boton" type="password" placeholder="Crea una contraseña:" id="confirm-password"
          name="confirm-password">
        <a href="#" id="show-confirm-password"><img class="boton_ojo" src="img/eyee4.png"></a>
        
        <br>
        <select class="estilos_boton" name="tipo_usu" id="tipo_usu">
          <option class="color_inputs" value="">Seleccione tipo de usuario:</option>
          <option class="color_inputs" value="G">Guia</option>
          <option class="color_inputs" value="T">Turista</option>
        </select>
        <div>
          <p class="galeria">
            <b class="text_subir">Subir imagen</b>
            <input class="ocultar" type="file" name="nfoto" id="foto" onchange="return Exten()">
          </p>
        </div>
        <button type="submit" class="boton2" id="btn" name="btn_enviar_crear_cuenta"><b>Registrarse</b></button>
      </form>
      <br><br>
      <br><br>
      <br><br>
      <br><br>
      <br><br>
      <button class="sign-up-btn" style="
            display: inline-block;
            padding: 1rem 2rem;
            font-weight: bold;
            background-color: rgb(0, 217, 255);
            border-radius:10px;
            border: none;
            outline: none;
            cursor: pointer;
            font-size: 1rem;
            margin-left: 40px;
            margin-top: 2rem;
            transition: all 0.3s ease-in;
            color: #000;
            position: relative;
            left: 50px;
            top: -40px;
            text-decoration: none;
            text-align: center;
            line-height: 1;
          ">Iniciar sesión
      </button>
    </div>
  </div>
  <div class="modal fade" id="terminos_de_uso" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel" style="color: rgb(0, 169, 199);"><b>Terminos de uso</b></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="container">
            <p>
              Esta plataforma esta creada con el fin de mejorar la experiencia de las <br>
              personas que visitan y trabajan en la comuna 13; por esto mismo invitamos
              a los usuarios leer lo que implica el usar nustra plataforma
              <br>
              <br>
              1. Para tranquilidad de nuestros usuarios, queremos que sepan que los datos
              suministrados en MyTour 13 no seran usados para ningun fin ajeno a las actividades
              que se realizan dentro de la plataforma, por lo que no seran expuestos a ninguna entidad
              por fuera de MyTour 13 y la ley, si esta asi lo requiere
              <br>
              2. En caso de que alguna entidad legal asi lo requiera, todos los datos y registros de chat
              de cualquier usuario seran entregados a estos
              <br>
              <br>
            </p>
          </div>
        </div>
        <div class="modal-footer">
        </div>
      </div>
    </div>
  </div>
  <!--MODAL OLVIDASTE CONTRASEÑA-->
  <div class="modal fade" id="olvidaste_contra" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel" style="color: rgb(0, 169, 199);"><b>¿Olvidaste tu
              contraseña?</b></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="container">
            <form action="" method="post">
              <label class="olvidaste_contra_label"><b>Ingresa tu numero de identificación:</b></label>
              <input class="olvidaste_contra_input" type="text" name="Olvidaste_contra" id="Olvidaste_contra">
              <button type="submit" class="olvidaste_contra_but"><b>Recuperar contraseña</b></button>
            </form>
            <br><br>
            <br>
          </div>
        </div>
        <div class="modal-footer">
        </div>
      </div>
    </div>
  </div>
  <!-- MODAL ACERCA DE -->
  <div class="modal fade" id="acerca_de" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel" style="color: rgb(0, 169, 199);;"><b>Sobre nosotros</b></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="container">
            <center>
              <img src="img/Untitled (1).png" width="40%" height="40%">
              <img src="img/sena.png" width="17%" height="17%">
            </center>
            <p>
              Proyecto formativo del SENA <br>
              Todos los derechos reservados a SENA <br>
              Creadores: <br>
            <ul>
              <li> Jhon Sebastian Lopez </li>
              <li> Sebastian Patiño </li>
              <li> Santiago Vargas </li>
            </ul>
            MyTour 13 es una plataforma creada para mejorar la comunicacion entre los
            turistas y guias de la comuna 13 de Medellin, con el fin de generar mas turismo
            en la zona y mayor oportunidad de trabajo independiente
            </p>
          </div>
        </div>
        <div class="modal-footer">
        </div>
      </div>
    </div>
  </div>
  <!-- MODAL MANUAL DE USO -->
  <div class="modal fade" id="manual" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel" style="color: rgb(0, 169, 199);;"><b>Como usar MyTour 13</b>
          </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="container">
            <p>En los siguientes botones podras ingresar y descargar la informacion que necesites y/o desees :</p>
            <hr>
            <div class="pdf">
              <abbr title="Descargar PDF">
                <a download="Manual de Usuario" href="pdf/Manual-de-uso .pdf">
                  <button class="buttonDownload">Manual de Usuario<i class="file red pdf outline icon"></i> </button>
                </a>
              </abbr>
              <abbr title="Descargar PDF">
                <a download="Manual Técnico" href="pdf/Manual-tecnico.pdf">
                  <button class="buttonDownload2">Manual Técnico<i class="file red pdf outline icon"></i> </button>
                </a>
              </abbr>
            </div>
            <div class="pdf2">
                <abbr title="Descargar PDF">
                  <a   href="#">
                    <button class="buttonDownload3">informe Admistrativo<i class="file red pdf outline icon"></i> </button>
                  </a>
                </abbr>
                <abbr title="Decargar PDF">
                  <a  href="#">
                    <button class="buttonDownload4">Plan de Capacitacion<i class="file red pdf outline icon"></i> </button>
                  </a>
                </abbr>
            </div> 
          </div>
        </div>
        <div class="modal-footer">
        </div>
      </div>
    </div>
  </div>
  <script src="js/valida_img.js"></script>
  <script src="js/sololetras.js"></script>
  <script src="js/solonumeros.js"></script>
  <script src="js/solonumeros2.js"></script>
  <script src="js/mostrar_contraseña1.js"></script>
  <script src="js/mostrar_contraseña2.js"></script>
  <script src="js/validar2.js"></script>
  <script src="js/validar.js"></script>
  <script src="js/script.js"></script>
  <script>
    $('.ui.dropdown').dropdown();
  </script>
  <script>
    $('.ui.dropdown').dropdown();
    const myModal = document.getElementById('myModal')
    const myInput = document.getElementById('myInput')
    myModal.addEventListener('shown.bs.modal', () => {
      myInput.focus()
    })
  </script>
      <script>
    // Verifica si se ha pasado un parámetro GET "alerta"
     var urlParams = new URLSearchParams(window.location.search);
     var alerta = urlParams.get('alerta');
     if (alerta == "usuario_no_encontrado") {
       // Muestra una alerta si el usuario no se encuentra
        Swal.mixin({
          toast: true,
          position: 'top-start', // Cambia la posición a la izquierda
          showConfirmButton: false,
          timer: 4000,
          timerProgressBar: true,
          onOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
          }
        }).fire({
          icon: 'warning',
          title: 'Cuenta no encontrada'
        })

    }
    if (alerta == "cuenta_ya_registrada") {
       // Muestra una alerta si el usuario no se encuentra
        Swal.mixin({
          toast: true,
          position: 'top-start', // Cambia la posición a la izquierda
          showConfirmButton: false,
          timer: 4000,
          timerProgressBar: true,
          onOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
          }
        }).fire({
          icon: 'warning',
          title: 'Su numero de identificacion ya fue registrado anteriormente'
        })

    }
    if (alerta == "contraseña_incorrecta") {
       // Muestra una alerta si el usuario no se encuentra
        Swal.mixin({
          toast: true,
          position: 'top-start', // Cambia la posición a la izquierda
          showConfirmButton: false,
          timer: 4000,
          timerProgressBar: true,
          onOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
          }
        }).fire({
          icon: 'warning',
          title: 'Contraseña incorrecta'
        })

    }
    
    history.replaceState({}, document.title, window.location.pathname);
  </script>
</body>

</html>