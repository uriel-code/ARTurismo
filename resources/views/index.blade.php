<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link rel="stylesheet" href="{{asset('/css/Style.css') }}">

    <!-- Stilos de Bosstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- Stilos de JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

    <title>Turismo Aumentado</title>
    
</head>

<body class="body">
    <img class="presentacion" src="{{url('/img/presentacion.png')}}" alt="">
    <!-- Navar Crear -->
    <nav class="navbar  navbar-expand-lg bg-light sticky-top" style="background-color: # A9A9A9;">
      <div class="container-fluid">
            <a class="navbar-brand" href="{{route('Principal')}}">Inicio</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('Nosotros')}}">Nosotros</a>
                  </li>
                  <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="{{route('Monumentos')}}">Monumentos</a>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('Contactos')}}">Contactos</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav><br><br>
        <div class="container">
      </div>
    </nav>
  @yield('Content')
      <!-- Footer -->
      <footer class="text-center text-white" style="background-color: #caced1;">
        <!-- Grid container -->
        <div class="container p-4">
          <!-- Section: Images -->
          <section class="">
            <div class="row">
              <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
                <div
                  class="bg-image hover-overlay ripple shadow-1-strong rounded"
                  data-ripple-color="light"
                >
                  <img
                    src="https://mdbcdn.b-cdn.net/img/new/fluid/city/113.webp"
                    class="w-100"
                  />
                  <a href="#!">
                    <div
                      class="mask"
                      style="background-color: rgba(251, 251, 251, 0.2);"
                    ></div>
                  </a>
                </div>
              </div>
              <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
                <div
                  class="bg-image hover-overlay ripple shadow-1-strong rounded"
                  data-ripple-color="light"
                >
                  <img
                    src="https://mdbcdn.b-cdn.net/img/new/fluid/city/111.webp"
                    class="w-100"
                  />
                  <a href="#!">
                    <div
                      class="mask"
                      style="background-color: rgba(251, 251, 251, 0.2);"
                    ></div>
                  </a>
                </div>
              </div>
              <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
                <div
                  class="bg-image hover-overlay ripple shadow-1-strong rounded"
                  data-ripple-color="light"
                >
                  <img
                    src="https://mdbcdn.b-cdn.net/img/new/fluid/city/112.webp"
                    class="w-100"
                  />
                  <a href="#!">
                    <div
                      class="mask"
                      style="background-color: rgba(251, 251, 251, 0.2);"
                    ></div>
                  </a>
                </div>
              </div>
              <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
                <div
                  class="bg-image hover-overlay ripple shadow-1-strong rounded"
                  data-ripple-color="light"
                >
                  <img
                    src="https://mdbcdn.b-cdn.net/img/new/fluid/city/114.webp"
                    class="w-100"
                  />
                  <a href="#!">
                    <div
                      class="mask"
                      style="background-color: rgba(251, 251, 251, 0.2);"
                    ></div>
                  </a>
                </div>
              </div>
              <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
                <div
                  class="bg-image hover-overlay ripple shadow-1-strong rounded"
                  data-ripple-color="light"
                >
                  <img
                    src="https://mdbcdn.b-cdn.net/img/new/fluid/city/115.webp"
                    class="w-100"
                  />
                  <a href="#!">
                    <div
                      class="mask"
                      style="background-color: rgba(251, 251, 251, 0.2);"
                    ></div>
                  </a>
                </div>
              </div>
              <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
                <div
                  class="bg-image hover-overlay ripple shadow-1-strong rounded"
                  data-ripple-color="light"
                >
                  <img
                    src="https://mdbcdn.b-cdn.net/img/new/fluid/city/116.webp"
                    class="w-100"
                  />
                  <a href="#!">
                    <div
                      class="mask"
                      style="background-color: rgba(251, 251, 251, 0.2);"
                    ></div>
                  </a>
                </div>
              </div>
            </div>
          </section>
          <!-- Section: Images -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="color: black" style="background-color: rgba(0, 0, 0, 0.2);">
          © 2020 Copyright:
          <a class="text" style="color: black" href="">AR Turismo.com</a>
        </div>
        <!-- Copyright -->
      </footer>
      <!-- Footer -->
</body>
</html>
