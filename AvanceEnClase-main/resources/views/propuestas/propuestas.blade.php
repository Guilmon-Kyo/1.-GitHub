@extends('layouts.master')
@section('contenido-principal')

      <!--PROPUESTAS-->
      <div class="row">
        <div class="col-4">
            <div class="card">
                <div class="card-header bg-warning">
                    ingrese su propuestas
                </div>
                <div class="card-body bg-white  ">
                    <form method="POST" action="{{route('propuestas.store')}}">
                      @csrf
                       <div class="mb-2">
                        <label for="RutAlumno" class="form-label">Rut del Alumno</label>
                        <input type="text" id="RutAlumno" name="rutalumno" class="form-control" placeholder="XXXXXXXX-X">
                       </div>
                       <div class="mb-2">
                        <label for="NombrePropuesta" class="form-label">Nombre de la propuesta</label>
                        <input type="text" id="NombrePropuesta" name="nombrepropuesta" class="form-control" placeholder="ProyectoGenerico123">
                       </div>
                       <div class="mb-2">
                        <label for="Descripción" class="form-label">Descripción:</label>
                        <hr>
                        <textarea id="Descripción" cols="77" rows="10" ></textarea>
                       </div>
                       <div class="mb-2 btn-group d-flex justify-content-center">
                        <button type="submit" class="btn btn-success">Enviar</button>
                        <button type="reset" class="btn btn-danger">Eliminar</button>
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
                <tbody>
                  @foreach ($propuestas as $num=>$propuesta)
                    <tr>
                        <td class="text-center">{{$num+1}}</td>
                        <td class="text-center">{{$propuesta->nombre}}</td>
                        <td class="text-center">{{$propuesta->descripcion}}</td>
                        {{-- BOTONES PARA EDITAR: "PENDIENTE" --}}
                        <td class="text-center" >estados del proyecto actual</td>
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
                      <img src="{{asset('images/propuesta.png')}}" class="d-block w-100">
                      <div class="carousel-caption d-none d-md-block">
                        <h5>Propuestas</h5>
                        <p style="color: red;" class="bg-warning">Una vez enviada la propuesta no se podrán hacer cambios de esta misma. Se espera una explicación breve del tema a tratar.</p>
                         <a href="{{route('propuestas.propuestas')}}"><button class="btn btn-warning">Ir a propuestas</button></a>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img src="{{asset('images/patio.jpg')}}" class="d-block w-100">
                      <div class="carousel-caption d-none d-md-block">
                        <h5>Inicio</h5>
                        <p>Te damos la bienvenida y te explicamos las zonas de la pagina.</p>
                         <a href="{{route(Home.index)}}"><button class="btn btn-warning">Ir a Inicio</button></a>
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
@endsection