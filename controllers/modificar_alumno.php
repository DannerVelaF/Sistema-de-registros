<?php
include("../database/db.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $id_estudiante = $_POST['dni'];
  $nombre_estudiante = $_POST['nombre'];
  $apellido_paterno = $_POST['apellido-paterno'];
  $apellido_materno = $_POST['apellido-materno'];
  $fecha_nacimiento = $_POST['fecha-nacimiento'];

  $query = "UPDATE estudiantes SET nombre_estudiante = '$nombre_estudiante', apellido_paterno = '$apellido_paterno', apellido_materno = '$apellido_materno'";


  if (!empty($fecha_nacimiento)) {
    $query .= ", fecha_nacimiento = '$fecha_nacimiento'";
  }

  $query .= " WHERE id_estudiante = '$id_estudiante'";
  $result = mysqli_query($conn, $query);

  echo json_encode(array('success' => true));
}
