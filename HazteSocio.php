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
        <title>Hazte Socio</title>
        <link rel="shortcut icon" type="image/x-icon" href="img/logo.png">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--Bootstraps CSS-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
                            <a class="nav-link" href="Colabora.php">Colabora</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="Contacto.php">Contacto</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="modal" data-bs-target="#modalTienda">Tienda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Login/login.php">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-circle" width="32" height="32" viewBox="0 0 24 24" stroke-width="2" stroke="#f4eb97" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                    <circle cx="12" cy="12" r="9" />
                                    <circle cx="12" cy="10" r="3" />
                                    <path d="M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855" />
                                </svg>
                            </a>
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
                    <img src="img/hazteSocio.jpg"  class="d-block w-80 img-fluid" alt="Donacion">
                    <div class="carousel-caption d-none d-md-block headerColitas">
                        <h2>Hazte socio</h2>
                    </div>
                </div>
            </div>
        </div>

        <!--TITULO QUE SE VERA SOLO EN TAMAÑO PEQUEÑO-->
        <div class="container mt-5 mb-3 d-md-none headerColitas">
            <h2>Hazte socio</h2>
        </div>

        <div class="container mt-5 mb-4">
            <h1>Tú puedes cambiar su destino, colabora con nosotros.</h1>
            <h4 class="center"><b>No sólo les ayudas a ellos. ¡Tú también saldrás ganando!</b></h4>
            <h4 class="center"><b>Con tu aportación haces posible que sigamos realizando nuestra labor de protección y defensa de los animales más desfavorecidos.</b></h4>
            <div class="row align-items-center">
                <div class="col-md-6">
                    <img src="img/socio1.jpg" width="500px" class="bordes img-fluid">
                </div>
                <div class="col-md-6">
                    <h4>COLITAS acoge en su Centro de Adopción a más de 2000 animales abandonados cada año, a los que les proporciona un hogar provisional y cuidados, y para los que se realiza la búsqueda continua de una familia definitiva. Sin embargo, sólo en la Comunidad de Madrid se abandonan cerca de 20.000 animales al año. Esto da una idea del ingente trabajo que queda por hacer y del coste que supondría, por lo que las aportaciones económicas de nuestro socios nos dan la oportunidad de extender nuestra ayuda a más animales necesitados.</h4>

                    <h4>El factor económico es, por desgracia, el mayor limitante para ampliar las acciones y poder llegar a atender a un mayor número de animales, por lo que tu colaboración como socio hará posible que se sigan protegiendo y defendiendo a los animales más desfavorecidos, ya que tu aportación se destinará íntegramente al cuidado directo de los animales.</h4>

                    <h4>Al hacerte socio de COLITAS recibirás:</h4>
                    <ul>
                        <li><h4>El carnet de socio, con el que obtienes descuentos en las clínicas colaboradoras para la atención veterinaria de tu compañero de vida.</h4></li>
                        <li><h4>Newsletter electrónicas donde estarás informado de la actualidad de la Asociación.</h4></li>
                    </ul>
                </div>
            </div>
            
            <h1>¿Cómo puede hacerme socio?</h1>
            <h6>Si quieres aportar una ayuda económica haciéndote socio, rellena el siguiente formulario de socio con tus datos personales y bancarios desde una sección segura (para cualquier duda con la forma de pago, puedes contactar con <a href="mailto:cmoratog15@gmail.com">socios@colitas.com</a>), indicando la aportación que deseas realizar y con qué periodicidad.</h6>

            <div class="row haztesocio">
            <?php 
                $usuarioSesion = $_SESSION["idusuario"];
                //Sentencia de búsqueda SQL:
                $sentencia = $bd -> query("SELECT * FROM usuarios WHERE id_usuario = $usuarioSesion");
                
                //Recogemos los resultados en una variable
                $usuarios = $sentencia -> fetchAll(PDO::FETCH_OBJ); 

                //Mostramos los resultados
                foreach ($usuarios as $datos){        
            ?>
                <div class="col-md-6">
                    <img src="img/socio2.png" width="415" class="bordes img-fluid">
                </div>
                <div class="col-md-6">
                <form method="post" action="BaseDatos/insertarSocios.php">
                    <div class="row">
                        <!--ID USUARIO OCULTO-->
                        <input type="hidden" id="idusuario" name="idusuario" value="<?php echo $datos->id_usuario?>">

                        <!--CAMPO NOMBRE-->
                        <div class="col-md-6">
                            <label for="inputnombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="inputnombre" name="nombreS" value="<?php echo $datos->nombres?>" readonly required>
                        </div>
                        <!--CAMPO APELLIDOS-->
                        <div class="col-md-6">
                            <label for="inputapellidos" class="form-label">Apellidos</label>
                            <input type="text" class="form-control" id="inputapellidos" name="apellidosS" value="<?php echo $datos->apellidos?>" readonly required>
                        </div>

                        <!--CAMPO CORREO-->
                        <div class="col-md-6">
                            <label for="inputcorreo" class="form-label">Correo</label>
                            <input type="email" class="form-control" id="inputcorreo" name="correoS" value="<?php echo $datos->correo?>" readonly required>
                        </div>
                        <!--CAMPO TELEFONO-->
                        <div class="col-md-6">
                            <label for="inputtelefono" class="form-label">Telefono</label>
                            <input type="tel" class="form-control" id="inputtelefono" name="telefonoS" value="<?php echo $datos->telefono?>" readonly required>
                        </div>
                        <!--CAMPO DIRECCION-->
                        <div class="col-md-12">
                            <label for="inputdireccion" class="form-label">Direccion</label>
                            <input type="text" class="form-control" id="inputAinputdireccionddress" name="direccS" value="<?php echo $datos->direccion?>" readonly required>
                        </div>
                        <!--CAMPO CP-->
                        <div class="col-md-4">
                            <label for="inputCP" class="form-label">CP</label>
                            <input type="text" class="form-control" id="inputCP" name="CPS" value="<?php echo $datos->cp?>" readonly required>
                        </div>
                        <!--CAMPO POBLACION-->
                        <div class="col-md-4">
                            <label for="inputPoblacion" class="form-label">Poblacion</label>
                            <input type="text" class="form-control" id="inputPoblacion" name="poblacionS" value="<?php echo $datos->poblacion?>" readonly required>
                        </div>
                        <!--CAMPO PROVINCIA-->
                        <div class="col-md-4">
                            <label for="inputProvincia" class="form-label">Provincia</label>
                            <input type="text" class="form-control" id="inputProvincia" name="provinciaS" value="<?php echo $datos->provincia?>" readonly required>
                        </div>
                        <!--CAMPO NIF-->
                        <div class="col-md-6">
                            <label for="inputNIF" class="form-label">NIF</label>
                            <input type="text" class="form-control" id="inputNIF" name="NIFS" value="<?php echo $datos->nif?>" readonly required>
                        </div>
                        <!--CAMPO IMPORTE-->
                        <div class="col-md-6">
                            <label for="inputimporte" class="form-label">Importe</label>
                            <input type="text" class="form-control" id="inputimporte" name="importeS" required>
                        </div>
                        <!--CAMPO IBAN-->
                        <div class="col-md-12">
                            <label for="inputIBAN" class="form-label">IBAN</label>
                            <input type="text" class="form-control" id="inputIBAN" name="IBANS" value="<?php echo $datos->iban?>" readonly required>
                        </div>
                        <!--RADIO PERIODICIDAD-->
                        <h4>Periodicidad</h4>
                        <div class="radios">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="PeriodicidadS" id="PeriodicidadR1" value="Mensual" checked>
                                <label class="form-check-label" for="PeriodicidadR1">
                                    Mensual
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="PeriodicidadS" id="PeriodicidadR2" value="Trimestral">
                                <label class="form-check-label" for="PeriodicidadR2">
                                    Trimestral
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="PeriodicidadS" id="PeriodicidadR3" value="Semestral">
                                <label class="form-check-label" for="PeriodicidadR3">
                                    Semestral
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="PeriodicidadS" id="PeriodicidadR4" value="Anual">
                                <label class="form-check-label" for="PeriodicidadR4">
                                    Anual
                                </label>
                            </div>
                        </div>
                        <!--RADIO CONOCER-->
                        <h4>¿Cómo nos conociste?</h4>
                        <div class="radios">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="conocer" id="conocer1" checked>
                                <label class="form-check-label" for="conocer1">
                                    Web COLITAS
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="conocer" id="conocer2">
                                <label class="form-check-label" for="conocer2">
                                    Eres adoptante
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="conocer" id="conocer3">
                                <label class="form-check-label" for="conocer3">
                                    Por un conocido
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="conocer" id="conocer4">
                                <label class="form-check-label" for="conocer4">
                                    Por otra web
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="conocer" id="conocer5">
                                <label class="form-check-label" for="conocer5">
                                    Otros
                                </label>
                            </div>
                        </div>

                        <!--Politica prot. datos-->
                        <div class="col-md-12 m-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="true" id="invalidCheck" name="politicaS" checked required>
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
                    <?php } ?>
                </form>
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