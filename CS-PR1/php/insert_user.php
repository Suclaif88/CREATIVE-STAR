<?php

$conexion=mysqli_connect('localhost','root','','cs_db');

if (!$conexion) {
die('Error de conexión: ' . mysqli_connect_error());
}

$id = null;
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$doc=$_POST['doc'];
$correo=$_POST['correo'];
$password=$_POST['password'];

$sql = "INSERT INTO usuarios(NOMBRE,APELLIDO,DOCUMENTO,CORREO,CONTRASEÑA) VALUES('$nombre','$apellido','$doc','$correo','$password')";
$query = mysqli_query($conexion, $sql);

if($query){
    Header("Location: admin.php");
}else{

}

?>