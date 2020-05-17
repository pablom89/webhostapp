<?php
 
include ("vendor/autoload.php");

use ElephantIO\Client;
use ElephantIO\Engine\SocketIO\Version2X;

$nom = $_POST["nomuser"];



$version = new Version2X("https://parkingnow.herokuapp.com/");

$client = new Client($version);

    
  $client->initialize();
  $client->emit("new_order", ["test"=>$nom, "test2"=>1]);
  $client->close();
  


?>
