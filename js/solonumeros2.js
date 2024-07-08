// Obtener el elemento input
var input = document.getElementById("n_identificacion");

// Agregar un evento que detecte cualquier cambio en el input
input.addEventListener("input", function(event) {
  // Obtener el valor del input
  var inputValue = this.value;

  // Reemplazar cualquier carácter no numérico con una cadena vacía
  var newValue = inputValue.replace(/[^0-9]/g, "");

  // Actualizar el valor del input
  this.value = newValue;
});