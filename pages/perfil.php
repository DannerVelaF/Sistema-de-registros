<?php
include("../includes/head.php");
include("../database/db.php");

$query = "SELECT * FROM perfil WHERE usuario = '$_SESSION[usuario]'";
$result = mysqli_query($conn, $query);

?>
<section class="perfil-section">
  <h3> PERFIL DEL USUARIO </h3>
  <section id="contenido">
    <section id="izquierda">
      <article>
        <img class="user-img" src="../imgs/perfil.png">
        <h2>Administrador</h2>
      </article>
    </section>
    <section id="derecha">
      <h1>Información Del Usuario</h1>

      <aside>
        <?php
        while ($row = mysqli_fetch_array($result)) {

        ?>
          <h1 class="datos">NOMBRES:
            <?php echo $row['nombre_usuario'] . " " . $row["apellido_paternoU"] . " " . $row["apellido_paternoU"] ?>
          </h1>
          <h1 class="datos">CORREO: <?php echo $row['email'] ?></h1>
          <h1 class="datos">TELÉFONO: <?php echo $row['telefono'] ?></h1>
          <h1 class="datos">OCUPACIÓN: <?php echo $row['cargo'] ?></h1>
          <h1 class="datos">DOMICILIO: <?php echo $row['direccion'] ?></h1>
        <?php
        }
        ?>
      </aside>


    </section>
  </section>
  <footer id="footer-perfil">
    <aside>
      <h6> CONTACTANOS: </h6>
      <a class="contact"><img src="../imgs/mail.jpg">tomasdeaquino@gmail.com -</a>
      <a class="contact"><img src="../imgs/ubicacion.jpg">Borrego123 </a>
      <a class="contact"><img src="../imgs/telefono.jpg">987654321</a>
      <h6>Copyright@2023 - Todos los derechos reservados</h6>
    </aside>
  </footer>
</section>
<?php
include("../includes/footer.php")
?>