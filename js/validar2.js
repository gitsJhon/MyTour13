function validar2(){
    var n_identificacionn, password;
    n_identificacionn = document.getElementById("n_identificacionn").value;
    password = document.getElementById("password").value;
    
    if(n_identificacionn === "" ||password === "" ){
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
    else if(n_identificacionn.length>20){
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
    else if(n_identificacionn.length<8){
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
    else if(isNaN(n_identificacionn)){
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
          title: 'La identificacion ingresada no es un numero',
          text: 'Solo puedes ingresar numeros.'
        })
        return false;
    }
    else if(password.length>8){
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
    else if(password.length<4){
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