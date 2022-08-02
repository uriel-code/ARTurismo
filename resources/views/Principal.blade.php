@extends('index')
@section('Content')

<div class="container">
      <br>
      <br>
      <h1 class="h1-hola">Hola</h1>
      <br>
      <br>
      <p class="pa-presentacion">Te presentamos una galeria de Monumentos de la zona de Zacualtipan de Angeles, Hgo, 
        donde podrás conocer acerca de los monumentos que se enuentran al su alredeor. 
      </p>
      <!-- carusel -->
      <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
              <img class="slider" src="{{url('/img/Cultura.png')}}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img class="slider" src="{{url('/img/historia.png')}}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img class="slider" src="{{url('/img/social.png')}}" class="d-block w-100" alt="...">
          </div>
        </div>
      </div>
      <br>

      <br>
      <br>
      <h1 class="h1-hola">Diferentes Ámbitos</h1>
      <br>
      <br>
      <p class="pa-presentacion">Estos son algunos de los aparatados que te pueden interesar.
      </p>

      <!-- Targetas -->
      <br>
      <div class="card-group">
          <div class="card">
            <img class="card-img-top" src="{{url('/img/turismo.png')}}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Turismo</h5>
              <p class="card-text">Los núcleos receptores de este turismo suelen ser las ciudades históricas o que tengan algún valor patrimonial. </p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
          <div class="card">
            <img class="card-img-top" src="{{url('/img/educacion.png')}}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Educación</h5>
              <p class="card-text">En el ámbito educativo la aplicación podrá permitir a que los alumnos puedan interactuar con el entorno de aprendizaje en el cual están presenciando.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
          <div class="card">
            <img class="card-img-top" src="{{url('/img/publico.png')}}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Servicios Públicos</h5>
              <p class="card-text">La naturaleza intuitiva de la Realidad Aumentada fortalece el servicio al cliente, dándole información relevante a través de aplicaciones para smartphones o manuales de usuario interactivos para resolver consultas de servicio, aliviando la carga de trabajo en la atención al cliente.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
        <br>
        <!-- Targetas Usuarios-->
        <div class="row">
          <div class="col-sm-6">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Monumentos</h5>
                <p class="card-text">Galaria de monumentos.</p>
                <a href="{{route('Monumentos')}}" class="btn btn-primary">Ir</a>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Nosotros</h5>
                <p class="card-text">Conoce más aserca de nosotros.</p>
                <a href="{{route('Nosotros')}}" class="btn btn-primary">Ir</a>
              </div>
            </div>
          </div>
      </div>
      <br>
     
</div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  @endsection('Content')

