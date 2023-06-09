@extends('layouts.master')
@section('contenido-principal')

      <!--PROPUESTAS-->
      <div class="row">
        <div class="col-4">
            <div class="card">
                <div class="card-header bg-warning">
                    ingrese datos del profesor
                </div>
                <div class="card-body bg-white  ">
                    <form action="">
                       <div class="mb-2">
                        <label for="RutProfesor" class="form-label">Rut del profesor</label>
                        <input type="text" id="RutProfesor" class="form-control" placeholder="XXXXXXXX-X">
                       </div>
                       <div class="mb-2">
                        <label for="AsignaturaProfesor" class="form-label">Asignatura del profesor</label>
                        <input type="text" id="AsignaturaProfesor" class="form-control" placeholder="Matematica/Lenguaje/etc">
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
                        <th class="text-center">Nombre del profesor</th>
                        <th class="text-center">Asignatura</th>
                        <th class="text-center">Acciones</th>
                    </tr>
                </thead>
                    <tr>
                        <td class="text-center">{{$num+1}}</td>
                        <td class="text-center">{{$tablaprofesor->nombre}}</td>
                        <td class="text-center">{{$tablaprofesor->ramo}}</td>
                        {{-- BOTONES PARA EDITAR: "PENDIENTE" --}}
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
                      <img src="imagenes/revision.png" class="d-block w-100">
                      <div class="carousel-caption d-none d-md-block">
                        <h5>Estado Propuestas</h5>
                        <p style="color: red;" class="bg-warning">Puede revisar la propuesta del alumno,aceptandola,denegandola y dejando una Retroalimentación.</p>
                         <a href="estadoprouestas.html"><button class="btn btn-warning">Ir a Estado propuestas</button></a>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img src="imagenes/usmprofes.jpg" class="d-block w-100">
                      <div class="carousel-caption d-none d-md-block">
                        <h5>Tabla profesores</h5>
                        <p>En esta zona pueden agregar datos de profesores nuevos.</p>
                         <a href="TablaProfesor.html"><button class="btn btn-warning">Ir tabla profesores</button></a>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img src="imagenes/patio2.jpg" class="d-block w-100">
                      <div class="carousel-caption d-none d-md-block">
                        <h5>Zona Retroalimentación</h5>
                        <p>Aqui podras ver el comentario del profesor sobre el proyecto.</p>
                         <a href="retroalimentacion.html"></a><button class="btn btn-warning">Ir a Retroalimentación</button>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img src="imagenes/usmcentral.jpeg" class="d-block w-100">
                      <div class="carousel-caption d-none d-md-block">
                        <h5>Pagina Oficial USM</h5>
                        <p>Para tener mas datos si se quiere unir a nosotros.</p>
                         <a href="https://usm.cl/"><button class="btn btn-warning">Ir a Pagina oficial</button></a>
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