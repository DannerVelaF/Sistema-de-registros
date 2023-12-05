<?php
include("../database/db.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $id = $_POST['id_estudiante'];

  $query = "DELETE FROM estudiantes WHERE id_estudiante = '$id'";

  $result = mysqli_query($conn, $query);

  if ($result) {
    echo json_encode(['success' => true, 'message' => 'Estudiante eliminado correctamente']);
  } else {
    // Si hay un error en la ejecución
    echo json_encode(['success' => false, 'message' => 'Error al eliminar estudiante: ' . mysqli_error($conn)]);
  }
  header('Location: ../pages/inicio.php');
}
