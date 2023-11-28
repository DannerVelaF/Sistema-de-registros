<?php
include('../database/db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $dni = $_POST["dni"];
  $nombre = $_POST["nombre"];
  $apellidoP = $_POST["apellido-paterno"];
  $apellidoM = $_POST["apellido-materno"];
  $fechaN = $_POST["fecha-nacimiento"];

  $query = "INSERT INTO estudiantes(id_estudiante, nombre_estudiante, apellido_paterno, apellido_materno, fecha_nacimiento) VALUES ('$dni', '$nombre', '$apellidoP', '$apellidoM', '$fechaN')";

  $result = mysqli_query($conn, $query);
}
