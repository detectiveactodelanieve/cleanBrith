<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clean Brinth</title>
    <link rel="stylesheet" href="{{asset('sitioweb/css/style.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <header>
        <img class="logo" src="{{asset('sitioweb/assets/img/CLEAN.jpg')}}" alt="Logo" >
        <!--BOTON RESPONSIVO-->
        <button id="abrir" class="abrir-menu"><i class="bi bi-list"></i></button>
       <nav class="nav" id="nav" >
            <button id="cerrar" class="cerrar"><i class="bi bi-x-lg"></i></button>
            <ul class="nav-list">
                <li><a href="#">INICIO</a></li>
                <li><a href="#misvis"></i>SOBRE NOSOTORS</a></li>
                <li><a href="#servis">SERVICIOS</a></li>
                <li><a href="#Contactos">CONTACTOS</a></li>
            </ul>
        </nav>
    </header>
   <main>
    <section class="carusel">
      <div id="carouselExampleFade" class="carousel slide carousel-fade">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{asset('sitioweb/assets/img/Add a heading-1.jpg')}}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{asset('sitioweb/assets/img/Add a heading-2.jpg')}}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{asset('sitioweb/assets/img/Add a heading-3.jpg')}}" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>

    <div class="mis-vis" id="misvis">
      <section class="Vision">
          <h2 class="v-mision"><i class="bi bi-rocket-takeoff-fill"></i> Mision</h2>
              <p>Brindar soluciones integrales en limpieza y control de plagas, asegurando ambientes saludables, seguros y de calidad para nuestros clientes, mediante un servicio eficiente, profesional y responsable. Nos comprometemos a utilizar productos y técnicas innovadoras que respeten el medio ambiente y mejoren la calidad de vida en cada espacio que atendemos."</p>
      </section>

      <section class="Mision">
          <h2 class="v"><i class="bi bi-award"></i> Vision</h2>
          <p>"Ser la empresa líder en el sector de limpieza general y control de plagas, reconocida por la excelencia en nuestros servicios y la satisfacción de nuestros clientes. Buscamos expandir nuestra presencia a nivel nacional, adoptando las mejores prácticas y tecnologías para ofrecer un servicio de alta calidad y contribuir al bienestar de las comunidades."</p>
      </section>
    </div>

    <div>
      <section class="logro">
        <section id="img-1">
          <img src="{{asset('sitioweb/assets/img/WhatsApp_Image_2024-12-16_at_7.15.38_PM__1_-removebg-preview (1).png')}} " alt="Logro" style="height: 350px; object-fit: contain;" >
        </section>
        <section class="img-2">
          <img src= "{{asset('sitioweb/assets/img/WhatsApp_Image_2024-12-16_at_7.08.50_PM-removebg-preview (1).png')}} " alt="" style="height:200px; object-fit: contain;">
        </section>
        <section class="img-3">
          <img src="{{asset('sitioweb/assets/img/WhatsApp_Image_2024-12-16_at_7.09.56_PM-removebg-preview (1).png')}} "alt="" style="object-fit: contain;">
        </section>
      </section>
    </div>

    <div class="container" id="servis">
        <h2 class="serv">Nuestros Servicios</h2>
        <div class="flex-section">
            <div class="Servicios">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-buildings-fill" viewBox="0 0 16 16">
                  <path d="M15 .5a.5.5 0 0 0-.724-.447l-8 4A.5.5 0 0 0 6 4.5v3.14L.342 9.526A.5.5 0 0 0 0 10v5.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V14h1v1.5a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5zM2 11h1v1H2zm2 0h1v1H4zm-1 2v1H2v-1zm1 0h1v1H4zm9-10v1h-1V3zM8 5h1v1H8zm1 2v1H8V7zM8 9h1v1H8zm2 0h1v1h-1zm-1 2v1H8v-1zm1 0h1v1h-1zm3-2v1h-1V9zm-1 2h1v1h-1zm-2-4h1v1h-1zm3 0v1h-1V7zm-2-2v1h-1V5zm1 0h1v1h-1z"/>
                </svg>
                <h3 class="info">LIMPIEZA INSTITUCIONAL</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas sunt harum, nihil ipsam corporis dignissimos modi expedita iure eum recusandae eveniet, maxime nesciunt, est minus rerum eos iste officia eligendi.</p>
            </div>
            <div class="Servicios">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293z"/>
                <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293z"/>
              </svg>
                <h3 class="info">LIMPIEZA DE HOGARES</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas sunt harum, nihil ipsam corporis dignissimos modi expedita iure eum recusandae eveniet, maxime nesciunt, est minus rerum eos iste officia eligendi.</p>
            </div>
            <div class="Servicios">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-virus2" viewBox="0 0 16 16">
                <path d="M8 0a1 1 0 0 0-1 1v1.143c0 .557-.407 1.025-.921 1.24-.514.214-1.12.162-1.513-.231l-.809-.809a1 1 0 1 0-1.414 1.414l.809.809c.394.394.445.999.23 1.513C3.169 6.593 2.7 7 2.144 7H1a1 1 0 0 0 0 2h1.143c.557 0 1.025.407 1.24.921.214.514.163 1.12-.231 1.513l-.809.809a1 1 0 0 0 1.414 1.414l.809-.809c.394-.394.999-.445 1.513-.23.514.214.921.682.921 1.24V15a1 1 0 1 0 2 0v-1.143c0-.557.407-1.025.921-1.24.514-.214 1.12-.162 1.513.231l.809.809a1 1 0 0 0 1.414-1.414l-.809-.809c-.393-.394-.445-.999-.23-1.513.214-.514.682-.921 1.24-.921H15a1 1 0 1 0 0-2h-1.143c-.557 0-1.025-.407-1.24-.921-.214-.514-.162-1.12.231-1.513l.809-.809a1 1 0 0 0-1.414-1.414l-.809.809c-.394.393-.999.445-1.513.23-.514-.214-.92-.682-.92-1.24V1a1 1 0 0 0-1-1Zm2 5a1 1 0 1 1-2 0 1 1 0 0 1 2 0M7 7a1 1 0 1 1-2 0 1 1 0 0 1 2 0m1 5a1 1 0 1 1 0-2 1 1 0 0 1 0 2m4-4a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
              </svg>
                <h3 class="info">DESINFECION Y CONTROL DE PLAGAS</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas sunt harum, nihil ipsam corporis dignissimos modi expedita iure eum recusandae eveniet, maxime nesciunt, est minus rerum eos iste officia eligendi.</p>
            </div>
        </div>
    </div>

   </main>
   <footer id="Contactos" class="footer">
    <div class="footer-container">
        <div class="footer-section social-links">
            <h3>Redes Sociales</h3>
            <ul>
              @foreach($getRedes as $getRedes)
                <li><a href="https://www.facebook.com/?locale=es_LA"><i class="bi bi-facebook"></i> Facebook</a></li>
                <li><a href="https://www.facebook.com/?locale=es_LA"><i class="bi bi-twitter"></i> X</a></li>
                <li><a href="https://www.instagram.com/"> <i class="bi bi-instagram"></i> Instagram</a></li>
                <li><a href="https://es.linkedin.com/learning/"><i class="bi bi-linkedin"></i> LinkedIn</a></li>
              @endforeach
            </ul>
        </div>


        <div class="footer-section contacts">
            <h3>Contactos <i class="bi bi-person-lines-fill"></i></h3>
            <p><i class="bi bi-telephone-fill"></i> Teléfono: +123 456 789</p>
            <p><i class="bi bi-envelope-fill"></i> Email: info@example.com</p>
            <p><i class="bi bi-browser-safari"></i> Web: www.example.com</p>
        </div>


        <div class="footer-section location">
            
            <h3>Ubicación <i class="bi bi-geo-alt-fill"></i></h3>
            <p>Calle Falsa 123</p>
            <p>Ciudad, País</p>
            <p>Horario: Lun-Vie 9am - 6pm</p>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; 2024 Jared Vega. Todos los derechos reservados.</p>
    </div>
</footer>
    <script src="/js/archivos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>