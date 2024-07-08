function validar_contrato(){
    var fecha_inicio, fecha_fin, metodo_pago, cant_personas;
    fecha_inicio = document.getElementById("fecha_inicio").value;
    fecha_fin = document.getElementById("fecha_fin").value;
    metodo_pago = document.getElementById("metodo_pago").value;
    cant_personas = document.getElementById("cant_personas").value;
    
    if(fecha_inicio === "" ||fecha_fin === ""|| fecha_fin === "" || metodo_pago === "" || cant_personas === ""){
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 4000,
            timerProgressBar: true,
            didOpen: (toast) => {
              toast.addEventListener('mouseenter', Swal.stopTimer)
              toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
          })
          
          Toast.fire({
            icon: 'error',
            text: 'Recuerda que todos los campos son obligatorios.'
          })
    return false;
    }
    else if(cant_personas.length>10){
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 4000,
            timerProgressBar: true,
            didOpen: (toast) => {
              toast.addEventListener('mouseenter', Swal.stopTimer)
              toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
          })
          
          Toast.fire({
            icon: 'error',
            title: 'Ingresaste un numero muy largo.',
            text: 'Solo puedes ingresar como maximo 10 caracteres.'
          })
        return false;
    }
}