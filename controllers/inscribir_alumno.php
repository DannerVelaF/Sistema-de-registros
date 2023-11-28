<?php
include("../database/db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $dni = $_POST["dni"];

  $query = "SELECT * FROM estudiantes WHERE id_estudiante = '$dni'";

  $result = mysqli_query($conn, $query);
  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo json_encode($row);
  } else {
    echo json_encode(['error' => '']);
  }
}

$conn->close();
