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
    <!--JS y CSS de reservas-->
    <link rel="stylesheet" href="css/calendario.css">
    <link rel="stylesheet" type="text/css" href="css/responsiveMovil.css">
    <script src="https://unpkg.com/react@16/umd/react.development.js" crossorigin></script>
    <script src="https://unpkg.com/react-dom@16/umd/react-dom.development.js" crossorigin></script>
    <script src="https://unpkg.com/babel-standalone@6/babel.min.js" crossorigin></script>
    <script type="text/jsx" src="js/calendario.js"></script>
    <script type="text/javascript" src="js/CalcularTotalPrecio.js"></script>
    <script type="text/javascript" src="js/formulario.js"></script>
</head>

<body id="body" style="font-family:Georgia, 'Times New Roman', Times, serif;  overflow-x: hidden">
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
    <!--Portada-->
    <div  class="portadaReservar"  style=" width: 100%;height:500px; background-image:url(img/img6.jpg); background-repeat: no-repeat; background-size: 100%;">
    </div>
    <!--Titulo-->
    <div class="d-flex flex-column justify-content-center align-items-center mb-4 mt-3">
        <h1 class style="color: rgb(255, 255, 255); font-family:Georgia, 'Times New Roman', Times, serif;">Selecciona tu mesa</h1>
    </div>
    
    <!--DIV GENERAL-->
    <section class="w-100 d-flex sectionReserva" style="border-top: 1px solid rgb(44, 44, 44); height: 700px;">
        <!--Calendario-->
        <div class="mt-3 mx-5 d-flex align-items-end" style="width: 500px; height: 650px;">
            <div class="wrapper mt-2 mx-2">
                <header>
                    <p class="current-date" style="color: rgb(0, 0, 0); font-weight: bolder;"></p>
                    <div class="icons">
                        <span id="prev">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-caret-left-fill" viewBox="0 0 16 16">
                                <path
                                    d="m3.86 8.753 5.482 4.796c.646.566 1.658.106 1.658-.753V3.204a1 1 0 0 0-1.659-.753l-5.48 4.796a1 1 0 0 0 0 1.506z" />
                            </svg>
                        </span>

                        <span id="next">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                                <path
                                    d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                            </svg>
                        </span>
                    </div>
                </header>

                <div class="calendar rounded-bottom" style="background-color: rgb(205, 204, 204);">
                    <ul class="weeks">
                        <li>Dom</li>
                        <li>Lun</li>
                        <li>Mar</li>
                        <li>Mier</li>
                        <li>Jue</li>
                        <li>Vie</li>
                        <li>Sab</li>
                    </ul>
                    <ul class="days"></ul>
                </div>
            </div>
        </div>
        <!--Titulo y mesas-->
        <div class="w-100 mt-3 mx-3 d-flex flex-wrap" style="height: 700px;">
            <!--Subtitulo-->
            <div class="w-100 mt-2" style="height: 100px;">
                <h2 class="text-center">Mesas</h2>
                <div class=" mt-2 m-auto"
            style="height: 10px;width: 200px;border: 1px solid rgb(153, 125, 3); background-color: rgb(245, 222, 179);"></div>
            </div>
            <!--Mesas-->
            <div class="w-100 h-75 d-flex flex-column align-items-center">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item" role="presentation">
                      <a class="nav-link active" data-bs-toggle="tab" href="#MainRoom" aria-selected="true" role="tab">Main Room</a>
                    </li>
                    <li class="nav-item" role="presentation">
                      <a class="nav-link" data-bs-toggle="tab" href="#vip" aria-selected="false" role="tab" tabindex="-1">Zona VIP</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" data-bs-toggle="tab" href="#palcos" aria-selected="false" role="tab" tabindex="-1">Palcos privados</a>
                    </li>
        
                  </ul>
                  <div id="myTabContent" class="tab-content">
                    <div class="tab-pane fade active show " id="MainRoom" role="tabpanel">
                        <!--Mapa MainRoom-->
                        
                        <form action="formulario_pago" method="post">
                            @csrf
                        <div class="d-flex flex-nowrap rounded-4" style="width: 950px;height: 450px;border: 1px solid rgb(44, 44, 44);box-shadow: 0em 1.5em 8em rgb(65, 65, 65);">
                            <div class="mt-4 mx-4 rounded-4" style="width: 400px;height: 400px; background-image: url(img/MainRoom.jpg); background-size: 100%;"></div>
                            <div class="mt-4 d-flex justify-content-center" style="width: 480px;height: 400px;">
                                <div class="mt-2" style="width: 460px;height: 380px;">
                                    <!--Seleccionar una mesa-->
                                    <div class="form-group">
                                        <label for="salaMR" class="form-label mt-1">Selecciona una mesa:</label>
                                        <select class="form-select" id="salaMR" name="n_mesa">
                                          <option>1</option>
                                          <option>2</option>
                                          <option>3</option>
                                          <option>4</option>
                                          <option>5</option>
                                          <option>6</option>
                                          <option>7</option>
                                          <option>8</option>
                                          <option>9</option>
                                          <option>10</option>
                                          <option>11</option>
                                          <option>12</option>
                                          <option>13</option>
                                          <option>14</option>
                                        </select>
                                      </div>
                                      <!--Seleccionar el dia-->
                                      <div class="mt-2">
                                        <label class="form-label">Selecciona el día:</label>
                                        <input class="form-control form-check" value="2023-06-12"
                                        min="2023-06-12"type="date" id="diaCalendario" name="fecha_reserva" required>
                                      </div>

                                      <!--Seleccionar cuantas personas-->
                                      <div class="mt-2">
                                        <label class="form-label">Selecciona cuantas personas:</label>
                            
                                        <select class="form-select" type="number" id="personas" min="1" max="8" name="n_personas"required onclick="PrecioPersona()">
                                          <option>1</option>
                                          <option>2</option>
                                          <option>3</option>
                                          <option>4</option>
                                          <option>5</option>
                                          <option>6</option>
                                          <option>7</option>
                                          <option>8</option>
                                        </select>
                                    </div>
                                      <!--Total a pagar-->
                                      <div class="mt-2">
                                        <label class="form-label">Total a pagar:</label>
                                        <input class="form-control form-check bi bi-currency-dollar" type="number" id="total" name="total_pagar" readonly value="140" >
                                      </div>

                                      <!--Boton-->
                                      <div class="d-flex justify-content-center mt-4">
                                            <button class="btn btn-outline-dark" id="btnCalcular1" type="submit">Continuar</button>
                                        
                                      </div>
                                      
                                </div>

                            </div>
                        </div>
                        </form>
                    </div>
                     <!--Mapa Zona VIP-->
                    <div class="tab-pane fade" id="vip" role="tabpanel">
                        <form action="formulario_pago" method="post">
                            @csrf
                            <div class="d-flex flex-nowrap rounded-4" style="width: 950px;height: 450px;border: 1px solid rgb(44, 44, 44);box-shadow:  0em 1.5em 8em rgb(65, 65, 65);">
                                <div class="mt-4 mx-4 rounded-4" style="width: 400px;height: 400px; background-image: url(img/VIP.jpg); background-size: 100%;"></div>
                                <div class="mt-4 d-flex justify-content-center" style="width: 480px;height: 400px;">
                                    <div class="mt-2" style="width: 460px;height: 380px;">
                                        <!--Seleccionar una mesa-->
                                        <div class="form-group">
                                            <label for="salaMR" class="form-label mt-1">Selecciona una mesa:</label>
                                            <select class="form-select" id="salaMR" name="n_mesa">
                                            <option>15</option>
                                            <option>16</option>
                                            <option>17</option>
                                            <option>18</option>
                                            <option>19</option>
                                            <option>20</option>
                                            <option>21</option>
                                            <option>22</option>
                                            <option>23</option>
                                            <option>24</option>
                                            <option>25</option>
                                            <option>26</option>
                                            <option>27</option>
                                            <option>28</option>
                                            <option>29</option>
                                            </select>
                                        </div>
                                        <!--Seleccionar el dia-->
                                        <div class="mt-2">
                                            <label class="form-label">Selecciona el día:</label>
                                            <input class="form-control form-check" type="date" id="diaCalendario" name="fecha_reserva" required>
                                        </div>
                                        <!--Seleccionar cuantas personas-->
                                        <div class="mt-2">
                                            <label class="form-label">Selecciona cuantas personas:</label>
                                            <select class="form-select" type="number" id="prs" min="1" max="8" name="n_personas"required onclick="PrecioPersona()">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                                <option>6</option>
                                                <option>7</option>
                                                <option>8</option>
                                              </select>
                                        </div>
                                        <!--Total a pagar-->
                                        <div class="mt-2">
                                            <label class="form-label">Total a pagar:</label>
                                            <input class="form-control form-check bi bi-currency-dollar" type="number" id="tot" name="total_pagar" readonly value="160" >
                                        </div>
                                        <!--Boton-->
                                        <div class="d-flex justify-content-center mt-4">
                                            <button class="btn btn-outline-dark" id="btnCalcular1" type="submit">Continuar</button>
                                        
                                      </div>
                                        
                                    </div>

                                </div>
                            </div>
                        </form>

                    </div>
                      <!--Mapa Palcos Privados-->
                    <div class="tab-pane fade" id="palcos" role="tabpanel">
                        <form action="formulario_pago" method="post">
                            @csrf
                        <div class="d-flex flex-nowrap rounded-4" style="width: 950px;height: 450px;border: 1px solid rgb(44, 44, 44);box-shadow:  0em 1.5em 8em rgb(65, 65, 65);">
                            <div class="mt-4 mx-4 rounded-4" style="width: 400px;height: 390px; background-image: url(img/Palco.jpg); background-size: 100%;"></div>
                            <div class="mt-4 d-flex justify-content-center" style="width: 480px;height: 400px;">
                                <div class="mt-2" style="width: 460px;height: 380px;">
                                    <!--Seleccionar una mesa-->
                                    <div class="form-group">
                                        <label for="salaMR" class="form-label mt-1">Selecciona una mesa:</label>
                                        <select class="form-select" id="salaMR" name="n_mesa">
                                          <option>30</option>
                                          <option>31</option>
                                          <option>32</option>
                                          <option>33</option>
                                          <option>34</option>
                                          <option>35</option>
                                          <option>36</option>
                                          <option>37</option>
                                          <option>38</option>
                                          <option>39</option>
                                          <option>40</option>
                                          <option>41</option>
                                        </select>
                                      </div>
                                      <!--Seleccionar el dia-->
                                      <div class="mt-2">
                                        <label class="form-label">Selecciona el día:</label>
                                        <input class="form-control form-check" type="date" id="diaCalendario" name="fecha_reserva" required>
                                      </div>
                                      <!--Seleccionar cuantas personas-->
                                      <div class="mt-2">
                                        <label class="form-label">Selecciona cuantas personas:</label>
                                        <select class="form-select" type="number" id="prsPalco" min="1" max="8" name="n_personas"required onclick="PrecioPersona()">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>6</option>
                                            <option>7</option>
                                            <option>8</option>
                                          </select>
                                      </div>
                                      <!--Total a pagar-->
                                      <div class="mt-2">
                                        <label class="form-label">Total a pagar:</label>
                                        <input class="form-control form-check bi bi-currency-dollar" type="number" id="tot_palco" name="total_pagar" readonly value="190" >
                                      </div>
                                      <!--Boton-->
                                      <div class="d-flex justify-content-center mt-4">
                                        <button class="btn btn-outline-dark" id="btnCalcular1" type="submit">Continuar</button>
                                    
                                  </div>
                                      
                                </div>

                            </div>
                        </div>
                    </form>

                    </div>
                  </div>
                </div>
        </div>
    </section>
    <div class="lineaReservar"></div>
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