<?php

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$patente = $_POST["patente"];
$email = $_POST["email"];
$contrasena = $_POST["pas"];
$marca = $_POST["marca"];
$modelo = $_POST["modelo"];
$estado = 0;

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


$sql = "INSERT INTO Conductores (nombre, apellido, patente, mail, contrasena, marca, modelo, estado)
VALUES ('$nombre', '$apellido', '$patente','$email','$contrasena','$marca','$modelo','$estado')";

if ($conn->query($sql) === TRUE) {
    echo 
    
    '<!DOCTYPE html>
<html lang="en">
<head>
  <title>Parking-Now</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="./conductores.css">  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>  
</head>

<body>
<h1><strong>Bienvenido <span class="text-warning">'.$nombre.'!</span></strong></h1><br>
<div class="row">
            <div class="col-sm-4"></div><div class="col-sm-4"><p class="text-white">Perfecto! Tu automovil patente: <b>'. $patente.
            '</b> ha sido registrado correctamente!</p><br>';
    
    
    
    

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "eparkcordoba@e-parkcordoba.dx.am";
    $to = "$email";
    $subject = "E-park - Activación de cuenta";
    $message = "<html><head><title>HTML email</title></head><body><p><strong>Por favor haz click para activar tu cuenta!</strong></p><br><a href='https://e-parkcordoba.000webhostapp.com/ConductoresRegistro/nuevoConductorActivo.php?email=$email'><button style='padding: 10px'>Activar!!</button></a></body></html>";
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From:" . $from;
    mail($to,$subject,$message, $headers);
    echo "<div class='jumbotron'><p class='text-dark'>Se envió un email a <b>$email</b> para que confirmes tu cuenta!<br>Si no llego a tu bandeja de entrada, no te olvides de 
    controlar tu <b>correo no deseado!</b></p></div><a href='./inicio.html'><button class='btn btn-primary align-item-center'>
    Ir a mi cuenta</button></a></div><div class='col-sm-4'></div></body></html>";



?>