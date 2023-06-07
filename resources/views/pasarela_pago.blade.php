@extends('layouts.plantilla');
<!DOCTYPE html>
<html>

<head>
  <meta charset='utf-8'>
  <title>Formulario</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="shortcut icon" href="img/logo.png">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body style="font-family:Georgia, 'Times New Roman', Times, serif; overflow-x: hidden;">
     <!--NavBar-->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: rgba(0, 0, 0, 0.832);">
    <div class="container-fluid">
      <a class="navbar-brand" href="index"><img style="width: 110px;height: 40px;margin-left: 20px;"
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
  <div style=" width: 100%;height:500px; background-image:url(img/img3.jpg); background-repeat: no-repeat; background-size: 100%;">
  </div>
  <!--Titulo-->
  <div class="d-flex flex-column justify-content-center align-items-center mb-4 mt-3">
      <h2 class style="color: rgb(255, 255, 255); font-family:Georgia, 'Times New Roman', Times, serif;">TU PAGO SE HA REALIZADO CORRECTAMENTE, {{$client->nombre}}</h2>
  </div>
    <div class="text-center">
    @foreach ($bookings as $booking)
        @if ($booking->id == $id_reserva)
            <h3>No olvides que tu reserva es para el dia {{$booking->fecha_reserva}} para {{$booking->n_personas}} personas en la mesa numero {{$booking->n_mesa}}</h3>
        @endif
  @endforeach
    <h3>Te hemos enviado un correo de confirmación a {{$client->email}} </h3>
    <a class="text-decoration-none" href="discoteca"><h4>INICIO</h4></a>
    </div>
   <!--Footer-->
   <div class="w-100 mt-5 d-flex flex-wrap"
   style="height: 220px;border: 1px solid rgb(246, 246, 246); background-color: wheat;">
   <div class="w-100 h-50 d-flex flex-nowrap">
     <!--Logo-->
     <div class="w-25" style="text-align: center;">
       <a href="index" title="Ir a inicio">
         <img src="img/logo.png">
       </a>
     </div>
     <!-- Telefono-->
     <div class="w-50 d-flex flex-column justify-content-center align-items-center">
       <a class="text-decoration-none" style="color: rgb(9, 9, 9); font-size: x-large; font-weight: bold;"
         href="tel:+34616553227" alt="contactar" title="Contactar por Telefono">
         +34 616 553 227
       </a>
     </div>
     <!--Ubicacion-->
     <div class="w-25 d-flex justify-content-center align-items-center">
       <p class="mt-3" style="color: rgb(23, 23, 23); font-size: larger;">C. de Francisco Brizuela, 3, 28011 Madrid</p>
     </div>

   </div>
   <!--Created by-->
   <div class="w-25 d-flex justify-content-center align-items-center">
     <p class="mt-3" style="color: rgb(16, 16, 16); font-size: larger;">Created by Diego, Elias & Christian</p>
   </div>
   <!-- Redes Sociales -->
   <div class="w-50 d-flex flex-nowrap" style="justify-content: center; align-items: center;">
     <div>
       <!-- Facebook -->
       <a class="btn text-white btn-floating m-1" title="Facebook" target="_blank" style="background-color: #3b5998;" href="https://www.facebook.com/fpjoseramonotero" role="button">
         <i class="bi bi-facebook"></i>
       </a>
       <!-- Twitter -->
       <a class="btn text-white btn-floating m-1" title="Twitter" target="_blank" style="background-color: #55acee;" href="https://twitter.com/FPJROtero" role="button">
         <i class="bi bi-twitter"></i>
       </a>
       <!-- Instagram -->
       <a class="btn text-white btn-floating m-1" title="Instagram" target="_blank"style="background-color: #ac2bac;" href="https://www.instagram.com/fpjrotero/" role="button"><i
           class="bi bi-instagram"></i>
       </a>
       <!--E-mail-->
       <a class="btn text-white btn-floating m-1" title="Gmail" target="_blank" style="background-color: #fb0101;" href="mailto:d.faria@a.jrotero.es"
         role="button">
         <i class="bi bi-google"></i>
       </a>
     </div>
     <!--Copy-->
   </div>
   <div class="w-25 d-flex justify-content-center align-items-center">
     <p  style=" color: rgb(0, 0, 0);">Copyright<span style="font-size: small;">© </span>2023</p>
   </div>
   <!--LINKS-->
   <div class="w-100 d-flex justify-content-evenly" style="align-self: end; border-top: 1px solid grey;">
     <a href class="text-decoration-none link-secondary">FAQS</a>
     <a href class="text-decoration-none link-secondary">CONDICIONES
       GENERALES</a>
     <a href class="text-decoration-none link-secondary">CONDICIONES DE
       COMPRA</a>
     <a href class="text-decoration-none link-secondary">PRIVACIDAD</a>
     <a href class="text-decoration-none link-secondary">AVISO LEGAL</a>
   </div>
 </div>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
 integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous">
 </script>
</body>


</html>