<?php
// require_once '../conexion.php'; // <- tu conexión a la base de datos
$emocion = "Alegría";
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?= $emocion ?> | Intensa-Mente</title>
<link rel="stylesheet" href="estilo_alegria.css">
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
  <img src="1.png" alt="Alegría">
  <h1>Alegría</h1>
  <p>La emoción que ilumina cada recuerdo. Toca las esferas para revivir momentos felices.</p>
</header>

<div class="esferas" id="esferas"></div>
<div id="mensaje">Toca una esfera</div>
<div class="panel">
  <div>Recuerdos felices: <b id="n">0</b></div>
  <button id="otra">Crear más esferas</button>
</div>

<div class="ticker" aria-hidden="true"><div>Amigos ✦ Risas ✦ Música ✦ Logros ✦ Aventuras ✦ Abrazos ✦ Recuerdos ✦ Amigos ✦ Risas ✦ Música ✦ Logros ✦ Aventuras ✦ Abrazos ✦ Recuerdos ✦ Amigos ✦ Risas ✦ Música ✦ Logros ✦ Aventuras ✦ Abrazos ✦ Recuerdos ✦ </div></div>

<main>
  <section>
    <h2>Alegría no significa felicidad permanente</h2>
    <ul class="datos">
      <li>Sentir alegría no implica estar bien todo el tiempo. Las emociones cambian constantemente y es normal experimentar tristeza, enojo, miedo o preocupación. Una salud emocional equilibrada no consiste en eliminar las emociones negativas, sino en reconocerlas y permitir que todas cumplan su función.</li> <img src="17.png"  style=" width: 300px; height: 200px";>
    </ul>
  </section>

  <section>
    <h2>La alegría en la vida cotidiana</h2>
    <p>La alegría es una emoción básica y placentera que aparece cuando algo nos sale bien, convivimos con alguien querido o disfrutamos el momento. Aumenta la motivación, fortalece los vínculos sociales, mejora la creatividad y ayuda al cuerpo a recuperarse del estrés.</p>
    <p>Pero no se trata de estar feliz todo el tiempo: la película enseña que la alegría convive con las demás emociones, y que los recuerdos más valiosos suelen mezclar varias.</p>
    <img src="2.png"  style=" width: 300px; height: 200px";>
  </section>

  <section>
    <h2>Cómo cultivarla</h2>
    <div class="tarjetas">
      <article><h3>Agradece</h3><p>Anota cada noche tres cosas buenas del día.</p></article>
      <article><h3>Convive</h3><p>Pasa tiempo de calidad con personas que quieres.</p></article>
      <article><h3>Muévete</h3><p>Bailar, caminar o jugar libera endorfinas.</p></article>
      <article><h3>Comparte</h3><p>Ayudar a otros también te hace sentir bien.</p></article>
    </div>
  </section>

  <section class="adol">
    <h2>La alegría en la adolescencia</h2>
    <p>Entre los 12 y los 18 años el cerebro es muy sensible a la recompensa, por eso la alegría se vive con más intensidad, sobre todo con amigos. A esto se suman los cambios hormonales y una corteza prefrontal (la zona que regula impulsos y emociones) que sigue madurando hasta mediados de los veinte. Resultado: los ánimos pueden subir y bajar muy rápido, y es completamente normal.</p>
    <div class="hechos"><div><b>Más intensa</b><p>Los logros, la música y las risas se sienten con mucha fuerza en esta etapa.</p>
      <img src="4.png"  style=" width: 300px; height: 200";></div><div><b>Más social</b><p>Compartirla con amigos multiplica el efecto: la pertenencia importa mucho.</p>
     <img src="3.png"  style=" width: 300px; height: 200";></div><div><b>Más cambiante</b><p>Pasar de la euforia al cansancio en pocas horas es parte del desarrollo.</p> <img src="5.png"  style=" width: 300px; height: 200";></div></div>
    <h3>¿Cómo se ve según el lugar?</h3>
    <div class="tabs" role="tablist"><button type="button" role="tab" data-t="Buscan más autonomía y privacidad. Los momentos felices con la familia pasan a ser más selectivos: una cena, una película o una salida pueden valer mucho."><img src="6.png"  style=" width: 300px; height: 200";><p> En casa</p></button><button type="button" role="tab" data-t="Un buen resultado, un gol, una obra de teatro o pertenecer a un club generan orgullo y motivación. Sentirse parte del grupo es clave."> <img src="7.png"  style=" width: 300px; height: 200";><p>En la escuela</p></button><button type="button" role="tab" data-t="Es su mayor fuente de alegría: chistes internos, música, fiestas y tiempo juntos fortalecen la identidad y la confianza."><img src="9.png"  style=" width: 300px; height: 200";><p>Con amigos</p></button><button type="button" role="tab" data-t="Un mensaje o una reacción pueden dar alegría rápida, pero compararse con la vida de otros puede apagarla. Conviene equilibrar lo digital con lo presencial."><img src="8.png"  style=" width: 300px; height: 200";><p>En redes</p></button></div>
    <div class="contenido" aria-live="polite"></div>
    <details><summary>Mito: «Los adolescentes siempre están de mal humor.»</summary><p>Falso. También sienten alegría muy intensa. Los cambios de ánimo son parte normal de crecer, no la regla.</p><img src="11.png"  style=" width: 300px; height: 200";></details>
    <div class="ayuda"><b><p>Cuándo pedir ayuda.</b> Si durante varias semanas nada les da gusto, pierden interés en lo que antes disfrutaban o se aíslan, puede ser señal de depresión. Lo mejor es hablarlo con un adulto de confianza, el orientador escolar o un profesional de salud mental.</p><img src="10.png"  style=" width: 300px; height: 200";></div>
  </section>

  <section class="dat">
    <h2>Datos para recordar</h2>
    <div class="datos4"><div><b>Contagiosa</b>Sonreír y reír cerca de otros hace que el buen ánimo también se contagie.</div><div><b>Se entrena</b>La gratitud y el ejercicio regular ayudan a sentirse mejor.</div><div><b>Necesita compañía</b>Pasar tiempo con amigos y familia influye mucho en el bienestar.</div><div><b>Convive con la tristeza</b>Se puede sentir alegría y tristeza a la vez, y es normal.</div></div>
  </section>

  <section class="mitad test">
    <h2>¿Te identificas?</h2>
    <p>Marca lo que va contigo:</p>
    <label><input type="checkbox"> Me río mucho con mis amigos</label><label><input type="checkbox"> Disfruto cuando logro algo que me costó</label><label><input type="checkbox"> Me gusta compartir buenas noticias</label><label><input type="checkbox"> Tengo música o actividades que me emocionan</label>
    <div id="resultado" data-m="[&quot;Hoy la alegría está tranquila. Busca una actividad que te guste.&quot;, &quot;Tienes una buena dosis de alegría. Compártela con alguien.&quot;, &quot;¡Alegría al máximo! Aprovecha para contagiarla.&quot;]" aria-live="polite">Marca algunas opciones para ver tu resultado.</div>
    <small>Es solo un juego, no un diagnóstico.</small>
  </section>

  <section class="mitad frase">
    <h2>Para pensar</h2>
    <blockquote>«La alegría no es no tener problemas; es encontrar razones para sonreír incluso con ellos.» <img src="12.png"  style=" width: 300px; height: 200";></blockquote>
  </section>

  <section class="gal">
    <h2>Galería</h2>
    <!-- CAMBIA galeria1.png ... galeria4.png por tus imágenes -->
    <div class="galeria"><figure><img src="13.png" alt="Momentos con amigos"><figcaption>Momentos con amigos</figcaption></figure><figure><img src="14.png" alt="Música y baile"><figcaption>Música y baile</figcaption></figure><figure><img src="15.png" alt="Logros y metas"><figcaption>Logros y metas</figcaption></figure><figure><img src="16.png" alt="Tiempo en familia"><figcaption>Tiempo en familia</figcaption></figure></div>
  </section>
</main>


<script src="script.js"></script>
</body>
</html>
