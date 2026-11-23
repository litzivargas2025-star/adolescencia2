<?php
// require_once '../conexion.php'; // <- tu conexión a la base de datos
$emocion = "Enojo";
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?= $emocion ?> | Intensa-Mente</title>
<link rel="stylesheet" href="estilo_enojo.css">
<link rel="stylesheet"  href="estilo_menu.css">
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
    <div class="llamas" aria-hidden="true">🔥🔥🔥</div>
    <!-- CAMBIA el nombre de la imagen por la que vas a usar -->
    <img src="img_enojo/1.png" alt="Enojo">
  </div>
  <h1>Enojo</h1>
  <p id="estado">Todo bajo control... por ahora.</p>

  <div class="medidor">
    <div class="barra" aria-hidden="true"><div></div></div>
    <input type="range" id="nivel" min="0" max="100" value="0" aria-label="Nivel de enojo">
  </div>
  <div class="botones">
    <button id="provocar">Provocar</button>
    <button id="calma" class="calma">Respirar hondo</button>
  </div>
</div>

<div class="ticker" aria-hidden="true"><div>Límites ✦ Justicia ✦ Libertad ✦ Presión ✦ Respeto ✦ Cambios ✦ Respira ✦ Límites ✦ Justicia ✦ Libertad ✦ Presión ✦ Respeto ✦ Cambios ✦ Respira ✦ Límites ✦ Justicia ✦ Libertad ✦ Presión ✦ Respeto ✦ Cambios ✦ Respira ✦ </div></div>

<main>
<aside class="lado">
<section class="mitad frase">
    <h2>Para pensar</h2>
    <blockquote>«Enojarse no es el problema; lo que hacemos con ese enojo, sí.»<img src="img_enojo/2.png"  style=" width: 230px; height: 100px margin-top:50px";></blockquote>
  </section>
<section class="mitad test">
    <h2>¿Te identificas?</h2>
    <p>Marca lo que va contigo:</p>
    <label><input type="checkbox"> Me molesta mucho cuando algo es injusto</label><label><input type="checkbox"> Me cuesta escuchar cuando estoy muy molesto/a</label><label><input type="checkbox"> Siento tensión en el cuerpo cuando me enojo</label><label><input type="checkbox"> Después de enojarme me siento cansado/a o arrepentido/a</label>
    <div id="resultado" data-m="[&quot;El enojo no te domina. Sigue cuidando tus límites.&quot;, &quot;El enojo aparece de vez en cuando. Practica pausar y respirar.&quot;, &quot;Sientes el enojo con intensidad. Prueba pausar, respirar y platicar con alguien de confianza.&quot;]" aria-live="polite">Marca algunas opciones para ver tu resultado.</div>
    <small>Es solo un juego, no un diagnóstico.</small>
  </section>
<section>
    <h2>Datos para recordar</h2>
    <div class="datos4"><div><b>Emoción básica</b>Existe en todas las culturas y se reconoce en el rostro.</div><div><b>Baja con una pausa</b>La oleada intensa suele disminuir si nos damos unos minutos antes de reaccionar.</div><div><b>Ponerle nombre ayuda</b>Identificar qué sentimos hace más fácil controlarlo.</div><div><b>El sueño influye</b>Dormir poco hace que cueste más regular el enojo.</div></div>
  </section>
</aside>
<div class="centro">
<section>
    <h2>¿Qué es el enojo?</h2>
    <ul>
      <li><p>El enojo es una emoción que aparece cuando sentimos que algo es injusto, frustrante, amenazante o contrario a lo que esperábamos. Puede surgir, por ejemplo, cuando alguien nos trata mal, nos impiden alcanzar una meta o sentimos que no respetan nuestros derechos.</p>

El enojo puede variar desde una molestia leve hasta una ira intensa. Es una reacción natural y, en cierta medida, puede ayudarnos a identificar problemas, defender nuestros límites y buscar soluciones.</li>
    </ul>
  </section>
<section>
    <h2>El enojo en la vida cotidiana</h2>
    <p>El enojo es una emoción básica que aparece cuando sentimos una injusticia, una amenaza o que se pasaron nuestros límites. Eleva el ritmo cardíaco, tensa los músculos y nos da energía para actuar.</p>
    <p>No es malo sentirlo: sirve para poner límites y defender lo importante. El problema es cuando se descontrola y lastima a otros o a nosotros mismos.</p>
  </section>
