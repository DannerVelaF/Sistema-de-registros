<?php
include("../database/db.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $id = $_POST['id_estudiante'];

  $query = "DELETE FROM estudiantes WHERE id_estudiante = $id";

  $result = mysqli_query($conn, $query);

  echo json_encode(['success' => true, 'message' => 'Estudiante eliminado correctamente']);
}
