<?php
include("../includes/head.php");
include("../database/db.php")
?>
<section class="inscripcion">
  <div class="registro-form">
    <div class="Encabezado">
      <h1>Datos del Estudiante</h1>
    </div>
    <form class="Inscripción-estudiante" id="form1">
      <div class="datos">
        <label for="dni">DNI del Estudiante:</label>
        <input type="text" id="dni" name="dni" required autocomplete="off" onchange="buscarEstudiante(this.value)" maxlength="8" />
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

    <form class="Inscripción-estudiante" id="form2">
      <div class="datos">
        <label for="id-curso">Seleccionar Cursos:</label>
        <select name="cursos[]" class="seleccionar-cursos" multiple>
          <?php
          $query = "SELECT * FROM cursos";
          $result = mysqli_query($conn, $query);
          while ($row = mysqli_fetch_array($result)) { ?>
            <option value="<?php echo $row['id_cursos'] ?>"><?php echo $row['nombre_curso'] ?></option>
          <?php } ?>
        </select>
      </div>
    </form>
  </div>

  <div class="datos">
    <button class="registrar-button" type="submit" placeholder="Registrar" onclick="inscribir()">
      inscribir
    </button>
  </div>
</section>
<?php
include("../includes/footer.php");
?>
<script>
  function buscarEstudiante(dni) {
    $.ajax({
      url: "../controllers/buscar_alumno.php",
      type: "POST",
      data: {
        dni: dni
      },
      dataType: "json",
      success: function(data) {
        console.log(data);
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

  function inscribir() {
    var form1 = $("#form1").serialize();
    var form2 = $("#form2").serialize();
    var data = form1 + "&" + form2;
    $.ajax({
      url: "../controllers/inscribir_alumno.php",
      type: "POST",
      data: data,
      success: function(data) {
        alert(data);
      }
    });


  }
</script>