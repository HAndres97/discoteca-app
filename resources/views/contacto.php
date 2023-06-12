<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>Contacto</title>
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
    <!--PORTADA-->
    <div class=" d-flex flex-column justify-content-center align-items-center mb-5 portadaContacto"
        style=" width: 100%;height:450px; background-image:url(img/img3.jpg); background-repeat: no-repeat; background-size: 100%;">
    </div>
    <!--Titulo-->
    <div class="w-100 h-25">
        <h1 class="text-center">Contacto</h1>
        <div class=" mt-3 m-auto mb-5"
            style="width: 320px;height: 10px;border: 1px solid rgb(153, 125, 3); background-color: rgb(245, 222, 179);">
        </div>
    </div>
    <!--DIV GENERAL-->
    <div class="w-100 mt-4 d-flex justify-content-center contacto" style="height: 550px;">
        <!--DATOS-->
        <div class="w-50 mt-4 mx-4 rounded-5" style="height: 520px;background-color: rgb(240, 248, 255);">
            <div class="mt-5"> 
                <h2 class="text-center mt-4" style="color: rgb(0, 0, 0);">Nuestras Oficinas</h2>
                <div class="w-50 text-center m-auto mt-3">
                    <p style="color: rgb(82, 82, 82);">Si quieres recuperar un objeto perdido en alguna de nuestras sesiones o eventos,
                        por favor comunícate con nuestro teléfono de atención al cliente.</p>
                </div>
                
                <div class="w-75 m-auto" style="height: 350px;">
                    <h3 class="text-center mt-4" style="color: rgb(0, 0, 0);">Teléfono</h3>
                    <div class="text-center">
                        <a class="text-decoration-none" style="color: rgb(219, 0, 0);" href="tel:+34616553227"alt="contactar" title="Contactar por Telefono">+34 616 553 227</a>
                    </div>
                    <h3 class="text-center mt-3" style="color: rgb(0, 0, 0);">Email</h3>
                    <div class="text-center">
                        <a class="text-decoration-none" style="color: rgb(219, 0, 0);" href="mailto:tekila.info@gmail.com" title="Contactar por e-mail">tekila.info@gmail.com</a>
                    </div>
                    <h3 class="text-center mt-3" style="color: rgb(0, 0, 0);">Dirección</h3>
                    <div class="text-center">
                        <p class="mt-1" style="color: rgb(219, 0, 0);">C. de Francisco Brizuela, 3,
                            28011 Madrid</p>
                    </div>
                </div>
            </div>
            
        </div>
        <!--Ifram MAPA ubicaion-->
        <div class="mt-4 iframe ">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3037.974379519158!2d-3.741260724797387!3d40.40941835608561!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4227fe7e99fb6b%3A0x19750d42debf6153!2sC.%20de%20Francisco%20Brizuela%2C%203%2C%2028011%20Madrid!5e0!3m2!1ses!2ses!4v1685904980645!5m2!1ses!2ses" width="620" height="520" style="border:0;" class="rounded-5" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    <div class="lineaContacto"></div>
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