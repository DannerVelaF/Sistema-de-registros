<?php
  include("../includes/head.php")
?>
<section class="inscripcion">
  <div class="registro-form">
    <div class="Encabezado">
      <h1>Datos del Estudiante</h1>
    </div>
    <form class="Inscripción-estudiante">
      <div class="datos">
        <label for="dni">DNI del Estudiante:</label>
        <input type="text" id="dni" name="dni" required autocomplete="off" />
      </div>

      <div class="datos">
        <label for="nombres">Nombres:</label>
        <input type="text" id="nombres" name="nombres" required autocomplete="off" />
      </div>

      <div class="datos">
        <label for="apellido-paterno">Apellido Paterno:</label>
        <input type="text" id="apellido-paterno" name="apellido-paterno" required autocomplete="off" />
      </div>

      <div class="datos">
        <label for="apellido-materno">Apellido Materno:</label>
        <input type="text" id="apellido-materno" name="apellido-materno" required autocomplete="off" />
      </div>

      <div class="datos">
        <label for="fecha-nacimiento">Fecha de Nacimiento:</label>
        <input type="date" id="fecha-nacimiento" name="fecha-nacimiento" required autocomplete="off" />
      </div>
    </form>
  </div>
  <div class="registro-form">
    <div class="Encabezado">
      <h1>Datos del Curso</h1>
    </div>

    <form class="Inscripción-estudiante">
      <div class="datos">
        <label for="dni">ID Curso:</label>
        <input type="text" id="dni" name="dni" required autocomplete="off" />
      </div>

      <div class="datos">
        <label for="nombres">Nombre Curso:</label>
        <input type="text" id="nombres" name="nombres" required autocomplete="off" />
      </div>
    </form>
  </div>

  <div class="datos">
    <button class="registrar-button" type="submit">Registrar</button>
  </div>
</section>
<?php
  include("../includes/footer.php")
?>