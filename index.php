<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Santo Tomás de Aquino</title>
  <link rel="stylesheet" href="./styles/lading_pages.css" />
  <!-- web page ico -->
  <link rel="shortcut icon" href="./imgs/logo.png" type="image/x-icon" />
</head>

<body>
  <section class="inicio" id="inicio">
    <header class="header">
      <nav class="nav-bar">
        <div class="logo">
          <a href="index.html"><img src="./imgs/logo.png" alt="logo" " /></a>
            <h1>Santo Tomás de Aquino</h1>
          </div>
          <ul class=" nav-bar-items">
            <li>
              <a class="items" href="#inicio">INICIO</a>
            </li>
            <li>
              <a class="items" href="#nosotros">NOSOTROS</a>
            </li>
            <li>
              <a class="items" href="#niveles-academicos">NIVELES ACADÉMICOS</a>
            </li>
            <li>
              <a class="items" href="#contacto">CONTACTANOS</a>
            </li>

            <a class="btn-registro" href="/Sistema de registros//pages/login.php">IR AL REGISTRO</a>
            </ul>
      </nav>
    </header>
    <section class="panel">
      <div class="panel-secciones">
        <aside class="panel-imagen">
          <img src="./imgs/portada-inicio.jpg" alt="imagen-panel" />
        </aside>
        <aside class="noticias">asdfas</aside>
      </div>
      <div class="mas-informacion">
        <a href="#nosotros">MAS INFORMACION</a>
      </div>
    </section>
  </section>

  <!--Nosotros-->
  <section id="nosotros">
    <div class="descripcion">
      <h1>Acerca de nosotros</h1>
      <p>
        Nuestro colegio goza de un reconocmiento por la dedicacion en la labor
        educativa y en la ingreacion de nuestra Familia Tomasina. El prestigio
        se debe a la labor de profesores, personal administrativo y de
        servicios, cada uno especializado en su área, así como al compromiso
        de los padres de familia.
      </p>
    </div>
    <div class="nosotros-principal">
      <aside class="vision">
        <div class="nosotros-texto">
          <h1>Nuestra Visión</h1>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sit
            ipsam maxime aliquam sint ad porro qui, saepe explicabo quas!
            Veniam voluptatum eum numquam soluta illum aliquam reprehenderit
            nihil facere recusandae.
          </p>
        </div>
        <div class="nosotros-imagen">
          <img src="./imgs/imagen-visioni.jpg" alt="mision" />
        </div>
      </aside>
      <aside class="mision">
        <div class="nosotros-imagen">
          <img src="./imgs/imagen-mision.jpg" alt="mision" />
        </div>
        <div class="nosotros-texto">
          <h1>Nuestra Misión</h1>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sit
            ipsam maxime aliquam sint ad porro qui, saepe explicabo quas!
            Veniam voluptatum eum numquam soluta illum aliquam reprehenderit
            nihil facere recusandae.
          </p>
        </div>
      </aside>
    </div>
  </section>

  <!-- niveles-academicos -->
  <section class="niveles-academicos" id="niveles-academicos">
    <h1 class="niveles-titulo">Niveles Academicos</h1>
    <div class="niveles-section">
      <div class="niveles">
        <h1>Inicial</h1>
        <img src="./imgs/inicial.jpg" alt="Inicial" />
      </div>
      <div class="niveles">
        <h1>Primaria</h1>
        <img src="./imgs/primaria.jpg" alt="Primaria" />
      </div>
      <div class="niveles">
        <h1>Secundaria</h1>
        <img src="./imgs/secundaria.jpg" alt="Secundaria" />
      </div>
    </div>
  </section>

  <!-- Contacto -->
  <section class="contacto" id="contacto">
    <div class="localizacion">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.9639401792306!2d-79.83975262403523!3d-6.774243566248585!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x904cef290ef8d0e3%3A0x641d80c17c9400a3!2s7%20de%20Enero%20374%2C%20Chiclayo%2014001!5e0!3m2!1ses-419!2spe!4v1699780340148!5m2!1ses-419!2spe" width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="formulario-contacto">
      <h1>Contactanos</h1>
      <form action="" class="formulario">
        <input type="text" placeholder="Nombres" />
        <input type="text" placeholder="Apellidos" />
        <input type="text" placeholder="Número Celular" />
        <input type="email" placeholder="Correo Electrónico" />
        <button class="enviar-formulario" type="submit">Enviar</button>
      </form>
    </div>
  </section>

  <!-- footer -->
  <footer class="footer">
    <div class="footer-contenido">
      <img src="./imgs/logo.png" alt="" />
      <h1>"Moralidad, estudio y diciplina"</h1>
    </div>
  </footer>
</body>

</html>