function soloLetras(event) {
    var charCode = event.which || event.keyCode;
    var charTyped = String.fromCharCode(charCode);
    // Verificar si el carácter presionado es una letra
    if (/^[a-zA-Z ]+$/.test(charTyped)) {
      return true;
    } else {
      // Si el carácter no es una letra, no permitir que se ingrese
      event.preventDefault();
      return false;
    }
  }
  