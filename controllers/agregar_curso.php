
<?php
include("../includes/head.php");
include('../database/db.php');
if(isset($_POST["Agregar"])){
   $nombre=$_POST["nombre"];
   $fechaHora=$_POST["fechaHora"];

   
    $sql = "INSERT INTO cursos (nombre_curso,fecha_creacion) VALUES (?,?)";
    $query= mysqli_prepare($conn,$sql);
    mysqli_stmt_bind_param($query,"ss", $nombre,$fechaHora);
    mysqli_stmt_execute($query);
    $afectado=mysqli_stmt_affected_rows($query);
    if($afectado==1) {
      echo "<script> alert('El curso [$nombre] se agregó correctamente'); location.href ='../pages/ver_cursos.php'; </script>";
    }else{
      echo "<script> alert('El curso [$nombre] no se agregó correctamente :( '); location.href ='../pages/ver_cursos.php'; </script>";


    }
    mysqli_stmt_close($query);

    

    

      
}

?>
