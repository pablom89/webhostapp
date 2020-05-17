    function ag(){
                        var auto=["AIXAM",	"ALFA ROMEO",	"ARCTIC CAT",	"AUDI",	"BMW",	"CAN-AM",	"CHERY",	"CHEVROLET",	"CHRYSLER",	"CITROEN",	"DACIA",	"DODGE",	"DS",	"FERRARI",	"FIAT",	"FORD",	"GAC GONOW",	"GAMMA ARENERO",	"GEELY",	"GMC",	"HONDA",	"HYUNDAI",	"INFINITI",	"IVECO",	"JAGUAR",	"JEEP",	"KIA",	"LANCER",	"LAND ROVER",	"LEXUS",	"LIFAN",	"MASERATI",	"MAZDA",	"MERCEDES BENZ",	"MINI",	"MITSUBISHI",	"NISSAN",	"OPEL",	"PEUGEOT",	"PLYMOUTH",	"POLARIS",	"PONTIAC",	"PORSCHE",	"RENAULT",	"SATURN",	"SEAT",	"SMART",	"SSANGYONG",	"SUBARU",	"SUNEQUIP",	"SUZUKI",	"TOYOTA",	"VOLKSWAGEN",	"VOLVO"];
                        for(i=0;i<auto.length;i++){
                                document.getElementById("datamodelo").innerHTML += "<option value ="+"'"+auto[i]+"'"+"><br>";

          }
          }
  
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
  
          function nextform(i){
                        
                        var reg = /[A-Za-z\s]{2,}/;
                        var reg1 = /(([A-Z]{3})+([0-9]{3})|([A-Z]{2})+([0-9]{3})+([A-Z]{2}))/;
                        var reg2 = /[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z.+-]{2,}$/;
                        var n = document.getElementById("nombre").value;
                        var a = document.getElementById("apellido").value;
                        var p = document.getElementById("patente").value;
                        var em = document.getElementById("email").value;
                        
                        if(reg.test(n) && reg.test(n) && reg1.test(p) && reg2.test(em)){
                                document.getElementById("siguiente").style.display = "none";
                                document.getElementById("envio").style.display = "block";
                                document.getElementById("envio").style.backgroundColor = "rgba(255,0,0,0.2)";
                                document.getElementById("envio").style.borderColor = "red";
                                document.getElementById("form"+i).style.display = "none";
                                document.getElementById("form"+(i+1)).style.display = "block";
                                
                        }
                     
          
          }
          
          function backform(){
              document.getElementById("envio").style.display = "none";
              document.getElementById("siguiente").style.display = "block";
              document.getElementById("form1").style.display= "block";
              document.getElementById("form2").style.display= "none";
          
          }
          
          function todoOk(){
          
                        var boton =  document.getElementById("envio").innerHTML;
                        var reg = /[A-Za-z\s]{2,}/;
                        var reg1 = /(([A-Z]{3})+([0-9]{3})|([A-Z]{2})+([0-9]{3})+([A-Z]{2}))/;
                        var reg2 = /[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z.+-]{2,}$/;
                        var reg3 = /(?=.*\d)(?=.*[a-z]).{5,8}/;
                        var con = document.getElementById("pas").value;
                        var con2 = document.getElementById("pasc").value;
                        var marca = document.getElementById("marca").value;
                        var modelo = document.getElementById("modelo").value;
                        var n = document.getElementById("nombre").value;
                        var a = document.getElementById("apellido").value;
                        var p = document.getElementById("patente").value;
                        var em = document.getElementById("email").value;
                        
                        if(reg.test(n) && reg.test(n) && reg1.test(p) && reg2.test(em) && reg3.test(con) && (con2===con) && 
                        (marca !== null && marca !== '') && (modelo !== null && modelo !== '')){
                                document.getElementById("envio").style.backgroundColor = "rgba(0,100,0,0.9)";
                                document.getElementById("envio").style.borderColor = "green";
                                
                        }else{
                                
                                if(reg.test(n) && reg.test(n) && reg1.test(p) && reg2.test(em) && (boton === "Enviar")){
                         
                                         document.getElementById("envio").style.backgroundColor = "rgba(255,0,0,0.2)";
                                         document.getElementById("envio").style.borderColor = "red";
                                 }else{
                                         
                                         document.getElementById("envio").style.backgroundColor = "";
                                         document.getElementById("envio").style.borderColor = "";
                                 
                                 }
                        
                        }
                     
          
          }