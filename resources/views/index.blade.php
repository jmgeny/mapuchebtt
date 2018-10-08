@extends('layouts.principal')

@section('title', 'Mapuche BTT')

@section('content')

    <!-- Navigation -->
    <a class="menu-toggle rounded" href="#">
      <i class="fa fa-bars"></i>
    </a>
    <nav id="sidebar-wrapper">
      <ul class="sidebar-nav">
        <li class="sidebar-brand">
          <a class="js-scroll-trigger" href="#page-top">MapucheBTT</a>
        </li>
        <li class="sidebar-nav-item">
          <a class="js-scroll-trigger" href="#page-top">Inicio</a>
        </li>
        <li class="sidebar-nav-item">
          <a class="js-scroll-trigger" href="#about">Nosotros</a>
        </li>
        <li class="sidebar-nav-item">
          <a class="js-scroll-trigger" href="#services">Servicios</a>
        </li>

        <li class="sidebar-nav-item">
          <a class="js-scroll-trigger" href="#portfolio">Portfolio</a>
        </li>
        <li class="sidebar-nav-item">
          <a class="js-scroll-trigger" href="#contact">Contacto</a>
        </li>
      </ul>
    </nav>

    <!-- Header -->
    <header class="masthead d-flex">
      <div class="container text-center my-auto">
        <!-- <h1 class="mb-1">MapucheBTT</h1> -->
        <img src="img/mapuchebtt.png" alt="mapuchebtt" width="100%">
        <h3 class="mb-5">
          <em>Tienda de Bicicletas, Componentes, Logística</em>
          <em>
        <ul class="list-inline mb-5">
          <li class="list-inline-item">
            <a class="social-link rounded-circle text-white mr-3" href="https://www.facebook.com/Mapuchebtt.Quilmes" target="new">
              <i class="fa fa-facebook"></i>
            </a>
          </li>
          <li class="list-inline-item">
            <a class="social-link rounded-circle text-white mr-3" href="https://www.instagram.com/mapuchebtt/" target="new">
              <i class="fa fa-instagram"></i>
            </a>
          </li>
          <li class="list-inline-item">
            <a class="social-link rounded-circle text-white" href="mailto:info@mapuchebtt.com" target="new">
              <i class="fa fa-mail-forward"></i>
            </a>
          </li>
        </ul>
          </em>

        </h3>
      </div>
      <div class="overlay"></div>
    </header>

    <!-- About -->
    <section class="content-section bg-light" id="about">
      <div class="container text-center">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h2>Descripcion del negocio</h2>
            <p class="lead mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti sequi non qui, quas, quod ad vel facilis consectetur sint, culpa eum. Maiores, maxime, quisquam. Assumenda, error sapiente numquam quibusdam praesentium.
          </div>
        </div>
      </div>
    </section>

    <!-- Services -->
    <section class="content-section bg-primary text-white text-center" id="services">
      <div class="container">
        <div class="content-section-heading">
          <!-- <h3 class="text-secondary mb-0">Servicios</h3> -->
          <h2 class="mb-5">Servicios</h2>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
            <span class="service-icon rounded-circle mx-auto mb-3">
              <i class="icon-wrench"></i>
            </span>
            <h4>
              <strong>Mecanica</strong>
            </h4>
            <p class="text-faded mb-0">Mecanica integral para tu bici</p>
          </div>
          <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
            <span class="service-icon rounded-circle mx-auto mb-3">
              <i class="icon-credit-card"></i>
            </span>
            <h4>
              <strong>Venta</strong>
            </h4>
            <p class="text-faded mb-0">Las mejores marcas</p>
          </div>
          <div class="col-lg-3 col-md-6 mb-5 mb-md-0">
            <span class="service-icon rounded-circle mx-auto mb-3">
              <i class="icon-plane"></i>
            </span>
            <h4>
              <strong>Viajes</strong>
            </h4>
            <p class="text-faded mb-0">Viajes a Carreras
              <i class="fa fa-heart"></i>
              Aventuras</p>
          </div>
          <div class="col-lg-3 col-md-6">
            <span class="service-icon rounded-circle mx-auto mb-3">
              <i class="icon-mustache"></i>
            </span>
            <h4>
              <strong>Preguntas</strong>
            </h4>
            <p class="text-faded mb-0">Preguntas frecuentes</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Portfolio -->
    <section class="content-section" id="portfolio">
      <div class="container">
        <div class="content-section-heading text-center">
          <!-- <h3 class="text-secondary mb-0">Portfolio</h3> -->
          <h2 class="mb-5">Nuestras Marcas</h2>
        </div>
        <div class="row no-gutters">
          <div class="col-lg-6">
            <a class="portfolio-item" href="https://www.specialized.com/ar/es?gaRegionChange=AR" target="new">
              <span class="caption">
                <span class="caption-content">
   <!--                <h2>Specialized</h2>
                  <p class="mb-0">A yellow pencil with envelopes on a clean, blue backdrop!</p> -->
                </span>
              </span>
              <img class="img-fluid" src="img/specialized-logo.png" alt="specialized">
            </a>
          </div>
          <div class="col-lg-6">
            <a class="portfolio-item" href="https://www.merida-bikes.com/es_ar" target="new">
              <span class="caption">
                <span class="caption-content">
