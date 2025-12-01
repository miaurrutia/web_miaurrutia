<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Contacto</title>
  <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>

  <div class="nav-container">
    <img src="../imagenes/logo.png" alt="Logo" class="icono-esquina">
    <button class="menu-toggle" aria-label="Menú">&#9776;</button>
    <ul class="horizontal">
      <li><a href="../index.html">Inicio</a></li>
      <li><a href="../arte/index.html">Arte</a></li>
      <li><a href="../animaciones/index.html">Animaciones</a></li>
      <li><a href="../Videojuego/index.html">Videojuego</a></li>
      <li><a href="#">Contacto</a></li>
    </ul>
  </div>
  
  <div class="contenido">
    <div class="texto">
      <h1>Para más información</h1>
      
      <div class="contacto-directo">
        <h2>Contacto directo:</h2>
        <p><strong>Teléfono:</strong> +54 9 3764 79-0253</p>
        <p><strong>Correo:</strong> 
          <a href="mailto:Miaurrutiamenor22@gmail.com">Miaurrutiamenor22@gmail.com</a>
        </p>
      </div>

      <div class="login-box">
        <h2>Formulario de contacto</h2>

        <form id="formulario-contacto" method="POST" action="procesar_contacto.php">

          <div class="user-box">
            <input type="text" id="nombre" name="nombre" required>
            <label for="nombre">Nombre y Apellido*</label>
          </div>

          <div class="user-box">
            <input type="email" id="email" name="email" 
              pattern="[a-zA-Z0-9._%+-]+@(gmail|hotmail|outlook)\.[a-zA-Z]{2,}">
            <label for="email">Correo (Gmail o Hotmail)</label>
          </div>

          <div class="user-box">
            <input type="tel" id="telefono" name="telefono" pattern="\+?\d{10,15}">
            <label for="telefono">Teléfono (código país + número)</label>
          </div>

          <div class="user-box user-box-select">
  <label for="nacionalidad">Nacionalidad*</label>
  <select name="nacionalidad" id="nacionalidad" required>
    <option value="" disabled selected hidden></option>
    <option value="argentina">Argentina</option>
    <option value="brasilena">Brasilera</option>
    <option value="chilena">Chilena</option>
    <option value="colombiana">Colombiana</option>
    <option value="venezolana">Venezolana</option>
    <option value="espanola">Española</option>
    <option value="otra">Otra</option>
  </select>
</div>


          <div class="user-box">
            <input type="text" id="asunto" name="asunto" required>
            <label for="asunto">Asunto*</label>
          </div>
          
          <div class="user-box">
            <textarea id="mensaje" name="mensaje" rows="4" required></textarea>
            <label for="mensaje">Mensaje*</label>
          </div>

          <div class="mensaje-validacion" id="mensaje-validacion"></div>

          <input type="submit" value="Enviar mensaje">
        </form>

        <div id="mensaje-agradecimiento" style="display: none;">
          <p>¡Gracias por tu mensaje! Me pondré en contacto contigo pronto.</p>
        </div>
      </div>

      <h2>Redes Sociales:</h2>
      <ul class="redes">
        <li>
          <a href="https://www.instagram.com/lawastaken?igsh=MXN1cWZ3c3Zvcm1rYQ==" 
             target="_blank" class="instagram-link">
            <img src="https://upload.wikimedia.org/wikipedia/commons/e/e7/Instagram_logo_2016.svg" 
                 alt="Instagram logo" class="icono-instagram">
          </a>
        </li>
      </ul>
    </div>
  </div>

  <script src="../js/script.js"></script>
</body>
</html>
