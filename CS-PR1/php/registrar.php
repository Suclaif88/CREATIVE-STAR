<?php

include 'CONN.php';

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$doc=$_POST['doc'];
$correo=$_POST['correo'];
$password=$_POST['password'];

if(!$doc=="" && !$password==""){
    
    $consulta="SELECT * FROM usuarios WHERE  usuario='$usuario'";

    $resultado_consulta=mysqli_query($conexion,$consulta);

    if($resultado_consulta && mysqli_num_rows($resultado_consulta)>0)
    {
        echo "el nombre de usuario ya existe en la base de datos";
    } else{
    
    $insertar="INSERT INTO usuarios(NOMBRE,APELLIDO,DOCUMENTO,CORREO,CONTRASEÑA) VALUES('$nombre','$apellido','$doc','$correo','$password')";

$resultado=mysqli_query($conexion,$insertar);

if($resultado){
    header("Location:admin.php");

}else{
    echo "error de registro";
}
}
}


?>