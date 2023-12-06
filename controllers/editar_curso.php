<?php
include("../includes/head.php");

$id = $_POST["id"];
$nombre = $_POST["nombre"];
$fechaHora = $_POST["fecha"];


if (isset($_POST["editar2"])) {
  include('../database/db.php');

  $sql = "UPDATE cursos SET nombre_curso=?,fecha_creacion=? WHERE id_cursos=?";
  $query = mysqli_prepare($conn, $sql);
  mysqli_stmt_bind_param($query, "ssi", $nombre, $fechaHora, $id);
  mysqli_stmt_execute($query);
  $afectado = mysqli_stmt_affected_rows($query);
  if ($afectado == 1) {
    echo "<script> alert('El curso [$nombre] se editó correctamente'); location.href ='../pages/ver_cursos.php'; </script>";
  } else {
    echo "<script> alert('El curso [$nombre] no se editó correctamente :( '); location.href ='../pages/ver_cursos.php'; </script>";
  }
  mysqli_stmt_close($query);
  header("location: ../pages/inicio.php");
}

?>
<button onclick="goBack()" style="display: inline-block; padding: 10px 18px; font-size: 16px; font-weight: bold;
                                      text-align: center; text-decoration: none; cursor: pointer; border: 1px solid #007bff;
                                      color: #fff; background-color: #007bff; border-radius: 4px; transition: background-color 0.3s ease;
                                      margin-left: 50px;margin-top: 30px;">
  Atrás
</button>
<form action="../controllers/editar_curso.php" method="POST">

  <div id="main-container">
    <input type="hidden" value="<?php echo $id ?>" name="id">
    <table>
      <thead>
        <tr>
          <th colspan="2">
            <h1 style="text-align: center;">EDITAR CURSO</h1>
          </th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Nombre del curso:</td>
          <td>
            <input class="data-estudiante" type="text" name="nombre" id="nombre" size="50px" style="font-size: 20px;" value="<?php echo $nombre ?>">
          </td>
        </tr>
        <tr>
          <td>Fecha de creación:</td>
          <td>
            <input class="data-estudiante" value="<?php echo date('d-m-Y'); ?>" readonly="readonly" name="fecha" id="fecha" size="50px" style="font-size: 20px;">
          </td>
        </tr>

        <td colspan="2">
          <div class="center">

            <input type="submit" name="editar2" value="editar" class="styled-button">

          </div>
        </td>
      </tbody>
    </table>
  </div>
</form>


<script>
  function goBack() {
    window.history.back();
  }
</script>