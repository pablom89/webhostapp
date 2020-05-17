function control() {
  var usuario = document.getElementById("patente").value;
  var contrasena= document.getElementById("conta").value;
  var log = new XMLHttpRequest();
  log.onreadystatechange = function() {
       if (this.readyState == 4 && this.status == 200) {
                      var cond = this.responseText;
                      if(cond === "ok"){
                      alert("todo ok");
                      window.location.replace('/ConductoresPanel/ConductoresPanel.php');
                      }else{
                              if(this.responseText === "La patente no esta registrada"){
                                  document.getElementById("demo1").innerHTML = this.responseText;        
                              
                              }else{                      
                               document.getElementById("demo2").innerHTML = this.responseText;
                               document.getElementById("demo1").innerHTML = "";
                               }
                      }
                    }
  };  
  log.open("POST", "info.php", true);
  log.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  log.send("u="+usuario+"&c="+contrasena);
}

function entradaplaya() {
  var usuario = document.getElementById("nombre").value;
  var contrasena= document.getElementById("conta").value;
  var log = new XMLHttpRequest();
  log.onreadystatechange = function() {
       if (this.readyState == 4 && this.status == 200) {
                      var cond = this.responseText;
                      if(cond === "ok"){
                      alert("todo ok");
                      window.location.replace('/PlayaPanel/Playa.php');
                      }else{
                              if(this.responseText === "Usuario no registrado"){
                                  document.getElementById("demo1").innerHTML = this.responseText;        
                              
                              }else{                      
                               document.getElementById("demo2").innerHTML = this.responseText;
                               document.getElementById("demo1").innerHTML = "";
                               }
                      }
                    }
  };  
  log.open("POST", "infoplaya.php", true);
  log.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  log.send("u="+usuario+"&c="+contrasena);
}