<section>
    <h2>Cómo manejarlo</h2>
    <div class="tarjetas">
      <article><h3>Pausa</h3><p>Cuenta hasta diez antes de responder.</p><img src="img_enojo/3.png"  style=" width: 200px; height: 100px margin-top:50px";></article>
      <article><h3>Respira</h3><p>Inhala 4 segundos, exhala 6. Repite varias veces.</p><img src="img_enojo/4.png"  style=" width: 200px; height: 100px margin-top:50px";></article>
      <article><h3>Muévete</h3><p>Camina o haz ejercicio para soltar la tensión.</p><img src="img_enojo/5.png"  style=" width: 200px; height: 100px margin-top:50px";></article>
      <article><h3>Habla</h3><p>Di lo que sientes con calma, sin gritar ni culpar.</p><img src="img_enojo/6.png"  style=" width: 200px; height: 100px margin-top:50px";></article>
    </div>
  </section>
<section class="adol">
    <h2>El enojo en la adolescencia</h2>
    <p>Es una de las emociones más frecuentes en esta etapa. Influyen los cambios hormonales, la presión escolar, la falta de sueño y las ganas de ser más independientes. Además, el enojo suele esconder otras emociones como tristeza, vergüenza, miedo o frustración, y a esa edad aún cuesta ponerles nombre.</p>
    <div class="hechos"><div><b>Señales comunes</b>Respuestas cortantes, portazos, silencio, irritabilidad o discusiones frecuentes.<img src="img_enojo/7.png"  style=" width: 200px; height: 100px margin-top:50px";></div><div><b>Detrás del enojo</b>A menudo hay cansancio, estrés, inseguridad o sentirse incomprendido.<img src="img_enojo/8.png"  style=" width: 200px; height: 100px margin-top:50px";></div><div><b>En el cuerpo</b>Corazón acelerado, tensión en la mandíbula, calor y ganas de moverse.<img src="img_enojo/9.png"  style=" width: 200px; height: 100px margin-top:50px";></div></div>
    <h3>¿Cómo se ve según el lugar?</h3>
    <div class="tabs" role="tablist"><button type="button" role="tab" data-t="Aparecen discusiones por reglas, horarios, privacidad o el celular. Muchas veces es la lucha entre pedir libertad y seguir necesitando apoyo.">En casa</button><button type="button" role="tab" data-t="Calificaciones, exámenes, injusticias percibidas y conflictos con compañeros o profesores pueden encenderlo rápido.">En la escuela</button><button type="button" role="tab" data-t="Rumores, exclusión, traiciones o sentirse ignorado generan enojo intenso, porque el grupo es muy importante para su identidad.">Con amigos</button><button type="button" role="tab" data-t="Comentarios hirientes, burlas o ciberacoso provocan reacciones fuertes. Responder en caliente suele empeorar la situación: conviene pausar antes de escribir.">En redes</button></div>
    <div class="contenido" aria-live="polite"></div>
    <details><summary><p>Mito: «Enojarse significa ser una persona agresiva.»</p><center><img src="img_enojo/10.png"  style=" width: 230px; height: 100px margin-top:50px";></center></summary><p>Falso. Sentir enojo es normal y útil para poner límites. Lo que importa es cómo se expresa: hablar y pausar ayuda; gritar o golpear, no.</p></details>
    <div class="ayuda"><b>Cuándo pedir ayuda.</b><p> Si el enojo es casi constante, hay golpes, amenazas, destrozos o se afectan los estudios y las amistades, es momento de pedir apoyo a un adulto de confianza, al orientador escolar o a un profesional de salud mental.</p><center><img src="img_enojo/11.png"  style=" width: 230px; height: 100px margin-top:50px";></center></div>
  </section>
<section class="gal">
    <h2>Galería</h2>
    <!-- CAMBIA galeria1.png ... galeria4.png por tus imágenes -->
    <div class="galeria"><figure><img src="img_enojo/12.png" alt="Cuando algo es injusto"><figcaption>Cuando algo es injusto</figcaption></figure><figure><img src="img_enojo/13.png" alt="Frustración"><figcaption>Frustración</figcaption></figure><figure><img src="img_enojo/14.png" alt="Pausa y respiración"><figcaption>Pausa y respiración</figcaption></figure><figure><img src="img_enojo/15.png" alt="La calma después"><figcaption>La calma después</figcaption></figure></div>
  </section>
</div>
</main>

<div id="boom" aria-hidden="true">¡BOOM!</div>

<script src="script_enojo.js"></script>
</body>
</html>
