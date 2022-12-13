<?php
$servername = "database-4.czalvdd0hpjm.us-east-2.rds.amazonaws.com"; // Nombre/IP del servidor
$database = "world"; // Nombre de la BBDD
$username = "admin"; // Nombre del usuario
$password = "lalo2641"; // Contraseña del usuario
// Creamos la conexión
try{
    $con = new PDO('mysql:host='.$servername.';dbname='.$database.'', $username,$password);

echo "Conexión satisfactoria";
}catch(PDOException $e){
    print "error";
    die();
}

?>