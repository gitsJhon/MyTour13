function Exten() {
  var foto = document.getElementById('afoto');
  var ruta = foto.value;
  var extensiones = /(.jpg|.png|.jpeg|.gif)$/i;
  var extensionValida = extensiones.exec(ruta);

  if (!extensionValida) {
    swal('Archivo no permitido', 'Solo imagenes tipo Jpg o png o jpge', 'error');
    foto.value = '';
    document.getElementById('actualizar-btn').disabled = true; // Desactivar el botón de actualización
    return false;
  }

  // Verificar si la extensión no deseada está presente
  var extensionNoDeseada = /(.exe|.rar)$/i;
  if (extensionNoDeseada.test(extensionValida[0])) {
    foto.value = '';
    document.getElementById('actualizar-btn').disabled = true; // Desactivar el botón de actualización
    return false;
  }

  return true;
}

let img = document.getElementById('img');
let input = document.getElementById('afoto');
let actualizarBtn = document.getElementById('actualizar-btn');

input.onchange = (e) => {
  if (input.files[0]) {
    if (Exten()) {
      img.src = URL.createObjectURL(input.files[0]);
      actualizarBtn.disabled = false; // Habilitar el botón de actualización si la extensión es válida
    } else {
      img.src = 'img/fotoperfil/error.png'; // Dejar en blanco la imagen
      actualizarBtn.disabled = true; // Desactivar el botón de actualización si la extensión no es válida
    }
  } else {
    img.src = 'img/fotoperfil/error.png'; // Dejar en blanco la imagen
    actualizarBtn.disabled = false; // Habilitar el botón de actualización si no se selecciona ningún archivo
  }
};
