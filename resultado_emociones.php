<?php
// Si ya no quieres usar sesiones ni login, procesamos directamente los datos por POST
$puntuacion = 0;
$nombre = isset($_POST['nombre']) ? htmlspecialchars($_POST['nombre']) : 'Invitado/a';
$email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : 'No proporcionado';
$emocion = isset($_POST['emocion']) ? htmlspecialchars($_POST['emocion']) : 'General';
$intensidad = isset($_POST['intensidad']) ? intval($_POST['intensidad']) : 0;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    for ($i = 1; $i <= 10; $i++) {
        $nombre_campo = 'p' . $i;
        if (isset($_POST[$nombre_campo])) {
            $puntuacion += intval($_POST[$nombre_campo]);
        }
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Resultados - Test de Emociones</title>
	<link rel="stylesheet" type="text/css" href="estilo_menu.css">
	<link rel="stylesheet" type="text/css" href="estilo_Tsemociones.css">
	<style>
		.resultados-container {
			max-width: 600px;
			margin: 40px auto;
			padding: 30px;
			background: #ffffff;
			border-radius: 12px;
			box-shadow: 0 4px 15px rgba(0,0,0,0.1);
			font-family: Arial, sans-serif;
			color: #333;
		}
		.resultados-container h1, .resultados-container h2 {
			color: #2c3e50;
		}
		.badge-emocion {
			display: inline-block;
			padding: 6px 12px;
			background: #e8f4fd;
			color: #3498db;
			border-radius: 20px;
			font-weight: bold;
		}
		.consejos-box {
			background: #f9f9f9;
			border-left: 5px solid #2ecc71;
			padding: 15px;
			margin-top: 20px;
			border-radius: 4px;
		}
		.btn-volver {
			display: inline-block;
			margin-top: 25px;
			padding: 10px 20px;
			background: #3498db;
			color: white;
			text-decoration: none;
			border-radius: 5px;
		}
		.btn-volver:hover {
			background: #2980b9;
		}
	</style>
</head>
<body>
	<!-- ---------------------------- MENU ------------------------- -->
 <nav>
    <ul class="menu">
      <li><a href="inicio.php">Inicio</a></li>
      <li class="dropdown">
        <a href="#">Menú ▾</a>
        <ul class="submenu">
          <li><a href="inicio.php">Inicio</a></li>
          <li><a href="tipos.php">Tipos de emociones</a></li>
          <li><a href="test_emociones.php">Test de emociones</a></li>
        </ul>
      </li>
    </ul>
  </nav>
  <!-- ------------------------- FIN MENU ----------------------- -->

	<div class="resultados-container">
		<?php
			echo "<h1>¡Gracias por completar el test, $nombre!</h1>";
			echo "<p><strong>Correo electrónico:</strong> $email</p>";
			echo "<p>Has indicado que recientemente has sentido <span class=\"badge-emocion\">$emocion</span> con una intensidad de <strong>$intensidad/10</strong>.</p>";
			echo "<hr>";

			// Como son 10 preguntas y cada una vale máximo 3 puntos, el total es sobre 30
			echo "<h2>Tu puntuación: $puntuacion de 30 puntos posibles</h2>";

			echo "<div class=\"consejos-box\">";
			echo "<h3>💡 Consejos personalizados para ti:</h3>";

			// Rangos ajustados para puntuación máxima de 30 puntos
			if ($puntuacion >= 24) {
				echo "<p><strong>¡Excelente manejo emocional!</strong> Tiendes a elegir estrategias muy saludables y adaptativas para identificar, comprender y gestionar tus emociones y las de los demás. Sigue practicando la empatía y la comunicación asertiva.</p>";
			} elseif ($puntuacion >= 17) {
				echo "<p><strong>Buen trabajo, con espacio para crecer.</strong> Comprendes varios aspectos de la inteligencia emocional, pero a veces algunas situaciones de estrés o presión escolar pueden hacerte dudar. Te sugerimos practicar técnicas de respiración profunda y reflexionar antes de actuar cuando sientas emociones intensas.</p>";
			} else {
				echo "<p><strong>Ánimo, la gestión emocional se aprende.</strong> Parece que en momentos de tensión te cuesta un poco regular tus respuestas o interpretar las situaciones de forma objetiva. Intenta pausar un momento antes de reaccionar, escribe lo que sientes en un diario y no dudes en compartir tus preocupaciones con un adulto de confianza.</p>";
			}

			echo "<p><em>Sobre la emoción que registraste ($emocion):</em> ";
			switch ($emocion) {
				case 'Alegria':
					echo "¡Qué bueno que sientas alegría! Aprovecha esta energía positiva para motivar a tus amigos o avanzar en tus metas.</p>";
					break;
				case 'Tristeza':
					echo "La tristeza es una señal de que necesitas procesar algo importante o descansar. Date el permiso de sentirla, escúchala y busca compañía si lo necesitas.</p>";
					break;
				case 'Furia':
					echo "El enojo indica que algún límite ha sido cruzado. Canaliza esa energía a través de ejercicio físico, caminatas o alejándote temporalmente para evitar discusiones mayores.</p>";
					break;
				case 'Temor':
					echo "El miedo es una alerta natural ante lo desconocido. Desglosa aquello que te preocupa en pasos pequeños y manejables para ganar confianza.</p>";
					break;
				case 'Desagrado':
					echo "El desagrado te ayuda a establecer límites saludables frente a lo que no te hace bien. Exprésate siempre con respeto pero con firmeza.</p>";
					break;
				default:
					echo "Recuerda que todas las emociones son válidas y pasajeras.</p>";
					break;
			}
			echo "</div>";
		?>

		<a href="test_emociones.php" class="btn-volver">Realizar el test de nuevo</a>
	</div>
</body>
</html>