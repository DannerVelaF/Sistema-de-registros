<?php
include("../includes/head.php");
include("../database/db.php");
$query = "SELECT * FROM estudiantes";
$result = mysqli_query($conn, $query);
?>


<div class="registro-form table_stu" id='table_stu'>
  <div class="Encabezado">
    <h1>Estudiantes</h1>
    <div class="button_student">
      <button class="agregar-estudiante" id="agregar-estudiante">
        Agregar Estudiante
      </button>
    </div>
  </div>

  <section class="table_container">
    <table class="table_student" id="table_student">
      <thead class="thead">
        <tr>
          <th class="th">DNI</th>
          <th class="th">Nombre</th>
          <th class="th">Fecha Nacimiento</th>
          <th class="th">Cursos</th>
          <th class="th">Acciones</th>
        </tr>
      </thead>
      <tbody class="tbody">
        <?php while ($row = mysqli_fetch_array($result)) { ?>
          <tr>
            <td class="td"><?php echo $row['id_estudiante'] ?></td>
            <td class="td">
              <?php echo $row['nombre_estudiante'] . " " . $row["apellido_paterno"] . " " . $row["apellido_materno"] ?>
            </td>
            <td class="td">
              <?php echo $row['fecha_nacimiento'] ?>
            </td>
            <td class="td">
              <h1>cursos</h1>
            </td>
            <td class="td ">
              <div class="actions">
                <a class="borrar" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                    <path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z" />
                  </svg>
                </a>
                <a href="#" class="modificar">
                  <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                    <path d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z" />
                  </svg>
                </a>
              </div>
            </td>
          </tr>
        <?php  } ?>
      </tbody>
    </table>
  </section>
</div>

<section class="inscripcion" id="inscripcion">
  <div class="registro-form">
    <div class="Encabezado">
      <h1>Agregar del Estudiante</h1>
    </div>
    <form class="Inscripción-estudiante" id='Inscripción-estudiante' method="post" action='../controllers/agregar_estudiante.php'>
      <div class="datos">
        <label for="dni">DNI del Estudiante:</label>
        <input type="text" id="dni" name="dni" required autocomplete="off" maxlength="8" />
      </div>

      <div class="datos">
        <label for="nombres">Nombres:</label>
        <input type="text" id="nombres" name="nombre" required autocomplete="off" />
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
        <input type="date" id="fecha-nacimiento" name="fecha-nacimiento" require autocomplete="off" />
      </div>

      <div class="datos">
        <input class="registrar-button" id="registrar-button" type="submit" value="Registrar" name='agregar-estudiante'></input>
      </div>
    </form>
  </div>

</section>


<?php
include("../includes/footer.php");
?>
<script>
  $(document).ready(function() {

    const formulario = $('#Inscripción-estudiante');
    const borrar = $('.borrar');
    const modificar = $('.modificar');

    formulario.on('submit', function(e) {
      e.preventDefault();

      $.ajax({
        url: '../controllers/agregar_estudiante.php',
        type: 'POST',
        data: new FormData(this),
        processData: false,
        contentType: false,
        success: function(response) {
          alert('Estudiante registrado correctamente');
          formulario[0].reset();
        },
      });
    });

    borrar.on('click', function(e) {
      e.preventDefault();
      const fila = $(this).closest('tr');
      const idEstudiante = fila.find('.td').text();
      if (confirm('¿Estás seguro de que quieres eliminar este estudiante?')) {
        $.ajax({
          url: '../controllers/eliminar_estudiante.php',
          type: 'POST',
          data: {
            id_estudiante: idEstudiante
          },
          success: function(response) {
            console.log(response);
            if (response.success) {
              alert('Error al eliminar el estudiante');
            } else {
              alert('Estudiante eliminado correctamente');
              fila.remove();
            }
          }
        });
      }
    });

    modificar.on('click', function(e) {
      e.preventDefault();
      const fila = $(this).closest('tr');
      const celdas = fila.find('td');

      const idEstudiante = $(celdas[0]).text();
      const nombreEstudiante = $(celdas[1]).text().split(' ').filter((e) => e.trim() != '')[0];
      const apellido_paterno = $(celdas[1]).text().split(' ').filter((e) => e.trim() != '')[1];
      const apellido_materno = $(celdas[1]).text().split(' ').filter((e) => e.trim() != '')[2];
      const fechaNacimiento = $(celdas[2]).text();

      $('#dni').val(idEstudiante);
      $('#nombres').val(nombreEstudiante);
      $('#apellido-paterno').val(apellido_paterno);
      $('#apellido-materno').val(apellido_materno);

      $("#table_student").hide();
      $("#table_stu").hide();
      $("#inscripcion").show();


      formulario.off('submit');
      formulario.on('submit', function(e) {
        e.preventDefault();

        $("#table_student").show();
        $("#table_stu").show();
        $("#inscripcion").hide();
        const formData = new FormData(this);

        $.ajax({
          url: '../controllers/modificar_alumno.php',
          type: 'POST',
          data: formData,
          processData: false,
          contentType: false,
          success: function(response) {
            formulario[0].reset();
            $("#table_student").show();
            $("#table_stu").show();
            $("#inscripcion").hide();
          },
          // sin importar que haya error tiene que mostrares las tablas
          error: function() {
            $("#table_student").show();
            $("#table_stu").show();
            $("#inscripcion").hide();
          }
        });
      });
    })
  });
</script>


<?php
include("../includes/footer.php")
?>