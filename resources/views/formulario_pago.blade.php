@extends('layouts.plantilla');
<!DOCTYPE html>
<html>

<head>
  <meta charset='utf-8'>
  <title>Pago</title>
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
  <!--DIV GENERAL-->
  <div class="w-100 d-flex flex-nowrap" style="height: 700px;margin-top: 90px;background-color: rgb(255, 255, 255);">
    <!--Contenido-->
    <div class="w-50 mt-3 mx-3 d-flex flex-column justify-content-center align-items-center" style="height: 650px;">
      <!--Subtitulo-->
      <h3 class="text-center" style="color: #050505;font-weight: bold;">Tu Reserva</h3>
      <div class=" mt-3 m-auto mb-5 w-25"
            style="height: 10px;border: 1px solid rgb(84, 84, 84); background-color: rgb(101, 101, 101);"></div>
      <!--Datos-->
    
          <div class="w-50 ticket" style="font-family: monospace;">
            <p class="text-center" style="color: #050505;font-weight: bold;">Número de mesa: {{$booking->n_mesa}}</p>
            <p class="text-center" style="color: #050505;font-weight: bold;">Día: {{$booking->fecha_reserva}}</p>
            <p class="text-center" style="color: #050505;font-weight: bold;">Número de personas: {{$booking->n_personas}}</p>
            <p class="text-center" style="color: #050505;font-weight: bold;">Total: {{$booking->total_pagar}} €</p>
          </div>
        
      
    </div>
    <!--Formulario-->
    <div class="w-75 mt-3" style="height: 650px;">
      <form action="pasarela_pago" method="post">
        @csrf
        <div class="form-group">
          <label  class="form-label mt-4" style="color: rgb(5, 5, 5); font-weight: bolder;">Nombre y Apellidios:*</label>
          <input type="text" class="form-control w-75" placeholder="Introduce tu nombre" required name="nombre">
          <label for="exampleInputEmail1" class="form-label mt-4" style="color: rgb(5, 5, 5); font-weight: bolder;">Email:*</label>
          <input type="email" style="color: rgb(0, 0, 0);" class=" w-75 form-control" id="exampleInputEmail1" required aria-describedby="emailHelp" placeholder="Introduce tu email" name="email">
          <label class="form-label mt-4" style="color: rgb(5, 5, 5); font-weight: bolder;">Nombre titular de la tarjeta:*</label>
          <input type="text" style="color: rgb(0, 0, 0);" class="w-75 form-control" placeholder="Introduce nombre del titula de la tarjeta" required>
          <label class="form-label mt-4" style="color: rgb(5, 5, 5); font-weight: bolder;">Numero de la tarjeta:*</label>
          <input type="text" style="color: rgb(0, 0, 0);" class="w-75 form-control" pattern="[0-9]{18}" maxlength="18" placeholder="Introduce numero de la tarjeta" required>
          <label class="form-label mt-4" style="color: rgb(5, 5, 5); font-weight: bolder;" >CVV:*</label>
          <input type="text"  style="color: rgb(0, 0, 0);" class="w-75 form-control" maxlength="3" placeholder="Introduce el numero CVV" pattern="[0-9]{3}">
          <input type="hidden" name="id" value="{{$booking->id}}">
          <input type="reset" value="Limpiar" class="mt-3 btn  btn-outline-secondary">
          <input type="submit" value="Pagar" class="mt-3 btn  btn-outline-secondary">
        </div>

      </form>
    </div>
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