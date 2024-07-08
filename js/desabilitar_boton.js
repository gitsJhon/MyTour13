const miBoton = document.getElementById("miBoton");
const campo9 = document.getElementById("n_identificacionn");
const campo10 = document.getElementById("passwordd");

// Define una función para verificar si todos los campos están completos
function verificarCamposCompletos() {
  return n_identificacionn.value !== "" && passwordd.value !== "";
}

// Deshabilita el botón al principio
miBoton.disabled = true;

// Agrega un controlador de eventos a cada campo que se ejecutará cada vez que se cambie el valor del campo
n_identificacionn.addEventListener("input", () => {
  miBoton.disabled = !verificarCamposCompletos();
});

passwordd.addEventListener("input", () => {
  miBoton.disabled = !verificarCamposCompletos();
});
