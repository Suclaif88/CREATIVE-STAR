<?php 
    require_once("conexion.php");
     
    $id = $_GET['id'];

    $sql = "SELECT * FROM usuarios WHERE id = '$id'";
    $query=mysqli_query($conexion, $sql);


    $row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>CREATIVE-STAR</title>
        <link rel="shortcut icon" href="../images/favicon.png" type="image/x-icon">
    </head>
    <style>
        * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

html {
    font-family: 'Segoe UI', sans-serif;
    text-align: center;
}

a{
    text-decoration: none;
}

.users-form form{
    display: flex;
    flex-direction: column;
    gap: 24px;
    width: 30%;
    margin: 20px auto;
    text-align: center;
}

.users-form form input{
    font-family: 'Segoe UI', sans-serif;
}

.users-form form input[type=text],
.users-form form input[type=password],
.users-form form input[type=email]{
    padding: 8px;
    border:2px solid #aaa;
    border-radius:4px;
    outline:none;
    transition:.3s;
}

.users-form form input[type=text]:focus,
.users-form form input[type=password]:focus,
.users-form form input[type=password]:focus{
    border-color:dodgerBlue;
    box-shadow:0 0 6px 0 dodgerBlue;
}

.users-form form input[type=submit]{
    border: none;
    padding: 12px 50px;
    text-decoration: none;
    transition-duration: 0.4s;
    cursor: pointer;
    border-radius: 5px;
    background-color: white; 
    color: black; 
    border: 2px solid #60a100;
}

.users-form form input[type=submit]:hover {
    background-color: #60a100;
    color: white;
}

.users-table table{
    border: 1px solid #ccc;
    border-collapse: collapse;
    margin: 0;
    padding: 0;
    width: 100%;
    table-layout: fixed;
}

table tr {
    background-color: #f8f8f8;
    border: 1px solid #ddd;
    padding: 4px;
}

table th{
    padding: 16px;
    text-align: center;
    font-size: .85em;
}

.users-table--edit{
    background: #009688;
    padding: 6px;
    color: #fff;
    text-align: center;
    font-weight: bold;
}
.users-table--delete{
    background: #b11e1e;
    padding: 6px;
    color: #fff;
    text-align: center;
    font-weight: bold;
}
</style>
    <body>
        <div class="users-form">
        <form action="edit_user.php" method="POST">
                <input type="hidden" name="id" value="<?= $row['ID']?>">
                <input type="text" name="username" placeholder="Usuario" value="<?= $row['USER_NAME']?>">
                <input type="text" name="correo" placeholder="Correo" value="<?= $row['EMAIL']?>">
                <input type="text" name="contra" placeholder="Contraseña" value="<?= $row['CONTRA']?>">
                <SELECT name="perfil">
                    <option>SELECCIONE PERFIL</option>
                    <option value="1">1.Admin</option>
                    <option value="2">2.Vista</option>
                </SELECT>
                <input type="submit" value="ACTUALIZAR">
            </form>
        </div>
    </body>
</html>