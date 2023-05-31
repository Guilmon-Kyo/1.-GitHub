<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body style="background: linear-gradient(to bottom, #d66400bf 0%, #0cbb78 100%);">
    <div class="container-fluid vh-100 d-flex flex-column justify-content-center align-items-md-start">
      
        <div class="row">
            <div class="col-12 col-lg-12 offset-lg-2">
                <div class="row" style="height: 40rem;">
                    <!-- Titulo y logo -->
                    <div class="col-lg-5 bg-primary d-flex flex-column justify-content-center align-items-center text-center pt-3 rounded">
                        <div class="bg-white p-1 mb-4 rounded">
                            <img src="{{asset('images/usm.jpg')}}" style="width: 10rem;">
                        </div>
                        <h4 class="text-light">Bienvenido Profesor/Alumno</h4>  
                        <p></p>
                        <h6 class="text-light">Universidad Tecnica Federico Santa Maria</h6>
                    </div>
                    <!-- / fin titulo y logo -->
                    <!-- Formulario -->
                    <div class="col-lg-5 bg-success rounded">
                        <h4>Inicio de Sesión</h4>
                        <small>Ingrese sus datos</small>
                        <div class="card">
                            <div class="card-body">
                                <form action="">
                                    <div class="mb-4">
                                        <label for="username" class="form-label">Nombres de Alumno</label>
                                        <input type="text" id="username" class="form-control" placeholder="Pepito Alejandro">
                                    </div>
                                    <div class="mb-4">
                                        <label for="apellido" class="form-label">Apellidos de Alumno</label>
                                        <input type="text" id="apellido" class="form-control" placeholder="Alvarado Rodriguez">
                                    </div>
                                    <div class="mb-4">
                                        <label for="Correo" class="form-label">Correo Electronico</label>
                                        <input type="text" id="Correo" class="form-control" placeholder="CorreoGenerico@gmail.com">
                                    </div>
                                    <div class="mb-4">
                                        <label for="rut" class="form-label">Rut Alumno</label>
                                        <input type="text" id="rut" class="form-control" placeholder="XXXXXXXX-X">
                                        <small>Sin puntos y con guion</small>
                                    </div>
                                    <div class="mb-4">
                                        <label for="password" class="form-label">Contraseña</label>
                                        <input type="password" id="password" class="form-control">
                                    </div>
                                    <div class="mb-4 text-end">
                                        <a href="InicioPagina.html" class="btn btn-success">Iniciar Sesión</a>
                                        <a  href="loginProfesor.html" class="btn btn-danger">Cambiar a Profesor</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <img src="{{asset('images/shesh.jpg')}}" height="700" width="600">
                    </div>
                    <!-- /fin formulario -->
                </div>
            </div>
        </div>
    </div>
    
 
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>