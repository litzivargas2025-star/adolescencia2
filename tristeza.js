const root = document.documentElement;
const rango = document.getElementById("nivel");
const estado = document.getElementById("estado");
const boom = document.getElementById("boom");
const textos = [
  [0, "Todo en calma... procesando despacio."],
  [25, "Un pequeño peso en el pecho."],
  [50, "Ganas de reflexionar o alejarse un momento."],
  [75, "La tristeza se vuelve más intensa."],
  [100, "Momento profundo de desahogo."]
];

let nivelActual = 0;   // para saber cuándo se llega a 100
let tBoom;             // temporizador que quita el efecto de desahogo
const DURACION_BOOM = 600;   // milisegundos que dura el aviso en pantalla

function mostrarBoom() {
  boom.classList.remove("ver");
  void boom.offsetWidth;                 // reinicia la animación
  boom.classList.add("ver");
  clearTimeout(tBoom);
  tBoom = setTimeout(() => boom.classList.remove("ver"), DURACION_BOOM);
}

function poner(v) {
  v = Math.max(0, Math.min(100, v));
  const llegoA100 = v === 100 && nivelActual < 100;
  nivelActual = v;

  rango.value = v;
  root.style.setProperty("--nivel", v);
  document.body.classList.toggle("tiembla", v >= 40);
  estado.textContent = textos.filter(t => v >= t[0]).pop()[1];

  if (llegoA100) mostrarBoom();
}

rango.oninput = () => poner(+rango.value);
document.getElementById("provocar").onclick = () => poner(+rango.value + 15);
document.getElementById("calma").onclick = () => {
  let v = +rango.value;
  const t = setInterval(() => {
    v -= 5;
    poner(v);
    if (v <= 0) clearInterval(t);
  }, 60);
};
poner(0);

// Pestañas de la sección de adolescentes
document.querySelectorAll(".tabs").forEach(t => {
  const salida = t.nextElementSibling;
  const botones = t.querySelectorAll("button");
  const mostrar = b => {
    botones.forEach(x => x.setAttribute("aria-selected", x === b));
    salida.textContent = b.dataset.t;
  };
  botones.forEach(b => b.onclick = () => mostrar(b));
  mostrar(botones[0]);
});

// Mini test "¿Te identificas?"
const casillas = document.querySelectorAll(".test input");
const res = document.getElementById("resultado");
const msgs = JSON.parse(res.dataset.m);
casillas.forEach(c => c.onchange = () => {
  const n = [...casillas].filter(x => x.checked).length;
  res.textContent = msgs[n <= 1 ? 0 : n <= 3 ? 1 : 2];
});