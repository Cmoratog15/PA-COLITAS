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
        <title>Contacto</title>
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
                            <a class="nav-link" href="Colabora.php">Colabora</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" href="Contacto.php">Contacto</a>
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
                    <img src="img/headerContacto.webp" class="d-block w-80 " alt="Donacion">
                    <div class="carousel-caption d-none d-md-block headerColitas">
                        <h2>¡HOLA!</h2>
                        <h3>Si tienes alguna duda puedes contactarnos aquí.</h3>
                    </div>
                </div>
            </div>
        </div>

        <!--TITULO QUE SE VERA SOLO EN TAMAÑO PEQUEÑO-->
        <div class="container mt-5 mb-3 d-md-none headerColitas">
            <h2>¡HOLA!</h2>
            <h3>Si tienes alguna duda puedes contactarnos aquí.</h3>
        </div>

        <div class="container mt-5 mb-4">
            <h4 class="center">A diario recibimos muchos correos electrónicos y llamadas de teléfono, la mayoría para informarnos sobre el abandono de un nuevo animal. Rogamos que tengas paciencia y que, por favor, ayudes al animal mientras nosotros te contestamos, lo más rápido posible.</h4>

            <div class="row contacto">
                <div class="col-md-6 center p-5">
                    <a href="tel: 620406446">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-phone" width="80" height="80" viewBox="0 0 24 24" stroke-width="1.5" stroke="#79bc00" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
                        </svg>
                    </a>
                    <h1>Teléfono de contacto</h1>
                    <h5>(de Martes a Viernes de 10:00h a 15:00h)</h5>
                    <h3><a href="tel: 620406446">620 13 78 12</a></h3>
                    <h6>Te recomendamos que contactes con nosotros preferentemente mediante correo electrónico , el teléfono puede estar saturado.</h6>
                    <div class="map-responsive mt-3">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3079.403567105517!2d-6.351178384772323!3d39.48280097948458!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd15e09e51d5d433%3A0x52a20eeace91b9f6!2sHospital%20Cl%C3%ADnico%20Veterinario!5e0!3m2!1ses!2ses!4v1671222949899!5m2!1ses!2ses" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="embed-responsive-item"></iframe>
                    </div>
                </div>

                <div class="col-md-6 p-5">
                    <form action="mailto:cmoratog15@gmail.com" method="post" enctype="text/plain" class="row g-3 needs-validation" novalidate>
                        <div class="container mb-3 c3">
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label for="validardepartamentos" class="form-label"><h5>Selecciona el departamento con el que quieras contactar.</h5></label>
                                    <select id="validardepartamentos" class="form-select" required>
                                        <option selected value="" disabled>Departamentos:</option>
                                        <option value="1">General</option>
                                        <option value="2">Adopciones</option>
                                        <option value="3">Socios</option>
                                        <option value="4">Padrinos</option>
                                        <option value="5">Prensa</option>
                                        <option value="6">Clinicas Colaboradoras</option>
                                        <option value="7">COLITAS educa</option>
                                        <option value="8">Voluntarios</option>
                                        <option value="9">Sobre la web de COLITAS</option>
                                        <option value="10">Formación</option>
                                        <option value="11">Centro Veterinario</option>
                                        <option value="12">Denuncias</option>
                                    </select>
                                    <div class="invalid-feedback"><b>Seleccione un departamento</b></div>
                                </div>
                                <!--CAMPO NOMBRE-->
                                <div class="col-md-5 mb-3">
                                    <label for="validarnombre" class="form-label">Nombre</label>
                                    <input type="text" class="form-control" id="validarnombre" value="" placeholder="Nombre" required>
                                    <div class="invalid-feedback"><b>Inserte su nombre</b></div>
                                </div>
                                <!--CAMPO APELLIDO-->
                                <div class="col-md-7 mb-3">
                                    <label for="validarapellido" class="form-label">Apellidos</label>
                                    <input type="text" class="form-control" id="validarapellido" value="" placeholder="Apellidos" required>
                                    <div class="invalid-feedback"><b>Inserte sus apellidos</b></div>
                                </div>
                                <!--COMPLEMENTO + CAMPO USUARIO-->
                                <div class="col-md-12 mb-3">
                                    <label for="validationCustomUsername" class="form-label">Email</label>
                                    <div class="input-group has-validation">
                                        <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" placeholder="mail" required>
                                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                                        <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" placeholder="correo.com" required>
                                        <div class="invalid-feedback"><b>Inserte su E-mail</b></div>
                                    </div>
                                </div>
                                <!--CAMPO ASUNTO-->
                                <div class="col-md-12 mb-3">
                                    <label for="asunto" class="form-label">Asunto</label>
                                    <input type="text" class="form-control" value="" placeholder="Asunto" required>
                                    <div class="invalid-feedback"><b>Debe insertar un asunto</b></div>
                                </div>
                                <!--CAMPO MENSAJE-->
                                <div class="col-md-12 mb-3">
                                    <label for="floatingTextarea2" class="form-label">Mensaje</label>
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="" id="floatingTextarea2" style="height: 100px" required></textarea>
                                        <div class="invalid-feedback"><b>Debe insertar un mesanje</b></div>
                                    </div>
                                </div>
                                <!--Politica prot. datos-->
                                <div class="col-md-12 m-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                        <label class="form-check-label" for="invalidCheck">
                                            He leído y acepto los <b><a href="documentacion/Terminos y condiciones de uso.pdf" download="erminos y condiciones de uso">términos y condiciones de uso.</a></b>
                                        </label>
                                        <div class="invalid-feedback"><b>Debes aceptar las politicas de proteccion de datos</b></div>
                                    </div>
                                </div>

                                <!--BOTONES-->
                                <div class="col-md-12">
                                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                        <!--BOTON ENVIAR-->
                                        <input class="btn botonEnviar" type="submit" value="Enviar">
                                        <!--BOTON RESET-->
                                        <input class="btn botonBorrar" type="reset" value="Borrar">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="container mt-5 mb-4">
            <div class="row">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail" width="100" height="100" viewBox="0 0 24 24" stroke-width="1.5" stroke="#79bc00" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <rect x="3" y="5" width="18" height="14" rx="2" />
                    <polyline points="3 7 12 13 21 7" />
                </svg>
                <h1>Correos electrónicos de COLITAS</h1>
                <h4>Por favor, no escribas a todas las cuentas, selecciona con quién quieres contactar y cuál es el motivo, ¡gracias!</h4>
                <div class="col-md-6 mailContacto">
                    <h6>General: <a href="mailto:cmoratog15@gmail.com">protectoraAnimales@colitas.com</a></h6>
                    <h6>Adopciones: <a href="mailto:cmoratog15@gmail.com">adopciones@colitas.com</a></h6>
                    <h6>Contacto para los Socios: <a href="mailto:cmoratog15@gmail.com">socios@colitas.com</a></h6>
                    <h6>Contacto para los Padrinos: <a href="mailto:cmoratog15@gmail.com">apadrinamientos@colitas.com</a></h6>
                    <h6>Gabinete de Prensa y Marketing , además de colaboración y donaciones: <a href="mailto:cmoratog15@gmail.com">prensaymarketing@colitas.com</a></h6>
                    <h6>Contacto para clínicas colaboradoras: <a href="mailto:cmoratog15@gmail.com">cvcolaboradores@colitas.com</a></h6>
                </div>
                <div class="col-md-6 mailContacto">
                    <h6>Interesados en campañas de educación para niños y jóvenes en centros educativos: <a href="mailto:">educacion@acolitas.com</a></h6>
                    <h6>Voluntarios: <a href="mailto:cmoratog15@gmail.com">voluntarios@colitas.com</a></h6>
                    <h6>Sobre la web de COLITAS: <a href="mailto:cmoratog15@gmail.com">web@colitas.com</a></h6>
                    <h6>Sala de Formación: <a href="mailto:cmoratog15@gmail.com">saladeformacion@colitas.com</a></h6>
                    <h6>Centro Veterinario: <a href="mailto:cmoratog15@gmail.com">rrhh_cv@colitas.com</a></h6>
                    <h6>Denuncias: <a href="mailto:cmoratog15@gmail.com">denuncias@colitas.com</a></h6>
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