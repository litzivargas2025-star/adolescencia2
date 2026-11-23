<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>test</title>
  <link rel="stylesheet"  href="estilo_menu.css">
  <link rel="stylesheet"  type="text/css" href="estilo_tipos.css">
</head>
<body>
<!-- ---------------------------- MENU ------------------------- -->
 <nav>
    <ul class="menu">
      <li><a href="inicio.php">Inicio</a></li>
      <li class="dropdown">
        <a href="#">Menú ▾</a> <!-- Enlace principal que activa el hover -->
        <ul class="submenu">
          <li><a href="inicio.php">Inicio</a></li>
          <li><a href="tipos.php">Tipos de emociones</a></li>
          <li><a href="test_emociones.php">Test de emociones</a></li>
        </ul>
      </li>
      
    </ul>
  </nav>
  <!-- ------------------------- FIN MENU ----------------------- -->

<!-- Sección del título con borde inferior curvo -->
    <section class="encabezado-curvo">
        <h1>Tipos de emociones básicas</h1>
    </section>

    <!-- Contenedor de las 5 columnas -->
    <main class="contenedor-emociones">
        <div class="tarjeta asco">
          <img src="asco.png" alt="Desagrado" class="img-emocion" onclick="window.location.href='desagrado.php'" style="cursor: pointer;">
            <h2>Asco</h2>
        </div>
        <div class="tarjeta enojo">
            <img src="enojo.png" alt="Furia" class="img-emocion" onclick="window.location.href='enojo.php'" style="cursor: pointer;">
            <h2>Enojo</h2>
        </div>
        <div class="tarjeta alegria">
           <img src="alegria.png" alt="Alegria" class="img-emocion" onclick="window.location.href='alegria.php'" style="cursor: pointer;">
            <h2>Alegría</h2>
        </div>
        <div class="tarjeta miedo">
           <img src="miedo.png" alt="Miedo" class="img-emocion" onclick="window.location.href='temor.php'" style="cursor: pointer;">
            <h2>Miedo</h2>
        </div>
        <div class="tarjeta tristeza">
           <img src="tristeza.png" alt="Tristeza" class="img-emocion" onclick="window.location.href='tristeza.php'" style="cursor: pointer;">
            <h2>Tristeza</h2>
        </div>
    </main>

</body>
</html>