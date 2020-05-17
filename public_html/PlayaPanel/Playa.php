<?php
session_start();
if (empty($_SESSION["nombre"])) {
        header("Location: ../PlayaInicio.html");
        exit();
}
?>

<html>
<head>
<title>Parking Now</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        
<style>

 html, body{
      height:100%;
      margin: 0;
      display: flex;
      flex-direction: column;
    }
    #yes{
      height: auto;
      width: 100%;
      justify-content: center;
      align-content: center;
    }

    #hol{
      height:100%;
      width: 100%;
    }
    
.amber-textarea textarea.md-textarea:focus:not([readonly]) {
  border-bottom: 1px solid #ffa000;
  box-shadow: 0 1px 0 0 #ffa000;
}
.active-amber-textarea.md-form label.active {
  color: #ffa000;
}
.active-amber-textarea.md-form textarea.md-textarea:focus:not([readonly])+label {
  color: #ffa000;
}

</style>
<script>
    function haylugar(){
          var xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = function() {
              if (this.readyState == 4 && this.status == 200) {
                  console.log("todoOk");
              }
          }
          xhttp.open("POST", "../engine/emit_test.php", true);
          xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
          xhttp.send("nomuser=Alfredo Park");
      }
      
</script>
</head>
<body class="bg-dark">
<div class="container-fluid" id="yes">
                <div class="row">
                        <div class="col justify-content-center d-flex">
                                <div>
                                        <h1 class="text-white text-center">Bienvenido a <span class="text-warning"><?php echo " ".$_SESSION["nombre"]?>
                                        </span></h1>
                                </div>
                                               
                        </div>
                </div>
                <div class="row align-items-center" style="background-color: rgb(210, 105, 30);">
                        <div class="col">
                            <!--
                                <div class="d-flex justify-content-between align-items-center">
                                        <span class="badge badge-dark text-white">PlaceID:<b><?php echo " ".$_SESSION["place"]?></b></span>
                                        <span class="badge badge-dark text-white">Marca:<b><?php echo " ".$_SESSION["marca"]?></b></span>
                                        <span class="badge badge-dark text-white">Modelo:<b><?php echo " ".$_SESSION["modelo"]?></b></span>
                                </div>
                                      -->
                       </div>
                       <div class="col d-flex">
                                <button class="btn btn-dark btn-sm text-white">Agregar</button>
                                <button class="btn btn-danger btn-sm text-white">Configuración</button>
                                 <button class="btn btn-success btn-sm text-white" onclick="haylugar();">Hay lugar</button>
                                <span><a href="../CerrarSesionPlaya.php"><button class="btn btn-info btn-sm">
                                Cerrar cesion</button></a></span>
                        </div>
                        
                </div>
                
                <div class="row text-white align-items-center mt-1 ml-1 mr-1">
                    <div>
                    <div>Precios:</div>
                    <div class="d-flex-column bg-info rounded">
                        <div class="text-white mt-2 ml-2 mr-2 d-flex"> Precio por Hora:<div id="vh" class="text white ml-1">$50</div></div>
                        <div class="text-white mt-2 ml-2 mr-2 d-flex"> Precio Mensual:<div id="vm" class="text white ml-1">$2500</div></div>
                        <div class="text-white mt-2 ml-2 mr-2 d-flex"> Precio 12 Horas:<div id="v12h" class="text white ml-1">$500</div></div>
                        <div class="text-white mt-2 ml-2 mr-2 mb-2 d-flex"> Precio 24 Horas:<div id="v24h" class="text white ml-1">$1000</div></div>
                    </div>
                    </div>
                </div>
                <div class="row text-white mt-1 ml-1 mr-1">
                    <div>
                    <div>Información adicional:</div>
                    <div class="d-flex-column bg-info rounded">
                        <div class="text-white mt-2 ml-2 mr-2 d-flex"> Techada / Cubierta:<div id="techada" class="text white ml-1">Si</div></div>
                        <div class="text-white mt-2 ml-2 mr-2 d-flex"> Con seguro:<div id="seguro" class="text white ml-1">Si</div></div>
                        <div class="text-white mt-2 ml-2 mr-2 d-flex"> Horario de Apertura:<div id="ha" class="text white ml-1">09:00 hs</div></div>
                        <div class="text-white mt-2 ml-2 mr-2 d-flex"> Horario de Cierre:<div id="hc" class="text white ml-1">20:00 hs</div></div>
                        <div class="text-white mt-2 ml-2 mr-2 mb-2 d-flex"> Abierto 24hs:<div id="promo" class="text white ml-1">No</div></div>
                    </div>
                    </div>
                </div>
                <div class="row text-white mt-1 ml-1 mr-1">
                    <div>
                    <div>Promociones:</div>
                    <div class="d-flex-column bg-info rounded p-2">
                        <div class="text-white mt-2 ml-2 mr-2 d-flex"> Techada / Cubierta:<div id="techada" class="text white ml-1">Si</div></div>
                        <div class="mx-2 my-2">
                                <div class="md-form amber-textarea active-amber-textarea">
                                  <textarea id="form19" class="md-textarea form-control" rows="3"></textarea>
                                </div>
                        </div>
                    </div>
                    
                    </div>
                </div>
            </div>
</body>
</html>
