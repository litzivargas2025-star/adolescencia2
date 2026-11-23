document.addEventListener("DOMContentLoaded", () => {
  // --- 1. Minijuego de Esferas del Temor ---
  const contenedorEsferas = document.getElementById("esferas");
  const mensaje = document.getElementById("mensaje");
  const contadorSpan = document.getElementById("n");
  const botonOtra = document.getElementById("otra");

  const pensamientosTemor = [
    "«¿Y si no le caigo bien a nadie?» -> Es un pensamiento, no una verdad absoluta.",
    "«Tengo miedo a equivocarme en la exposición.» -> Es normal, la práctica ayuda a ganar confianza.",
    "«¿Qué tal si no sé qué estudiar en el futuro?» -> Paso a paso, no tienes que decidir todo hoy.",
    "«Siento que todos me están juzgando.» -> Generalmente los demás están muy ocupados pensando en sí mismos.",
    "«Me da pánico no encajar en el grupo.» -> Tu valor no depende de la aprobación de otros."
  ];

  function generarEsferas() {
    if (!contenedorEsferas) return;
    contenedorEsferas.innerHTML = "";
    let recolectadas = 0;
    contadorSpan.textContent = recolectadas;
    mensaje.textContent = "Toca una esfera para descubrir y enfrentar un temor.";

    pensamientosTemorforEachSeguro = pensamientosTemor.forEach((texto) => {
      const esfera = document.createElement("div");
      esfera.classList.add("esfera");

      esfera.addEventListener("click", () => {
        if (!esfera.classList.contains("recolectada")) {
          esfera.classList.add("recolectada");
          recolectadas++;
          contadorSpan.textContent = recolectadas;
          mensaje.textContent = texto;

          if (recolectadas === pensamientosTemor.length) {
            mensaje.textContent = "¡Increíble! Has afrontado y analizado todos los temores principales.";
          }
        }
      });

      contenedorEsferas.appendChild(esfera);
    });
  }

  if (contenedorEsferas) {
    generarEsferas();
    botonOtra.addEventListener("click", generarEsferas);
  }

  // --- 2. Sistema de pestañas (¿Cómo se ve según el lugar?) ---
  const botonesTabs = document.querySelectorAll(".adol .tabs button");
  const cajaContenido = document.querySelectorAll(".adol .contenido");

  if (botonesTabs.length > 0 && cajaContenido.length > 0) {
    // Mostrar la primera por defecto
    cajaContenido[0].textContent = botonesTabs[0].getAttribute("data-t");
    botonesTabs[0].setAttribute("aria-selected", "true");

    botonesTabs.forEach((btn) => {
      btn.addEventListener("click", (e) => {
        botonesTabs.forEach(b => b.setAttribute("aria-selected", "false"));
        btn.setAttribute("aria-selected", "true");
        cajaContenido[0].textContent = btn.getAttribute("data-t");
      });
    });
  }

  // --- 3. Test interactivo de casillas al final ---
  const checkboxes = document.querySelectorAll(".test input[type='checkbox']");
  const divResultado = document.getElementById("resultado");

  if (checkboxes.length > 0 && divResultado) {
    const mensajesTest = JSON.parse(divResultado.getAttribute("data-m") || "[]");

    checkboxes.forEach((chk) => {
      chk.addEventListener("change", () => {
        let marcados = Array.from(checkboxes).filter(c => c.checked).length;
        if (marcados === 0) {
          divResultado.textContent = "Marca algunas opciones para ver tu resultado.";
        } else if (marcados <= 2) {
          divResultado.textContent = mensajesTest[0];
        } else if (marcados === 3) {
          divResultado.textContent = mensajesTest[1];
        } else {
          divResultado.textContent = mensajesTest[2];
        }
      });
    });
  }
});