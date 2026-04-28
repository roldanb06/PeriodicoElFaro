<!DOCTYPE html>
<html lang="es">
<head>
    <!--Configuración del index-->
    <meta charset="UTF-8">
    <title>El Faro - Inicio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--Framework Bootstrap para los estilos de la página-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /*Barra de aviso superior*/
        .aviso {
            background-color: #ffc107;
            text-align: center;
            padding: 5px;
            font-weight: bold;
        }

        /*Imagen de noticia principal*/
        .main-news img {
            width: 100%;
            height: 400px;
            object-fit: cover;
        }
        
        /*Imagenes de noticias secundarias*/
        .secondary-news img {
            width: 100%;
            height: 150px;
            object-fit: cover;
        }

        /*Estilo del footer*/
        footer {
            background-color: #222;
            color: white;
            padding: 40px 0;
            margin-top: 40px;
        }

        /*Sección formulario contacto*/
        .contacto-section {
            background-color: #f8f9fa;
            padding: 50px 0;
            margin-top: 50px;
        }
    </style>
</head>

<body>

<!--Aviso destacado-->
<div class="aviso">
    Última hora: Nueva alza de bencina durante la semana
</div>

<!--Barra de navegación principal-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">El Faro</a>

        <!--Botón responsive-->
        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!--Menú de navegación-->
        <div id="menu" class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link active" href="index.php">Inicio</a></li>
                <li class="nav-item"><a class="nav-link" href="webs/nacional.html">Nacional</a></li>
                <li class="nav-item"><a class="nav-link" href="webs/deportes.html">Deportes</a></li>
                <li class="nav-item"><a class="nav-link" href="webs/internacional.html">Internacional</a></li>
                <li class="nav-item"><a class="nav-link" href="webs/economia.html">Economía</a></li>
                <li class="nav-item ms-3">
                    <button class="btn btn-warning"
                            data-bs-toggle="modal"
                            data-bs-target="#registroModal">
                        Registrarse
                    </button>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!--Contenido principal de la página-->
<div class="container mt-4">

    <!--Noticia principal-->
    <div class="card mb-4 shadow">
        <div class="card-body">
            <h2 class="card-title">Fiscal nacional Ángel Valencia reconoce deuda universitaria: la pagó tras consultas de la prensa</h2>
            <p class="card-text">El fiscal nacional, Ángel Valencia, confirmó su millonaria deuda universitaria del 2004, la cual regularizó tras ser contactado por la prensa. Una investigación reveló que él y más de 30 altos funcionarios del Congreso y Contraloría son deudores del Fondo Solidario. Tras el anuncio de cobro a deudores del CAE, se descubrió que 17 mil de 342 mil son empleados públicos. Valencia debía 218 UTM ($15.220.000), pero demostró que es de 75,51 UTM ($5.277.318), pagado antes del reportaje.</p>
        </div>
        <img src="imagenes/noticiaNacional1.webp" class="card-img-bottom">
    </div>

    <!--Noticias secundarias-->
    <div class="row">

        <div class="col-md-4">
            <div class="card shadow-sm h-100">
                <img src="imagenes/noticiaInternacional1.webp" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Petro arriba a cumbre en España y critica a la extrema derecha: "Hitler está otra vez vivo en Europa"</h5>
                    <p class="card-text">El presidente colombiano, Gustavo Petro, arremetió contra el secretario de Estado, Marco Rubio, acusándolo de impulsar a Trump hacia la destrucción mundial por su "fundamentalismo sionista". En Barcelona, elogió la postura de España sobre Irán y alertó sobre la resurgencia de Hitler en Europa a través de la extrema derecha. Criticó la injerencia en Venezuela y Cuba, llamando al diálogo y abogando por un gobierno de "cogobernanza" en Venezuela para generar confianza entre las partes.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm h-100">
                <img src="imagenes/noticiaEconomia1.webp" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Informe preliminar de la CNE: alzas en cuentas de la luz sería de 2,4% promedio en el segundo semestre</h5>
                    <p class="card-text">El alza de los combustibles está impactando en diversos aspectos del costo de vida. La Comisión Nacional de Energía proyecta un aumento del 2,4% en las tarifas eléctricas para el segundo semestre de 2026, debido al tipo de cambio al dólar, IPC de EE. UU. y precio del petróleo. La eliminación de descuentos y rebajas previas también influyen.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm h-100">
                <img src="imagenes/noticiaDeportes1.jpg" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Mundial 2026: elevan en un 1000% valor del pasaje para llegar a estadio mundialista de New York</h5>
                    <p class="card-text">El MetLife Stadium en New York verá un aumento de más de un 1000% en los pasajes de tren durante el Mundial 2026, subiendo de 13 a 150 dólares. Los boletos, personales y no reembolsables, solo estarán disponibles para titulares de entradas de partido a través de la app de NJ Transit, con 40.000 boletos diarios de ida y vuelta. Se ofrecerá también un servicio de autobuses por 80 dólares.</p>
                </div>
            </div>
        </div>

    </div>

</div>

<!--Formulario de contacto-->
<section class="contacto-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="card shadow">
                    <div class="card-body p-4">

                        <h2 class="text-center mb-4">Formulario de Contacto</h2>

                        <form action="controllers/contactoController.php" method="POST">

                            <div class="mb-3">
                                <label class="form-label">Nombre</label>
                                <input type="text"
                                       class="form-control"
                                       name="nombre"
                                       required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Correo</label>
                                <input type="email"
                                       class="form-control"
                                       name="correo"
                                       required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Mensaje</label>
                                <textarea class="form-control"
                                          rows="5"
                                          name="mensaje"
                                          required></textarea>
                            </div>

                            <div class="text-center">
                                <button type="submit"
                                        name="enviarContacto"
                                        class="btn btn-dark">
                                    Enviar
                                </button>
                            </div>

                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!--Pié de página-->
<footer>
    <div class="container text-center">
        <h4>El Faro</h4>
        <p>Tu diario digital de confianza</p>
        <p>Contacto: contacto@elfaro.cl</p>
        <p>© 2026 Todos los derechos reservados</p>
    </div>
</footer>

<!--Modal Registro-->
<div class="modal fade" id="registroModal" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-header bg-dark text-white">
                <h5 class="modal-title">Registro de Usuario</h5>

                <button type="button"
                        class="btn-close btn-close-white"
                        data-bs-dismiss="modal">
                </button>
            </div>

            <div class="modal-body">

                <form action="controllers/usuarioController.php" method="POST">

                    <div class="row">

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Nombre</label>
                            <input type="text"
                                   class="form-control"
                                   name="nombre"
                                   required>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Apellido</label>
                            <input type="text"
                                   class="form-control"
                                   name="apellido"
                                   required>
                        </div>

                    </div>

                    <div class="mb-3">
                        <label class="form-label">Correo</label>
                        <input type="email"
                               class="form-control"
                               name="correo"
                               required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Usuario</label>
                        <input type="text"
                               class="form-control"
                               name="usuario"
                               required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Contraseña</label>
                        <input type="password"
                               class="form-control"
                               name="password"
                               required>
                    </div>

                    <div class="text-center">
                        <button type="submit"
                                name="registrarUsuario"
                                class="btn btn-warning">
                            Registrarse
                        </button>
                    </div>

                </form>

            </div>

        </div>
    </div>
</div>

<!--Script de bootstrap-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>