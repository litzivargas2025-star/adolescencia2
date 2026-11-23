<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Test de emociones</title>
	<link rel="stylesheet" type="text/css" href="estilo_menu.css">
	<link rel="stylesheet" type="text/css" href="estilo_Tsemociones.css">
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

	<div class="formulario">
		<form action="resultado_emociones.php" method="POST">
			<h1>Test de Inteligencia Emocional para Adolescentes</h1>

			<label>Usuario:</label>
			<input type="text" name="nombre" placeholder="Ingrese su nombre" required>
			
			<label>Email:</label>
			<input type="email" name="email" placeholder="Ingrese su correo" required>

			<label>¿Cuál es la emoción que has sentido recientemente?:</label>
			<select name="emocion" required>
				<option value="">Seleccione una opción</option>
				<option value="Desagrado">Desagrado</option>
				<option value="Furia">Furia</option>
				<option value="Alegria">Alegría</option>
				<option value="Temor">Temor</option>
				<option value="Tristeza">Tristeza</option>
			</select>

			<label>Del 1 al 10, ¿cómo considerarías la intensidad de esa emoción?:</label>
			<input type="number" name="intensidad" min="1" max="10" placeholder="Ej. 7" required>

			<hr>

			<!-- ================= PREGUNTAS DEL TEST (Con sistema de puntos del 1 al 3) ================= -->

			<div class="pregunta">
				<label>1. Durante una presentación importante en clase, sientes que el corazón te late muy rápido y las manos te sudan. ¿Qué estrategia es más saludable para regular esta respuesta antes de hablar?</label>
				<p><input type="radio" name="p1" value="3" required> Realizar respiraciones profundas y lentas para activar el sistema parasimpático.</p><br>
				<p><input type="radio" name="p1" value="2"> Ignorar los síntomas y hablar lo más rápido posible para terminar pronto.</p><br>
				<p><input type="radio" name="p1" value="1"> Evitar hacer la presentación poniendo una excusa.</p>
			</div>

			<div class="pregunta">
				<label>2. Un amigo deja de responder tus mensajes durante varios días y asumes inmediatamente que está enojado contigo. ¿Qué error de pensamiento se refleja aquí?</label>
				<p><input type="radio" name="p2" value="1" required> Sobregeneralización de eventos pasados.</p><br>
				<p><input type="radio" name="p2" value="3"> La lectura de mente o asumir intenciones sin pruebas concretas.</p><br>
				<p><input type="radio" name="p2" value="2"> Negación de la realidad.</p>
			</div>

			<div class="pregunta">
				<label>3. Sientes frustración y enojo porque no lograste la calificación que esperabas en un examen para el que estudiaste mucho. ¿Cuál es el primer paso de la inteligencia emocional que debes aplicar?</label>
				<p><input type="radio" name="p3" value="3" required> Identificar y nombrar con precisión la emoción que estás experimentando.</p><br>
				<p><input type="radio" name="p3" value="1"> Culpar al profesor por hacer un examen demasiado difícil.</p><br>
				<p><input type="radio" name="p3" value="2"> Romper el examen para liberar el enojo inmediatamente.</p>
			</div>

			<div class="pregunta">
				<label>4. Cuando alguien te critica de forma constructiva sobre un proyecto escolar, sientes resistencia inicial. ¿Qué actitud demuestra una mentalidad de crecimiento?</label>
				<p><input type="radio" name="p4" value="1" required> Defender tu trabajo a toda costa sin escuchar sugerencias.</p><br>
				<p><input type="radio" name="p4" value="3"> Analizar los comentarios para identificar áreas de mejora sin tomártelo como un ataque personal.</p><br>
				<p><input type="radio" name="p4" value="2"> Abandonar el proyecto porque sientes que no eres bueno en eso.</p>
			</div>

			<div class="pregunta">
				<label>5. Estás en una discusión acalorada con un familiar y notas que la ira sube al punto de querer gritar. ¿Qué técnica de asertividad es más adecuada?</label>
				<p><input type="radio" name="p5" value="1" required> Decir todo lo que piensas sin filtro antes de que se te olvide.</p><br>
				<p><input type="radio" name="p5" value="2"> Quedarte callado acumulando rencor y no volver a tocar el tema.</p><br>
				<p><input type="radio" name="p5" value="3"> Pedir una pausa temporal en la conversación para calmar el sistema de alerta antes de continuar.</p>
			</div>

			<div class="pregunta">
				<label>6. Experimentas una sensación persistente de apatía y tristeza leve durante varias semanas que afecta tus actividades diarias. ¿Cuál es la forma más saludable de afrontarlo?</label>
				<p><input type="radio" name="p6" value="3" required> Compartir cómo te sientes con un adulto de confianza, familiar o profesional de la salud mental.</p><br>
				<p><input type="radio" name="p6" value="1"> Aislarse en tu habitación hasta que el sentimiento desaparezca solo.</p><br>
				<p><input type="radio" name="p6" value="2"> Fingir que todo está perfecto para no preocupar a nadie.</p>
			</div>

			<div class="pregunta">
				<label>7. Ves en redes sociales fotos de tus compañeros en una fiesta a la que no fuiste invitado y sientes tristeza y exclusión. ¿Qué proceso te ayuda a manejar esta emoción?</label>
				<p><input type="radio" name="p7" value="1" required> Revisar sus perfiles constantemente para ver qué más hacen.</p><br>
				<p><input type="radio" name="p7" value="3"> Reconocer el dolor de la exclusión sin compararte ni creer que define tu valor personal.</p><br>
				<p><input type="radio" name="p7" value="2"> Escribir comentarios pasivo-agresivos en sus publicaciones.</p>
			</div>

			<div class="pregunta">
				<label>8. Tienes que tomar una decisión importante sobre tu futuro académico y sientes parálisis por miedo a equivocarte. ¿Cómo reestructurar ese miedo?</label>
				<p><input type="radio" name="p8" value="1" required> Dejar que otras personas decidan por ti para no asumir la responsabilidad.</p><br>
				<p><input type="radio" name="p8" value="2"> Posponer la decisión indefinidamente hasta el último minuto.</p><br>
				<p><input type="radio" name="p8" value="3"> Entender que las elecciones no son definitivas y que cualquier camino ofrece aprendizajes útiles.</p>
			</div>

			<div class="pregunta">
				<label>9. Un compañero de clase pasa por un momento familiar difícil y se muestra distante y callado. ¿Qué demuestra empatía genuina hacia él?</label>
				<p><input type="radio" name="p9" value="3" required> Ofrecerle tu presencia y disponibilidad para escucharle si desea hablar, respetando su espacio.</p><br>
				<p><input type="radio" name="p9" value="1"> Insistirle frente a todos para que cuente qué le pasa.</p><br>
				<p><input type="radio" name="p9" value="2"> Contarle tus propios problemas para que vea que tú la pasas peor.</p>
			</div>

			<div class="pregunta">
				<label>10. Al final del día sientes cansancio mental y tu mente no deja de dar vueltas a preocupaciones del día siguiente. ¿Qué hábito de autocuidado es más efectivo?</label>
				<p><input type="radio" name="p10" value="1" required> Usar el celular en la cama hasta quedarte dormido por agotamiento.</p><br>
				<p><input type="radio" name="p10" value="3"> Escribir en un papel las preocupaciones pendientes para "descargarlas" antes de dormir.</p><br>
				<p><input type="radio" name="p10" value="2"> Quedarte despierto repasando mentalmente cada escenario posible.</p>
			</div>

			<br>
			<button type="submit" name="enviar_test">Enviar Respuestas</button>
			
		</form>
	</div>

</body>
</html>