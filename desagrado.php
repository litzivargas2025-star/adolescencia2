<?php
// require_once '../conexion.php'; // <- tu conexión a la base de datos
$emocion = "Desagrado";

// Cosas a evaluar. Más adelante puedes cargarlas desde tu base de datos.
$cosas = [
  ["Brócoli",                "img/1.png",  "Árbol diminuto. Hostil."],
  ["Calcetín mojado",        "img/2.png", "Tibio. Húmedo. No."],
  ["Outfit con lentejuelas", "img/3.png",   "Ni en tu cumpleaños."],
  ["Leche vencida",          "img/4.png",    "El olor lo dice todo."],
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?= $emocion ?> | Intensa-Mente</title>
<link rel="stylesheet" href="estilo_desagrado.css">
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

<header>
  <!-- CAMBIA el nombre de la imagen por la que vas a usar -->
  <img src="img/5.png" alt="Desagrado">
  <div class="titulo">
    <h1>Desagrado</h1>
    <p>Te protegue de todo lo que sea asqueroso, feo o de mal gusto. Con ella no hay medias tintas.</p>
  </div>
</header>

<p class="pregunta">¿Qué rechazamos hoy?</p>

<section class="rejilla" id="rejilla">
<?php foreach ($cosas as $c): ?>
  <article class="cosa">
    <img src="<?= htmlspecialchars($c[1]) ?>" alt="<?= htmlspecialchars($c[0]) ?>">
    <h2><?= htmlspecialchars($c[0]) ?></h2>
    <p><?= htmlspecialchars($c[2]) ?></p>
    <button type="button">¡Qué asco!</button>
    <span class="sello">RECHAZADO</span>
  </article>
<?php endforeach; ?>
</section>

<div class="pie">
  <div>Rechazadas: <b id="cuenta">0</b> de <?= count($cosas) ?></div>
  <button id="reiniciar" type="button">Dar otra oportunidad</button>
</div>

<div class="ticker" aria-hidden="true"><div>Cringe ✦ Higiene ✦ Estilo ✦ Gustos ✦ Vergüenza ✦ Identidad ✦ Límites ✦ Cringe ✦ Higiene ✦ Estilo ✦ Gustos ✦ Vergüenza ✦ Identidad ✦ Límites ✦ Cringe ✦ Higiene ✦ Estilo ✦ Gustos ✦ Vergüenza ✦ Identidad ✦ Límites ✦ </div></div>

<main>
  <section class="info">
    <h2>¿Qué es el desagrado?</h2>
    <ul>
      <li>El desagrado, también llamado asco o repulsión, es una emoción que aparece cuando algo nos resulta desagradable, repulsivo o inaceptable. Puede producirse ante un mal olor, comida en mal estado, falta de higiene, ciertas imágenes o situaciones que consideramos incómodas.
    <img src="img/6.png"  style=" width: 300px; height: 200px margin-top:50px";> No todas las personas sienten desagrado ante las mismas cosas, porque esta emoción también está influida por la cultura, las experiencias personales y las creencias. Sin embargo, cuando el desagrado es muy intenso o interfiere con la vida cotidiana, puede ser útil hablar con un profesional de la salud mental.</ul>
  </section>

  <section class="info">
    <h2>El desagrado en la vida cotidiana</h2>
    <p>El asco es una emoción básica que evolucionó para protegernos de alimentos en mal estado, enfermedades y contaminación. Nos hace apartarnos de lo que podría hacernos daño.</p>
    <p>Con el tiempo también aparece como asco moral: rechazamos conductas que nos parecen crueles o injustas. Tiene una expresión facial universal: arrugar la nariz y fruncir la boca.<img src="img/7.png"  style=" width: 300px; height: 200px margin-top:50px";></p>
  </section>

  <section class="info">
    <h2>Cómo convivir con ella</h2>
    <div class="tarjetas">
      <article><h3>Escúchala</h3><p>Si algo te da asco, tu cuerpo te está avisando.</p><img src="img/8.png"  style=" width: 150px; height: 70px margin-top:50px";></article>
      <article><h3>Distingue</h3><p>No todo lo desagradable es peligroso: prueba cosas nuevas con calma.</p><img src="img/9.png"  style=" width: 150px; height: 70px margin-top:50px";></article>
      <article><h3>Sé amable</h3><p>Puedes rechazar algo sin humillar a nadie.</p><img src="img/10.png"  style=" width: 150px; height: 70px margin-top:50px";></article>
      <article><h3>Cuida tu espacio</h3><p>Higiene y orden ayudan a sentirte bien.</p><img src="img/11.png"  style=" width: 150px; height: 70px margin-top:50px";></article>
    </div>
  </section>

  <section class="adol">
    <h2>El desagrado en la adolescencia</h2>
    <p>En la adolescencia el asco se vuelve muy social: importan la apariencia, el olor, la ropa, lo que da vergüenza ajena y lo que se considera cringe. También aparece el asco moral frente a lo injusto o cruel. Rechazar ciertos gustos y elegir los propios ayuda a construir la identidad, aunque a veces se use para encajar en un grupo.</p>
    <div class="hechos"><div><b>Asco social</b>Preocupa mucho la imagen propia y cómo reaccionan los demás.<img src="img/12.png"  style=" width: 230px; height: 100px margin-top:50px";></div><div><b>Asco moral</b>Rechazan la crueldad, la hipocresía y las injusticias con fuerza.<img src="img/13..png"  style=" width: 230px; height: 100px margin-top:50px";></div><div><b>Gustos propios</b>Rechazar comidas, música o estilos ayuda a definir quiénes son.<img src="img/14.png"  style=" width: 230px; height: 100px margin-top:50px";></div></div>
    <h3>¿Cómo se ve según el lugar?</h3>
    <div class="tabs" role="tablist"><button type="button" role="tab" data-t="Rechazan ciertas comidas, discuten por el orden del cuarto o por la ropa que les compran. Es parte de afirmar sus propios gustos.">En casa</button><button type="button" role="tab" data-t="La vergüenza ajena, los olores o la higiene de otros pueden generar rechazo. Ojo: el asco también puede usarse para excluir o burlarse de alguien.">En la escuela</button><button type="button" role="tab" data-t="Lo cringe define qué se acepta y qué no en el grupo. La presión por encajar puede hacer que rechacen cosas que en realidad les gustan.">Con amigos</button><button type="button" role="tab" data-t="Filtros, comparaciones de cuerpos y contenido violento o desagradable influyen en cómo se ven a sí mismos. Es útil elegir qué contenido consumir.">En redes</button></div>
    <div class="contenido" aria-live="polite"></div>
    <details><summary>Mito: «Si algo me da asco, es porque es malo.»</summary><p>Falso. Muchas veces es solo costumbre o prejuicio. Conviene preguntarse si el rechazo protege o si está excluyendo injustamente a alguien.</p><img src="img/15.png"  style=" width: 230px; height: 100px margin-top:50px";></details>
    <div class="ayuda"><b>Cuándo pedir ayuda.</b> Si el asco se dirige hacia el propio cuerpo, hace que evite comer o provoca rituales de limpieza excesivos, puede relacionarse con trastornos alimenticios o de ansiedad. Es importante hablarlo con un adulto de confianza o un profesional de salud.<img src="img/16.png"  style=" width: 230px; height: 100px margin-top:50px";></div>
  </section>

  <section>
    <h2>Datos para recordar</h2>
    <div class="datos4"><div><b>Universal</b>Todas las personas reconocen el gesto de asco: nariz arrugada y labios apretados.<img src="img/17.png"  style=" width: 230px; height: 100px margin-top:50px";></div><div><b>Protege</b>Nos aleja de lo que podría enfermarnos.<img src="img/18.png"  style=" width: 230px; height: 100px margin-top:50px";></div><div><b>Se aprende</b><p>Muchos rechazos dependen de la cultura y la costumbre.</p><img src="img/19.png"  style=" width: 230px; height: 100px margin-top:50px";></div><div><b>Se contagia</b>Ver a otros hacer gestos de asco hace que también lo sintamos.<img src="img/20.png"  style=" width: 230px; height: 100px margin-top:50px";></div></div>
  </section>

  <section class="mitad test">
    <h2>¿Te identificas?</h2>
    <p>Marca lo que va contigo:</p>
    <label><input type="checkbox"> Hay comidas o texturas que no soporto</label><label><input type="checkbox"> Me da vergüenza ajena con facilidad</label><label><input type="checkbox"> Me importa mucho el orden y la limpieza</label><label><input type="checkbox"> Los malos olores me molestan más que a otros</label>
    <div id="resultado" data-m="[&quot;El desagrado no te limita mucho. Eres bastante abierto/a.&quot;, &quot;Tienes buen filtro: sabes qué no te gusta y por qué.&quot;, &quot;Tu radar de asco es muy fino. Recuerda distinguir entre lo peligroso y lo que solo es distinto.&quot;]" aria-live="polite">Marca algunas opciones para ver tu resultado.</div>
    <small>Es solo un juego, no un diagnóstico.</small>
  </section>

  <section class="mitad frase">
    <h2>Para pensar</h2>
    <blockquote><p>«Decir «no me gusta» con respeto también es una forma de cuidarte.»</p><img src="img/21.png"  style=" width: 230px; height: 100px margin-top:50px";></blockquote>
  </section>

  <section class="gal">
    <h2>Galería</h2>
    <!-- CAMBIA galeria1.png ... galeria4.png por tus imágenes -->
    <div class="galeria"><figure><img src="img/22.png" alt="Gustos propios"><figcaption>Gustos propios</figcaption></figure><figure><img src="img/23.png" alt="Cringe"><figcaption>Cringe</figcaption></figure><figure><img src="img/24.png" alt="Higiene y orden"><figcaption>Higiene y orden</figcaption></figure><figure><img src="img/25.png" alt="Rechazar con respeto"><figcaption>Rechazar con respeto</figcaption></figure></div>
  </section>
</main>


<script src="script_desagrado.js"></script>
</body>
</html>
