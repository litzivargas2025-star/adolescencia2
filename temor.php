<?php
// require_once '../conexion.php'; // <- tu conexión a la base de datos
$emocion = "Temor";
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?= $emocion ?> | Intensa-Mente</title>
<link rel="stylesheet" href="estilo_temor.css">
<link rel="stylesheet" type="text/css" href="estilo_menu.css">
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
<header>
  <!-- CAMBIA el nombre de la imagen por la que vas a usar -->
  <img src="img_temor/1.png" alt="Temor">
  <h1>Temor</h1>
  <p>Te protege del peligro y te mantiene a salvo. Toca las esferas para identificar lo que nos alerta.</p>
</header>

<div class="esferas" id="esferas"></div>
<div id="mensaje">Toca una esfera</div>
<div class="panel">
  <div>Alertas superadas: <b id="n">0</b></div>
  <button id="otra">Crear más esferas</button>
</div>

<div class="ticker" aria-hidden="true"><div>Precaución ✦ Seguridad ✦ Límites ✦ Alerta ✦ Cuidado ✦ Preparación ✦ Valentía ✦ Precaución ✦ Seguridad ✦ Límites ✦ Alerta ✦ Cuidado ✦ Preparación ✦ Valentía ✦ Precaución ✦ Seguridad ✦ Límites ✦ Alerta ✦ Cuidado ✦ Preparación ✦ Valentía ✦ </div></div>

