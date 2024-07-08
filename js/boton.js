function habilitar(){
    nombre = document.getElementById("nombre").value;
    apellidos = document.getElementById("apellidos").value;
    n_identificacion = document.getElementById("n_identificacion").value;
    correo = document.getElementById("correo").value;
    confirmpassword = document.getElementById("confirm-password").value;
    pais = document.getElementById("pais").value;
    tipo_usu = document.getElementById("tipo_usu").value;
    btn_enviar = document.getElementById("btn_enviar").value;
    val = 0;
  
    if(nombre == ""){
      val++;
    }
    if(apellidos == ""){
      val++;
    }
    if(n_identificacion == ""){
      val++;
    }
    if(correo == ""){
      val++;
    }
    if(confirmpassword == ""){
      val++;
    }
    if(pais == ""){
      val++;
    }
    if(tipo_usu == ""){
      val++;
    }
    if(btn_enviar == ""){
      val++;
    }
    if(val == 0){
      document.getElementById("btn").disabled = false;
    }else {
      document.getElementById("btn").disabled = true;
    }
  }
  document.getElementById("nombre").addEventListener("keyup",habilitar);
  document.getElementById("apellidos").addEventListener("keyup",habilitar);
  document.getElementById("n_identificacion").addEventListener("keyup",habilitar);
  document.getElementById("correo").addEventListener("keyup",habilitar);
  document.getElementById("confirmpassword").addEventListener("keyup",habilitar);
  document.getElementById("pais").addEventListener("change",habilitar);
  document.getElementById("tipo_usu").addEventListener("change",habilitar);
  document.getElementById("btn_enviar").addEventListener("change",habilitar);
  document.getElementById("btn1").addEventListener("click");