//Declaracion de los elementos a manipular
const contenedor_principal = document.getElementById("principal");
const inicio = document.getElementById("inicio");
const cursos = document.getElementById("cursos");
const estudiantes = document.getElementById("estudiantes");
const inscripciones = document.getElementById("inscripciones");
const perfil = document.getElementById("perfil");
const cerrar_sesion = document.getElementById("cerrar_sesion");

// Funcion que permite llamar las paginas correspondientes dentro del contenedor principal
function cargarContenido(page) {
  fetch(page)
    .then((res) => res.text())
    .then((data) => {
      contenedor_principal.innerHTML = data;
    })
    .catch((err) => {
      console.err(err);
    });
}

// Llamado de las paginas mediante un click en los botones del dashboard
inicio.addEventListener("click", (evt) => {
  evt.preventDefault();
  location.reload();
});

cursos.addEventListener("click", (evt) => {
  evt.preventDefault();
  cargarContenido("/pages/cursos.html");
});

estudiantes.addEventListener("click", (evt) => {
  evt.preventDefault();
  cargarContenido("/pages/estudiantes.html");
});
inscripciones.addEventListener("click", (evt) => {
  evt.preventDefault();
  cargarContenido("/pages/incripciones.html");
});

perfil.addEventListener("click", (evt) => {
  evt.preventDefault();
  cargarContenido("/pages/perfil.html");
});

cerrar_sesion.addEventListener("click", (evt) => {
  evt.preventDefault();
  window.history.back();
});