<!--                   <h2>merida-bikes</h2>
                  <p class="mb-0">A dark blue background with a colored pencil, a clip, and a tiny ice cream cone!</p>
 -->                </span>
              </span>
              <img class="img-fluid" src="img/logo-merida.png" alt="">
            </a>
          </div>
<!--           <div class="col-lg-6">
            <a class="portfolio-item" href="#">
              <span class="caption">
                <span class="caption-content">
                  <h2>Strawberries</h2>
                  <p class="mb-0">Strawberries are such a tasty snack, especially with a little sugar on top!</p>
                </span>
              </span>
              <img class="img-fluid" src="img/portfolio-3.jpg" alt="">
            </a>
          </div>
          <div class="col-lg-6">
            <a class="portfolio-item" href="#">
              <span class="caption">
                <span class="caption-content">
                  <h2>Workspace</h2>
                  <p class="mb-0">A yellow workspace with some scissors, pencils, and other objects.</p>
                </span>
              </span>
              <img class="img-fluid" src="img/portfolio-4.jpg" alt="">
            </a>
          </div> -->
        </div>
      </div>
    </section>

    <!-- Call to Action -->
<!--     <section class="content-section bg-primary text-white">
      <div class="container text-center">
        <h2 class="mb-4">The buttons below are impossible to resist...</h2>
        <a href="#" class="btn btn-xl btn-light mr-4">Click Me!</a>
        <a href="#" class="btn btn-xl btn-dark">Look at Me!</a>
      </div>
    </section>
 -->
    <!-- Map -->
    <section id="contact" class="map">
      <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3279.5331787109276!2d-58.26499468514491!3d-34.71695257100456!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95a32e16b1d9994d%3A0x76df97a255d371cc!2sMapuchebtt+Quilmes!5e0!3m2!1ses!2sar!4v1532187969519"></iframe>
      <br/>
      <small>
        <a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A"></a>
      </small>
    </section>

    <!-- Footer -->
    <footer class="footer text-center">
      <div class="container">
        <ul class="list-inline mb-5">
          <li class="list-inline-item">
            <a class="social-link rounded-circle text-white mr-3" href="https://www.facebook.com/Mapuchebtt.Quilmes" target="new">
              <i class="fa fa-facebook"></i>
            </a>
          </li>
          <li class="list-inline-item">
            <a class="social-link rounded-circle text-white mr-3" href="https://www.instagram.com/mapuchebtt/" target="new">
              <i class="fa fa-instagram"></i>
            </a>
          </li>
          <li class="list-inline-item">
            <a class="social-link rounded-circle text-white" href="mailto:info@mapuchebtt.com" target="new">
              <i class="fa fa-mail-forward"></i>
            </a>
          </li>
        </ul>
      </div>
    </footer>
@endsection