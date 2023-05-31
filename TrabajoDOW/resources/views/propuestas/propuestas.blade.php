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
<body style="background: linear-gradient(to bottom, #5b32b2bf 0%, #063974 100%);">
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
                  <li><a class="dropdown-item" href="https://usm.cl/">Pagina Oficial USM</a></li>
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
                <div class="card-header bg-warning">
                    ingrese su propuestas
                </div>
                <div class="card-body bg-white  ">
                    <form action="">
                       <div class="mb-2">
                        <label for="RutAlumno" class="form-label">Rut del Alumno</label>
                        <input type="text" id="RutAlumno" class="form-control" placeholder="XXXXXXXX-X">
                       </div>
                       <div class="mb-2">
                        <label for="NombrePropuesta" class="form-label">Nombre de la propuesta</label>
                        <input type="text" id="NombrePropuesta" class="form-control" placeholder="ProyectoGenerico123">
                       </div>
                       <div class="mb-2">
                        <label for="Descripción" class="form-label">Descripción:</label>
                        <hr>
                        <textarea id="Descripción" cols="77" rows="10" ></textarea>
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
                        <th class="text-center">Nombre del proyecto</th>
                        <th class="text-center">Descripción del proyecto</th>
                        <th class="text-center">Estado Proyecto</th>
                    </tr>
                </thead>
                    <tr>
                        <td class="text-center">1</td>
                        <td class="text-center">Proyecto Generico 1</td>
                        <td class="text-center">en este proyecto podemos apreciar una amplia variedad de blabalbalablabalbalbalablablabalbalabla</td>
                        <td class="text-center" >estados del proyecto actual</td>
                    </tr>
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
                      <img src="{{asset('images/propuesta.png')}}" class="d-block w-100">
                      <div class="carousel-caption d-none d-md-block">
                        <h5>Propuestas</h5>
                        <p style="color: red;" class="bg-warning">Una vez enviada la propuesta no se podrán hacer cambios de esta misma. Se espera una explicación breve del tema a tratar.</p>
                         <a href="ProyectoAlumnosNew.html"><button class="btn btn-warning">Ir a propuestas</button></a>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img src="{{asset('images/patio.jpg')}}" class="d-block w-100">
                      <div class="carousel-caption d-none d-md-block">
                        <h5>Inicio</h5>
                        <p>Te damos la bienvenida y te explicamos las zonas de la pagina.</p>
                         <a href="InicioPagina.html"><button class="btn btn-warning">Ir a Inicio</button></a>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img src="{{asset('images/patio2.jpg')}}" class="d-block w-100">
                      <div class="carousel-caption d-none d-md-block">
                        <h5>Zona Retroalimentación</h5>
                        <p>Aqui podras ver el comentario del profesor sobre el proyecto.</p>
                         <a href="retroalimentacion.html"><button class="btn btn-warning">Ir a Retroalimentación</button></a>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img src="{{asset('images/no.jpg')}}" class="d-block w-100">
                      <div class="carousel-caption d-none d-md-block">
                        <h5>Zona Profesores</h5>
                        <p>Unicamente pueden entrar profesores, lo sentimos.</p>
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
crossorigin="anonymous"></script>
</body>
</html>