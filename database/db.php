<?php

session_start();

$conn = mysqli_connect(
  "localhost",
  "root",
  "",
  "registro-estudiantes"
);
// obtener usuario en sesion


// $usuario = $_SESSION['usuario'];
// $query = "SELECT id_usuario FROM perfil WHERE usuario = '$usuario'";
// $result = mysqli_query($conn, $query);
// $id_usuario = mysqli_fetch_assoc($result)['id_usuario'];