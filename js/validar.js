function validar(){
    var nombre, apellidos,n_identificacion, correo, confirmpassword, pais, tipo_usu, foto;
    nombre = document.getElementById("nombre").value;
    apellidos = document.getElementById("apellidos").value;
    n_identificacion = document.getElementById("n_identificacion").value;
    correo = document.getElementById("correo").value;
    confirmpassword = document.getElementById("confirm-password").value;
    pais = document.getElementById("pais").value;
    tipo_usu = document.getElementById("tipo_usu").value;
    foto = document.getElementById("foto").value;

    if(nombre === ""|| apellidos === "" || n_identificacion === "" ||correo === "" ||confirmpassword === "" ||pais === "" ||tipo_usu === "" ||foto === "" ){
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
            title: 'Bienvenido',
            text: 'Recuerda que todos los campos son obligatorios.'
          })
        return false;
    }
    else if(nombre.length>30){
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
            title: 'El nombre es muy largo',
            text: 'Solo puedes ingresar como maximo 30 caracteres.'
          })
        return false;
    }
    else if(apellidos.length>50){
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
            title: 'Los apellidos son muy largos',
            text: 'Solo puedes ingresar como maximo 50 caracteres.'
          })
        return false;
    }
    else if(n_identificacion.length>20){
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
            title: 'La identificacion es muy larga',
            text: 'Solo puedes ingresar como maximo 20 caracteres.'
          })
        return false;
    }
    else if(n_identificacion.length<8){
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
            title: 'La identificacion es muy corta',
            text: 'Solo puedes ingresar como minimo 8 caracteres.'
          })
        return false;
    }
    else if(correo.length>100){
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
            title: 'El correo es muy largo',
            text: 'Solo puedes ingresar como maximo 100 caracteres.'
          })
        return false;
    }
    else if(confirmpassword.length>8){
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
            title: 'La contraseña que ingresaste es muy larga',
            text: 'Solo puedes ingresar como maximo 8 caracteres.'
          })
        return false;
    }
    else if(confirmpassword.length<4){
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
            title: 'La contraseña que ingresaste es muy corta',
            text: 'Solo puedes ingresar como minimo 4 caracteres.'
          })
        return false;
    }
}