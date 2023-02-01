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
        <title>Qué es COLITAS</title>
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
                            <a class="nav-link" href="index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="QueEsColitas.php">¿Qué es COLITAS?</a>
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
            <div class="carousel-inner">
                <div class="carousel-item active fondoc">
                    <img src="img/headerColita.jpg" class="d-block w-80" alt="headerColita">
                    <div class="carousel-caption d-none d-md-block headerColitas">
                        <h2>¿Qué es COLITAS?</h2>
                        <h3>Trabajamos para fomentar la tenencia responsable <br>y la empatía y respeto ante cualquier forma de vida.</h3>
                    </div>
                </div>
            </div>
        </div>
        <br><br>

        <!--TITULO QUE SE VERA EN TAMAÑO PEQUEÑO-->
        <div class="container mt-5 mb-3 d-md-none headerColitas">
            <h2>¿Qué es COLITAS?</h2>
            <h3>Trabajamos para fomentar la tenencia responsable <br>y la empatía y respeto ante cualquier forma de vida.</h3>
        </div>

        <div class="container mt-5 mb-3">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <img src="img/logoFondoColor.jpg" width="450px" height="450px" class="bordes img-fluid">
                </div>
                <div class="col-md-6 seplineas">
                    <h4>COLITAS es una entidad sin ánimo de lucro que se fundó en Cáceres (España) en 1992, como respuesta al elevado número de animales que son abandonados y maltratados en nuestro país y a la deficiente atención de que son objeto por parte de la administración, que hasta el momento y salvo unas pocas excepciones, se ha limitado a recogerlos y eliminarlos, sin resolver el problema de una manera humanitaria y efectiva.</h4>
                </div>
            </div>
        </div>

    <!--Mismo parrafo en 2 posiciones-->
        <!--PRIMERA POSICION: Solo se verá en tamaño grande-->
        <div class="container mt-5 mb-3 d-none d-md-block">
            <div class="row align-items-center">
                <div class="col-md-6 mt-5">
                    <h4>COLITAS está legalmente constituida y debidamente inscrita en el:</h4>
                    <ul>
                        <li><h4>Registro Nacional de Asociaciones del Ministerio del Interior nº 112.523.</h4></li>
                        <li><h4>Registro Provincial de Asociaciones de la Delegación del Gobierno nº 12.653.</h4></li>
                        <li><h4>Registro de Asociaciones de la Comunidad de Extremadura nº 27.976.</h4></li>
                        <li><h4>Título de Entidad Colaboradora de la Comunidad de Extremadura, nº CM-004.</h4></li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <img src="img/inscripcion.jpg" width="450px" height="450px" class="bordes img-fluid">
                </div>
            </div>
        </div>
        
        <!--SEGUNDA POSICION: Oculto el anterior y cambio de posición para que cuando la pantalla sea chica se vea primero la foto-->
        <div class="container mt-5 mb-3 d-md-none">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <img src="img/inscripcion.jpg" width="450px" height="450px" class="bordes img-fluid">
                </div>
                <div class="col-md-6 mt-5">
                    <h4>COLITAS está legalmente constituida y debidamente inscrita en el:</h4>
                    <ul>
                        <li><h4>Registro Nacional de Asociaciones del Ministerio del Interior nº 112.523.</h4></li>
                        <li><h4>Registro Provincial de Asociaciones de la Delegación del Gobierno nº 12.653.</h4></li>
                        <li><h4>Registro de Asociaciones de la Comunidad de Extremadura nº 27.976.</h4></li>
                        <li><h4>Título de Entidad Colaboradora de la Comunidad de Extremadura, nº CM-004.</h4></li>
                    </ul>
                </div>
            </div>
        </div>
    <!--Fin mismo parrafo-->

        <div class="container mt-5 mb-4">
            <div class="row mt-5 align-items-center">
                <div class="col-md-6">
                    <img src="img/ConsejoProteccion.jpg" width="450px" height="450px" class="bordes img-fluid">
                </div>
                <div class="col-md-6">
                    <h4>COLITAS es miembro del Consejo de Protección y Bienestar Animal, órgano consultivo y asesor en materia de animales domésticos, constituido por representantes de la Consejería de Medio Ambiente, Federación de Municipios, SEPRONA, Real Sociedad Canina, asociaciones de protección de los animales y las asociaciones de veterinarios AMVAC, AVEPA y Colegio de Veterinarios.</h4>

                    <h4 class="mt-5">COLITAS es parte integrante de la Coordinadora Estatal de Protección Animal - CEPA (<a href="https://www.institutodeproteccionanimal.com/es/">https://www.institutodeproteccionanimal.com</a>) , en la que la asociación trabaja conjuntamente con otras en denuncias, propuestas legislativas y campañas de concienciación.</h4>
                </div>
            </div>
        </div>

        <div class="container mt-5 mb-4">
            <h1 class="mb-0">Historia COLITAS</h1>
            <h5 class="mt-2 mb-2"><b>Creciendo desde 1992</b></h5>
            <hr class="mb-4"></hr>
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-12 carruselColitas ">
                    <!--CARRUSEL-->
                    <div id="carouselColitas" class="carousel carousel-dark slide carousel-fade" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="img/carruselColitas/historia1.jpg" class="d-block w-100 img-fluid bordes" alt="historia1">
                            </div>
                            <div class="carousel-item">
                                <img src="img/carruselColitas/historia2.jpg" class="d-block w-100 img-fluid bordes" alt="historia2">
                            </div>
                            <div class="carousel-item">
                                <img src="img/carruselColitas/historia3.jpg" class="d-block w-100 img-fluid bordes" alt="historia3">
                            </div>
                            <div class="carousel-item">
                                <img src="img/carruselColitas/historia4.jpg" class="d-block w-100 img-fluid bordes" alt="historia4">
                            </div>
                            <div class="carousel-item">
                                <img src="img/carruselColitas/historia5.jpg" class="d-block w-100 img-fluid bordes" alt="historia5">
                            </div>
                        </div>
                        <!--Boton anterior [<]-->
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselColitas" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Anterior</span>
                        </button>
                        <!--Boton siguiente [>]-->
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselColitas" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Siguiente</span>
                        </button>
                        </div>
                </div>
                <div class="col-lg-7 col-md-12">
                    <h4>COLITAS <b>fue creado y comenzó su labor en 1992</b> por iniciativa de tres jóvenes estudiantes que, sensibilizadas al conocer la grave situación de un gran número de animales abandonados que se encontraban recogidos en muy mal estado, decidieron ayudar activamente y hacerse cargo de ellos y de los que seguían entrando.</h4>

                    <h4><b>Con gran ilusión, esfuerzo y escasos medios, se modificaron tanto la gestión como las instalaciones de la finca para convertirla en el primer Centro de Adopción de COLITAS:</b> se estableció el control sanitario de los animales mediante convenios con clínicas veterinarias, se construyeron jaulas, se habilitaron zonas de cuarentena, enfermería, quirófano… </h4>
                </div>
                <div class="col-lg-12 col-md-12">
                    <h4><b>Todo era realizado a mano por los pocos voluntarios que había entonces.</b> Paralelamente se empezaron a buscar colaboradores, voluntarios y adoptantes para los animales. Gracias a la buena gestión de todas estas personas y de las que posteriormente han ido conformando el equipo de la asociación, COLITAS ha ido mejorando cada año y logrando nuevas metas hasta conseguir ser una asociación pionera a nivel nacional, tanto por sus instalaciones como por su intachable gestión. Y es que tras años de duro trabajo y gracias al esfuerzo conjunto de socios, voluntarios y personas que han ofrecido su ayuda de manera desinteresada, en el año 2003 COLITAS se trasladó a su actual Centro de Adopción y ya supera los 2.000 animales atendidos cada año.</h4>
                </div>
            </div>
            <h3>¿Qué ha conseguido COLITAS?</h3>
            <ul>
            <div class="row gx-5 marcadorLinea">
                <div class="col-lg-6">
                        <li>
                            <h4>El incremento año tras año del número de animales atendidos:
                            246 perros en 1993 frente a 2.097 en 2017 (793 perros, 1.253 gatos).</h4>
                        </li>
                        <li>
                            <h4>El incremento del número de adopciones en España y otros países europeos:
                            112 en 1993 frente a 1.275 en 2017 (707 perros, 519 gatos). Además, en 2017 se reintegraron en colonias 693 gatos no sociables (programa CES).</h4>
                        </li>
                        <li>
                            <h4>Lograr una alta calidad de vida y una esmerada atención a los animales mantenidos en el Centro, para conseguir su rápida recuperación y hacer más llevadera su espera de un hogar definitivo.</h4>
                        </li>
                        <li>
                            <h4>Crear un centro integral de protección animal pionero en España que cuenta con: el Centro de Adopción, con cuarentenas y estancias para diferentes especies, donde se acogen, recuperan y mantienen hasta su adopción más de 2.000 animales abandonados cada año;  el Centro Veterinario COLITAS, donde se cuida la salud de los animales que ya tienen hogar; así como una Sala de Formación, en la que la asociación desarrolla su labor de concienciación y sensibilización hacia los animales.</h4>
                        </li>
                        <li>
                            <h4>Desarrollar una “Campaña de control de natalidad” continuada a lo largo del año, en la que se esterilizan cerca de 2000 perros y gatos al año.</h4>
                        </li>
                    </div>
                    <div class="col-lg-6">
                        <li>
                            <h4>Ser declarada como Entidad de Utilidad Pública, un reconocimiento social de la labor de la Asociación y la capacidad de utilizar la mención “declarada de Utilidad Pública” desde enero de 2017.</h4>
                        </li>
                        <li>
                            <h4>Convertirse en un referente para otras asociaciones en España y en uno de los miembros fundadores de la Federación de Asociaciones Protectoras y de Defensa Animal y de la <a href="https://www.institutodeproteccionanimal.com/es/">Coordinadora Española de Protección Animal - CEPA</a>, en las que se trabaja conjuntamente en propuestas legislativas, campañas de concienciación y denuncias sobre abandono y maltrato de animales.</h4>
                        </li>
                        <li>
                            <h4>
                                Crear un proyecto educativo pionero a nivel nacional, COLITAS EDUCA, para fomentar la tenencia responsable y la sensibilización de los niños hacia los animales y su entorno, trabajando valores a través de la relación animal-humano.
                            </h4>
                        </li>
                        <li>
                            <h4>Llevar a cabo múltiples campañas, eventos y mesas informativas para dar a conocer al mayor número posible de personas el trabajo de la asociación y difundir sus mensajes de cuidado y respeto a los animales.</h4>
                        </li>
                        <li>
                            <h4>El reconocimiento de la labor que realiza por parte de instituciones tan prestigiosas a nivel internacional como la Fundación Reina Sofía, Seprona, Comunidad de Madrid, Fundación Biodiversidad entre otras.</h4>
                        </li>
                    </div>
                </div>
            </ul>
        </div>
        <div class="container mt-5 mb-4">
            <h1 class="mb-2">Objetivos</h1>
            <h5 class="mt-1 mb-2"><b>Uno de nuestros principales objetivos es conseguir una sensibilización <br>y respeto
                hacia los animales y la vida en general.</b></h5>
            <hr></hr>
            <div class="row align-items-center">
                <div class="col-lg-5 objetivos">
                    <img src="img/colit1.jpg" class="bordes img-fluid">
                </div>
                <div class="col-lg-7">
                    <h4>El fin último de COLITAS, hacia el que dirige todas sus actuaciones, es conseguir una sensibilización y respeto hacia los animales y la vida en general, tales que hagan impensable la crueldad de que hoy son objeto.</h4>
        
                    <h4>Constituyen otros fines esenciales de COLITAS:</h4>
                    <ul>
                        <li><h4>La protección en general de los animales.</h4></li>
                        <li><h4>Fomentar la tenencia responsable y el correcto cuidado de los animales de compañía.</h4></li>
                        <li><h4>Evitar y denunciar su maltrato y abandono.</h4></li>
                        <li><h4>Evitar y denunciar la utilización de los animales en espectáculos, peleas, fiestas populares y cualesquiera otras actividades que impliquen crueldad o malos tratos, que puedan ocasionarles sufrimientos o hacerles objeto de tratamientos antinaturales.</h4></li>
                    </ul>
                </div>
            </div>
            
            <h4>COLITAS considera prioritaria la atención al problema de los animales abandonados, ya que el número de estos en España es de los más elevados de Europa: Según la información recabada en el año 2003 entre las asociaciones europeas miembros del Eurogroup, y trabajando con parámetros relativos, referidos a número de abandonos en relación al número de habitantes, en España había un perro abandonado por cada 450 personas. Según estas cifras el abandono de perros en España cuadriplicaba el valor medio de los países que componían la Unión Europea en ese momento y multiplicaba casi por nueve el de países como Holanda.</h4>

            <h4>Este problema debe ser resuelto con actuaciones a corto plazo, atendiendo a los animales que ya han sido abandonados, y con actuaciones a medio y largo plazo, realizando una labor de concienciación y divulgación para prevenir futuros abandonos y malos tratos.</h4>

        </div>

        <div class="container mt-5 mb-5">
            <h1 class="mb-2">¿Quiénes somos?</h1>
            <hr></hr>
            <h4 class="mb-4">COLITAS es una asociación sin ánimo de lucro que lucha contra el maltrato y el abandono de los animales, siendo nuestro principal objetivo la sensibilización y concienciación ciudadana. Con este fin, en el año 2006, se creó el programa COLITAS educa, un proyecto educativo que ha obtenido el reconocimiento del sector y ha sido premiado por entidades como la Fundación Vodafone y la Fundación Affinity.</h4>
            <img src="img/quiensomos.jpg" class="bordes img-fluid colitasFoto2" width="700px">
            
            <h4 class="center">El equipo de COLITAS educa está formado por voluntari@s de la asociación.</h4>
            
            <h4 class="mt-4">Concebimos la educación como la vía de desarrollo de las competencias necesarias para aprender a ser. Para ello, diseñamos e impartimos sesiones formativas y talleres dirigidos a todos los ciclos de Educación Primaria y Secundaria. Nuestras actividades exponen situaciones de relación humano-animal para trasladar lo aprendido a las relaciones entre humanos. De esta manera se trabajan transversalmente los valores que garantizan una mejora en la conviviencia de individuos sean o no de la misma especie.</h4>
        </div>


        <div class="container mt-5 mb-4">
            <h1 class="mb-2">COLITAS Educa</h1>
            <h5 class="mt-1 mb-2"><b>Desarrollando la inteligencia emocional a través de los animales</b></h5>
            <hr></hr>
            <h4>En el año 2006 COLITAS educa nació como el equipo de voluntari@s de COLITAS encargado de sensibilizar y concienciar sobre el maltrato animal. Creíamos que eso era todo, que nuestra misión acabaría allí. No imaginábamos entonces que serían ellos, los “sin voz” los que abrirían las puertas del cambio.</h4>
            <img src="img/colitaseduca.jpg" class="bordes img-fluid colitasFoto">
            
            <h4>En cada actividad que organizábamos en un cole o en un insituto, tomábamos conciencia del vínculo que existía entre ell@s. Al terminar, algunos docentes nos decían emocionados cómo la actividad les había mostrado nuevas habilidades y actitudes de su grupo. La hora del recreo no importaba, no querían que nos fuéramos. Necesitaban saber cómo ayudar y, sobre todo, querían conocer finales felices que les dieran esperanza.</h4>
            
            <h4>Fueron ellos y ellas los que nos enseñaron a despojarnos de los juicios y la culpa. Nos enseñaron a lanzar preguntas, a generar reflexión, a instaurar la mítica frase de: “durante este rato juntos, no existe bien ni mal. Cada opinión y emoción es legítima y tendrá su espacio“. Aquel era el comienzo.</h4>

            <h4>Nos formamos. Aprendimos a fomentar el desarrollo de las habilidades sociales; La inteligencia emocional. En las aulas de secundaria generábamos herramientas de prevención de acoso sin mencionar la palabra “bullying”.  Se hablaba de las consecuencias de una mala gestión de la ira, de derechos y dignidad humana sin hacer referencia al telediario.  Con los animales como parapeto, expresaban emociones, debatían las raíces de los problemas y empezaban a querer cambiar lo que no consideraban justo.</h4>
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