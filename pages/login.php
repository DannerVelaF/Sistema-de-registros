<?php include("../database/db.php"); ?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Inicio de sesion</title>
  <link rel="stylesheet" href="../styles/style.css" />
  <link rel="shortcut icon" href="../imgs/logo.ico" type="image/x-icon" />
</head>

<body>
  <div class="container">
    <div class="izquierda"></div>
    <div class="derecha">
      <div class="formulario">
        <h1>INICIO DE SESIÓN</h1>

        <?php if (isset($_SESSION['alerta'])) { ?>
        <div class="alerta">
          <p><?php echo $_SESSION['alerta']; ?></p>
        </div>
        <?php
          session_unset();
        }
        ?>
        <form action="../controllers/validar_usuario.php" method="POST" class="inicio_sesion">
          <div class="credencial">
            <input type="text" id="usuario" class="usuario" name="usuario" autocomplete="off" required />
            <label for="usuario">Nombre de usuario</label>
          </div>
          <div class="credencial">
            <input type="password" id="password" name="password" class="password" required />
            <label for="password">Contraseña</label>
          </div>
          <input type="submit" value="Acceder" class="ingresar" name="acceder" />
        </form>
      </div>
    </div>
  </div>
</body>

</html>