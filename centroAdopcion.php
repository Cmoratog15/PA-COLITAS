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
        <title>Centro de Adopción</title>
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

        <a name="arriba"></a>
        <!--logo-->
        <div class="logo">
            <a class="navbar-brand" href="index.php">
                <img src="img/logo.png" width="200" height="200">
                <?php if($_SESSION["idusuario"] == 1){ ?>
                    <h3 class="saludo"><?php echo "Hola " . $_SESSION["usuario"] . " &#128526!!"?></h3>
                    <?php }elseif($_SESSION["idusuario"] > 1){ ?>
                    <h3 class="saludo"><?php echo "Hola " . $_SESSION["usuario"] . " &#128512!!"?></h3>
                <?php } ?>
            </a>  
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
                            <a class="nav-link" href="index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="QueEsColitas.php">¿Qué es COLITAS?</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle active" href="centroAdopcion.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Adopta
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item active" href="centroAdopcion.php"><p>Centro de adopción</p></a></li>
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
            <div class="carousel-inner">
                <div class="carousel-item active fondoc serviciosHeader">
                    <img src="img/animalescompania.jpg" class="d-block w-80 " alt="Donacion">
                    <div class="carousel-caption d-none d-md-block headerColitas">
                        <h2 class="serviciosHeader">Centro de Adopción</h2>
                    </div>
                </div>
            </div>
        </div>

        <!--TITULO QUE SE VERA SOLO EN TAMAÑO PEQUEÑO-->
        <div class="container mt-5 mb-3 d-md-none headerColitas">
            <h2>Centro de Adopción</h2>
        </div>

        <div class="container mt-5 mb-4">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <img src="img/centroadopcion1.jpg" width="500px" class="bordes img-fluid">
                </div>
                <div class="col-md-6"><h4>Después de más de una década de duro trabajo, por fin el 1 de Noviembre de 2003 se inauguró el nuevo <b>Centro de Adopción de COLITAS</b>. Construido contando con <b>la experiencia acumulada durante los 11 años previos de funcionamiento </b>y con la información recogida en otros centros europeos, se creó un <b>espacio global de protección animal pionero en España</b>. Cuenta con una capacidad para alojar a 150 perros, 40 gatos y acoger hasta 15 conejos, y actualmente recibe a más de 2.000 animales abandonados al año.</h4></div>
            </div>
            <h4>Durante su estancia, reciben los cuidados que necesitan: alimentación, ejercicio, cariño y atención veterinaria. Aun así, el Centro de Adopción de COLITAS está pensado como un sitio de paso, ya que el objetivo es que todos los animales sean adoptados y encuentren una familia que les ofrezcan las condiciones necesarias para su óptima calidad de vida.

            En el Centro de Adopción de COLITAS trabajan a diario tanto personal contratado como voluntarios, que aportan su tiempo altruistamente, con el objetivo de que los animales estén en las mejores condiciones posibles.</h4>
        </div>
        <div class="container instalaciones mt-5">
                <h1>Instalaciones</h1>
                <hr></hr>
                <h4>El Centro cuenta con edificaciones independientes para cada especie y estado de salud (naves de estancia y cuarentena para perros, gatos y otros animales), clínica veterinaria con consulta, dos quirófanos, sala de rayos X y hospitalización, además de sala de baños terapéuticos y oficina, entre otras instalaciones.</h4>

                <!--SE VERA CON LA VENTANA TAMAÑO MEDIANO Y GRANDE-->
                <div class="row">
                    <div class="col-md-6 d-none d-md-block">
                        <img src="img/cuarentena_gatos.jpg" width="500px"  class="bordes img-fluid">
                    </div>
                    <div class="col-md-6 d-none d-md-block">
                        <img src="img/Cuarentena_perros.jpg" width="500px" class="bordes img-fluid">
                    </div>
                </div>
                
                <!--SOLO SE VERA CON LA VENTANA TAMAÑO CHICO-->
                <div class="container mt-5">
                    <div class="row">
                        <div class="d-md-none">
                            <div id="carouselExampleInterval4" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active" data-bs-interval="2000">
                                    <img src="img/cuarentena_gatos.jpg" width="500px"  class="bordes img-fluid">
                                    </div>
                                    <div class="carousel-item" data-bs-interval="2000">
                                    <img src="img/Cuarentena_perros.jpg" width="500px" class="bordes img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <h3 class="center">Cuarentena</h3>
                        <h6>Todos los animales que llegan al Centro de Adopción pasan un periodo de observación en zonas especialmente preparadas para ello, existiendo tres salas de cuarentena para gatos y dos zonas de cuarentena para perros, una para cachorros y la otra para adultos. Allí reciben una estricta atención veterinaria por parte del equipo de veterinarios de la Asociación. En este tiempo se les realiza un exhaustivo examen clínico que incluye un análisis de sangre para detectar enfermedades, la desparasitación y vacunación del animal, así como cualquier tratamiento adicional que precise según su estado. Una vez que su estado sanitario es óptimo, tanto machos como hembras son esterilizados. Pasado este periodo reciben el alta y son trasladados a la zona de adopción.</h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <img src="img/gatera.jpg" width="500px" class="bordes img-fluid">
                        <h3 class="center mt-3">Gateras</h3>
                        <h6>Después de pasar por las zonas de cuarentena los gatos que han llegado al Centro de Adopción de COLITAS pasan a las gateras o salas de estancia, instalaciones especialmente construidas para sus necesidades, que constan de habitaciones interiores con calefacción y patios al aire libre, donde un máximo de 40 gatos comparten espacio y juegos hasta el momento de su adopción.</h6>
                    </div>
                    <div class="col-md-6">
                        <img src="img/nave_perros.jpg" width="500px"  class="bordes img-fluid">
                        <h3 class="center mt-3">Zona de estancia para perros</h3>
                        <h6>En esta zona los perros se distribuyen según su tamaño y compatibilidad en grupos de 4 o 5 en cada una de las 40 estancias. Todas cuentan con una zona interior cubierta con calefacción y con un patio exterior al aire libre. Además, las estancias para perros tienen acceso a 8 grandes áreas de ejercicio donde los animales salen a pasear y correr a diario..</h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <img src="img/cachorreras.jpg" width="500px" class="bordes img-fluid">
                        <h3 class="center mt-3">Cachorreras</h3>
                        <h6>Dadas las condiciones especiales de los cachorros (debilidad, bajas defensas…) es necesario que permanezcan aislados hasta su completa vacunación. Este área, independiente del resto de las instalaciones para perros, cumple con el objetivo de protegerlos a la vez que permite su observación por parte de los adoptantes el día de adopciones (sábados). El resto del tiempo los cachorros viven y son tutelados por el Programa de Canguros.</h6>
                    </div>
                    <div class="col-md-6">
                        <img src="img/vivienda2.jpg" width="500px" class="bordes img-fluid">
                        <h3 class="center mt-3">Vivienda Guardeses</h3>
                        <h6>En ella se alojan los guardeses, que permanecen al cuidado del centro.</h6>
                        <h6>El centro de adopción de COLITAS cuenta con un sistema de seguridad 24 h y con la presencia permanente de personal de vigilancia</h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <img src="img/centro_vet.jpg" width="500px" class="bordes img-fluid">
                        <h3 class="center mt-3">Clínica Veterinaria</h3>
                        <h6>La clínica cuenta con 2 consultas, 2 quirófanos, sala de rayos X y dos hospitalizaciones para animales enfermos.</h6>
                    </div>
                    <div class="col-md-6">
                        <img src="img/edificio-interior-adopciones-2.jpg" width="500px" class="bordes img-fluid">
                        <h3 class="center mt-3">Dependencias administrativas</h3>
                        <h6>Cuenta con sala de adopciones, tienda, vestuarios para voluntarios, servicios y almacén.</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="container adopta">
            <h1>Adopta</h1>
            <hr></hr>
            <div class="row">
                <div class="col-md-4">
                    <h3>Adopta a un gatito</h3>
                    <a href="adopcionGatos.php"><img src="img/ag.jpg" width="400px" class="bordes img-fluid"></a>
                </div>
                <div class="col-md-4">
                    <h3>Adopta a un perrito</h3>
                    <a href="adopcionPerros.php"><img src="img/ap.jpg" width="400px" class="bordes img-fluid"></a>
                </div>
                <div class="col-md-4">
                    <h3>Adopta a un PPP</h3>
                    <a href="adopcionPPP.php"><img src="img/appp.jpg" width="400px" class="bordes img-fluid"></a>
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