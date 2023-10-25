<?php
require_once("conexion.php");

$USER_NAME = $_POST['username'];
$EMAIL = $_POST['correo'];
$CONTRA = $_POST['contra'];
$PERFIL = $_POST['perfil'];

$sql="UPDATE usuarios SET USER_NAME='$USER_NAME',EMAIL='$EMAIL',CONTRA='$CONTRA',PERFIL='$PERFIL' WHERE ID='$ID'";

$query = mysqli_query($conexion, $sql);

if($query){
    Header("Location: ../controlador/admin.php");
}else{
    echo "<script>alert('Error en la consulta preparada');</script>";
    echo "<script>window.location.href='update.php';</script>";
}

?>