const frases = ["¡Un día de playa con papá!", "Tu primer gol 🥅", "Reír hasta llorar con amigos", "El olor del pastel de cumpleaños 🎂", "Bailar sin que nadie te vea", "Una tarde de lluvia con chocolate caliente", "¡Hoy todo va a salir bien!", "Abrazo largo y sincero","saber programar!","sacar buenas calificaciones"];
const colores = ["#FFD93B", "#4FC3F7", "#FF8FAB", "#7CE38B", "#B28DFF"];
const cont = document.getElementById("esferas");
const msg = document.getElementById("mensaje");
const n = document.getElementById("n");
let total = 0;

function crear(cantidad) {
  for (let i = 0; i < cantidad; i++) {
    const b = document.createElement("button");
    b.className = "esfera";
    b.setAttribute("aria-label", "Recuerdo feliz");
    b.style.setProperty("--c", colores[Math.floor(Math.random() * colores.length)]);
    b.style.setProperty("--t", (2 + Math.random() * 2.5) + "s");
    b.style.left = Math.random() * 88 + "%";
    b.style.top = Math.random() * 78 + "%";
    b.onclick = e => {
      msg.textContent = frases[Math.floor(Math.random() * frases.length)];
      n.textContent = ++total;
      chispas(e.clientX, e.clientY, getComputedStyle(b).getPropertyValue("--c"));
      b.classList.add("pop");
      setTimeout(() => b.remove(), 400);
    };
    cont.appendChild(b);
  }
}

function chispas(x, y, color) {
  for (let i = 0; i < 14; i++) {
    const s = document.createElement("span");
    s.className = "chispa";
    s.style.left = x + "px";
    s.style.top = y + "px";
    s.style.background = color;
    s.style.setProperty("--x", (Math.random() * 160 - 80) + "px");
    s.style.setProperty("--y", (Math.random() * 160 - 80) + "px");
    document.body.appendChild(s);
    setTimeout(() => s.remove(), 1000);
  }
}

document.getElementById("otra").onclick = () => crear(6);
crear(8);

// Pestañas par la seeccion de los adolescentes
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

// el juego de la alegria
const casillas = document.querySelectorAll(".test input");
const res = document.getElementById("resultado");
const msgs = JSON.parse(res.dataset.m);
casillas.forEach(c => c.onchange = () => {
  const n = [...casillas].filter(x => x.checked).length;
  res.textContent = msgs[n <= 1 ? 0 : n <= 3 ? 1 : 2];
});
//aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa