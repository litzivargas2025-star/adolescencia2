<?php
// require_once '../conexion.php'; // <- tu conexión a la base de datos
$emocion = "Tristeza";
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?= $emocion ?> | Intensa-Mente</title>
<link rel="stylesheet" href="tristeza.css">
<link rel="stylesheet" href="estilo_menu.css">
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

<div class="hero">
  <div class="cara">
    <div class="llamas" aria-hidden="true">💧💧💧</div>
    <!-- CAMBIA el nombre de la imagen por la que vas a usar -->
    <img src="img_tristeza/1.png" alt="Tristeza">
  </div>
  <h1>Tristeza</h1>
  <p id="estado">Todo en calma... procesando despacio.</p>

  <div class="medidor">
    <div class="barra" aria-hidden="true"><div></div></div>
    <input type="range" id="nivel" min="0" max="100" value="0" aria-label="Nivel de tristeza">
  </div>
  <div class="botones">
    <button id="provocar">Dejar fluir</button>
    <button id="calma" class="calma">Buscar apoyo</button>
  </div>
</div>

<div class="ticker" aria-hidden="true"><div>Pérdida ✦ Desahogo ✦ Apoyo ✦ Descanso ✦ Empatía ✦ Pausa ✦ Reflexión ✦ Pérdida ✦ Desahogo ✦ Apoyo ✦ Descanso ✦ Empatía ✦ Pausa ✦ Reflexión ✦ Pérdida ✦ Desahogo ✦ Apoyo ✦ Descanso ✦ Empatía ✦ Pausa ✦ Reflexión ✦ </div></div>

<main>
<aside class="lado">
<section class="mitad frase">
    <h2>Para pensar</h2>
    <blockquote>«Llorar no es rendirse; es dejar salir lo que pesa en el alma.»<center><img src="img_tristeza/2.png" style="width: 200px; height: 200px; margin-top:50px;" alt="Frase tristeza"></center></blockquote>
  </section>
<section class="mitad test">
    <h2>¿Te identificas?</h2>
    <p>Marca lo que va contigo:</p>
    <label><input type="checkbox"> A veces necesito llorar para sentirme un poco más liviano/a</label>
    <label><input type="checkbox"> Prefiero estar a solas cuando me siento decaído/a</label>
    <label><input type="checkbox"> Siento un nudo en la garganta o el pecho cuando algo me duele</label>
    <label><input type="checkbox"> Después de desahogarme, suelo ver las cosas con más calma</label>
    <div id="resultado" data-m="[&quot;La tristeza es pasajera en ti. Sabes encontrar motivación con facilidad.&quot;, &quot;Experimentas la tristeza de forma equilibrada. Date tu espacio para procesar.&quot;, &quot;Sientes la tristeza con mucha profundidad. No dudes en compartir lo que te pesa con alguien de confianza.&quot;]" aria-live="polite">Marca algunas opciones para ver tu resultado.</div>
    <small>Es solo un juego, no un diagnóstico.</small>
  </section>
<section>
    <h2>Datos para recordar</h2>
    <div class="datos4">
      <div><b>Señal de pausa</b>Nos avisa que necesitamos detenernos, descansar o procesar un cambio importante.</div>
      <div><b>Atrae empatía</b>Ver a alguien triste suele despertar la compasión y el apoyo de los demás.</div>
      <div><b>No es debilidad</b>Permitirse estar triste requiere valentía para aceptar lo que duele.</div>
      <div><b>El desahogo libera</b>Las lágrimas contienen sustancias que ayudan a reducir el estrés físico y mental.</div>
    </div>
  </section>
</aside>
<div class="centro">
<section>
    <h2>¿Qué es la tristeza?</h2>
    <ul>
      <li><p>La tristeza es una emoción básica que aparece cuando experimentamos una pérdida, una decepción, una separación o cuando las cosas no salen como esperábamos. Nos hace desacelerar el ritmo, reflexionar y mirar hacia nuestro interior.</p>
      La tristeza puede ir desde un leve decaimiento hasta una profunda pena. Es una reacción completamente natural y necesaria, ya que nos ayuda a sanar heridas emocionales y a buscar el consuelo que necesitamos.</li>
    </ul>
  </section>
<section>
    <h2>La tristeza en la vida cotidiana</h2>
    <p>La tristeza nos ayuda a procesar los cambios difíciles y las ausencias. Disminuye nuestra energía para obligarnos a descansar y centrar la atención en lo que perdimos o en lo que nos duele.</p>
    <p>No es un defecto ni un signo de debilidad: es una herramienta de sanación. El problema ocurre cuando se convierte en un estado permanente del que cuesta salir sin ayuda.</p>
  </section>
