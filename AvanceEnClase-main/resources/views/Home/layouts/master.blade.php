<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body style="background: linear-gradient(to bottom, #530674 0%, #bf4808 100%);">
  <div class="container-fluid vh-100">  
    <!-- perfil usuario -->
    <div class="card ms-3 me-3 mt-3">
        <div class="row">
            <!-- col-1 -->
            <div class="col-8">
                <img src="{{asset('images/usm.jpg')}}" height="100" width="140" class="justify-content-end" >
            </div>
            <!-- col 2 -->
            <div class="col-2 d-flex justify-content-center align-items-center">
                <img src="{{asset('images/image.png')}}" height="100" width="100">          
            </div>
            <div class="col-2">
                <p class="text-bg-danger rounded text-center">usuario: Alumno Generico</p>
                <p class="text-bg-danger rounded text-center ">Rut:XXXXXXXX-X</p>
                <p class="text-bg-danger rounded text-center">Hora Actual: 16:36 Pm</p>
           </div>
        </div>  
        <div class="col-1">
         <a href="loginAlumno.html"><button  class="btn-danger">Cerrar Sesion</button> </a>
        </div>
    </div>

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary ms-3 me-3">
        <div class="container-fluid">
          <a class="navbar-brand" href="https://usm.cl/">UTFSM</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link @if(Route::current()->getName()=='Home.index') active @endif" href="{{route('Home.index')}}" aria-current="page">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link @if(Route::current()->getName()=='propuestas.propuestas') active @endif" href="{{route('propuestas.propuestas')}}">Propuestas</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-bg-danger rounded" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Zona Profesores
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="TablaProfesor.html">Tabla de profesores</a></li>
                  <li><a class="dropdown-item nav-link @if(Route::current()->getName()=='jugadores.index') active @endif" href="{{route('estadopropuestas.estadopro')}}">Estado de propuestas</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="https://usm.cl/">Pagina Oficial Usm</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="retroalimentacion.html">Zona Retroalimentación</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
      <br>

      {{-- datos --}}
      @yield('contenido-principal')

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" 
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>

