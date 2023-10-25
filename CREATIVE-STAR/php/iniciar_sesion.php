<?php

session_start();
require_once "conexion.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $EMAIL = $_POST['correo'];
    $CONTRA = $_POST['contra'];

    $consulta = "SELECT * FROM usuarios WHERE EMAIL = '$EMAIL' AND CONTRA = '$CONTRA'";
    $resultado = mysqli_query($conexion, $consulta);

    if ($resultado && mysqli_num_rows($resultado) > 0) {
        $fila = mysqli_fetch_assoc($resultado);
        $USER_NAME = $fila["USER_NAME"];

        $_SESSION["USER_NAME"] = $USER_NAME;

        if ($fila["PERFIL"] === '1') {
            header("Location: ../controlador/vista_o_admin.html");
        } else {
            header("Location: ../vista/index.html");
        }
    } else {
        echo 'Error en las credenciales de inicio de sesión';
    }
}

?>
