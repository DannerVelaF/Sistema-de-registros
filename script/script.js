//Declaracion de los elementos a manipular
const contenedor_principal = document.getElementById("principal");
const inicio = document.getElementById("inicio");
const cursos = document.getElementById("cursos");
const estudiantes = document.getElementById("estudiantes");
const inscripciones = document.getElementById("inscripciones");
const perfil = document.getElementById("perfil");
const cerrar_sesion = document.getElementById("cerrar_sesion");
const agregar_curso = document.getElementById("agregar-curso");
const ver_curso = document.getElementById("ver-cursos");

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

function ocultarCursos() {
  agregar_curso.style.display = "none";
  ver_curso.style.display = "none";
}

inicio.addEventListener("click", (evt) => {
  evt.preventDefault();
  location.reload();
});

//Cursos
cursos.addEventListener("click", (evt) => {
  evt.preventDefault();
  agregar_curso.style.display = "flex";
  ver_curso.style.display = "flex";
  cargarContenido("/pages/cursos.html");
});

agregar_curso.addEventListener("click", (evt) => {
  evt.preventDefault();
  cargarContenido("/pages/cursos.html");
});

ver_curso.addEventListener("click", (evt) => {
  evt.preventDefault();
  cargarContenido("/pages/ver_cursos.html");
});
//Cursos

estudiantes.addEventListener("click", (evt) => {
  evt.preventDefault();
  ocultarCursos();
  cargarContenido("/pages/estudiantes.html");
});
inscripciones.addEventListener("click", (evt) => {
  evt.preventDefault();
  ocultarCursos();
  cargarContenido("/pages/incripciones.html");
});

perfil.addEventListener("click", (evt) => {
  evt.preventDefault();
  ocultarCursos();
  cargarContenido("/pages/perfil.html");
});

cerrar_sesion.addEventListener("click", (evt) => {
  evt.preventDefault();
  window.history.back();
});