<main>
  <section>
    <h2>El temor no es cobardía, es un sistema de alarma</h2>
    <ul class="datos">
      <li>Sentir miedo no te hace débil. Es una respuesta natural de supervivencia que nos avisa cuando hay riesgos o situaciones desconocidas. Una buena salud emocional no busca eliminar el temor por completo, sino aprender a escucharlo sin dejar que nos paralice por completo.</li> <center><img src="img_temor/2.png" style="width: 200px; height: 200px;" alt="Temor protector"></center>
    </ul>
  </section>

  <section>
    <h2>El temor en la vida cotidiana</h2>
    <p>El miedo es una emoción básica que evolucionó para anticipar amenazas, evaluar riesgos y mantenernos alejados del peligro físico o emocional. Prepara al cuerpo para reaccionar rápidamente ante lo inesperado.</p>
    <p>Sin embargo, a veces el temor se activa ante situaciones que no son un peligro real (como hablar en público o equivocarse), por lo que es importante distinguir entre una amenaza real y la simple incertidumbre.</p>
    <center><img src="img_temor/3.png" style="width: 300px; height: 300px;" alt="Vida cotidiana"></center>
  </section>

  <section>
    <h2>Cómo gestionarlo</h2>
    <div class="tarjetas">
      <article><h3>Respira</h3><p>Usa la respiración profunda para calmar los latidos acelerados.</p></article>
      <article><h3>Analiza</h3><p>Pregúntate si el peligro es real o solo un escenario imaginado.</p></article>
      <article><h3>Avanza</h3><p>Divide los retos grandes en pequeños pasos para perderles el miedo.</p></article>
      <article><h3>Compártelo</h3><p>Hablar de lo que te preocupa reduce su intensidad.</p></article>
    </div>
  </section>

  <section class="adol">
    <h2>El temor en la adolescencia</h2>
    <p>En la adolescencia surgen nuevos temores muy ligados a la identidad social: el miedo al rechazo, a no encajar, al fracaso escolar o a la incertidumbre sobre el futuro. Como la amígdala cerebral (centro emocional) madura antes que la corteza prefrontal, las situaciones nuevas pueden sentirse exageradamente amenazantes. Es completamente normal sentir inseguridad ante los cambios.</p>
    <div class="hechos">
      <div><b>Miedo al rechazo</b><p>La opinión del grupo y pertenecer importa muchísimo en esta etapa.</p><img src="img_temor/4.png" style="width: 200px; height: 200px;" alt="Rechazo"></div>
      <div><b>Incertertidumbre</b><p>Pensar en el futuro, los exámenes o las decisiones de adultos genera presión.</p><img src="img_temor/3.png" style="width: 200px; height: 200px;" alt="Incertertidumbre"></div>
      <div><b>Miedo a equivocarse</b><p>La presión por ser perfectos puede frenar el deseo de intentar cosas nuevas.</p><img src="img_temor/5.png" style="width: 200px; height: 200px;" alt="Equivocarse"></div>
    </div>
    <h3>¿Cómo se ve según el lugar?</h3>
    <div class="tabs" role="tablist">
      <button type="button" role="tab" data-t="Miedo a defraudar a la familia, a las expectativas de los padres o a tener discusiones fuertes en casa."><img src="img_temor/6.png" style="width: 300px; height: 200px;"><p>En casa</p></button>
      <button type="button" role="tab" data-t="Temor a pasar al frente a exponer, a no entender los temas o al juicio de los compañeros de clase."><img src="img_temor/7.png" style="width: 300px; height: 200px;"><p>En la escuela</p></button>
      <button type="button" role="tab" data-t="Miedo a ser excluido de los planes, a decir algo incorrecto o a perder amistades importantes."><img src="img_temor/9.png" style="width: 300px; height: 200px;"><p>Con amigos</p></button>
      <button type="button" role="tab" data-t="Temor a las críticas públicas, a los comentarios negativos o a compararse con vidas ideales falsas en internet."><img src="img_temor/8.png" style="width: 300px; height: 200px;"><p>En redes</p></button>
    </div>
    <div class="contenido" aria-live="polite"></div>
    <details><summary>Mito: «Los valientes nunca sienten miedo.»</summary><p>Falso. La verdadera valentía consiste en sentir temor y, aun así, actuar con cautela y determinación hacia lo que importa.</p>
    <div class="ayuda"><b><p>Cuándo pedir ayuda.</b> Si el miedo o la ansiedad se vuelven constantes, impiden dormir, te hacen evitar lugares o causan ataques de pánico frecuentes, es momento de buscar apoyo profesional o hablar con un adulto de confianza.</p><img src="img_temor/10.png" style="width: 300px; height: 200px;" alt="Ayuda profesional"></div>
  </section>

  <section class="dat">
    <h2>Datos para recordar</h2>
    <div class="datos4">
      <div><b>Es una alerta</b>Nos avisa de riesgos reales y nos prepara para actuar con cuidado.</div>
      <div><b>Se puede entrenar</b>Enfrentar los miedos paso a paso reduce la ansiedad con el tiempo.</div>
      <div><b>Es universal</b>Todas las personas sienten temor, incluso cuando aparentan seguridad.</div>
      <div><b>Se comunica</b>Compartir lo que nos asusta ayuda a verlo con mayor claridad.</div>
    </div>
  </section>

  <section class="mitad test">
    <h2>¿Te identificas?</h2>
    <p>Marca lo que va contigo:</p>
    <label><input type="checkbox"> Me pongo nervioso al hablar frente a muchas personas</label>
    <label><input type="checkbox"> Pienso mucho antes de tomar decisiones importantes</label>
    <label><input type="checkbox"> A veces me preocupa no cumplir las expectativas de los demás</label>
    <label><input type="checkbox"> Me cuesta adaptarme rápidamente a los cambios inesperados</label>
    <div id="resultado" data-m="[&quot;El temor está bajo control. Mantienes la calma ante lo nuevo.&quot;, &quot;Sientes temores comunes. Identificarlos te ayuda a superarlos.&quot;, &quot;El miedo te pesa un poco. Recuerda que no tienes que enfrentar todo solo.&quot;]" aria-live="polite">Marca algunas opciones para ver tu resultado.</div>
    <small>Es solo un juego, no un diagnóstico.</small>
  </section>

  <section class="mitad frase">
    <h2>Para pensar</h2>
    <blockquote>«El miedo hace que las cosas parezcan más grandes de lo que son, pero enfrentarlo te hace más fuerte.» <img src="img_temor/12.png" style="width: 300px; height: 200px;" alt="Frase de temor"></blockquote>
  </section>

  <section class="gal">
    <h2>Galería</h2>
    <!-- CAMBIA galeria1.png ... galeria4.png por tus imágenes -->
    <div class="galeria">
      <figure><img src="img_temor/13.png" alt="Superar retos"><figcaption>Superar retos</figcaption></figure>
      <figure><img src="img_temor/14.png" alt="Buscar apoyo"><figcaption>Buscar apoyo</figcaption></figure>
      <figure><img src="img_temor/15.png" alt="Respiración y calma"><figcaption>Respiración y calma</figcaption></figure>
      <figure><img src="img_temor/16.png" alt="Pasos seguros"><figcaption>Pasos seguros</figcaption></figure>
    </div>
  </section>
</main>

<script src="temor.js"></script>
</body>
</html>