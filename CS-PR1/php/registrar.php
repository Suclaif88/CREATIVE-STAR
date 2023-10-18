<?php

include 'CONN.php';

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$doc=$_POST['doc'];
$correo=$_POST['correo'];
$password=$_POST['password'];

if(!$doc=="" && !$password==""){
    
    $consulta="SELECT * FROM usuarios WHERE  NOMBRE='$nombre'";

    $resultado_consulta=mysqli_query($conexion,$consulta);

    if($resultado_consulta && mysqli_num_rows($resultado_consulta)>0)
    {
        echo '<script type="text/javascript">alert("YA SE ENCUENTRA REGISTRADO CON ESTAS CRENDENCIALES");</script>';
        echo '<script type="text/javascript">window.location.href = "../REGISTRO.php";</script>';
        
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