<?php

include("../database/db.php");

if (isset($_POST['usuario']) && $_POST['password']) {
  $usuario = $_POST['usuario'];
  $password = $_POST['password'];
  $query = "SELECT * FROM usuario WHERE usuario = '$usuario' AND password = '$password'";


  $result = mysqli_query($conn, $query);
  // Verificar si esiste usuario y contraseña
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    if ($_POST['password'] === $row['password']) {
      header("Location: ../pages/inicio.php");
    }
  } else {
    echo "Usuario o contraseña incorrectos";
  }
}
