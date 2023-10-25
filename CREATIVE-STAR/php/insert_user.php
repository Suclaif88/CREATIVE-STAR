<?php

require_once("conexion.php");


if (!$conexion) {
die('Error de conexión: ' . mysqli_connect_error());
}

$id = null;
$USER_NAME = $_POST['username'];
$EMAIL = $_POST['correo'];
$CONTRA = $_POST['contra'];
$PERFIL = $_POST['perfil'];

$sql = "INSERT INTO usuarios VALUES('$id','$USER_NAME','$EMAIL','$CONTRA','$PERFIL')";
$query = mysqli_query($conexion, $sql);

if($query){
    Header("Location: ../controlador/admin.php");
}else{

}

?>