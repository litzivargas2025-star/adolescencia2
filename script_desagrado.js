const cosas = document.querySelectorAll(".cosa");
const cuenta = document.getElementById("cuenta");

function actualizar() {
  cuenta.textContent = document.querySelectorAll(".cosa.rechazada").length;
}

cosas.forEach(c => {
  c.querySelector("button").onclick = () => {
    c.classList.add("sellada");
    setTimeout(() => {
      c.classList.add("rechazada");
      actualizar();
    }, 450);
  };
});

document.getElementById("reiniciar").onclick = () => {
  cosas.forEach(c => c.classList.remove("sellada", "rechazada"));
  actualizar();
};

// como lo dividi por pestañas esta es la  sección de adolescentes
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

// es juego del test
const casillas = document.querySelectorAll(".test input");
const res = document.getElementById("resultado");
const msgs = JSON.parse(res.dataset.m);
casillas.forEach(c => c.onchange = () => {
  const n = [...casillas].filter(x => x.checked).length;
  res.textContent = msgs[n <= 1 ? 0 : n <= 3 ? 1 : 2];
});

// Índice 😁
const secs = [...document.querySelectorAll("main>section")];
const nombres = ["Quién es", "Vida real", "Cómo convivir", "Adolescencia", "Datos", "¿Te identificas?", "Para pensar", "Galería"];
const indice = document.createElement("div");
indice.className = "indice";
indice.setAttribute("role", "tablist");
function ver(i) {
  secs.forEach((s, j) => s.hidden = j !== i);
  [...indice.children].forEach((b, j) => b.setAttribute("aria-selected", j === i));
}
secs.forEach((s, i) => {
  const b = document.createElement("button");
  b.type = "button";
  b.setAttribute("role", "tab");
  b.textContent = nombres[i] || s.querySelector("h2").textContent;
  b.onclick = () => ver(i);
  indice.appendChild(b);
});
document.querySelector("main").before(indice);
ver(0);
