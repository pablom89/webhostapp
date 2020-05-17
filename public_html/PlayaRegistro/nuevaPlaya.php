<?php
                        $servername = "localhost";
                        $username = "id11950533_eparkcordoba";
                        $password = "34247P@blo";
                        $db = "id11950533_eparkcordoba";
                        
                        $gra = $_POST["gra"];
                        $latitude = $_POST["latitud"];
                        $longitude = $_POST["longitud"];
                        $nombre = $_POST["nombre"];
                        $place = $_POST["place"];
                        $email = $_POST["email"];
                        
                        if($gra == 1){
                            
                        $ha = $_POST["ha"];
                        $hc = $_POST["hc"];
                        $auto = $_POST["auto"];
                        $moto = $_POST["moto"];
                        $pick_up = $_POST["pick_up"];
                        $bici = $_POST["bici"];
                        $techado = $_POST["techado"];
                        $seguro = $_POST["seguro"];
                        $a24h = $_POST["a24h"];
                        if ($auto == 'true'){$auto=1;}else{$auto=0;}
                        if ($moto == 'true'){$moto=1;}else{$moto=0;}
                        if ($pick_up == 'true'){$pick_up=1;}else{$pick_up=0;}
                        if ($bici == 'true'){$bici=1;}else{$bici=0;}
                        if ($techado == 'true'){$techado=1;}else{$techado=0;}
                        if ($seguro == 'true'){$seguro=1;}else{$seguro=0;}
                        if ($a24h == 'true'){$a24h=1;}else{$a24h=0;}
                        
                         //Create connection
                        $conn = new mysqli($servername, $username, $password, $db);
                        
                        // Check connection
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }

                       
                       $sql = "INSERT INTO Playa (nombre, email, contrasena, latitud, longitud, place, ap, ci, auto, moto, pick_up, bici, techada, seguro, a24h, gra) VALUES ('$nombre', '$email', 'gratis' ,$latitude, $longitude, '$place', '$ha', '$hc', $auto, $moto, $pick_up, $bici, $techado, $seguro, $a24h, 1)";
                       
                       if ($conn->query($sql) === TRUE) {
                            echo "New record created successfully";
                        } else {
                            echo "Error: " . $sql . "<br>" . $conn->error;
                        }
                        
                        $conn->close();
                            
                        }else{    
                        
                        $contrasena = $_POST["contra"];
                        $vha = $_POST["vha"];
                        $vma = $_POST["vma"];
                        $vhm = $_POST["vhm"];
                        $vmm = $_POST["vmm"];
                        $vhp = $_POST["vhp"];
                        $vmp = $_POST["vmp"];
                        $vhb = $_POST["vhb"];
                        $vmb = $_POST["vmb"];
                        $ha = $_POST["ha"];
                        $hc = $_POST["hc"];
                        $auto = $_POST["auto"];
                        $moto = $_POST["moto"];
                        $pick_up = $_POST["pick_up"];
                        $bici = $_POST["bici"];
                        $solom = $_POST["solom"];
                        $techado = $_POST["techado"];
                        $seguro = $_POST["seguro"];
                        $a24h = $_POST["a24h"];
                        
                        if ($vha ==''){$vha=0;}
                        if ($vma ==''){$vma=0;}
                        if ($vhm ==''){$vhm=0;}
                        if ($vmm ==''){$vmm=0;}
                        if ($vhp ==''){$vhp=0;}
                        if ($vmp ==''){$vmp=0;}
                        if ($vhb ==''){$vhb=0;}
                        if ($vmb ==''){$vmb=0;}
                        if ($ha ==''){$ha=0;}
                        if ($hc ==''){$hc=0;}
                        if ($auto == 'true'){$auto=1;}else{$auto=0;}
                        if ($moto == 'true'){$moto=1;}else{$moto=0;}
                        if ($pick_up == 'true'){$pick_up=1;}else{$pick_up=0;}
                        if ($bici == 'true'){$bici=1;}else{$bici=0;}
                        if ($solom == 'true'){$solom=1;}else{$solom=0;}
                        if ($techado == 'true'){$techado=1;}else{$techado=0;}
                        if ($seguro == 'true'){$seguro=1;}else{$seguro=0;}
                        if ($a24h == 'true'){$a24h=1;}else{$a24h=0;}
                        
                         //Create connection
                        $conn = new mysqli($servername, $username, $password, $db);
                        
                        // Check connection
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }

                       
                       $sql = "INSERT INTO Playa (nombre, email, contrasena, latitud, longitud, place, vh, vm, vhm, vmm, vhp, vmp, vhb, vmb, ap, ci, auto, moto, pick_up, bici, techada, solomen, seguro, a24h) VALUES ('$nombre', '$email', '$contrasena' , $latitude, $longitude, '$place', $vha, $vma, $vhm, $vmm, $vhp, $vmp, $vhb, $vmb, '$ha', '$hc', $auto, $moto, $pick_up, $bici, $techado, $solom, $seguro, $a24h)";
                       
                       if ($conn->query($sql) === TRUE) {
                            echo "New record created successfully" . $auto;
                        } else {
                            echo "Error: " . $sql . "<br>" . $conn->error;
                        }
                        
                        $conn->close();
                        }
                        
?>