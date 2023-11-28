<?php
include("../includes/head.php");
?>
<section class="inscripcion">
  <div class="registro-form">
    <div class="Encabezado">
      <h1>Datos del Estudiante</h1>
    </div>
    <form class="Inscripción-estudiante">
      <div class="datos">
        <label for="dni">DNI del Estudiante:</label>
        <input type="text" id="dni" name="dni" required autocomplete="off" onchange="buscarEstudiante(this.value)"
          maxlength="8" />
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
        <input type="text" id="fecha-nacimiento" name="fecha-nacimiento" required autocomplete="off" />
      </div>
    </form>
  </div>

  <div class="registro-form">
    <div class="Encabezado">
      <h1>Datos del Curso</h1>
    </div>

    <form class="Inscripción-estudiante">
      <div class="datos">
        <label for="id-curso">ID Curso:</label>
        <input type="text" id="id-curso" name="id-curso" required autocomplete="off" />
      </div>

      <div class="datos">
        <label for="nombre-curso">Nombre Curso:</label>
        <input type="text" id="nombre-curso" name="nombre-curso" required autocomplete="off" />
      </div>
    </form>
  </div>

  <div class="datos">
    <button class="registrar-button" type="submit">Registrar</button>
  </div>
</section>
<?php
include("../includes/footer.php");
?>
<script>
function buscarEstudiante(dni) {
  $.ajax({
    url: "../controllers/inscribir_alumno.php",
    type: "POST",
    data: {
      dni: dni
    },
    dataType: "json",
    success: function(data) {
      $("#nombres").val(data.nombre_estudiante);
      $("#apellido-paterno").val(data.apellido_paterno);
      $("#apellido-materno").val(data.apellido_materno);
      $("#fecha-nacimiento").val(data.fecha_nacimiento);

      $('#nombres').prop('readonly', true);
      $('#apellido-paterno').prop('readonly', true);
      $('#apellido-materno').prop('readonly', true);
      $('#fecha-nacimiento').prop('readonly', true);
    }
  });
}
</script>