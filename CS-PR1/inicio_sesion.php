<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CREATIVE STAR</title>
    
    <link rel="stylesheet" href="ESTILOS/ESTILOS.css">
    <link rel="stylesheet" href="ESTILOS/boostrap.css">
    <link rel="icon" type="image/png" href="IMG/Fondos/brocha.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="JS/JS1.js"></script>
</head>
<body style="background-repeat: no-repeat; background-size: cover; background-image: url(IMG/Fondos/foto\ 4.jpg);">

<nav class="navbar">
        <div class="logo">
        <a href="INDEX.php" target="_self"><img src="IMG/logos/creativestar3.png" alt="Logo"></a>
        </div>
        <div class="imguser">
         <a href="INDEX.php" target="_self"></a>
        </div>
        <ul class="menu">
          <li><a href="REGISTRO.php" target="_self">REGISTRATE</a></li>
          <li><a href="INDEX.php" target="_self">INICIO</a></li>
          <li><a href="UBICANOS.php" target="_self">UBÍCANOS</a></li>
          <li><a href="inicio_sesion.php" target="_self"><b>ENTRAR</b></a></li>
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

      <style>
    .form {
      width: 100%;
      max-width: 400px;
      background-color: #55C9F6;
      padding: 20px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
      border-radius: 5px;
      text-align: center;
    }

    h2 {
      text-align: center;
      color: black;
      font-size: 24px;
    }

    label {
      display: block;
      margin-bottom: 10px;
      color: black;
    }

    input[type="email"],
    input[type="password"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    input[type="submit"] {
      padding: 10px 20px;
      background-color: #3498DB;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #2980B9;
    }
  </style>
</head>
<body>
    <center>
  <div class="form">
    <h2>Iniciar Sesión</h2>
    <form action="php/entrar.php" method="post">
      <label for="email">Correo Electrónico:</label>
      <input type="email" id="email" name="email" required>

      <label for="password">Contraseña:</label>
      <input type="password" id="password" name="password" required>

      <input type="submit" value="Iniciar Sesión">
    </form>
  </div>
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