<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The RAMen House</title>
    <meta name="description" content="Página Oficial del Restaurante The RAMen House">
    <meta name="keywords" content="Restaurante, Comida, Platillos">
    <meta name="author" content="Alison Saban">
    <meta property="og:title" content="The RAMen House">
    <meta property="og:description" content="Página Oficial del Restaurante The RAMen House">
    <meta property="og:image" content="imagen.jpg">
    <meta property="og:url" content="https://www.theramenhouse.com">
    <link rel="icon" href="imagenes/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>   

</head>
<body>
    <nav class="navbar navbar-expand-md fixed-top bg-dark">
        <div class="container-fluid">
            <div class="container-fluid">
                <a class="navbar-brand fs-1" href="#">
                    <img src="imagenes/logo.webp" width="80" height="70">
                    The RAMen House 
                </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target= "#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
                        </svg>
                    </button>
            </div>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item m-1">
                        <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#modalreservacion">
                            Solicitar cotización
                        </button>
                    </li>
                    <li class="nav-item m-2">
                        <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                    </li>
                    <li class="nav-item dropdown m-2">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Menú
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="menu/platos_fuertes.php">Platos fuertes</a></li>
                            <li><a class="dropdown-item" href="menu/postres.php">Postres</a></li>
                        </ul>
                    </li>
                    <li class="nav-item m-2">
                        <a class="nav-link" href="personal/personal.php">Personal</a>
                    </li>
                    <li class="nav-item dropdown m-2">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Recetas
                        </a>
                        <ul class="dropdown-menu ">
                            <li><a class="dropdown-item" href="recetas/recetas-dulces.php">Recetas dulces</a></li>
                            <li><a class="dropdown-item" href="recetas/recetas-saladas.php">Recetas saladas</a></li>
                        </ul>
                    </li>
                    <li class="nav-item m-2">
                        <a class="nav-link" href="resenias/resenias.php">Reseñas</a>
                    </li>
                    <li class="nav-item m-2">
                        <a class="nav-link" href="pag_reservaciones/reservaciones.php">Reservaciones</a>
                    </li>
                </ul>   
            </div>
        </div>
    </nav>

    <div id="content">
        <div class="modal fade" id="modalreservacion" tabindex="-1" aria-labelledby="modalreservacionLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="modalreservacionLabel">Nueva Reservación</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="reservacion.php" method="POST">
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre completo:</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese su nombre" required>
                            </div>
                            <div class="mb-3">
                                <label for="telefono" class="form-label">Teléfono:</label>
                                <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Ingrese su teléfono" required>
                            </div>
                            <div class="mb-3">
                                <label for="fecha" class="form-label">Fecha de reserva:</label>
                                <input type="date" class="form-control" id="fecha" name="fecha" placeholder="Ingrese la fecha de reserva" required>
                            </div>
                            <div class="mb-3">
                                <label for="hora" class="form-label">Hora de reserva:</label>
                                <input type="time" class="form-control" id="hora" name="hora" placeholder="Ingrese la hora de reserva" required>
                            </div>
                            <div class="mb-3">
                                <label for="descripcion" class="form-label">Descripción de la reserva:</label>
                                <textarea rows="10" class="form-control" id="descripcion" name="descripcion" placeholder="Ingrese una descripción de lo que necesita..." ></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Realizar Reservación</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid" style="margin-top: 100px !important;">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="card bg-dark">
                    <div class="card-body">
                        <h5 class="card-title">Misión</h5>
                        <p class="card-text">                        
                            <i>En The RAMen House</i>, nos dedicamos a ofrecer una experiencia culinaria auténtica y 
                            memorable, fusionando los sabores tradicionales del ramen japonés con ingredientes 
                            frescos y de alta calidad. Nuestro objetivo es brindar a cada cliente un momento de 
                            satisfacción y calidez, respaldado por un servicio excepcional y un ambiente acogedor 
                            que refleje la esencia de la cultura japonesa.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="card bg-dark">
                    <div class="card-body">
                        <h5 class="card-title">Visión</h5>
                        <p class="card-text">
                            En the RAMEN HOUSE Aspiramos a ser reconocidos como el referente de ramen en nuestra comunidad, País y todo el mundo ,
                            destacándonos por nuestra pasión por la autenticidad, la innovación y la calidad.
                            Buscamos expandir nuestra presencia, llevando el sabor único de The RAMen House a
                            más personas, mientras mantenemos nuestro compromiso con la excelencia y la
                            satisfacción de nuestros clientes.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="imagenes" >
        <div class="area-a"><img src="imagenes/imagen_restaurante_1.jpg" alt="Interior del restaurante The RAMen House"></div>
        <div class="area-b"><img src="imagenes/imagen_restaurante_4.jpg" alt="Plato de ramen servido en The RAMen House"></div>
        <div class="area-c"><img src="imagenes/imagen_restaurante_3.jpg" alt="Chef preparando ramen en The RAMen House"></div>
        <div class="area-d"><img src="imagenes/imagen_restaurante_2.jpg" alt="Clientes disfrutando de su comida en The RAMen House"></div>
    </div>

    <footer class="footer mt-auto py-3 bg-dark">
        <div class="container">
            <span class="text-body">
                &copy; 2023 The RAMen House. Todos los derechos reservados.
            </span>
        </div>
    </footer>
</body>
</html>