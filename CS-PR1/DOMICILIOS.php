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
<body style="background-repeat: no-repeat; background-size: cover; background-image: url(IMG/Fondos/foto\ 7.jpeg);">
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
<!---------------------->
<style>
   form {
      width: 100%;
      max-width: 500px; 
      background-color: #55C9F6;
      padding: 20px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
      border-radius: 5px;
    }

    h1 {
      text-align: center;
      color: black;
    }

    label {
      display: block;
      margin-bottom: 10px;
      color: #333;
    }

    input[type="text"],
    input[type="tel"],
    input[type="email"],
    textarea {
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
    @media (max-width: 600px) {
      form {
        max-width: 100%;
      }
    }
  </style>
</head>
<body>
  <center>
  <br>
  <br>
  <form action="procesar_domicilio.php" method="POST">
    <h1>Formulario de Toma de Domicilios</h1>
    <label for="nombre">Nombre Completo:</label>
    <input type="text" id="nombre" name="nombre" required>

    <label for="telefono">Teléfono de Contacto:</label>
    <input type="tel" id="telefono" name "telefono" required>

    <label for="correo">Correo Electrónico:</label>
    <input type="email" id="correo" name="correo" required>

    <label for="direccion">Dirección de Entrega:</label>
    <textarea id="direccion" name="direccion" rows="4" required></textarea>

    <label for="pedido">Detalle del Pedido:</label>
    <textarea id="pedido" name="pedido" rows="4" required></textarea>

    <input type="submit" value="Enviar Pedido">
  </form>
  <br>
  <br>
  <br>
  </center>
<!---------------------->

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