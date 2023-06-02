@extends('layouts.master')
@section('contenido-principal')

      <!--Descripción-->
    <div class="mt-5">
      <div class="row">
        <div class="col-4">
          <div class="card">
            <div class="card-header bg-warning text-center">
              Bienvenido usuario!
            </div>
            <div class="card-body bg-primary">
              <form action="">
                <div class="mb-2">
                  <label for="Descripción" class="d-flex justify-content-center form-label">Inicio de pagina:</label>
                  <hr>
                  <p class="text-center">En esta sección puedes encontrar un resumen completo de cada area que tiene ambientada esta pagina para que le puedas dar un mejor uso a esta misma.
                    En la zona de inicio tienes una amplia variedad de subpaginas en nuestra web gracias a nuestra navbar con la cual podras desplazarte si gustas a la pagina ofical de la universidad Federico Santa Maria.
                  </p>
                </div>
              </form>
            </div>
          </div>
        </div>

        <div class="col-4">
          <div class="card">
            <div class="card-header bg-warning text-center">
              Bienvenido usuario!
            </div>
            <div class="card-body bg-primary">
              <form action="">
                <div class="mb-2">
                  <label for="Descripción" class="d-flex justify-content-center form-label">Propuestas de proyecto:</label>
                  <hr>
                  <p class="text-center">En esta sección los alumnos pueden ingresar sus propuestas de proyectos dando una breve Descripción de estos mismos la cual quedara archivada, posteriormente se vera el resultado de su propuesta luego de que el profesor la revise.</p>
                </div>
              </form>
            </div>
          </div>
        </div>

        <div class="col-4">
          <div class="card">
            <div class="card-header bg-warning text-center">
              Bienvenido usuario!
            </div>
            <div class="card-body bg-primary">
              <form action="">
                <div class="mb-2">
                  <label for="Descripción" class="d-flex justify-content-center form-label">Zona de profesores:</label>
                  <hr>
                  <p class="text-center">En esta sección los profesores pueden ver las propuestas que han sido enviadas para su revisión en la cual el docente dará su aprobación o rechazo dejando un mensaje de retroalimentación.</p>
                </div>
              </form>
            </div>
          </div>
        </div>
      
        <div class="col-4 mt-4 mb-4">
          <div class="card">
            <div class="card-header bg-warning text-center">
              Bienvenido usuario!
            </div>
            <div class="card-body bg-primary">
              <form action="">
                <div class="mb-2">
                  <label for="Descripción" class="d-flex justify-content-center form-label">Zona de profesores(Tabla Profesores):</label>
                  <hr>
                  <p class="text-center">En esta sección los nuevos profesores o antiguos podrán ingresar sus datos o editarlos para que puedan entrar en el sistema y se unan al equipo de docentes de la universidad .</p>
                </div>
              </form>
            </div>
          </div>
        </div>

        <div class="col-4 mt-4 mb-4">
          <div class="card">
            <div class="card-header bg-warning text-center">
              Bienvenido usuario!
            </div>
            <div class="card-body bg-primary">
              <form action="">
                <div class="mb-2">
                  <label for="Descripción" class="d-flex justify-content-center form-label">Zona de retroalimentación:</label>
                  <hr>
                  <p class="text-center">En esta sección se verán los mensajes que los profesores envíen al alumno sobre su propuesta de proyecto en los que saldrá el Rut del alumno – nombre propuesta – mensaje</p>
                </div>
              </form>
            </div>
          </div>
        </div>

        <div class="col-4 mt-4 mb-4">
          <div class="card">
            <div class="card-header bg-warning text-center">
              Bienvenido usuario!
            </div>
            <div class="card-body bg-primary">
              <form action="">
                <div class="mb-2">
                  <label for="Descripción" class="d-flex justify-content-center form-label">Cerrar sesión:</label>
                  <hr>
                  <p class="text-center">En esta sección puede cerrar la sesión que este utilizando para poder cambiar de usuario entre alumno y profesor.</p>
                </div>
              </form>
            </div>
          </div>
        </div>

      </div>
    </div>

@endsection
