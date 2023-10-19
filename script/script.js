function cargarContenido(page) {
  fetch(page)
    .then((res) => res.text())
    .then((data) => {
      document.getElementById("contenedor").innerHTML = data;
    })
    .catch((err) => {
      console.err(err);
    });
}
document.getElementById("inicio").addEventListener("click", (evt) => {
  evt.preventDefault();
  location.reload();
});

document.getElementById("cursos").addEventListener("click", (evt) => {
  evt.preventDefault();
  cargarContenido("/pages/cursos.html");
});

document.getElementById("estudiantes").addEventListener("click", (evt) => {
  evt.preventDefault();
  cargarContenido("/pages/estudiantes.html");
});
document.getElementById("inscripciones").addEventListener("click", (evt) => {
  evt.preventDefault();
  cargarContenido("/pages/incripciones.html");
});

document.getElementById("perfil").addEventListener("click", (evt) => {
  evt.preventDefault();
  cargarContenido("/pages/perfil.html");
});
