<?php

$servername = "localhost";
$username = "id11950533_eparkcordoba";
$password = "34247P@blo";
$db = "id11950533_eparkcordoba";
$mail= $_GET["email"];

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql_1 = "SELECT estado, mail FROM Conductores WHERE mail='$mail'";
$result = $conn->query($sql_1);
$array = $result->fetch_assoc();

if ($array["estado"]==0){
        $sql = "UPDATE Conductores SET estado='1' WHERE mail='$mail'";
        
        if ($conn->query($sql) === TRUE) {
            echo "Tu cuenta " . $mail . " ha sido Activada!";
        } else {
            echo "Error updating record: " . $conn->error;
        }
        
        $conn->close();
      }else{
      echo "Tu cuenta " . $array["mail"] . " ya se encuentra activa!";
      }

?>