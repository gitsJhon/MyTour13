function habilitar(){
    n_identificacionn = document.getElementById("n_identificacionn").value;
    password = document.getElementById("password").value;
    val = 0;
  
    if(n_identificacionn == ""){
      val++;
    }
    if(password == ""){
      val++;
    }
    if(val == 0){
      document.getElementById("btn2").disabled = false;
    }else {
      document.getElementById("btn2").disabled = true;
    }
  }
  document.getElementById("n_identificacionn").addEventListener("keyup",habilitar);
  document.getElementById("password").addEventListener("keyup",habilitar);
  document.getElementById("btn2").addEventListener("click");