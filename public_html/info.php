<?php

$u= $_REQUEST["u"];
$c= $_REQUEST["c"];

$servername = "localhost";
$username = "id11950533_eparkcordoba";
$password = "34247P@blo";
$db = "id11950533_eparkcordoba";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT nombre, contrasena, marca, modelo FROM Conductores WHERE patente='$u'";
$result = $conn->query($sql);
$row = $result->fetch_assoc(); 
if (mysqli_num_rows($result) > 0){
        if (((mysqli_num_rows($result) > 0)) && ($row["contrasena"] === $c)) {
                session_start();
                $_SESSION["patente"] = $u;
                $_SESSION["nombre"] = $row["nombre"];
                $_SESSION["marca"] = $row["marca"];
                $_SESSION["modelo"] = $row["modelo"];
                echo "ok";
        }else{
               echo "Contraseña Incorrecta";
        
        }
}else{
        echo "La patente no esta registrada";
}

$conn->close();
  


?>