<?php

include("../database/db.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $dni = $_POST['dni'];
  $cursos = $_POST['cursos'];

  $query = "INSERT INTO inscripciones (id_estudiante, id_cursos, id_usuario) VALUES ";
  foreach ($cursos as $curso) {
    $query .= "('$dni', '$curso', '$id_usuario'), ";
  }
  $query = rtrim($query, ', ');

  $result = mysqli_query($conn, $query);

  if ($result) {
    echo "Inscripcion exitosa";
  } else {
    echo "Error al inscribir";
  }
}
