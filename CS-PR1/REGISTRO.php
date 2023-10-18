<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CREATIVE STAR</title>
    
    <link rel="stylesheet" href="ESTILOS/ESTILOS.css">
    <link rel="stylesheet" href="ESTILOS/boostrap.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="JS/JS1.js"></script>
</head>
<body style="background-repeat: no-repeat; background-size: cover; background-image: url(IMG/Fondos/foto\ 2.jpg);">

<nav class="navbar">
        <div class="logo">
        <a href="INDEX.php" target="_self"><img src="IMG/logos/creativestar3.png" alt="Logo"></a>
        </div>
        <div class="imguser">
         <a href="INDEX.php" target="_self"></a>
        </div>
        <ul class="menu">
          <li><a href="REGISTRO.php" target="_self">REGISTRATE</a></li>
          <li><a href="INDEX.php" target="_self"><b>INICIO</b></a></li>
          <li><a href="UBICANOS.php" target="_self">UBÍCANOS</a></li>
          <li class="dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">MENÚ</a>
          <ul class="dropdown-content dropdown-menu">
           <li><a href="VIDEOS.php">Videos Ilustrativos</a></li>
           <li><a href="DOMICILIOS.php">Domicilios</a></li>
          </ul>
          </li>
        </ul>
        <div class="icono">
          <a href="QSOMOS.php" target="_self"><img src="IMG/Fondos/brocha.png"></a>
        </div>
      </nav>

<center>
<div class="form">
  <form action="singup.php" method="post">
  <br>
   <label><strong><h1>REGISTRO</h1></strong></label>
   <input type="text" name="nombre" placeholder="Ingresa tu nombre">
   <input type="text" name="apellido" placeholder="Ingresa tus apellidos">  
   <input type="text" name="doc" placeholder="Ingresa tu documento">
   <input type="text" name="correo" placeholder="Ingresa tu correo">
   <input type="password" name="password" placeholder="Ingresa tu contraseña">
   <input type="password" name="confirm_password" placeholder="Confirma tu contraseña">
   <form action="singup.php" method="post">


   <input type="submit" value="ENVIAR">

  </form>
</center>

</body>

      <footer class="footer">

<div class="shared-panel">
  <a target="_blank" class="shared fb" title="Facebook" href="https://m.facebook.com/login/?locale=es_ES"></a>	
  <a target="_blank" class="shared tt" title="Twitter" href="https://twitter.com/?lang=es"></a>
  <a target="_blank" class="shared gp" title="Google+" href="https://myaccount.google.com/profile"></a>
  <a target="_blank" class="shared wa" title="WhatsApp" href="https://www.whatsapp.com/?lang=es"></a>
  <a target="_blank" class="shared ce" id="sml" title="Email" href="https://www.google.com/intl/es-419/gmail/about/"></a>		
</div>

</footer>

</html>