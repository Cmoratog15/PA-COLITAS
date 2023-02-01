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
        <title>Apadrina</title>
        <link rel="shortcut icon" type="image/x-icon" href="img/logo.png">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--Bootstraps CSS-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="style.css" rel="stylesheet">
        <!--FUENTE SALUDO -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Yellowtail&display=swap" rel="stylesheet">
        <?php 
            //Conexión a la Base de Datos:
            include 'BaseDatos/conexion.php';
        ?>  
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
                                <li><a class="dropdown-item" href="adopcionPPP.html"><p>Programa "PPPerfectos"</p></a></li>
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
                    <img src="img/apadrina.jpg"  class="d-block w-80 img-fluid" alt="Donacion">
                    <div class="carousel-caption d-none d-md-block headerColitas">
                        <h2>Apadrina</h2>
                    </div>
                </div>
            </div>
        </div>

        <!--TITULO QUE SE VERA SOLO EN TAMAÑO PEQUEÑO-->
        <div class="container mt-5 mb-3 d-md-none headerColitas">
            <h2>Apadrina</h2>
        </div>

        <div class="container mt-5 mb-4">
            <h1>¿Qué significa ser padrino?</h1>
            <!--SOLO SE VERA CON LA VENTANA TAMAÑO CHICO-->
            <div class="container mt-5">
                <div class="row">
                    <div class="d-xxl-none">
                        <div id="carouselExampleInterval4" class="carousel slide carruselserv" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active" data-bs-interval="2000">
                                    <img src="img/ap1.jpg" class="d-block w-75 h-75" alt="serv1">
                                </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                    <img src="img/ap2.jpg" class="d-block w-75 h-75" alt="serv2">
                                </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                    <img src="img/ap3.jpg" class="d-block w-75 h-75" alt="serv3">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-md-5 d-none d-xxl-block">
                    <img src="img/ap1.jpg" width="500px" class="bordes margen img-fluid">
                    <img src="img/ap3.jpg" width="500px" class="bordes margen img-fluid">
                    <img src="img/ap2.jpg" width="500px" class="bordes margen img-fluid">
                </div>

                
                <div class="col-md-7 d-none d-xxl-block">
                    <h4>En muchas ocasiones hay quien quiere ayudar a perros o gatos sin hogar pero que, por falta de tiempo, recursos o porque ya comparte su vida con otros animales, no pueden adoptar.</h4>

                    <h4>En esta situación, COLITAS propone la posibilidad del apadrinamiento. Apadrinar un animal implica hacerse cargo de parte del gasto originado de su cuidado en el Centro de Adopción, cubriendo sus necesidades básicas de manutención y asistencia veterinaria, mediante una cuota mensual mínima de 20 euros..</h4>

                    <h4>Los padrinos tiene la opción de subir al Centro de COLITAS los sábados en el horario de 10 h a 18 h, con cita previa para estar con su ahijado. Un voluntario atenderá y acompañará en todo momento al padrino, resolviendo cualquier duda que le pueda surgir y asegurando que, tanto padrino como apadrinado, disfruten del tiempo que pasan juntos. Éste es un momento muy especial para todos los animales del Centro que agradecen enormemente la compañía y el cariño que se les da, ya sea un perro, un gato o una de las preciosas cerditas vietnamitas. Además, según la especie, el padrino participa en el aprendizaje de algunos comportamientos o en la mejora del proceso de socialización, lo cual resulta fundamental para aumentar las posibilidades de adopción. Así por ejemplo, puedes ayudar a perros y gatos, a los que aún les cuesta el contacto con los humanos, a que empiecen a confiar y a tener ganas de interaccionar. En aquellos casos en los que los animales están más avanzados, se pueden mejorar temas relacionados con la correa (en caso de perros) y con la manipulación por zonas que aún les cueste un poquito. Y, por supuesto, a aquellos animales que tengan una relación perfecta, darles mucha compañía, mimos y juego.</h4>

                    <h4>Apadrinar se convierte en una maravillosa y gratificante experiencia, ya que el padrino puede comprobar como gracias a su cariño y al tiempo que ha dedicado de forma presencial, mejora la calidad de vida y el bienestar del animal apadrinado. Y, en el caso de que el perro o gato que apadrines sea adoptado, puedes pasar a ser el padrino de otro animal de el Centro que tú elijas.</h4>

                    <h4>Muchos de los animales han pasado momentos difíciles y la dedicación de nuestros padrinos se convierte en el principio de una nueva vida y es por ello que todo el equipo de COLITAS quiere agradecer todo vuestro esfuerzo, tiempo y cariño.</h4>
                </div>
            </div>

            <div class="d-none d-sm-block d-md-block d-xxl-none">
                <div class="col-md-12">
                    <h4>En muchas ocasiones hay quien quiere ayudar a perros, gatos, conejos o cerditos sin hogar pero que, por falta de tiempo, recursos o porque ya comparte su vida con otros animales, no pueden adoptar.</h4>

                    <h4>En esta situación, COLITAS propone la posibilidad del apadrinamiento. Apadrinar un animal implica hacerse cargo de parte del gasto originado de su cuidado en el Centro de Adopción, cubriendo sus necesidades básicas de manutención y asistencia veterinaria, mediante una cuota mensual mínima de 20 euros..</h4>

                    <h4>Los padrinos tiene la opción de subir al Centro de COLITAS los sábados en el horario de 10 h a 18 h, con cita previa para estar con su ahijado. Un voluntario atenderá y acompañará en todo momento al padrino, resolviendo cualquier duda que le pueda surgir y asegurando que, tanto padrino como apadrinado, disfruten del tiempo que pasan juntos. Éste es un momento muy especial para todos los animales del Centro que agradecen enormemente la compañía y el cariño que se les da, ya sea un perro, un gato o una de las preciosas cerditas vietnamitas. Además, según la especie, el padrino participa en el aprendizaje de algunos comportamientos o en la mejora del proceso de socialización, lo cual resulta fundamental para aumentar las posibilidades de adopción. Así por ejemplo, puedes ayudar a perros y gatos, a los que aún les cuesta el contacto con los humanos, a que empiecen a confiar y a tener ganas de interaccionar. En aquellos casos en los que los animales están más avanzados, se pueden mejorar temas relacionados con la correa (en caso de perros) y con la manipulación por zonas que aún les cueste un poquito. Y, por supuesto, a aquellos animales que tengan una relación perfecta, darles mucha compañía, mimos y juego.</h4>

                    <h4>Apadrinar se convierte en una maravillosa y gratificante experiencia, ya que el padrino puede comprobar como gracias a su cariño y al tiempo que ha dedicado de forma presencial, mejora la calidad de vida y el bienestar del animal apadrinado. Y, en el caso de que el perro o gato que apadrines sea adoptado, puedes pasar a ser el padrino de otro animal de el Centro que tú elijas.</h4>

                    <h4>Muchos de los animales han pasado momentos difíciles y la dedicación de nuestros padrinos se convierte en el principio de una nueva vida y es por ello que todo el equipo de COLITAS quiere agradecer todo vuestro esfuerzo, tiempo y cariño.</h4>
                </div>
            </div>
            
            <h1>¿Cómo hacerse padrino?</h1>

            <form method="post" action="BaseDatos/insertarPadrinos.php">
                <div class="row haztesocio align-items-center">
                    <div class="col-lg-6">
                        <div class="row">
                        <?php 
                            $usuarioSesion = $_SESSION["idusuario"];
                            //Sentencia de búsqueda SQL:
                            $sentencia = $bd -> query("SELECT * FROM usuarios WHERE id_usuario = $usuarioSesion");
                            
                            //Recogemos los resultados en una variable
                            $usuarios = $sentencia -> fetchAll(PDO::FETCH_OBJ); 

                            //Mostramos los resultados
                            foreach ($usuarios as $datos){        
                        ?>
                            <!--ID USUARIO OCULTO-->
                            <input type="hidden" id="idusuarioap" name="idusuarioAp" value="<?php echo $datos->id_usuario?>">

                            <!--CAMPO NOMBRE-->
                            <div class="col-lg-6">
                                <label for="inputnombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="inputnombre" name="nombreAp" value="<?php echo $datos->nombres?>" readonly required>
                            </div>
                            <!--CAMPO APELLIDOS-->
                            <div class="col-lg-6">
                                <label for="inputapellidos" class="form-label">Apellidos</label>
                                <input type="text" class="form-control" id="inputapellidos" name="apellidosAp" value="<?php echo $datos->apellidos?>" readonly required>
                            </div>
                            <!--CAMPO CORREO-->

                            <div class="col-lg-6">
                                <label for="inputcorreo" class="form-label">Correo</label>
                                <input type="email" class="form-control" id="inputcorreo" name="correoAp" value="<?php echo $datos->correo?>" readonly required>
                            </div>
                            <!--CAMPO TELEFONO-->
                            <div class="col-lg-6">
                                <label for="inputtelefono" class="form-label">Telefono</label>
                                <input type="tel" class="form-control" id="inputtelefono" name="telefonoAp" value="<?php echo $datos->telefono?>" readonly required>
                            </div>
                            <!--CAMPO DIRECCION-->
                            <div class="col-lg-12">
                                <label for="inputdireccion" class="form-label">Direccion</label>
                                <input type="text" class="form-control" id="inputAinputdireccionddress" name="direccAp" value="<?php echo $datos->direccion?>" readonly required>
                            </div>
                            <!--CAMPO CP-->
                            <div class="col-lg-4">
                                <label for="inputCP" class="form-label">CP</label>
                                <input type="text" class="form-control" id="inputCP" name="CPAp" value="<?php echo $datos->cp?>" readonly required>
                            </div>
                            <!--CAMPO POBLACION-->
                            <div class="col-lg-4">
                                <label for="inputPoblacion" class="form-label">Poblacion</label>
                                <input type="text" class="form-control" id="inputPoblacion" name="poblacionAp" value="<?php echo $datos->poblacion?>" readonly required>
                            </div>
                            <!--CAMPO PROVINCIA-->
                            <div class="col-lg-4">
                                <label for="inputProvincia" class="form-label">Provincia</label>
                                <input type="text" class="form-control" id="inputProvincia" name="provinciaAp" value="<?php echo $datos->provincia?>" readonly required>
                            </div>
                            <!--CAMPO NIF-->
                            <div class="col-lg-6">
                                <label for="inputNIF" class="form-label">NIF</label>
                                <input type="text" class="form-control" id="inputNIF" name="NIFAp" value="<?php echo $datos->nif?>" readonly required>
                            </div>
                            <!--CAMPO IMPORTE-->
                            <div class="col-lg-6">
                                <label for="inputimporte" class="form-label">Importe</label>
                                <input type="number" class="form-control" id="inputimporte" min= "20" name="importeAp" required>
                            </div>
                            <!--CAMPO IBAN-->
                            <div class="col-lg-12">
                                <label for="inputIBAN" class="form-label">IBAN</label>
                                <input type="text" class="form-control" id="inputIBAN" name="IBANAp" value="<?php echo $datos->iban?>" readonly required>
                            </div>
                            <!--RADIO PERIODICIDAD en linea para tamaño mediano y sup-->
                            <h4>Periodicidad</h4>
                            <div class="radios d-none d-md-block">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="PeriodicidadAp" id="PeriodicidadR1" value="Mensual" checked>
                                    <label class="form-check-label" for="PeriodicidadR1">
                                        Mensual
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="PeriodicidadAp" id="PeriodicidadR2" value="Trimestral">
                                    <label class="form-check-label" for="PeriodicidadR2">
                                        Trimestral
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="PeriodicidadAp" id="PeriodicidadR3" value="Semestral">
                                    <label class="form-check-label" for="PeriodicidadR3">
                                        Semestral
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="PeriodicidadAp" id="PeriodicidadR4" value="Anual">
                                    <label class="form-check-label" for="PeriodicidadR4">
                                        Anual
                                    </label>
                                </div>
                            </div>
                            <!--RADIO PERIODICIDAD vertical para tamaño chico-->
                            <div class=".d-block d-md-none">
                                <div class="form-check ">
                                    <input class="form-check-input" type="radio" name="PeriodicidadPequeñoAp" id="PeriodicidadRC1" value="Mensual" checked>
                                    <label class="form-check-label" for="PeriodicidadRC1">
                                        Mensual
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="PeriodicidadPequeñoAp" id="PeriodicidadRC2" value="Trimestral">
                                    <label class="form-check-label" for="PeriodicidadRC2">
                                        Trimestral
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="PeriodicidadPequeñoAp" id="PeriodicidadRC3" value="Semestral">
                                    <label class="form-check-label" for="PeriodicidadRC3">
                                        Semestral
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="PeriodicidadPequeñoAp" id="PeriodicidadRC4" value="Anual">
                                    <label class="form-check-label" for="PeriodicidadRC4">
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
                            <div class="col-lg-12 m-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="true" id="invalidCheck" name="politicaAp" checked required>
                                    <label class="form-check-label" for="invalidCheck">
                                        He leído y acepto los <b><a href="documentacion/Terminos y condiciones de uso.pdf" download="erminos y condiciones de uso">términos y condiciones de uso.</a></b>
                                    </label>
                                    <div class="invalid-feedback"><b>Debes aceptar las politicas de proteccion de datos</b></div>
                                </div>
                            </div>

                            <!--BOTONES-->
                            <div class="col-lg-12">
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <!--BOTON ENVIAR-->
                                    <input class="btn botonEnviar" type="submit" value="Enviar">
                                    <!--BOTON RESET-->
                                    <input class="btn botonBorrar" type="reset" value="Borrar">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 d-none d-md-none d-lg-block">
                        <img src="img/apadrina.webp" width="800" class="bordes img-fluid mb-4">
                    </div>
                </div>
                <?php } ?>
            </form>
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