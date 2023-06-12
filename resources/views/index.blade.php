@extends('layouts.plantilla')
<!DOCTYPE html>
<html>
<head>
  <meta charset='utf-8'>
  <title>Inicio</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="shortcut icon" href="img/logo.png">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link rel="stylesheet" type="text/css" href="css/responsiveMovil.css">
</head>

<body style="font-family:Georgia, 'Times New Roman', Times, serif; overflow-x: hidden;">
  <!--NavBar-->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: rgba(0, 0, 0, 0.832);">
    <div class="container-fluid">
      <a class="navbar-brand" href="discoteca"><img style="width: 110px;height: 40px;margin-left: 20px;"
          src="img/logo.png"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02"
        aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarColor02">
        <ul class="navbar-nav m-auto">
          <li class="nav-item">
            <a class="nav-link active" href="discoteca">Inicio
              <span class="visually-hidden">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="reservar">Reservar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="carta">Carta</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="fotos">Fotos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contacto">Contacto</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--Carrousel-->
  <div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active ">
        <img src="img/img1.webp" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h1>Bienvenido a Tekila</h1>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/img2.webp" class="d-block w-100 " alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h1>Bienvenido a Tekila</h1>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/img3.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h1>Bienvenido a Tekila</h1>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <h2 class="text-center mt-5">Próximas Sesiones</h2>
  <div class="w-50 mt-4 m-auto" style="height: 10px;border: 1px solid rgb(153, 125, 3); background-color: wheat;"></div>
  <!--Card parte 1-->
  <div class="row mt-5">
    <div class="col d-flex justify-content-evenly flex-wrap">
      <div class="card " style="width: 25rem;">
        <img src="img/card1.jpg" class="card-img-top" alt="Eladio Carrion">
        <div class="card-body">
          <h5 class="card-title">Eladio Carrion</h5>
          <p class="card-text">Eladio Juan Carrión Morales es un rapero y cantante estadounidense con ascendencia puertoriqueña de reguetón y trap latino.</p>
          <a href="https://es.wikipedia.org/wiki/Eladio_Carri%C3%B3n" title="Informacion de Eladio Carrion" target="_blank" class="btn btn-secondary">Ver más | <i class="bi bi-wikipedia"></i></a>
        </div>
      </div>
      <div class="card" style="width: 25rem;">
        <img src="img/card2.webp" class="card-img-top" alt="Duki">
        <div class="card-body">
          <h5 class="card-title">Duki</h5>
          <p class="card-text">Mauro Ezequiel Lombardo Quiroga, conocido artísticamente como Duki, es un rapero y compositor argentino.​</p>
          <a href="https://es.wikipedia.org/wiki/Duki" title="Informacion de Duki" target="_blank" class="btn btn-secondary">Ver más | <i class="bi bi-wikipedia"></i></a>
        </div>
      </div>
      <div class="card" style="width: 25rem;">
        <img src="img/card3.jpg" class="card-img-top" alt="Rels B">
        <div class="card-body">
          <h5 class="card-title">Rels B</h5>
          <p class="card-text">Daniel Heredia Vidal, conocido por su nombre artístico Rels B, es un rapero, cantante y productor musical español.</p>
          <a href="https://es.wikipedia.org/wiki/Rels_B" title="Informacion de Rels B" target="_blank" class="btn btn-secondary">Ver más | <i class="bi bi-wikipedia"></i></a>
        </div>
      </div>
    </div>
  </div>
  <!--Card parte 2-->
  <div class="row mt-5">
    <div class="col d-flex justify-content-evenly flex-wrap">
      <div class="card " style="width: 25rem;">
        <img src="img/card4.jpg" class="card-img-top" alt="Mora">
        <div class="card-body">
          <h5 class="card-title">Mora</h5>
          <p class="card-text">Gabriel Armando Mora Quintero, conocido simplemente como Mora, es un cantante, compositor y productor musical puertorriqueño.​</p>
          <a href="https://es.wikipedia.org/wiki/Mora_(cantante)" title="Informacion de Mora" target="_blank" class="btn btn-secondary">Ver más | <i class="bi bi-wikipedia"></i></a>
        </div>
      </div>
      <div class="card" style="width: 25rem;">
        <img src="img/card5.jpg" class="card-img-top" alt="Morad">
        <div class="card-body">
          <h5 class="card-title">Morad</h5>
          <p class="card-text">Morad El Khattouti El Horami, conocido simplemente como Morad, es un rapero, cantante y compositor español de origen marroquí.​</p>
          <a href="https://es.wikipedia.org/wiki/Morad" title="Informacion de Morad" target="_blank" class="btn btn-secondary">Ver más | <i class="bi bi-wikipedia"></i></a>
        </div>
      </div>
      <div class="card" style="width: 25rem;">
        <img src="img/card6.jpg" class="card-img-top" alt="Morat">
        <div class="card-body">
          <h5 class="card-title">Morat</h5>
          <p class="card-text">Morat es una banda colombiana de pop latino y Rock latino formada originalmente en Bogotá en 2011.</p>
          <a href="https://es.wikipedia.org/wiki/Morat" target="_blank" class="btn btn-secondary" title="Informacion de Morat">Ver más | <i class="bi bi-wikipedia"></i></a>
        </div>
      </div>
    </div>
  </div>

  <div class="d-flex justify-content-center mt-4">
    <a href="eventos" title="Ver calendario">
      <button type="button" class="btn btn-outline-secondary">Calendario de todas las
        sesiones</button>
    </a>
  </div>

  <div class="w-25 mt-4 m-auto mb-5" style="height: 10px;border: 1px solid rgb(153, 125, 3); background-color: wheat;">
  </div>

  <!--Zona de Rerservar-->
  <div class=" d-flex flex-column justify-content-center align-items-center mb-5"
    style=" width: 100%;height:500px; background-image:url(img/img4.jpg); background-repeat: no-repeat; background-size: 100%;">
    <h3 class style="color: rgb(255, 255, 255); font-family:Georgia, 'Times New Roman', Times, serif;">Reservar
      una mesa</h3>
    <a href="reservar" title="Reservar mesa"><!--SIN COMPLETAR-->
      <button type="button" class="btn btn-dark"
        style="border: 1px solid rgb(153, 125, 3); background-color: rgb(245, 222, 179);">
        Reserva tu mesa
      </button>
    </a>
  </div>

  <!--Footer-->
  <footer class="w-100 mt-5"
  style="border: 1px solid rgb(246, 246, 246); background-color: rgb(245, 222, 179);">
  <div class="row">
      <!--Logo-->
      <div class="col-md-3 col-lg-5 col-xl-5 col-sm-3 mt-2">
          <a href="discoteca" title="Ir a la página de Inicio"><img src="img/logo.png"></a>
      </div>

      <!--Telefono-->
      <div class=" col-md-4 col-lg-4 col-xl-5 col-sm-4  mt-4">
          <a class="text-decoration-none" style="color: rgb(9, 9, 9); font-size: x-large; font-weight: bold;"
              href="tel:+34616553227" alt="contactar" title="Contactar por Telefono">
              +34 616 553 227
          </a>
      </div>
      <!--Ubicacion-->
      <div class="col-md-5 col-lg-3 col-xl-2 col-sm-5 mt-3">
          <p class="mt-3" style="color: rgb(23, 23, 23); font-size: larger;">C. de Francisco Brizuela, 3, 28011
              Madrid</p>
      </div>
  </div>
  <div class="row">
      <!--Created by-->
      <div class="col-md-3 col-lg-5 col-xl-5 col-sm-4 mt-2">
          <p class="mt-3" style="color: rgb(16, 16, 16); font-size: larger;">Created by Diego, Elias & Christian
          </p>
      </div>
      <!-- Redes Sociales -->
      <div class="col-md-5 col-lg-4 col-xl-5 col-sm-5 mt-2">
          <!-- Facebook -->
          <a class="btn text-white btn-floating m-1" title="Facebook" target="_blank"
              style="background-color: #3b5998;" href="https://www.facebook.com/fpjoseramonotero" role="button">
              <i class="bi bi-facebook"></i>
          </a>
          <!-- Twitter -->
          <a class="btn text-white btn-floating m-1" title="Twitter" target="_blank"
              style="background-color: #55acee;" href="https://twitter.com/FPJROtero" role="button">
              <i class="bi bi-twitter"></i>
          </a>
          <!-- Instagram -->
          <a class="btn text-white btn-floating m-1" title="Instagram" target="_blank"
              style="background-color: #ac2bac;" href="https://www.instagram.com/fpjrotero/" role="button"><i
                  class="bi bi-instagram"></i>
          </a>
          <!--E-mail-->
          <a class="btn text-white btn-floating m-1" title="Gmail" target="_blank"
              style="background-color: #fb0101;" href="mailto:d.faria@a.jrotero.es" role="button">
              <i class="bi bi-google"></i>
          </a>
      </div>
      <!--Copy-->
      <div class="col-md-2 col-lg-2 col-xl-1 col-sm-3 mt-2">
          <p style=" color: rgb(0, 0, 0);">Copyright<span style="font-size: small;">© </span>2023</p>
      </div>
  </div>
  <div class="row mx-auto m-auto" style="border-top: 1px solid grey;">
      <!--Links-->
      <div class="col-md-3 col-lg-5 col-xl-2 col-sm-3 mt-2">
          <a href class="text-decoration-none link-secondary">FAQS</a>
      </div>
      <div class="col-md-3 col-lg-5 col-xl-3 col-sm-3 mt-2">
          <a href class="text-decoration-none link-secondary">CONDICIONES
              GENERALES</a>
      </div>
      <div class="col-md-3 col-lg-5 col-xl-3 col-sm-3 mt-2">
          <a href class="text-decoration-none link-secondary">CONDICIONES DE
              COMPRA</a>
      </div>
      <div class="col-md-3 col-lg-5 col-xl-2 col-sm-3 mt-2">
          <a href class="text-decoration-none link-secondary">PRIVACIDAD</a>
      </div>
      <div class="col-md-3 col-lg-5 col-xl-2 col-sm-3 mt-2">
          <a href class="text-decoration-none link-secondary">AVISO LEGAL</a>
      </div>
  </div>
</footer>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
    integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous">
    </script>
</body>

</html>