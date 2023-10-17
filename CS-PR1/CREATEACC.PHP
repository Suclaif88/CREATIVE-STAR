<?php
require 'CONN.PHP';

$message = '';

if (!empty($_POST['email']) && !empty($_POST['password'])) {
  $fecha_registro = date('Y-m-d'); // Obtiene la fecha actual

  $sql = "INSERT INTO usuarios (nombre, apellido, doc, correo, contraseña, fecha_registro) VALUES
  (:nombre, :apellido, :doc, :email, :password, :fecha_registro)";

  $stmt = $conn->prepare($sql);
  $stmt->bindParam(':nombre', $_POST['name']);
  $stmt->bindParam(':apellido', $_POST['apellido']);
  $stmt->bindParam(':doc', $_POST['doc']);
  $stmt->bindParam(':email', $_POST['email']);
  $password = password_hash($_POST['password'], PASSWORD_BCRYPT);  //ENCRIPTA CONTRASEÑA
  $stmt->bindParam(':password', $password);
  $stmt->bindParam(':fecha_registro', $fecha_registro);

  if ($stmt->execute()) {
    $message = 'Se creó un nuevo usuario con éxito';
  } else {
    $message = 'Ups, parece que hay un problema';
  }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CREATIVE STAR</title>
  <link rel="stylesheet" href="ESTILOS/ESTILOS.css">
  <!--<link rel="stylesheet" href="ESTILOS/bootstrap.css">-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body style="background-image: url(IMG/Fondos/foto\ 7.jpeg);">

  <nav class="navbar">
    <div class="logo">
    <a href="INICIO.HTML" target="_self"><img src="../CS-PR1/IMG/logos/creativestar3.png" alt="Logo"></a>
    </div>
    <ul class="menu">
      <li><a href="INICIO.HTML" target="_self"><b>INICIO</b></a></li>
      <li><a href="UBICANOS.HTML" target="_self">UBÍCANOS</a></li>
      <li class="dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">MENÚ</a>
      <ul class="dropdown-content dropdown-menu">
       <li><a href="VIDEOS.HTML">Videos Ilustrativos</a></li>
       <li><a href="DOMICILIOS.HTML">Domicilios</a></li>
      </ul>
      
      </li>
    </ul>
    <div class="icono">
      <a href="QSOMOS.HTML" target="_self"><img src="img/Fondos/brocha icono.png" alt="Icono"></a>
    </div>
  </nav>

<div class="form">
  <form action="singup.php" method="post">
<br>
 <center>
   <label><strong>REGISTRO</strong></label>
  </center>
  <form action="CREATEACC.PHP" method="post">
   <input type="text" name="name" placeholder="Ingresa tu nombre">
   <input type="text" name="apellido" placeholder="Ingresa tus apellidos">  
   <input type="text" name="doc" placeholder="Ingresa tu documento">
   <input type="text" name="email" placeholder="Ingresa tu correo">
   <input type="password" name="password" placeholder="Ingresa tu contraseña">
   <input type="password" name="confirm_password" placeholder="Confirma tu contraseña">
   <form action="CREATEACC.PHP" method="post">

  <center>
   <input type="submit" value="ENVIAR">
  </center>

  </form>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
  <footer class="footer">

  <center>

  <div class="shared-panel">
	<a target="_blank" class="shared fb" title="Facebook" href="https://m.facebook.com/login/?locale=es_ES"></a>	
	<a target="_blank" class="shared tt" title="Twitter" href="https://twitter.com/?lang=es"></a>
	<a target="_blank" class="shared gp" title="Google+" href="https://myaccount.google.com/profile"></a>
	<a target="_blank" class="shared wa" title="WhatsApp" href="https://www.whatsapp.com/?lang=es"></a>
	<a target="_blank" class="shared ce" id="sml" title="Email" href="https://www.google.com/intl/es-419/gmail/about/"></a>		
  </div>

</center>

  </footer>

</body>
</html>