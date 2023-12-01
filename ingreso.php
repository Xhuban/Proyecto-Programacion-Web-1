<?php
include "conexion.php";

$usuario= $_POST['usuario']; //Xhuban
$password= $_POST['contraseña']; //123456

$q = "SELECT COUNT(*) AS contar FROM usuarios WHERE nombre_usuario='$usuario' AND password='$password' AND permisos=2";

$consulta = mysqli_query($conexion,$q);

$array = mysqli_fetch_array($consulta);

if($array['contar']>0){
    echo "Has ingresado exitosamente :D";
    header("location: ./dashboard.php");
} else {

    header("location: /index.php");

    echo "Error al ingresar.";
}

?>