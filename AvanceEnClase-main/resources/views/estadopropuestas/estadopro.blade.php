@extends('layouts.master')
@section('contenido-principal')

<div class="container-fluid vh-100">  
    <!-- perfil usuario -->
    <div class="card ms-3 me-3 mt-3">
        <div class="row">
            <!-- col-1 -->
            <div class="col-8">
                <img src="imagenes/usm.jpg" height="100" width="140" class="justify-content-end" >
            </div>
            <!-- col 2 -->
            <div class="col-2 d-flex justify-content-center align-items-center">
                <img src="imagenes/image.png" height="100" width="100">          
            </div>
            <div class="col-2">
                <p class="text-bg-danger rounded text-center">usuario: Profesor Generico</p>
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
                <a class="nav-link active" aria-current="page" href="InicioPagina.html">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="ProyectoAlumnosNew.html">Propuestas</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-bg-danger rounded" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Zona Profesores
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="TablaProfesor.html">Tabla de profesores</a></li>
                  <li><a class="dropdown-item" href="estadoprouestas.html">Estado de propuestas</a></li>
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
      <!--PROPUESTAS-->
      <div class="row">
        <div class="col-4">
            <div class="card">
                <div class="card-header bg-warning text-center">Estado de propuestas!</div>
                <div class="card-body bg-white  ">
                    <form method="POST" action="{{route('estadopropuestas.estadopro')}}">
                       @csrf
                        <div class="mb-2">
                        <label for="RutProfesor" class="form-label">Rut del profesor</label>
                        <input type="text" id="RutProfesor" class="form-control" placeholder="XXXXXXXX-X">
                       </div>
                       <div class="mb-5">
                        <label for="AsignaturaProfesor" class="form-label">Asignatura del profesor</label>
                        <input type="text" id="AsignaturaProfesor" class="form-control" placeholder="Matematica/Lenguaje/etc">
                       </div>
                       <div class="form-group">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="Aprobado">
                            <label for="aprobado" class="form-check-label">Proyecto Aprobado</label>
                            <br>
                            <input type="checkbox" class="form-check-input" id="Desaprobado">
                            <label for="Desaprobado" class="form-check-label">Proyecto Desaprobado</label>
                            <br>
                            <input type="checkbox" class="form-check-input" id="Por Hablar">
                            <label for="Por Hablar" class="form-check-label">Proyecto Conversable</label>
                        </div>
                    </div>
                       <div class="mb-2">
                        <label for="Descripción" class="d-flex justify-content-center form-label">Retroalimentación de proyecto:</label>
                        <hr>
                        <textarea id="Descripción" class="ms-3" cols="70" rows="10" ></textarea>
                       </div>
                       <div class="mb-2 btn-group d-flex justify-content-center">
                        <button class="btn btn-success">Enviar</button>
                        <button class="btn btn-danger">Eliminar</button>
                       </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-4">
            <table class="table table-bordered border-danger table-hover table-striped-columns bg-white">
                <thead class="table-dark">
                    <tr>
                        <th class="text-center">#</th>
                        <th class="text-center">Nombre de propuesta</th>
                        <th class="text-center">Alumnos</th>                        
                        <th class="text-center">Descripcion</th>
                        <th class="text-center">Estado</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($estadopropuestas as $num=>$estadopro)
                    <tr>
                        <td class="text-center">{{$num+1}}</td>
                        <td class="text-center">{{$estadopropuesta->nombrepropuesta}}</td>
                        <td class="text-center">{{$estadopropuesta->nombrealumno}}</td>
                        <td class="text-center">{{$estadopropuesta->descripcion}}</td>
                        <td class="text-center">{{$estadopropuesta->estadofinal}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-4">
            <div class="card-body">
                <div id="Carousel1" class="carousel slide">
                  <div class="carousel-indicators">
                    <button type="button" data-bs-target="#Carousel1" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#Carousel1" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#Carousel1" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#Carousel1" data-bs-slide-to="3" aria-label="Slide 4"></button>
                  </div>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="imagenes/revision.png" class="d-block w-100">
                      <div class="carousel-caption d-none d-md-block">
                        <h5>Estado Propuestas</h5>
                        <p style="color: red;" class="bg-warning rounded">Puede revisar la propuesta del alumno,aceptandola,denegandola y dejando una Retroalimentación.</p>
                       <a href="{{route('estadopropuestas.estadopro')}}"><button class="btn btn-warning">Ir a Estado propuestas</button></a>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img src="imagenes/usmprofes.jpg" class="d-block w-100">
                      <div class="carousel-caption d-none d-md-block">
                        <h5 class="text-warning">Tabla de profesores</h5>
                        <p class="text-bg-dark rounded">En esta zona pueden agregar datos de profesores nuevos.</p>
                         <a href="TablaProfesor.html"><button class="btn btn-dark">Ir tabla profesores</button></a>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img src="imagenes/patio2.jpg" class="d-block w-100">
                      <div class="carousel-caption d-none d-md-block">
                        <h5>Zona Retroalimentación</h5>
                        <p class="text-bg-warning rounded">Aqui podras ver el comentario del profesor sobre el proyecto.</p>
                         <a href="retroalimentacion.html"><button class="btn btn-warning">Ir a Retroalimentación</button></a>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img src="imagenes/usmcentral.jpeg" class="d-block w-100">
                      <div class="carousel-caption d-none d-md-block">
                        <h5>Pagina Oficial USM</h5>
                        <p class="text-bg-primary rounded">Para tener mas datos si se quiere unir a nosotros.</p>
                        <a href="https://usm.cl/"><button class="btn btn-primary">Ir a Pagina oficial</button></a>
                      </div>
                    </div>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#Carousel1" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#Carousel1" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

@endsection
