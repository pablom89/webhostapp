<?php
session_start();
if (empty($_SESSION["patente"])) {
        header("Location: ../inicio.html");
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

</style>
</head>
<body class="bg-dark">
<div class="container-fluid" id="yes">
                <div class="row">
                        <div class="col justify-content-center d-flex">
                                <div>
                                        <h1 class="text-white text-center">Bienvenido <span class="text-warning"><?php echo " ".$_SESSION["nombre"]?>
                                        </span></h1>
                                </div>
                                               
                        </div>
                </div>
                <div class="row align-items-center" style="background-color: rgb(210, 105, 30);">
                        <div class="col">
                                <div class="d-flex justify-content-between align-items-center">
                                        <span class="badge badge-dark text-white">Patente:<b><?php echo " ".$_SESSION["patente"]?></b></span>
                                        <span class="badge badge-dark text-white">Marca:<b><?php echo " ".$_SESSION["marca"]?></b></span>
                                        <span class="badge badge-dark text-white">Modelo:<b><?php echo " ".$_SESSION["modelo"]?></b></span>
                                </div>
                       </div>
                       <div class="col d-flex">
                                <button class="btn btn-dark btn-sm text-white">Agregar</button>
                                <button class="btn btn-dark btn-sm text-white">Cambiar</button>
                                 <button class="btn btn-dark btn-sm text-white">Configuracion</button>
                                <span><a href="../cerrarsesion.php"><button class="btn btn-info btn-sm">
                                Cerrar cesion</button></a></span>
                        </div>
                        
                </div>
                <div class="row p-1 bg-white align-items-center d-flex">
                        
     
                        

                                                          
                                                     <div class="col-md-2 text-nowrap"> <span><strong nowrap>Ingresa tu destino:&nbsp;</strong></span></div>
                                                     <div class="col-md-10">
                                                    
                                                    <form action="" method="post" class="d-flex w-100 my-2 justify-content-around">
                                                     
                                                    <div style="flex-grow: 11"><input type='text' id="ad" name='searchAddress' class="form-control" placeholder='Pon la dirección aquí'/></div>
                                
                                                    &nbsp;<div style="flex-grow: 1"><input  type="submit" value="Localizar" class="btn btn-success btn-block"/></div>
                                                        
                                                   
                                                             </div>
                                                  
                                                    </form>
                                                    



                        
                </div>
</div>
                
                        
                                <!--the hard part  -->
                                  <?php
                                  
                                  function getGeocodeData($address) { 
                                    $address = urlencode($address);
                                    $googleMapUrl = "https://maps.googleapis.com/maps/api/geocode/json?address={$address}&key=AIzaSyDrQIu0qaEDTCx5y-jCru-VNxP61yfsdJo";
                                    $geocodeResponseData = file_get_contents($googleMapUrl);
                                    $responseData = json_decode($geocodeResponseData, true);
                                    if($responseData['status']=='OK') {
                                        $latitude = isset($responseData['results'][0]['geometry']['location']['lat']) ? $responseData['results'][0]['geometry']['location']['lat'] : "";
                                        $longitude = isset($responseData['results'][0]['geometry']['location']['lng']) ? $responseData['results'][0]['geometry']['location']['lng'] : "";
                                        $formattedAddress = isset($responseData['results'][0]['formatted_address']) ? $responseData['results'][0]['formatted_address'] : "";         
                                        if($latitude && $longitude && $formattedAddress) {         
                                            $geocodeData = array();                         
                                            array_push(
                                                $geocodeData, 
                                                $latitude, 
                                                $longitude, 
                                                $formattedAddress
                                            );             
                                            return $geocodeData;             
                                        } else {
                                            return false;
                                        }         
                                    } else {
                                        echo "ERROR: {$responseData['status']}";
                                        return false;
                                    }
                                }
                                
                                 
                                /*esta funciona */
                                    if($_POST) { 
                                      $geocodeData = getGeocodeData($_POST['searchAddress']); 
                                      if($geocodeData) {         
                                         $latitude = $geocodeData[0];
                                         $longitude = $geocodeData[1];
                                         $address = $geocodeData[2];                
                                ?> 
                                
                                 <!--esta funciona -->
                         <div id="hol">
                                <div id="gmap" style="width:100%;height:100%;">Cargando mapa...</div> </div>
                                <script type="text/javascript">
                                   function init_map() {
                                      var options = {
                                         zoom: 14,
                                         center: new google.maps.LatLng(<?php echo $latitude; ?>, <?php echo $longitude; ?>),
                                         mapTypeId: google.maps.MapTypeId.ROADMAP,
                                      };
                                      var map = new google.maps.Map(document.getElementById("gmap"), options);
                                      var marker = new google.maps.Marker({
                                         map: map,
                                         position: new google.maps.LatLng(<?php echo $latitude; ?>, <?php echo $longitude; ?>)
                                         });
                                      var infowindow = new google.maps.InfoWindow({
                                          content: "<?php echo $address;?>"
                                      });
                                      google.maps.event.addListener(marker, "click", function () {
                                           infowindow.open(map, marker);
                                      });
                                   }
                                </script>
                                <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDrQIu0qaEDTCx5y-jCru-VNxP61yfsdJo&callback=init_map"></script>
                                 
                        
                                 <!--esta funciona -->
                                 
                                 <?php 
                                     
                                     } else {
                                        echo "Detalles incorrectos!";
                                     }
                                }
                                ?>


</body>
</html>
