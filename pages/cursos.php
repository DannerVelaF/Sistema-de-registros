
!<?php
include("../includes/head.php")
?>

<script>

  function confirmacion(){
    var respuesta =confirm("¿Desea agregar esste curso?");
    if(respuesta == true){
      return true;
    }else{
      return false;
    }
  }

  </script>


<div class="cursos-container">
  <form action="../controllers/agregar_curso.php" method="POST">
    <div id="main-container">
      <table>
        <thead>
          <tr>
            <th colspan="2">
              <h1 style="text-align: center;">Agregar curso</h1>
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Nombre del curso:</td>
            <td>
              <input class="data-estudiante" type="text" name="nombre" id="nombre" size="50px" style="font-size: 20px;" />
            </td>
          </tr>
          <tr>
            <td>Fecha de creación:</td>
            <td>
              <input class="data-estudiante"  value="<?php echo date('d-m-Y');?>" readonly="readonly" name="fechaHora" id="fechaHora" size="50px" style="font-size: 20px;" />
            </td>
          </tr>
           
          <td colspan="2">
                      <div class="center">
                                      
                               <input type="submit" name="Agregar" value="Agregar" class="styled-button" onclick="return confirmacion()">

                     </div>
          </td>     
        </tbody>
      </table>
    </div>
  </form>
</div>





<?php
include("../includes/footer.php");
?>