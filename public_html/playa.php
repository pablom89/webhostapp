<?php
 header("Access-Control-Allow-Origin: * ");
                        $servername = "localhost";
                        $username = "id11950533_eparkcordoba";
                        $password = "34247P@blo";
                        $db = "id11950533_eparkcordoba";
                        $latitude = $_POST["latitud"];
                        $longitude = $_POST["longitud"];
                        
                         //Create connection
                        $conn = new mysqli($servername, $username, $password, $db);
                        
                        // Check connection
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }

                       
                       $sql = "SELECT nombre, latitud, longitud,vh,vm,v12h,v24h,auto,moto,pick_up,bici,a24h,techada,seguro,ap,ci,solomen,lugdis,gra,place,  ( 6371 * acos(cos(radians($latitude)) * cos(radians(latitud)) * cos(radians(longitud) - radians($longitude)) + sin(radians($latitude)) * sin(radians(latitud)))) AS distance FROM Playa HAVING distance < 2 ORDER BY distance";
                       
                       $result = $conn->query($sql);
                       $outp = $result->fetch_all(MYSQLI_ASSOC);
                       echo json_encode($outp);
                       $conn->close();
?>