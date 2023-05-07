<?php
$host="localhost";
$bd="listado";
$usuario="venancio";
$contrasenia="venancio";

try {
$conexion=new PDO("mysql:host=$host;dbname=$bd",$usuario,$contrasenia);

} catch ( Exception $ex) {
echo $ex->getMessage();
}


?>