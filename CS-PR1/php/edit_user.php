<?php
require_once("CONN.php");


$id=$_POST["ID"];
$nombre=$_POST['NOMBRE'];
$apellido=$_POST['APELLIDO'];
$doc=$_POST['DOCUMENTO'];
$correo=$_POST['CORREO'];

$sql="UPDATE usuarios SET NOMBRE='$nombre', APELLIDO='$apellido', DOCUMENTO='$doc', CORREO='$correo' WHERE ID='$id'";

$query = mysqli_query($conexion, $sql);

if($query){
    Header("Location: admin.php");
}else{

}

?>