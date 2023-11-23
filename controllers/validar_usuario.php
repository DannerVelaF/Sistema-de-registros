<?php

include("../database/db.php");
Session_start();
if (isset($_POST['usuario']) && $_POST['password']) {
  $usuario = $_POST['usuario'];
  $password = $_POST['password'];
  $query = "SELECT * FROM perfil WHERE usuario = '$usuario' AND clave = '$password'";


  $result = mysqli_query($conn, $query);
  // Verificar si esiste usuario y contraseña
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    if ($_POST['password'] === $row['clave']) {
      header("Location: ../pages/inicio.php");
      exit();
    }
  } else {
    $_SESSION['alerta'] = "Usuario o contraseña incorrectos";
    header("Location: ../pages/login.php");
    exit();
  }
}
