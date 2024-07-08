const miBotonn = document.getElementById("miBotonn");
const campo1 = document.getElementById("nombre");
const campo2 = document.getElementById("apellidos");
const campo3 = document.getElementById("n_identificacion");
const campo4 = document.getElementById("correo");
const campo5 = document.getElementById("password");
const archivo = document.getElementById("foto");
const select1 = document.getElementById("pais");
const select2 = document.getElementById("tipo_usu");

// Define una función para verificar si todos los campos están completos
function verificarCamposCompletos() {
  return nombre.value !== "" && apellidos.value !== "" && n_identificacion.value !== "" && correo.value !== "" && password.value !== "" ;
}

// Deshabilita el botón al principio
miBotonn.disabled = true;

// Agrega un controlador de eventos a cada campo que se ejecutará cada vez que se cambie el valor del campo
nombre.addEventListener("input", () => {
  miBotonn.disabled = !verificarCamposCompletos();
  });

apellidos.addEventListener("input", () => {
  miBotonn.disabled = !verificarCamposCompletos();
});

n_identificacion.addEventListener("input", () => {
  miBotonn.disabled = !verificarCamposCompletos();
});

correo.addEventListener("input", () => {
  miBotonn.disabled = !verificarCamposCompletos();
  });

password.addEventListener("input", () => {
  miBotonn.disabled = !verificarCamposCompletos();
});

foto.addEventListener("change", () => {
  miBotonn.disabled = !verificarCamposCompletos();
});

pais.addEventListener("change", () => {
  miBotonn.disabled = !verificarCamposCompletos();
  });

tipo_usu.addEventListener("change", () => {
  miBotonn.disabled = !verificarCamposCompletos();
});
