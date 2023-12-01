<?php
include "conexion.php";

$usuario= $_POST['usuario']; //Xhuban
$password= $_POST['contrasena']; //123456

$q = "SELECT COUNT(*) AS contar FROM usuarios WHERE nombre_usuario= '$usuario' AND password = '$password'";

$consulta = mysqli_query($conexion,$q);

$array = mysqli_fetch_array($consulta);



if($array['contar']>0){
    
    header("location: ./vistas.php");
}else{

    header("location: ./index.php");

    echo "Error";
   
}

?>