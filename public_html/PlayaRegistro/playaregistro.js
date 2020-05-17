  function valmje(i,e){
                  if(typeof e === "undefined"){
                  document.getElementById(i).innerHTML = "Debe contener al menos dos letras de la A a la Z, en minúscula o mayúscula.";
                  }else{
                  document.getElementById(i).innerHTML = e;
                  }
          
          }
          
          function borrarvalmje(i){
          document.getElementById(i).innerHTML = "";
           
          }
function controlpas(){
                  var e = document.getElementById("pas").value;
                  var regpas = /(?=.*\d)(?=.*[a-z]).{5,8}/;
                  var a = document.getElementById("pasc").value;
                  if((regpas.test(e)) && (e === a)){
                          document.getElementById("invalidomje").style.display = "none";
                          document.getElementById("pasc").className = "valido";
                          document.getElementById("validomje").style.display = "block";
                          document.getElementById("validomje").className = "valid-feedback";
                  }else{
                      document.getElementById("validomje").style.display = "none";
                      document.getElementById("pasc").className = "invalido";
                      document.getElementById("invalidomje").style.display = "block";
                      document.getElementById("invalidomje").className = "invalid-feedback";
                      document.getElementById("invalidomje").innerHTML = "La contraseña no coincide";
                  }
          
          
          
          }
          
          
          function control(e){
                  var regpas = /(?=.*\d)(?=.*[a-z]).{5,8}/;
                  var a = document.getElementById("pas").value;
                  if((regpas.test(e)) && (e === a)){
                          document.getElementById("invalidomje").style.display = "none";
                          document.getElementById("pasc").className = "valido";
                          document.getElementById("validomje").style.display = "block";
                          document.getElementById("validomje").className = "valid-feedback";
                  }else{
                      document.getElementById("validomje").style.display = "none";
                      document.getElementById("pasc").className = "invalido";
                      document.getElementById("invalidomje").style.display = "block";
                      document.getElementById("invalidomje").className = "invalid-feedback";
                      document.getElementById("invalidomje").innerHTML = "La contraseña no coincide";
                  }
          
          }
          
          function comprobando (obj){
              if (obj.checked){
                document.getElementById('ha').disabled = true;
                document.getElementById('hc').disabled = true;
                document.getElementById('a24h').disabled = true;
                document.getElementById('a24h').checked = false;
                document.getElementById('24horas').style.opacity="0.5";
              }else{
                document.getElementById('ha').disabled = false;
                document.getElementById('hc').disabled = false;
                document.getElementById('a24h').disabled = false;
                document.getElementById('24horas').style.opacity="100";
              }
              
          }
          
          function comprobando1 (obj){
              if (obj.checked){
                document.getElementById('ha').disabled = true;
                document.getElementById('hc').disabled = true;
                document.getElementById('solomensual').disabled = true;
                document.getElementById('solomensual').checked = false;
                document.getElementById('isolomen').style.opacity="0.5";
              }else{
                document.getElementById('ha').disabled = false;
                document.getElementById('hc').disabled = false;
                document.getElementById('solomensual').disabled = false;
                document.getElementById('isolomen').style.opacity="100";
              }
              
          }
          

