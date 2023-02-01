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
        <title>Colabora</title>
        <link rel="shortcut icon" type="image/x-icon" href="img/logo.png">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--Bootstraps CSS-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!--CSS-->
        <link href="style.css" rel="stylesheet">
        <!--FUENTE SALUDO -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Yellowtail&display=swap" rel="stylesheet">
        <?php include 'BaseDatos/conexion.php' ?>
    </head>
    <body>
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
                            <a class="nav-link" href="CentroVeterinario.php">Centro Veterinario</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Servicios.php">Servicios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="Colabora.php">Colabora</a>
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
                    <img src="img/headerColabora.jpg"  class="d-block w-80 img-fluid" alt="Donacion">
                    <div class="carousel-caption d-none d-md-block headerColitas">
                        <h2>Colabora</h2>
                    </div>
                </div>
            </div>
        </div>

        <!--TITULO QUE SE VERA SOLO EN TAMAÑO PEQUEÑO-->
        <div class="container mt-5 mb-3 d-md-none headerColitas">
            <h2>Servicios</h2>
        </div>
    <?php 
    //----------------------------------------------------

    //VERIFICAMOS SI ES ADMINISTRADOR:
        if( $_SESSION["idusuario"] == 1){
    ?>
    <!--FORMULARIO ALTA ANIMAL-->
            <div class="container mt-5 mb-4 contactanos altanimal">
            <h1>Alta nuevo animal</h1>
        <!--INSERTAMOS LAS IMAGENES AL SERVIDOR-->
        <?php
            if (isset($_SESSION['message']) && $_SESSION['message'])
            {
            echo('<b>'. $_SESSION['message'] . '</b>');
            unset($_SESSION['message']);
            }
        ?>
        <h5 class="mb-1">1 - Inserte las imágenes en el servidor</h5>
        <hr>
        <!--FOTO DEL-->
        <form class="mt-4 needs-validation" method="post" action="BaseDatos/upload.php" enctype="multipart/form-data" novalidate>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="nombredel" class="form-label">Nombre del archivo A</label>
                    <input type="text" name = "nombre" class="form-control" required>
                    <div class="invalid-feedback">Debe insertar un nombre para el archivo</div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="fotodel" class="form-label">Inserte foto cara</label>
                    <input type="file" name="uploadedFile" class="form-control" required>
                    <div class="invalid-feedback">Debe insertar una imagen</div>
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-center d-sm-flex justify-content-sm-end">
                    <input type="submit" name="uploadBtn" value="Upload" class="btn botonUpload" required>
                </div>
            </div>
        </form>
        <!--FOTO TRAS-->
        <form class="needs-validation" method="post" action="BaseDatos/upload.php" enctype="multipart/form-data" novalidate>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="nombredel" class="form-label">Nombre del archivo B</label>
                    <input type="text" name = "nombre" class="form-control" required>
                    <div class="invalid-feedback">Debe insertar un nombre para el archivo</div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="fotodel" class="form-label">Inserte foto completa</label>
                    <input type="file" name="uploadedFile" class="form-control" required>
                    <div class="invalid-feedback">Debe insertar una imagen</div>
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-center d-sm-flex justify-content-sm-end">
                    <input type="submit" name="uploadBtn" value="Upload" class="btn botonUpload">
                </div>
            </div>
        </form>
        <!--REALIZAMOS EL ALTA DEL ANIMAL EN LA BD-->
            <h5 class="mb-1">2 - Realice el alta del animal</h5>
            <hr>
            <form id="form1" action="BaseDatos/insertarAnimales.php" method="post" class="row g-3 mt-3 needs-validation" novalidate>
                <!--NOMBRE-->
                <div class="col-md-4">
                    <label for="nombrealta" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombrealta" value="" name="nombreAlta" required>
                    <div class="invalid-feedback">
                        Inserte nombre del animal
                    </div>
                </div>
                <!--GENERO-->
                <div class="col-md-4">
                    <label for="generoAlta" class="form-label">Genero</label>
                    <select class="form-select" id="generoAlta" aria-describedby="generoAltaFeedback" name="generoAlta" required>
                    <option selected disabled value="">Selecciona una opción</option>
                    <option value="Macho">Macho</option>
                    <option value="Hembra">Hembra</option>
                    </select>
                    <div id="generoAltaFeedback" class="invalid-feedback">
                        Seleccione el tamaño del animal
                    </div>
                </div>
                <!--RAZA-->
                <div class="col-md-4">
                    <label for="razaalta" class="form-label">Raza</label>
                    <input type="text" class="form-control" id="razaalta" value="" name="razaAlta" required>
                    <div class="invalid-feedback">
                        Inserte la raza del animal
                    </div>
                </div>
                <!--FECHA NACIMIENTO-->
                <div class="col-md-4">
                    <label for="fechaalta" class="form-label">Fecha de Nacimiento</label>
                    <input type="date" class="form-control" id="fechaalta" aria-describedby="fechaaltaFeedback" name="fechaNacAlta" required>
                    <div id="fechaaltaFeedback" class="invalid-feedback">
                        Inserte la fecha de nacimiento del animal
                    </div>
                </div>
                <!--TAMAÑO-->
                <div class="col-md-4">
                    <label for="tamañoalta" class="form-label">Tamaño del Animal</label>
                    <select class="form-select" id="tamañoalta" aria-describedby="tamañoaltaFeedback" name="tamañoAlta" required>
                    <option selected disabled value="">Selecciona una opción</option>
                    <option value="Pequeño">Pequeño</option>
                    <option value="Mediano">Mediano</option>
                    <option value="Grande">Grande</option>
                    </select>
                    <div id="tamañoaltaFeedback" class="invalid-feedback">
                        Seleccione el tamaño del animal
                    </div>
                </div>
                <!--PESO-->
                <div class="col-md-4">
                    <label for="pesoalta" class="form-label">Peso</label>
                    <input type="decimal" class="form-control" id="pesoalta" value="" name="pesoAlta" required>
                    <div class="invalid-feedback">
                        Inserte el peso del animal
                    </div>
                </div>
                <!--TAMAÑO-->
                <div class="col-md-3">
                    <label for="esterilizadoalta" class="form-label">Esterilizado</label>
                    <select class="form-select" id="esterilizadoalta" aria-describedby="esterilizadoaltaFeedback" name="esterilizadoAlta" required>
                    <option selected disabled value="">Selecciona una opción</option>
                    <option value="Si">Si</option>
                    <option value="No">No</option>
                    </select>
                    <div id="esterilizadoaltaFeedback" class="invalid-feedback">
                        Seleccione si el animal esta esterilizado o no
                    </div>
                </div>
                <!--CARACTER-->
                <div class="col-md-6">
                    <label for="caracteralta" class="form-label">Caracter</label>
                    <input type="text" class="form-control" id="caracteralta" value="" name="caracterAlta" required>
                    <div class="invalid-feedback">
                        Inserte breve descripción del caracter del animal
                    </div>
                </div>
                <!--TIPO DE ANIMAL-->
                <div class="col-md-3">
                    <label for="tipoalta" class="form-label">Tipo de Animal</label>
                    <select class="form-select" id="tipoalta" aria-describedby="tipoaltaFeedback" name="tipoAnimalAlta" required>
                    <option selected disabled value="">Selecciona una opción</option>
                    <option value="1">Gato</option>
                    <option value="2">Perro</option>
                    <option value="3">PPP</option>
                    </select>
                    <div id="tipoaltaFeedback" class="invalid-feedback">
                        Seleccione el tipo de animal
                    </div>
                </div>
                <!--FOTO DEL-->
                <div class="col-md-6 mb-3">
                    <label for="fotodel" class="form-label">Seleccione foto cara insertada anteriormente</label>
                    <input type="file" class="form-control" id="fotodel" aria-label="file example" name="fotoDelAlta"  required>
                    <div class="invalid-feedback">Debe seleccionar una imagen</div>
                </div>

                <!--FOTO TRAS-->
                <div class="col-md-6 mb-3">
                    <label for="fototras" class="form-label">Seleccione foto completa insertada anteriormente</label>
                    <input type="file" class="form-control" id="fototras" aria-label="file example" name="fotoTrasAlta" required>
                    <div class="invalid-feedback">Debe seleccionar una imagen</div>
                </div>

                <!--BOTON-->
                <div class="col-md-12">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <!--BOTON ENVIAR-->
                        <input class="btn botonEnviar" type="submit" name="enviar" value="Enviar">
                        <!--BOTON RESET-->
                        <input class="btn botonBorrar" type="reset" value="Borrar">
                    </div>
                </div>
            </form>
        </div>
    <?php 
        }
    //---------------------------------------------------------------------
    ?>

        <div class="container mt-5 mb-4">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 col-sm-12 colaboraCol">
                    <h1>Hazte socio</h1>
                    <img src="img/hazteSocio.jpg" class="d-block w-100 colaboraImg" alt="hazteSocio">
                    <h6>El factor económico es el mayor limitante para ampliar las acciones y poder llegar a atender a un mayor número de animales, por lo que la ayuda de nuestros socios hace posible que podamos seguir protegiendo y defendiendo a los animales más desfavorecidos.</h6>
                    <!--Boton-->
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a class="btn btn-lg rounded-pill colaboraboton" 
                        href=
                        <?php 
                            $usuarioSesion = $_SESSION["idusuario"];
                            //Si no ha iniciado sesión lo enviamos al login
                            if(empty($usuarioSesion)){
                                echo "Login/login.php";
                             //Si ha iniciado sesión le dejamos seguir
                            }else{
                                echo "HazteSocio.php";
                            }
                        ?>
                        role="button" target="_blank">Ver más</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 colaboraCol">
                    <h1>Apadrina</h1>
                    <img src="img/apadrina.jpg" class="d-block w-100 colaboraImg" alt="apadrina">
                    <h6>Los padrinos tienen la opción de subir al Centro de Adopción los sábados. Apadrinar es una maravillosa y gratificante experiencia, ya que el padrino puede comprobar cómo gracias a su cariño y al tiempo que ha dedicado, mejora la calidad de vida y el bienestar del animal apadrinado.</h6>
                    <!--Boton-->
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a class="btn btn-lg rounded-pill colaboraboton" 
                        href=
                        <?php 
                            $usuarioSesion = $_SESSION["idusuario"];
                            //Si no ha iniciado sesión lo enviamos al login
                            if(empty($usuarioSesion)){
                                echo "Login/login.php";
                             //Si ha iniciado sesión le dejamos seguir
                            }else{
                                echo "Apadrina.php";
                            }
                        ?>
                        role="button" target="_blank">Ver más</a>
                    </div>

                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 colaboraCol">
                    <h1>Realiza un donativo</h1>
                    <img src="img/donativo.jpg" class="d-block w-100 colaboraImg" alt="donativo">
                    <h6>Gracias a tu generosidad, la donación recibida se destinará íntegramente a mejorar la calidad de vida de los animales que viven de forma temporal en nuestro Centro de Adopción, a fomentar la tenencia responsable y el correcto cuidado de los animales de compañía, a evitar y denunciar su abandono… es decir, a seguir trabajando por y para los animales abandonados y la problemática que existe en España.</h6>

                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a class="btn btn-lg rounded-pill colaboraboton" href="https://www.paypal.com/donate/?hosted_button_id=5LBV6URXE966L" role="button" target="_blank">Ir a donar</a>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 col-sm-12 colaboraCol">
                    <h1>Centro Veterinario</h1>
                    <img src="img/centroVeterinario.jpg" class="d-block w-100 colaboraImg" alt="centroVeterinario">
                    <h6>El 100% de los beneficios del Centro Veterinario se destina a los animales abandonados, ni un céntimo es derivado a otro objetivo. Un Centro que aúna el saber de muchos años tratando a miles de animales y casos prácticamente imposibles de recuperar, con el trato vocacional de las personas que trabajan en COLITAS, de amor a los animales.</h6>
                    <!--Boton-->
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a href="CentroVeterinario.php" class="btn btn-lg rounded-pill colaboraboton" role="button" target="_blank">Ir a Centro Veterinario</a>
                    </div>
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