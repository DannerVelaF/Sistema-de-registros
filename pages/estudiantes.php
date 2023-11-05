<?php
  include("../includes/head.php")
?>


<div class="registro-form table_stu">
  <div class="Encabezado">
    <h1>Estudiantes</h1>
    <div class="button_student">
      <button class="agregar-estudiante" id="agregar-estudiante">
        Agregar Estudiante
      </button>
    </div>
  </div>
  <section>
    <table class="table_student" id="table_student">
      <thead class="thead">
        <tr>
          <th class="th">DNI</th>
          <th class="th">Nombre</th>
          <th class="th">Cursos</th>
        </tr>
      </thead>
      <tbody class="tbody">
        <tr>
          <td class="td">75126544</td>
          <td class="td">Estudiante 1</td>
          <td class="td">Matemáticas, Computación</td>
        </tr>
        <tr>
          <td class="td">75126544</td>
          <td class="td">Estudiante 2</td>
          <td class="td">Ciencias Sociales, Lenguaje</td>
        </tr>
        <tr>
          <td class="td">75126544</td>
          <td class="td">Estudiante 3</td>
          <td class="td">Artes, Música</td>
        </tr>
      </tbody>
    </table>
  </section>
</div>

<section class="inscripcion" id="inscripcion">
  <div class="registro-form">
    <div class="Encabezado">
      <h1>Agregar del Estudiante</h1>
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

  <div class="datos">
    <button class="registrar-button" type="submit">Registrar</button>
  </div>
</section>
<?php
  include("../includes/footer.php")
?>