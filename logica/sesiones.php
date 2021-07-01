<?php

require 'DB.php';
$bd = new BD;
$conexion = $bd->connection();
session_start();

$usuario = $_POST['usuario'];
$clave = $_POST['clave'];

$query = "SELECT COUNT(*) AS contar FROM suscriptores WHERE email_sus = '$usuario' AND clave_sus = '$clave'";
$consulta = mysqli_query($conexion, $query);
$array = mysqli_fetch_array($consulta);

if($array['contar']>0){
    $query = "SELECT * FROM suscriptores WHERE email_sus = '$usuario' AND clave_sus = '$clave'";
    $consulta = mysqli_query($conexion, $query);
    while($row = $consulta->fetch_assoc()){
        $id = $row['id_sus'];
        
    }
    $_SESSION['username'] = $usuario;
    $_SESSION['id'] = $id;

    header("location: ../index.php");
}
else
    echo "datos incorrectos";

?>