<section>
    <h2>Cómo manejarla</h2>
    <div class="tarjetas">
      <article><h3>Acepta</h3><p>Permítete sentir la tristeza sin juzgarte ni exigirte estar bien.</p><img src="img_tristeza/3.png" style="width: 150px; height: 150px; margin-top:50px;" alt="Acepta"></article>
      <article><h3>Desahógate</h3><p>Llorar, escribir o dibujar lo que sientes ayuda a liberar tensión.</p><img src="img_tristeza/4.png" style="width: 150px; height: 150px; margin-top:50px;" alt="Desahógate"></article>
      <article><h3>Descansa</h3><p>Date permiso para bajar el ritmo y recuperar energía física y mental.</p><img src="img_tristeza/5.png" style="width: 200px; height: 150px; margin-top:50px;" alt="Descansa"></article>
      <article><h3>Comparte</h3><p>Hablar con alguien que te escuche sin juzgar alivia el peso emocional.</p><img src="img_tristeza/6.png" style="width: 200px; height: 200px; margin-top:50px;" alt="Comparte"></article>
    </div>
  </section>
<section class="adol">
    <h2>La tristeza en la adolescencia</h2>
    <p>En esta etapa los duelos se viven con gran intensidad: el final de una amistad, cambios de escuela, rupturas amorosas o la sensación de no encajar. Los cambios en el cerebro y las hormonas hacen que las emociones se sientan a flor de piel.</p>
    <div class="hechos">
      <div><b>Sensibilidad alta</b><p>Las críticas, los alejamientos o las despedidas duelen mucho más.</p><img src="img_tristeza/7.png" style="width: 200px; height: 200px; margin-top:50px;" alt="Sensibilidad"></div>
      <div><b>Búsqueda de refugio</b><p>Encerrarse en la habitación, escuchar música melancólica o escribir en un diario.</p><img src="img_tristeza/8.png" style="width: 200px; height: 200px; margin-top:50px;" alt="Refugio"></div>
      <div><b>En el cuerpo</b><p>Sensación de pesadez, nudo en el estómago, fatiga y ganas de llorar.</p><img src="img_tristeza/9.png" style="width: 210px; height: 150px; margin-top:50px;" alt="Cuerpo"></div>
    </div>
    <h3>¿Cómo se ve según el lugar?</h3>
    <div class="tabs" role="tablist">
      <button type="button" role="tab" data-t="A veces se busca el aislamiento en la recámara o se evitan las charlas familiares por sentirse incomprendido o abrumado por las expectativas en casa.">En casa</button>
      <button type="button" role="tab" data-t="La presión por las calificaciones, la sensación de no rendir lo suficiente o problemas con compañeros pueden desatar momentos de mucha melancolía.">En la escuela</button>
      <button type="button" role="tab" data-t="Sentirse desplazado en el grupo de amigos o notar distanciamiento genera un profundo dolor, ya que la validación social pesa mucho.">Con amigos</button>
      <button type="button" role="tab" data-t="Ver vidas aparentemente perfectas de otros en internet puede intensificar la sensación de soledad o insuficiencia personal. Conviene desconectarse un poco.">En redes</button>
    </div>
    <div class="contenido" aria-live="polite"></div>
    <details><summary><p>Mito: «Estar triste todo el tiempo es parte normal de ser adolescente.»</p><center><img src="img_tristeza/10.png" style="width: 350px; height: 250px; margin-top:50px;" alt="Mito tristeza"></center></summary><p>Falso. Si bien los altibajos son comunes, una tristeza profunda que dura semanas enteras y no te deja disfrutar nada requiere atención y apoyo.</p></details>
    <div class="ayuda"><b>Cuándo pedir ayuda.</b><p> Si la tristeza se vuelve constante, pierdes interés por completo en lo que te gustaba, descuidas tu aseo, notas cambios en el sueño o la comida, o tienes pensamientos de desesperanza, habla de inmediato con un adulto de confianza o un profesional de salud mental.</p><center><img src="img_tristeza/11.png" style="width: 200px; height: 200px; margin-top:50px;" alt="Ayuda profesional"></center></div>
  </section>
<section class="gal">
    <h2>Galería</h2>
    <!-- CAMBIA galeria1.png ... galeria4.png por tus imágenes -->
    <div class="galeria">
      <figure><img src="img_tristeza/12.png" alt="Espacio y reflexión"><figcaption>Espacio y reflexión</figcaption></figure>
      <figure><img src="img_tristeza/13.png" alt="Desahogo"><figcaption>Desahogo</figcaption></figure>
      <figure><img src="img_tristeza/14.png" alt="Apoyo cercano"><figcaption>Apoyo cercano</figcaption></figure>
      <figure><img src="img_tristeza/15.png" alt="Sanación y calma"><figcaption>Sanación y calma</figcaption></figure>
    </div>
  </section>
</div>
</main>

<div id="boom" aria-hidden="true">¡DESAHOGO!</div>

<script src="tristeza.js"></script>
</body>
</html>