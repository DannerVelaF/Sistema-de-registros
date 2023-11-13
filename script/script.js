// Haciendo uso de Live Server -- Vs Code

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

var iframe = document.createElement("iframe");

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
  contenedor_principal.innerHTML = "";
  iframe.src = "../pages/cursos.html";
  contenedor_principal.appendChild(iframe);
  agregar_curso.style.display = "flex";
  ver_curso.style.display = "flex";
});

agregar_curso.addEventListener("click", (evt) => {
  evt.preventDefault();
  contenedor_principal.innerHTML = "";
  iframe.src = "../pages/cursos.html";
  contenedor_principal.appendChild(iframe);
  agregar_curso.style.display = "flex";
  ver_curso.style.display = "flex";
});

ver_curso.addEventListener("click", (evt) => {
  evt.preventDefault();
  contenedor_principal.innerHTML = "";
  iframe.src = "../pages/ver_cursos.html";
  contenedor_principal.appendChild(iframe);
  agregar_curso.style.display = "flex";
  ver_curso.style.display = "flex";
});
//Cursos

estudiantes.addEventListener("click", (evt) => {
  evt.preventDefault();
  contenedor_principal.innerHTML = "";
  iframe.src = "../pages/estudiantes.html";
  contenedor_principal.appendChild(iframe);

  ocultarCursos();
});
inscripciones.addEventListener("click", (evt) => {
  evt.preventDefault();
  ocultarCursos();
  contenedor_principal.innerHTML = "";
  iframe.src = "../pages/incripciones.html";
  contenedor_principal.appendChild(iframe);
});

perfil.addEventListener("click", (evt) => {
  evt.preventDefault();
  ocultarCursos();
  contenedor_principal.innerHTML = "";
  iframe.src = "../pages/perfil.html";
  contenedor_principal.appendChild(iframe);
});

cerrar_sesion.addEventListener("click", (evt) => {
  evt.preventDefault();
  window.history.back();
});
