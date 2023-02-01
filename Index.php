<?php
//Oculta el warning por no estar la sesion iniciada
error_reporting(0);
// Continuamos la sesión
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Index</title>
        <link rel="shortcut icon" type="image/x-icon" href="img/logo.png">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--Bootstraps CSS-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="style.css" rel="stylesheet">
        <!--FUENTE SALUDO -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Yellowtail&display=swap" rel="stylesheet">
    </head>
    <body>
        <!--ALERTA COOKIES-->
        <div class="alert alert-dismissible fade show"  role="alert">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-cookie" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#481705" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M8 13v.01" />
                <path d="M12 17v.01" />
                <path d="M12 12v.01" />
                <path d="M16 14v.01" />
                <path d="M11 8v.01" />
                <path d="M13.148 3.476l2.667 1.104a4 4 0 0 0 4.656 6.14l.053 .132a3 3 0 0 1 0 2.296c-.497 .786 -.838 1.404 -1.024 1.852c-.189 .456 -.409 1.194 -.66 2.216a3 3 0 0 1 -1.624 1.623c-1.048 .263 -1.787 .483 -2.216 .661c-.475 .197 -1.092 .538 -1.852 1.024a3 3 0 0 1 -2.296 0c-.802 -.503 -1.419 -.844 -1.852 -1.024c-.471 -.195 -1.21 -.415 -2.216 -.66a3 3 0 0 1 -1.623 -1.624c-.265 -1.052 -.485 -1.79 -.661 -2.216c-.198 -.479 -.54 -1.096 -1.024 -1.852a3 3 0 0 1 0 -2.296c.48 -.744 .82 -1.361 1.024 -1.852c.171 -.413 .391 -1.152 .66 -2.216a3 3 0 0 1 1.624 -1.623c1.032 -.256 1.77 -.476 2.216 -.661c.458 -.19 1.075 -.531 1.852 -1.024a3 3 0 0 1 2.296 0z" />
            </svg>
            Este sitio web usa cookies propias y de terceros para facilitar la navegación, obtener información estadísticas de uso de nuestros visitantes, y ofrecer contenido multimedia integrado.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <!--Fin alerta-->
        <a name="arriba"></a>
        <!--logo-->
        <div class="logo">
            <img src="img/logo.png" width="200" height="200">
            <?php if($_SESSION["idusuario"] == 1){ ?>
                <h3 class="saludo"><?php echo "Hola " . $_SESSION["usuario"] . " &#128526!!"?></h3>
            <?php }elseif($_SESSION["idusuario"] > 1){ ?>
                <h3 class="saludo"><?php echo "Hola " . $_SESSION["usuario"] . " &#128512!!"?></h3>
            <?php } ?>
        </div>
        <!--BARRA NAVEGACION-->
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #79bc00;">
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <div class="container-fluid">
                    <ul class="navbar-nav me-auto my-2 my-lg-0 nav-fill" style="--bs-scroll-height: 100px;">
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php">Inicio</a>
                        <li class="nav-item">
                            <a class="nav-link" href="QueEsColitas.php">¿Qué es COLITAS?</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="Adopta.html" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Adopta
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="centroAdopcion.php"><p>Centro de adopción</p></a></li>
                                <li><a class="dropdown-item" href="adopcionPerros.php"><p>Perros en adopción</p></a></li>
                                <li><a class="dropdown-item" href="adopcionGatos.php"><p>Gatos en adopción</p></a></li>
                                <li><a class="dropdown-item" href="adopcionPPP.php"><p>Programa "PPPerfectos"</p></a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="CentroVeterinario.php">Centro Veterinario</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Servicios.php">Servicios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Colabora.php">Colabora</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Contacto.php">Contacto</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="modal" data-bs-target="#modalTienda">Tienda</a>
                        </li>
                        <li class="nav-item">
                            <!--BOTON LOGUIN-->
                            <?php
                            if (empty($_SESSION["usuario"])){
                            ?>
                            <a class="nav-link" href="Login/login.php">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-circle" width="32" height="32" viewBox="0 0 24 24" stroke-width="2" stroke="#f4eb97" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                    <circle cx="12" cy="12" r="9" />
                                    <circle cx="12" cy="10" r="3" />
                                    <path d="M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855" />
                                </svg>
                            </a>
                            <!--BOTON DATOS/CERRAR SESION-->
                            <?php }else{ ?>
                            <div class="nav-item dropdown">
                                <a class="nav-link" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <!--icono-->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-circle" width="32" height="32" viewBox="0 0 24 24" stroke-width="2" stroke="#f4eb97" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <circle cx="12" cy="12" r="9" />
                                        <circle cx="12" cy="10" r="3" />
                                        <path d="M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855" />
                                    </svg>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="Login/miCuenta.php"><p>Mis Datos</p></a></li>
                                    <li><a class="dropdown-item" href="Login/cerrarSesion.php"><p>Cerrar Sesión</p></a></li>
                                </ul>
                            </div>
                            <?php } ?>
                        </li>

                        <!-- Modal -->
                        <div class="modal center fade" id="modalTienda" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h3 class="modal-title" id="modalTiendaLabel">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                                                    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                            </svg>
                                            Atención
                                        </h3>
                                    </div>

                                    <div class="modal-body">
                                        <div class="centrar">
                                            <!--SPINNER-->
                                            <div class="spinner-border text-success spin" style="width: 3rem; height: 3rem;" role="status">
                                                <span class="visually-hidden">Loading...</span>
                                            </div>
                                            <!--Fin Spinner-->
                                            <br>
                                            <h5><b>Página en mantenimiento.</b></h5>
                                            <hr class="mt-3 mb-4">
                                            <h6 class="center">Nuestra tienda está momentáneamente fuera de servicio.
                                            <br>Le pedimos disculpas por las molestias.
                                            <br>No dude en volver a visitarnos.</h6>
                                        </div>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn boton btn-lg" data-bs-dismiss="modal">Cerrar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </ul>
                </div>
            </div>
        </nav>
        <!--CARRUSEL-->
        <div id="carouselIndicators" class="carousel slide cabecera" data-bs-ride="carousel">
            <!--Indicadores de posición de imágenes-->
            <div class="carousel-indicators">
                <!--Primer indicador [ _       ]-->
                <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <!--Segundo indicador[    _    ]-->
                <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <!--Tercer indicador [     _   ]-->
                <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <!--Cuarto indicador [       _ ]-->
                <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
            <!--Imágenes-->
            <div class="carousel-inner">
                <!--Primera imagen-->
                <div class="carousel-item active fondoc">
                    <a href="https://www.paypal.com/donate/?hosted_button_id=5LBV6URXE966L">
                        <img src="img/carrusel/donacion.jpg" class="d-block w-80 carrusel" alt="Donacion">
                        <div class="carousel-caption d-none d-md-block">
                            <h2>Ayudanos con una donación</h2>
                        </div>
                    </a>
                </div>
                <!--Segunda imagen-->
                <div class="carousel-item fondoc">
                    <a href="adopcionPPP.php">
                        <img src="img/carrusel/adoptaPerro_pp.jpeg" class="d-block w-80 carrusel" alt="adoptaPerroPP">
                        <div class="carousel-caption d-none d-md-block">
                            <h2>Enamorate y acoge a un <br>Perro Potencialmente Perfecto</h2>
                        </div>
                    </a>
                </div>
                <!--Tercera imagen-->
                <div class="carousel-item fondoc">
                    <a href="adopcionGatos.php">
                        <img src="img/carrusel/adoptaGato.jpg" class="d-block w-80 carrusel" alt="adoptaGato">
                        <div class="carousel-caption d-none d-md-block">
                            <h2>Adopta a un lindo gatito</h2>
                        </div>
                    </a>
                </div>
                <!--Cuarta imagen-->
                <div class="carousel-item fondoc">
                    <a href="adopcionPerros.php">
                        <img src="img/carrusel/adoptaPerro.jpg" class="d-block w-80 carrusel" alt="adoptaPerro">
                        <div class="carousel-caption d-none d-md-block">
                            <h2>Animate a darle un hogar a un peludito</h2>
                        </div>
                    </a>
                </div>
            </div>
            <!--Controles de movimiento-->
            <!--[   <   ]-->
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </button>
            <!--[   >   ]-->
            <button class="carousel-control-next" type="button" data-bs-target="#carouselIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Siguiente</span>
            </button>
        </div>

        <div class="container mt-5 mb-4">
            <h1>Centro de Adopción</h1>
            <div class="row align-items-center">
                <div class="col-md-6">
                    <img src="img/cda.jpg" width="500px" class="bordes img-fluid">
                </div>
                <div class="col-md-6">
                    <h4>Llevamos más de 25 años luchando por los animales y por conseguir un mundo más justo para ellos. Desde entonces, hemos ayudado a más de 30.000 animales y hemos conseguido que nuestro Centro de Adopción, pionero en España, sea un espacio global de protección animal que recibe más de 2.000 animales abandonados al año.</h4>
                    <!--Boton-->
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a href="centroAdopcion.php" class="btn btn-lg boton" role="button">Ver más</a>
                    </div>
                </div>
            </div>
        </div>

        <hr></hr>

        <div class="container mt-5 mb-4">
            <h1>Infórmate de nuestro Programa “PPPerfectos”</h1>
            <h3>Proceso de adopción:</h3>
            <h4>Estos son los pasos que seguiremos para completar la adopción de tu nuevo amigo.
            <br><b>De lunes a sábado (10h a 18h)</b> se atiende con <a  href="Contacto.php">CITA PREVIA</a>. <b>Domingo y festivos cerrados.</b></h4>
            <div class="row align-items-center mt-5">
                <div class="col-lg-4 col-md-12">
                    <img src="img/paso1.png" width="300px" height="300px" class="pppfotos">
                    <h5>Vienes a verme y nos conocemos, <br>y si surge el flechazo...</h5>
                </div>

                <div class="col-lg-4 col-md-12">
                    <img src="img/paso2.jpg" width="300px" height="300px" class="pppfotos">
                    <h5>Documentamos la adopción <br>y consulta veterinaria.</h5>
                </div>

                <div class="col-lg-4 col-md-12">
                    <img src="img/paso3.jpg" width="300px" height="300px" class="pppfotos">
                    <h5>Y comenzamos una vida juntos.</h5>
                </div>
            </div>
        </div>

        <hr></hr>

        <!--PRIMERA POSICION: Solo se verá en tamaño grande-->
        <div class="container mt-5 mb-3 d-none d-lg-block">
            <h1>Animate a darle un hogar a un peludito</h1>
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <h4>Adoptar a un perrito sin hogar que ha vagado por la calle, pasando frío y hambre, quizás uno que ha estado sufriendo maltrato, sin nadie que le regalara una caricia, un poquito de amor y atención, hace que seas su salvador, su amigo, su única esperanza, algo que ellos saben gratificar muy bien. Su cariño y gran agradecimiento harán que jamás se separe de ti. Dale una oportunidad de demostrártelo, y mejor aún date una oportunidad de sentir ese amor.
                    <br><br>Al adoptar un perro adulto o un cachorro en COLITAS, te lo llevarás a casa vacunado, desparasitado, con análisis de leishmaniosis, con chip y esterilizado.</h4>
                </div>
                <div class="col-lg-6 col-md-12">
                    <a href="adopcionPerros.php">
                        <img src="img/1.jpg" width="500px" class="bordes img-fluid">
                    </a>
                </div>
            </div>
        </div>

        <!--SEGUNDA POSICION: Oculto el anterior y cambio de posición para que cuando la pantalla sea chica se vea primero la foto-->
        <div class="container mt-5 mb-3 d-lg-none">
            <h1>Animate a darle un hogar a un peludito</h1>
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <a href="adopcionPerros.php">
                        <img src="img/1.jpg" width="500px" class="bordes img-fluid">
                    </a>
                </div>
                <div class="col-lg-6 col-md-12">
                    <h4>Adoptar a un perrito sin hogar que ha vagado por la calle, pasando frío y hambre, quizás uno que ha estado sufriendo maltrato, sin nadie que le regalara una caricia, un poquito de amor y atención, hace que seas su salvador, su amigo, su única esperanza, algo que ellos saben gratificar muy bien. Su cariño y gran agradecimiento harán que jamás se separe de ti. Dale una oportunidad de demostrártelo, y mejor aún date una oportunidad de sentir ese amor.
                    <br><br>Al adoptar un perro adulto o un cachorro en COLITAS, te lo llevarás a casa vacunado, desparasitado, con análisis de leishmaniosis, con chip y esterilizado.</h4>
                </div>
            </div>
        </div>


        <hr></hr>

        <div class="container mt-5 mb-4">
            <h1>Adopta a un lindo gatito</h1>
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <a href="adopcionGatos.php">
                        <img src="img/2.jpg" width="500px" class="bordes img-fluid">
                    </a>
                </div>
                <div class="col-lg-6 col-md-12">
                    <h4>Los gatitos son una preciosidad con sus ojitos redondos, sus orejitas inmensas, pero también son frágiles, y no son juguetes.
                        Llevamos años buscando un hogar feliz al máximo de gatitos que vamos rescatando, gatos que han vagado por la calle, pasando frío y hambre, en busca de comida, cobijo, un poquito de cariño y atención, años consiguiendo darles una nueva oportunidad y un nuevo compañero de vida y deseamos continuar en esta dirección...
                        <br><br>Si te decides por adoptar un gato, COLITAS lo entrega vacunado, desparasitado, con chip, con análisis de Inmunodeficiencia y Leucemia, y esterilizado.</h4>
                </div>
            </div>
        </div>
            
        <footer>
            <button type="button" class="btn" data-toggle="tooltip" data-placement="right" title="Subir">
                <a href="#arriba">
                    <img src="img/logo.png" width="150" height="150">
                </a>
            </button>
            <br>
            <div class="row">
                <div class="col-md-4">
                    <a href="tel:620406446">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-phone mb-3" width="50" height="50" viewBox="0 0 24 24" stroke-width="1.5" stroke="#f1ebe5" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
                        </svg>
                        <p>620 13 78 12</p>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="https://goo.gl/maps/bnYsw9LtuEqyJyM6A"> 
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-pin mb-3" width="50" height="50" viewBox="0 0 24 24" stroke-width="1.5" stroke="#f1ebe5" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <circle cx="12" cy="11" r="3" />
                            <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z" />
                        </svg>
                        <p>Av. de la Universidad, s/ n, 10003, Cáceres</p>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="mailto:cmoratog15@gmail.com" class="correo color">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail mb-3" width="50" height="50" viewBox="0 0 24 24" stroke-width="1.5" stroke="#f1ebe5" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <rect x="3" y="5" width="18" height="14" rx="2" />
                            <polyline points="3 7 12 13 21 7" />
                        </svg>
                        <p>info@Colitas.com</p>
                    </a>
                </div>
            </div>
        </footer>



            <!--Bootstraps JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <!--JavaScript-->
        <script src="script.js"></script>
</body>
</html>
