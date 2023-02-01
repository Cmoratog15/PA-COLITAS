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
        <title>Centro Veterinario</title>
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
    <hr>

        <a name="arriba"></a>
        <!--logo-->
        <div class="logo">
            <a class="navbar-brand" href="index.php" title="Inicio">
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
                            <a class="nav-link active" href="CentroVeterinario.php">Centro Veterinario</a>
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
                <div class="carousel-item active fondoc">
                    <img src="img/centroVet.png" class="d-block w-80" alt="headerColita">
                    <div class="carousel-caption d-none d-md-block headerColitas">
                        <h2 class="vet">Centro Veterinario COLITAS</h2>
                    </div>
                </div>
            </div>
        </div>
        <br><br>

        <div class="container mt-5 mb-3">
            <!--TITULO QUE SE VERA SOLO EN TAMAÑO PEQUEÑO-->
            <div class="container mt-5 mb-3 d-md-none headerColitas">
                <h2 class="vet">Centro Veterinario COLITAS</h2>
            </div>
            <h1>Centro Veterinario de referencia en la zona de Cáceres</h1>
            <div class="row align-items-center">
                <div class="col-md-6">
                    <img src="img/centroVeterinaio.jpg" width="500px" height="500px" class="bordes img-fluid">
                </div>
                <div class="col-md-6 mt-3">
                    <h4 class="center">A lo largo de los años, desde COLITAS siempre se ha intentado mantener una visión de futuro y hace más de diez se empezó a diseñar un proyecto muy grande y bonito: abrir un Centro Veterinario de referencia.</h4>
                    <h4 class="mt-4 center"><b>EL 100% DE LOS BENEFICIOS SE DESTINA A LA PROTECCION ANIMAL</b></h4>
                </div>
            </div>
        </div>

        <div class="container mt-5 mb-3">
            <h4>El Centro Veterinario COLITAS está disponible para todo lo que necesita vuestro peludo. Desde revisiones, vacunas, desparasitaciones, diagnóstico y seguimiento de patologías… hasta segundas opiniones o tratamientos complicados. Nuestros completos quirófanos están equipados para nuestra especialidad, la esterilización de perros, gatos y otras especies, así como para operaciones de traumatología y otras intervenciones quirúrgicas.</h4>

            <h4 class="mt-4">El equipo veterinario cuenta con herramientas de apoyo al diagnóstico como ecógrafo, equipo de rayos X, analizador, microscopio…</h4>

            <h4 class="mt-4">Además, en nuestro Centro Veterinario podremos atender, diagnosticar y tratar a algunos animales exóticos como reptiles (tortugas de agua y de tierra) y algunos mamíferos (conejos, hurones, cobayas, chinchillas, ratas, hámsteres, ratones… ).</h4>

            <h4 class="mt-4">Gracias a vosotros, cada visita al Centro Veterinario COLITAS supone una fuente de ingresos que nos permite seguir realizando las labores de COLITAS como Asociación dedicada en cuerpo y alma al rescate y recuperación de animales desasistidos. <b>El 100% de los beneficios del Centro Veterinario COLITAS se destina a los animales abandonados</b>, ni un céntimo es derivado a otro objetivo.</h4>

            <h4 class="mt-4">Si eres socio o colaborador de COLITAS, además, cuentas con tarifas reducidas. Si aún no eres colaborador, <b>¿a qué esperas?</b>, tanto tú como tus animales saldréis ganando: ellos con una atención privilegiada, tú con la tranquilidad de saberlos cuidados y de estar ayudando a muchos otros.</h4>
        </div>

        <div class="container mt-5 mb-3 contenedorSVG">
            <!--Primera fila-->
            <div class="row align-items-center"> 
                <!--Columna 1-->
                <div class="col-lg-4 col-md-6 col-sm-12"> 
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-heartbeat" width="200" height="200" viewBox="0 0 24 24" stroke-width="1" stroke="#79bc00" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M19.5 13.572l-7.5 7.428l-2.896 -2.868m-6.117 -8.104a5 5 0 0 1 9.013 -3.022a5 5 0 1 1 7.5 6.572" />
                        <path d="M3 13h2l2 3l2 -6l1 3h3" />
                    </svg>
                <h1>Quirófano</h1>
                <h4>Nuestros completos quirófanos están equipados para nuestra especialidad, la esterilización de perros, gatos y otras especies, así como para operaciones de traumatología y otras intervenciones quirúrgicas.</h4>
                </div>
                <!--Columna 2-->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-clipboard-list" width="200" height="200" viewBox="0 0 24 24" stroke-width="1" stroke="#79bc00" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2" />
                        <rect x="9" y="3" width="6" height="4" rx="2" />
                        <line x1="9" y1="12" x2="9.01" y2="12" />
                        <line x1="13" y1="12" x2="15" y2="12" />
                        <line x1="9" y1="16" x2="9.01" y2="16" />
                        <line x1="13" y1="16" x2="15" y2="16" />
                    </svg>
                    <h1>Diagnóstico</h1>
                    <h4>Nuestro equipo veterinario efectuará el diagnóstico de cualquier incidencia sanitaria de vuestro compañero, contando para ello con las herramientas de diagnóstico clínico y de laboratorio más avanzadas.</h4>
                </div>
                <!--Columna 3-->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-bandage" width="200" height="200" viewBox="0 0 24 24" stroke-width="1" stroke="#79bc00" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <line x1="14" y1="12" x2="14" y2="12.01" />
                        <line x1="10" y1="12" x2="10" y2="12.01" />
                        <line x1="12" y1="10" x2="12" y2="10.01" />
                        <line x1="12" y1="14" x2="12" y2="14.01" />
                        <path d="M4.5 12.5l8 -8a4.94 4.94 0 0 1 7 7l-8 8a4.94 4.94 0 0 1 -7 -7" />
                    </svg>
                    <h1>Prevención</h1>
                    <h4>Planes de mantenimiento de aquellos animales que entran en la etapa madura. En cada estación nos centramos en las necesidades de los peludos en ese momento y lanzamos campañas concretas.</h4>
                </div>
                <!--Columna 3-->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-receipt-2" width="200" height="200" viewBox="0 0 24 24" stroke-width="1" stroke="#79bc00" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M5 21v-16a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v16l-3 -2l-2 2l-2 -2l-2 2l-2 -2l-3 2" />
                        <path d="M14 8h-2.5a1.5 1.5 0 0 0 0 3h1a1.5 1.5 0 0 1 0 3h-2.5m2 0v1.5m0 -9v1.5" />
                    </svg>
                    <h1>Tarifas</h1>
                    <h4>Nuestras tarifas están muy ajustadas, consiguiendo el equilibrio entre la mejor atención veterinaria y la ayuda a los animales que están en la calle. Recuerda, todo se reinvierte en ellos.</h4>
                </div>
                <!--Columna 5-->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-stethoscope" width="200" height="200" viewBox="0 0 24 24" stroke-width="1" stroke="#79bc00" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M6 4h-1a2 2 0 0 0 -2 2v3.5h0a5.5 5.5 0 0 0 11 0v-3.5a2 2 0 0 0 -2 -2h-1" />
                        <path d="M8 15a6 6 0 1 0 12 0v-3" />
                        <path  d="M11 3v2" />
                        <path  d="M6 3v2" />
                        <circle cx="20" cy="10" r="2" />
                    </svg>
                    <h1>Eq. Veterinario</h1>
                    <h4>Nuestro equipo de veterinarios y ATV's (Asistente Técnico Veterinario) está altamente cualificado para brindar la atención más completa y personalizada a tu peludo.</h4>
                </div>
                <!--Columna 6-->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-building-hospital" width="200" height="200" viewBox="0 0 24 24" stroke-width="1" stroke="#79bc00" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <line x1="3" y1="21" x2="21" y2="21" />
                        <path d="M5 21v-16a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v16" />
                        <path d="M9 21v-4a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v4" />
                        <line x1="10" y1="9" x2="14" y2="9" />
                        <line x1="12" y1="7" x2="12" y2="11" />
                    </svg>
                    <h1>Instalaciones</h1>
                    <h4>El centro consta de una amplia recepción, dos consultas, un prequirófano, dos quirófanos, una sala de hospitalización de día, equipo de rayos x, ecógrafo, y laboratorio.</h4>
                </div>
            </div>
        </div>

        <div class="container mt-5 mb-3 baner">
            <h4>El 100% de los beneficios del centro veterinario COLITAS se destina a la protección animal.</h4>
        </div>

        <div class="container mt-5 mb-3">
            <h1>Campañas</h1>
            <h4>Las campañas de esterilización son la piedra angular de nuestra actividad, hemos de aprovechar la experiencia acumulada de más de 2.000 animales al año operados en COLITAS. La técnica y el saber hacer en este tipo de operaciones deben revertir en los animales a precios reducidos, siempre buscando disminuir el número de camadas indeseadas y mejorar el bienestar animal.</h4>

            <h4>Los planes de mantenimiento de aquellos animales que entran en la etapa madura son otros de nuestros puntos continuos de atención, con una campaña permanente todo el año.</h4>

            <h4>En cada estación nos centramos en las necesidades de los peludos en ese momento y lanzamos campañas concretas como, por ejemplo, de diciembre a febrero la campaña para la detección precoz y el control de la Leishmaniosis, en junio la de la vacunación de la rabia…</h4>

            <h4>Nos centramos también en ofrecer a los adoptantes de COLITAS o de cualquier otra protectora de animales y/o colaboradores, descuentos adicionales importantes. En ayudar a otras protectoras a través de nuestra Campaña “Sumando Fuerzas” atendiendo a los animales para mejorar su calidad de vida y posibilidades de adopción.</h4>

            <h4>El Centro Veterinario COLITAS cuenta también con 2 Igualas; “Iguala Canina” y “Iguala Felina” con servicios, facilidades y descuentos exclusivos para ti y tu compañero de 4 patas.</h4>
            </div>

            <!--CARRUSEL-->
            <div class="container mt-5 mb-3">
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12">
                        <div id="carouselExampleInterval1" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active" data-bs-interval="2000">
                                    <img src="img/b1.jpg" class="d-block w-100" alt="m">
                                </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                    <img src="img/b2.jpg" class="d-block w-100" alt="r">
                                </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                    <img src="img/b3.jpg" class="d-block w-100" alt="a">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-6 d-none d-lg-block">
                        <div id="carouselExampleInterval2" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-inner">
                                    <div class="carousel-item active" data-bs-interval="2000">
                                        <img src="img/b3.jpg" class="d-block w-100" alt="a">
                                    </div>
                                    <div class="carousel-item" data-bs-interval="2000">
                                        <img src="img/b1.jpg" class="d-block w-100" alt="m">
                                    </div>
                                    <div class="carousel-item" data-bs-interval="2000">
                                        <img src="img/b2.jpg" class="d-block w-100" alt="r">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-12 d-none d-xl-block">
                        <div id="carouselExampleInterval3" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-inner">
                                    <div class="carousel-item active" data-bs-interval="2000">
                                        <img src="img/b2.jpg" class="d-block w-100" alt="r">
                                    </div>
                                    <div class="carousel-item" data-bs-interval="2000">
                                        <img src="img/b3.jpg" class="d-block w-100" alt="a">
                                    </div>
                                    <div class="carousel-item" data-bs-interval="2000">
                                        <img src="img/b1.jpg" class="d-block w-100" alt="m">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="container mt-5 mb-5">
                <h1>Trabaja con nosotros</h1>
                <h4>Somos una organización en constante expansión por donde pasan más de 3.000 animales al año lo que supone una enorme casuística y posibilidades de formación y desarrollo. Si estás interesado en trabajar con nosotros puedes hacernos llegar tu cv a <a href="mailto:cmoratog15@gmail.com">rrhh_cv@colitas.com</a></h4>
            </div>
            <br>
            <div class="container mt-5 mb-3 contactanos center">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <h3>¡Contáctanos!</h3>
                        <h4>Si quieres pedir cita o pedir información puedes hacerlo en:</h4>
                        <h4>Email: <a href="mailto:cmoratog15@gmail.com">rrhh_cv@colitas.com</a></h4>
                        <h4>Teléfono: <a href="tel:620406446">620 13 78 12</a></h4>
                        <h4>O si lo prefieres, puedes rellenar nuestro formulario de contacto y nos pondremos en contacto contigo.</h4>
                        <a class="btn boton" href="Contacto.php" role="button">IR AL FORMULARIO</a>

                        <h3 class="mt-5">Hora clinica veterinaria</h3>
                        <h4>Atendemos con cita previa en el siguiente horario:</h4>

                        <h4><b>Lunes a Viernes - 10.00 h a 19.30 h</b></h4>
                        <h4><b>Sábados - 10.00 h a 14.30 h</b></h4>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <h3>Dónde estamos</h3>
                        <h4>Nuestra clínica se encuentra al lado de nuestra protectora de Animales.<br> Puedes ver la ubicación exacta en el mapa:</h4>
                        <div class="map-responsive">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3079.403567105517!2d-6.351178384772323!3d39.48280097948458!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd15e09e51d5d433%3A0x52a20eeace91b9f6!2sHospital%20Cl%C3%ADnico%20Veterinario!5e0!3m2!1ses!2ses!4v1671222949899!5m2!1ses!2ses" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="embed-responsive-item" ></iframe>
                        </div>
                    </div>
                </div>
            </div>

        <footer class="mt-5">
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