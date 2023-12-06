<?php
include('../database/db.php');

if (isset($_POST["eliminar"])) {
  $id = $_POST["id"];
  $nombre = $_POST["nombre"];

  $sql = "DELETE FROM cursos WHERE id_cursos=?";
  $query = mysqli_prepare($conn, $sql);
  mysqli_stmt_bind_param($query, "i", $id);
  mysqli_stmt_execute($query);
  $afectado = mysqli_stmt_affected_rows($query);
  if ($afectado == 1) {
    echo "<script> alert('El curso [$nombre] se eliminó correctamente'); location.href ='../pages/ver_cursos.php'; </script>";
  } else {
    echo "<script> alert('El curso [$nombre] no se eliminó correctamente  :( '); location.href ='../pages/ver_cursos.php'; </script>";
  }
  mysqli_stmt_close($query);


  header("Location: ../pages/inicio.php");
}
