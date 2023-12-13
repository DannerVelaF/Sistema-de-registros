<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Santo Tomás de Aquino</title>
  <link rel="stylesheet" href="./styles/lading_pages.css" />
  <link rel="shortcut icon" href="./imgs/logo.png" type="image/x-icon" />
</head>

<body>
  <section class="inicio" id="inicio">
    <header class="header">
      <!-- Barra de navegacion -->

      <nav class="nav-bar">
        <div class="logo">
          <a href="index.php"><img src="./imgs/logo.png" alt="logo" /></a>
          <h1>Santo Tomás de Aquino</h1>
        </div>
        <ul class="nav-bar-items" id='navbar'>
          <!-- Menu responsive cancel -->
          <svg class="menu cancel" id='cancel' xmlns="http://www.w3.org/2000/svg" height="35" width="35" viewBox="0 0 384 512">
            <path fill="#ffff" d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
          </svg>
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
          <li class="btn-li">
            <a class="btn-registro" href="/Sistema de registros//pages/login.php">IR AL REGISTRO</a>
          </li>
        </ul>
        <!-- Menu responsive bars -->
        <svg class="menu bars" xmlns="http://www.w3.org/2000/svg" height="35" width="35" viewBox="0 0 448 512">
          <path fill="#ffff" d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z" />
        </svg>
      </nav>
    </header>

    <section class="panel">
      <div class="panel-secciones">
        <aside class="panel-imagen">
          <img src="./imgs/portada-inicio.jpg" alt="imagen-panel" />
        </aside>
        <aside class="panel-noticias">
          <section class="section-noticia">
            <div class="noticia">
              <img src="./imgs/noticia1.jpg" alt="a" />
              <div class="texto-noticia">
                <h1>Anuncio de puestos escolares</h1>
                <p><a href="#">Mas informacion</a></p>
              </div>
            </div>
            <div class="noticia">
              <img src="./imgs/noticia2.png" alt="a" />
              <div class="texto-noticia">
                <h1>Las Olimpiadas Tomasinas ya están aquí!!</h1>
                <p><a href="#">Mas informacion</a></p>
              </div>
            </div>
            <div class="noticia">
              <img src="./imgs/noticia3.jpg" alt="a" />
              <div class="texto-noticia">
                <div class="texto-noticias">
                  <h1>
                    Ven y vive junto a noostors nuestro 32avo. Aniversario
                  </h1>
                  <p><a href="#">Mas informacion</a></p>
                </div>
              </div>
            </div>
            <div class="noticia">
              <img src="./imgs/noticia4.jpg" alt="a" />
              <div class="texto-noticia">
                <div class="texto-noticias">
                  <h1>Mañana deportiva con nuestros alumnos</h1>
                  <p><a href="#">Mas informacion</a></p>
                </div>
              </div>
            </div>
          </section>
          <section class="redes">
            <div class="redes-sociales">
              <h1>Visitanos en nuestras redes</h1>
              <a href="https://www.facebook.com/iepsantotomasdeaquino" target="_blank"><img src="./imgs/facebook.png" alt="facebook" /></a>
            </div>
          </section>
        </aside>
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
            "Lograr ser una de las instituciones lideres en la región,
            brindando una excelente formación a nuestros estudiantes gracias a
            la eseñanza de nuestros docentes y padres de familia."
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
            "Promover una enseñanza innovadoara y valores a nuestros
            estudiantes con lo cual puedan tomar las mejores opciones para
            cultivar su futuro prospero y exitoso."
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
      <div class="formulario-titulo">
        <h1>Contactanos</h1>
      </div>
      <div class="formulario-container">
        <form action="" class="formulario">
          <input type="text" placeholder="Nombres" />
          <input type="text" placeholder="Apellidos" />
          <input type="text" placeholder="Número Celular" />
          <input type="email" placeholder="Correo Electrónico" />
          <button class="enviar-formulario" type="submit">Enviar</button>
        </form>
      </div>

    </div>
  </section>

  <!-- footer -->
  <footer class="footer">
    <div class="footer-contenido">
      <div class="footer-inicio">
        <img src="./imgs/logo.png" alt="" />
        <h1>"Moralidad, estudio y disciplina"</h1>
      </div>
      <div class="footer-enlaces">
        <a href="#inicio">Inicio</a>
        <a href="#nosotros">Nosotros</a>
        <a href="#niveles-academicos">Niveles Académicos</a>
        <a href="#contacto">Contactanos</a>
      </div>
      <a href="https://www.facebook.com/iepsantotomasdeaquino" target="_blank"><img class="footer-red" src="./imgs/footer-img.png" alt="facebook" /></a>
      <h3>&copy; 2023 Santo Tomás de Aquino</h3>
    </div>
  </footer>
</body>

<script>
  const navbar = document.getElementById("navbar")
  document.querySelector(".bars").addEventListener('click', () => {
    navbar.style.left = '0'
  })

  document.querySelector('.cancel').addEventListener('click', () => {
    navbar.style.left = '-1000px'
  })

  document.querySelectorAll(".items").forEach(element => {
    element.addEventListener("click", () => {
      navbar.style.left = '-1000px'
    })
  });
</script>


</html>