<?php
 header("Access-Control-Allow-Origin: *");
  
  function getGeocodeData($address) { 
    $address = urlencode($address);
    $googleMapUrl = "https://maps.googleapis.com/maps/api/geocode/json?address=$address&key=AIzaSyDrQIu0qaEDTCx5y-jCru-VNxP61yfsdJo";
    $geocodeResponseData = file_get_contents($googleMapUrl);
    $responseData = json_decode($geocodeResponseData, true);
    if($responseData['status']=='OK') {
        $latitude = isset($responseData['results'][0]['geometry']['location']['lat']) ? $responseData['results'][0]['geometry']['location']['lat'] : "";
        $longitude = isset($responseData['results'][0]['geometry']['location']['lng']) ? $responseData['results'][0]['geometry']['location']['lng'] : "";
        $formattedAddress = isset($responseData['results'][0]['formatted_address']) ? $responseData['results'][0]['formatted_address'] : "";
        $pi = isset($responseData['results'][0]['place_id']) ? $responseData['results'][0]['place_id'] : "";
        if($latitude && $longitude && $formattedAddress) {         
            $geocodeData = array();                         
            array_push(
                $geocodeData, 
                $latitude, 
                $longitude, 
                $formattedAddress,
                $pi
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

$errorMSG = "";
 
    if(empty($_POST["dir"]))  { 
                $errorMSG = "Debes ingresar un destino";
                echo json_encode(['code'=>404, 'msg'=>$errorMSG]);
            } else {
                  $geocodeData = getGeocodeData($_POST["dir"]); 
                  if($geocodeData) {         
                     $latitude = $geocodeData[0];
                     $longitude = $geocodeData[1];
                     $address = $geocodeData[2];
                     $pi= $geocodeData[3];
                     
                     $msg->latitud = $latitude;
                     $msg->longitud = $longitude;
                     $msg->ad = $address;
                     $msg->pi = $pi;
                	 echo json_encode(['code'=>200, 'msg'=>$msg]);
                	 exit;
            
                 } else {
                    $errorMSG = "Debes ingresar un destino valido";
                    echo json_encode(['code'=>404, 'msg'=>$errorMSG]);
                 }
                }
  ?>

