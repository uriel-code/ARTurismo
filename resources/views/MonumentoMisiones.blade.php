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

    <!--<style>body{background-color: rgb(83, 82, 81);}</style>-->

    <!-- JavaScript Bundle with Popper -->
    
    <title>Monumentos</title>
</head>
<body>
    <div class=¨container¨>
        
            <!-- Espacio Vista -->
            <div class="jumbotron jumbotron-fluid">
                    <div class="container">
                        <input class="btn-regresar" type = "button" value = "Regresar" onclick = "history.back ()">
                    </div><br>
                <div class="container">
                    <h1 class="display-4">Monumento de las Misiones Culturales</h1>
                    <p class="lead">La gran historia que hay tras de él y su importancia que representa.</p>
                    <br>
                    <!-- Monumentos -->
                    <div class="card mb-3" style="max-width: 2050px;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                            <img src="{{url('/img/monumentomi.jpg')}}" class="card-img" alt="...">
                              <div>
                                <img src="{{url('/img/fondocard.png')}}" alt="">
                              </div>
                            </div>
                            <div class="col-md-8">
                            <div class="card-body">
                                <h3 class="card-title">Reseña</h3>
                                <p class="card-text">Durante la larga administración de Porfirio Díaz, existió la secretaria de Instrucion Publica que
                                    ocupabase unicamente de la cultura superior; para las clases sociales más elevadas que dectetaban la riqueza y el
                                    poder politico. La educación rural en el resto del país, en los tiempos anteriores a la revolución estaba confiada a laiglesia
                                    catolica.</br></br>
                                    Fue durante el gobierno de Alvaro Obregon, que por decreto publico el 3 de octubre de 1921, se crea la Secretaria
                                    de Educación Publica, y como titular de esta el Lic. José Vasconsuelos.</br></br>
                                    Es conveniente señalar que el proposito original de las primeras misiones culturales fue el de preparar, adecuada y 
                                    eficazmente, a los profesores de enseñanza rural.</br></br>
                                    El primer cuerpo de coligiado de maestros con la denominación oficial de mision cultural federal se creo el 20 de octubre
                                    1923, en la ciudad de Zcualtupan Hidalgo. Esta primera mision cultural estubo integrada con las siguientes personas:</br></br>

                                    Jefe, Ing. Roberto Medellin.</br>
                                    Profesores de Educación rural: Rafael Ramirez Castañeda.</br>
                                    De jaboneria y perfumeria: Isaias Barcenas.</br>
                                    De curtiduria: Rafael Rangel.</br>
                                    De agricultura: Alfredo Tomayo.</br>
                                    De educación física y  encargado de las practicas vacuna: Dr. Ranulfo Bravo.</br></br>

                                    Fuente: Agusto Santiago Sierra. Las Misiones Culturales. SEP.</br>
                                            Educación Hidalguense, Una historia en Imágenes, SEPH.
                                </p>
                                <p class="card-text"><small class="text-muted">Ultima actualización 29 Julio 22</small></p>
                            </div>
                            </div>
                        </div>
                    </div><br>
                    <!--Seccion para mostrar comentarios -->
                    <h1 class="comentario">Comentarios</h1><br>
                      @foreach ($comentM as $lista_comentarios)
                        <div class="media">
                          <img src="{{url('/img/user.jpg')}}" width="64" heigth="64" alt="">
                            <div class="media-body">
                                <h4 class="nombre">{{$lista_comentarios->nombreUsario}}</h4>
                                  <p class="comentario">{{$lista_comentarios->descComentario}}</p>
                                    <h6 class="fecha">Ultima actualización: {{$lista_comentarios->created_at}}</h6>
                                    </div>
                        </div>
                                @endforeach
                        
                    <!--Seccion de Ingresar comentrios -->
                    <div class="container w-100 border p-4 mt-4">
                        <!--<h1>Agregar un comentario</h1>-->
                        <form action="{{route('addComentario')}}" method="POST">

                            @csrf

                            @if(session('success'))
                                <h6 class='alert alert-success'>{{session('success')}}</h6>
                            @endif

                            @error('Nombre')
                                <h6 class="alert alert-danger">{{$message}}</h6>
                            @enderror

                            @error('Comentario')
                                <h6 class="alert alert-danger">{{$message}}</h6>
                            @enderror

                                <div class="mb-3">
                                    <form action="" class="form-comentarios" d-flex justify-content-end flex-wrap>
                                        <input type="text" class="form-control" placeholder="Nombre" name="Nombre">
                                        <br>
                                        <textarea type="text" class="form-control" name="Comentario" placeholder="Comentario" id="" cols="100" rows="5"></textarea>
                                        <br>
                                        <button type="submit" class="btn btn-primary">Enviar Comentario</button>
                                    </form>
                                    
                                </div>
                        </form>
                    </div>
                </div>
            </div>
    </div>
    <br>
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
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</html>