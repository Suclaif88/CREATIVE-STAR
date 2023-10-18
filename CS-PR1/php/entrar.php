<?php
session_start();
require_once "CONN.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = $_POST["email"];
    $contraseña = $_POST["password"];


    $consulta = "SELECT * FROM usuarios WHERE CORREO = '$correo' AND CONTRASEÑA='$contraseña'";
    $resultado = mysqli_query($conexion, $consulta);

    if ($resultado && mysqli_num_rows($resultado) > 0) {
        $_SESSION["CORREO"]=$correo;
        while($fila=$resultado->fetch_assoc()){
    
        if($fila["CONTRASEÑA"]==='roldan11'){
            header("Location: admin.php");
        } else{  
            header("Location: ../INICIO.php");
        }
    }

    } else {
        echo '<script type="text/javascript">alert("NO EXISTE EN LA BASE DE DATOS PRUEBE REGISTRARSE");</script>';
        echo '<script type="text/javascript">window.location.href = "../REGISTRO.php";</script>';
        
}
}
?>