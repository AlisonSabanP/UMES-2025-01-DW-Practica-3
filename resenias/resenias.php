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
    <link rel="stylesheet" href="../styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>            
</head>

<body>
    <nav class="navbar navbar-expand-md fixed-top bg-dark" style="min-width: 530px;">
        <div class="container-fluid">
            <div class="container-fluid">
                <a class="navbar-brand fs-1" href="#">
                    <img src="../imagenes/logo.webp" width="80" height="70">
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
                        <a class="nav-link " aria-current="page" href="../index.php">Inicio</a>
                    </li>
                    <li class="nav-item dropdown m-2">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Menú
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="../menu/platos_fuertes.php">Platos fuertes</a></li>
                            <li><a class="dropdown-item" href="../menu/postres.php">Postres</a></li>
                        </ul>
                    </li>
                    <li class="nav-item m-2">
                        <a class="nav-link" href="../personal/personal.php">Personal</a>
                    </li>
                    <li class="nav-item dropdown m-2">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Recetas
                        </a>
                        <ul class="dropdown-menu ">
                            <li><a class="dropdown-item" href="../recetas/recetas-dulces.php">Recetas dulces</a></li>
                            <li><a class="dropdown-item" href="../recetas/recetas-saladas.php">Recetas saladas</a></li>
                        </ul>
                    </li>
                    <li class="nav-item m-2">
                        <a class="nav-link active" href="#">Reseñas</a>
                    </li>
                    <li class="nav-item m-2">
                        <a class="nav-link" href="../pag_reservaciones/reservaciones.php">Reservaciones</a>
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
                        <form action="../reservacion.php" method="POST">
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

    <h2 class="titulo">Reseñas</h2>
    <hr class="thick-hr my-1">

    <div class="container py-5">
        <div class="row">
            <div class="col-md-6">
                <div class="card bg-dark">
                    <div class="card-body">
                        <h3 class="card-title encabezados">Sofía Martínez</h3>
                        <p class="encabezados">⭐️⭐️⭐️⭐️⭐️</p>
                        <p class="card-text texto">"Mi experiencia en este restaurante de ramen fue simplemente increíble. Desde el momento en que entré, me sentí transportado a Japón. 
                            El ambiente es acogedor y relajado, con una decoración que combina lo moderno y lo tradicional. Pedí el ramen tonkotsu y quedé 
                            impresionado: el caldo era rico, cremoso y lleno de sabor, claramente hecho con mucho cuidado y tiempo. Los fideos tenían la textura perfecta, 
                            ni demasiado blandos ni demasiado duros. Los toppings, como el chashu (cerdo), el huevo marinado y las algas, estaban frescos y bien preparados.
                            El servicio fue impecable, muy atento y amable. Sin duda, volveré y lo recomendaré a todos los amantes del ramen."
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card bg-dark">
                    <div class="card-body">
                        <h3 class="card-title encabezados">Liam O'Connor</h3>
                        <p class="encabezados">⭐️⭐️⭐️⭐️⭐️</p>
                        <p class="card-text texto">"¡Qué descubrimiento tan maravilloso! Este restaurante de ramen se ha convertido en uno de mis favoritos. Pedí el ramen de miso 
                            y quedé encantada. El caldo era robusto y sabroso, con un equilibrio perfecto entre lo salado y lo umami. Los fideos eran caseros y tenían una 
                            textura ideal. Me encantó que los toppings fueran tan variados: desde el chashu tierno hasta el huevo marinado con una yema cremosa y deliciosa. 
                            Además, los gyozas que pedí de acompañamiento estaban crujientes por fuera y jugosos por dentro. El personal fue muy amable y el ambiente es 
                            perfecto para una comida tranquila. ¡Volveré pronto!"
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card bg-dark">
                    <div class="card-body">
                        <h3 class="card-title encabezados">Aarav Patel</h3>
                        <p class="encabezados">⭐️⭐️⭐️⭐️⭐️</p>
                        <p class="card-text texto">
                            "Este lugar es una joya escondida. El ramen shoyu que pedí estaba lleno de sabor, con un caldo claro pero profundamente sabroso.
                            Los fideos eran perfectos, y el chashu estaba tan tierno que se deshacía en la boca. El huevo marinado fue el toque final perfecto, 
                            con una yema cremosa que se integraba maravillosamente con el caldo. El servicio fue excelente, y el ambiente es ideal para disfrutar 
                            de una buena comida. Definitivamente recomiendo este lugar a cualquiera que busque una experiencia auténtica de ramen."
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card bg-dark">
                    <div class="card-body">
                        <h3 class="card-title encabezados">Amélie Dubois</h3>
                        <p class="encabezados">⭐️⭐️⭐️⭐️</p>
                        <p class="card-text texto">
                            "¡Una experiencia increíble! El ramen de miso que probé estaba lleno de umami, con un caldo rico y bien equilibrado. Los fideos tenían 
                            la textura perfecta, y los toppings, especialmente el chashu y el huevo marinado, estaban impecables. El ambiente del lugar es muy acogedor, y el 
                            personal es extremadamente amable y atento. Sin duda, este restaurante se ha ganado un lugar especial en mi corazón. ¡Volveré pronto!"
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card bg-dark">
                    <div class="card-body">
                        <h3 class="card-title encabezados">Mateo González</h3>
                        <p class="encabezados">⭐️⭐️⭐️</p>
                        <p class="card-text texto">
                            "La experiencia en este restaurante fue mixta. Por un lado, el ambiente es agradable y el servicio fue amable, pero el ramen no cumplió 
                            del todo mis expectativas. Pedí el ramen tonkotsu, y aunque el caldo tenía un buen sabor, estaba un poco demasiado salado para mi gusto. Los fideos 
                            estaban bien, pero los toppings fueron escasos: solo dos finas rebanadas de chashu y medio huevo marinado. Además, el precio me pareció un poco elevado
                            para lo que recibí. No fue una mala experiencia, pero creo que hay mejores opciones en la zona."
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card bg-dark">
                    <div class="card-body">
                        <h3 class="card-title encabezados">Yuki Tanaka</h3>
                        <p class="encabezados">⭐️⭐️</p>
                        <p class="card-text texto">
                            "Lamentablemente, mi experiencia no fue la mejor. Pedí el ramen picante y, aunque el nivel de picante estaba bien, el caldo parecía aguado 
                            y le faltaba profundidad de sabor. Los fideos estaban demasiado cocidos y blandos, lo que arruinó un poco la textura del plato. Además, el servicio fue
                            lento y tuve que esperar mucho tiempo para que me atendieran. No creo que vuelva, ya que hay otros lugares que ofrecen una experiencia mucho más satisfactoria."
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card bg-dark">
                    <div class="card-body">
                        <h3 class="card-title encabezados">Isabella Costa</h3>
                        <p class="encabezados">⭐️⭐️⭐️</p>
                        <p class="card-text texto">
                            "El restaurante tiene un ambiente agradable y el personal es amable, pero el ramen no me impresionó. Pedí el ramen de pollo y, aunque el caldo 
                            era ligero, le faltaba sabor. Los fideos parecían de paquete y no tenían la textura fresca que esperaba. Los toppings eran escasos y el chashu estaba un poco 
                            seco. No fue una mala experiencia, pero definitivamente no cumplió mis expectativas."
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card bg-dark">
                    <div class="card-body">
                        <h3 class="card-title encabezados">Mohammed Al-Fayed</h3>
                        <p class="encabezados">⭐️⭐️⭐️⭐️</p>
                        <p class="card-text texto">
                            "En general, tuve una buena experiencia en este restaurante. El ramen de miso que pedí estaba sabroso, con un caldo rico y bien condimentado. 
                            Los fideos tenían una textura agradable y los toppings eran frescos. Sin embargo, el servicio fue un poco lento, y el lugar estaba bastante lleno, lo que hizo
                            que la experiencia fuera un poco incómoda. A pesar de eso, disfruté mi comida y probablemente volvería en un momento menos concurrido."
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card bg-dark">
                    <div class="card-body">
                        <h3 class="card-title encabezados">Elena Ivanova</h3>
                        <p class="encabezados">⭐️⭐️⭐️⭐️</p>
                        <p class="card-text texto">
                            "El ramen que pedí estaba bien, pero no fue nada extraordinario. El caldo tenía un buen sabor, pero no era tan rico como otros que he probado. 
                            Los fideos estaban bien cocidos, pero los toppings fueron un poco escasos. El servicio fue amable y el ambiente es agradable, pero creo que el precio es un 
                            poco alto para lo que ofrecen. Es un buen lugar, pero no creo que sea el mejor de la ciudad."
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card bg-dark">
                    <div class="card-body">
                        <h3 class="card-title encabezados">Diego Rivera</h3>
                        <p class="encabezados">⭐️⭐️⭐️⭐️</p>
                        <p class="card-text texto">
                            "Este restaurante tiene mucho potencial. El ambiente es muy acogedor y el personal es amable. Pedí el ramen tonkotsu y, aunque el caldo era 
                            sabroso, sentí que le faltaba un poco de cuerpo. Los fideos estaban bien, pero los toppings fueron un poco escasos, especialmente el chashu. Sugeriría que 
                            añadan más variedad de toppings y que trabajen un poco más en la consistencia del caldo. A pesar de eso, fue una experiencia agradable y volvería para probar 
                            otros platos."
                        </p>
                    </div>
                </div>
            </div>
        </div>
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