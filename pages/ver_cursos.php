<?php
include("../includes/head.php");

include('../database/db.php');

      $query  = "SELECT * FROM cursos";
      $resultado= mysqli_query($conn,$query);


?>


<head>
  <title>LISTA DE CURSOS</title>
</head>
<script>

  function confirmacion(){
    var respuesta =confirm("¿Seguro que desea eliminar esste curso?");
    if(respuesta == true){
      return true;
    }else{
      return false;
    }
  }

  </script>


<body>
  

<section class="ver-cursos-container">
  <div class="cursos-container">
    <header class="cursos-header">
      <h1 style="text-align: center ;">Listado de cursos</h1>
    </header>
    <table class="tabla-cursos">
      <thead>
        <tr style="border: 2px solid black"; >
          <th style="border:2px solid black">Nro</th>
          <th style="border: 2px solid black">Nombre del curso</th>
          <th style="border: 2px solid black">Fecha de creación</th>
          
            <th  style="border:2px solid black"colspan="2" style="text-align: center">
              ACCIONES
        
             </th>
        </tr>
      </thead>
      <tbody>
      <?php while ($fila = mysqli_fetch_assoc($resultado)){

              echo"<tr style='border:2px solid black;'>";

              echo"<td style='border:2px solid black;'>".$fila["id_cursos"]."</td>";
              echo"<td style='border:2px solid black;'>".$fila["nombre_curso"]."</td>";
              echo"<td style='border:2px solid black;'>".$fila["fecha_creacion"]."</td>";

              echo"<td style='border:2px solid black;'>
              
                  <form action = '../controllers/eliminar_curso.php' method='POST'>
                  <input type='hidden' name='id' value='".$fila["id_cursos"]."'>
                  <input type='hidden' name='nombre' value='".$fila["nombre_curso"]."'>
                  <input type='submit' name='eliminar' value='Eliminar' onclick='return confirmacion()'
                  style='display: inline-block;padding: 8px 16px;font-size: 14px;font-weight: bold;
                  text-align: center;text-decoration: none;cursor: pointer;border: 1px solid #ed0606; 
                  color: #fff;background-color: #ed0606;border-radius: 4px;transition: background-color 0.3s ease;'>
                  </form>
                </td>";


             echo"<td style='border:2px solid black;'>
              
                <form action = '../controllers/editar_curso.php' method='POST'>
                <input type='hidden' name='id' value='".$fila["id_cursos"]."'>
                <input type='hidden' name='nombre' value='".$fila["nombre_curso"]."'>
                <input type='hidden' name='fecha' value='".$fila["fecha_creacion"]."'>

                <input type='submit' name='editar' value='Editar' style='display: inline-block;padding: 8px 16px;font-size: 14px;font-weight: bold;
                text-align: center;text-decoration: none;cursor: pointer;border: 1px solid #28a745; 
                color: #fff; background-color: #28a745;border-radius: 4px;transition: background-color 0.3s ease;'>
                </form>

              </td>";

              echo"</tr>";


      }
                
        ?>


      </tbody>
    </table>
  </div>
</section>
</body>
<?php
include("../includes/footer.php");
?>