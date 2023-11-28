function mostrarInicio() {
  location.reload();
}

function mostrarCursos() {
  $.ajax({
    url: "../pages/cursos.php",
    success: function (res) {
      $("#principal").html(res);
    },
  });
  const agregar_curso = document.getElementById("agregar-curso");
  const ver_curso = document.getElementById("ver-cursos");
  agregar_curso.style.display = "flex";
  ver_curso.style.display = "flex";
}

function mostrar_AgregarCursos() {
  $.ajax({
    url: "../pages/cursos.php",
    success: function (res) {
      $("#principal").html(res);
    },
  });
}

function mostrar_VerCursos() {
  $.ajax({
    url: "../pages/ver_cursos.php",
    success: function (res) {
      $("#principal").html(res);
    },
  });
}

function mostrarEstudiantes() {
  $.ajax({
    url: "../pages/estudiantes.php",
    success: function (res) {
      $("#principal").html(res);

      const agregarEstudiante = document.querySelector(".agregar-estudiante");
      const tableStudent = document.querySelector(".table_stu");
      const inscripcion = document.querySelector(".inscripcion");

      tableStudent.style.display = "block";
      inscripcion.style.display = "none";

      agregarEstudiante.addEventListener("click", () => {
        tableStudent.style.display = "none";
        inscripcion.style.display = "block";
      });

      const registrarButton = document.querySelector(".registrar-button");

      registrarButton.addEventListener("click", () => {
        tableStudent.style.display = "block";
        inscripcion.style.display = "none";
      });
    },
  });
  //
  const agregar_curso = document.getElementById("agregar-curso");
  const ver_curso = document.getElementById("ver-cursos");
  agregar_curso.style.display = "none";
  ver_curso.style.display = "none";
}

function mostrarInscripciones() {
  $.ajax({
    url: "../pages/incripciones.php",
    success: function (res) {
      $("#principal").html(res);
    },
  });
  const agregar_curso = document.getElementById("agregar-curso");
  const ver_curso = document.getElementById("ver-cursos");
  agregar_curso.style.display = "none";
  ver_curso.style.display = "none";
}

function mostrarPerfil() {
  $.ajax({
    url: "../pages/perfil.php",
    success: function (res) {
      $("#principal").html(res);
    },
  });
  const agregar_curso = document.getElementById("agregar-curso");
  const ver_curso = document.getElementById("ver-cursos");
  agregar_curso.style.display = "none";
  ver_curso.style.display = "none";
}
