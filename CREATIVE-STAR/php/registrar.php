<?php
include 'conexion.php';

$USER_NAME = $_POST['username'];
$EMAIL = $_POST['correo'];
$CONTRA = $_POST['contra'];
$PERFIL = 2;

if (!empty($USER_NAME) && !empty($CONTRA)) {
    // Verifica si el nombre de usuario ya existe en la base de datos
    $consulta = "SELECT * FROM usuarios WHERE USER_NAME='$USER_NAME'";
    $resultado_consulta = mysqli_query($conexion, $consulta);

    if ($resultado_consulta && mysqli_num_rows($resultado_consulta) > 0) {
        echo "<script>alert('El nombre de usuario ya existe en la base de datos');</script>";
        echo "<script>window.location.href='../registro.html';</script>";
    } else {
        //evitar inyección SQL
        $insertar = "INSERT INTO usuarios (USER_NAME, EMAIL, CONTRA, PERFIL) VALUES (?, ?, ?, ?)";
        $stmt = mysqli_prepare($conexion, $insertar);

        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "ssss", $USER_NAME, $EMAIL, $CONTRA, $PERFIL);
            $resultado = mysqli_stmt_execute($stmt);

            if ($resultado) {
                header("Location:../vista/index.html");
            } else {
                echo "<script>alert('Error de registro. Por favor, inténtalo de nuevo.');</script>";
                echo "<script>window.location.href='../registro.html';</script>";
            }

            mysqli_stmt_close($stmt);
        } else {
            echo "<script>alert('Error en la consulta preparada');</script>";
            echo "<script>window.location.href='../registro.html';</script>";
        }
    }
} else {
    echo "<script>alert('Por favor, completa los campos de nombre de usuario y contraseña.');</script>";
}   echo "<script>window.location.href='../registro.html';</script>";
?>
