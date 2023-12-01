<?php
$host_db = "localhost:3306";
$user_db = "root";
$pass_db = "4593809722";
$db_name = "asistencia";

$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

if ($conexion->connect_error) {
    die("la conexion fallo :'v". $conexion->connect_error);
}
?>