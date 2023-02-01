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
        <title>Adopción Gatos</title>
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
            //Conexión con la base de datos:
            include 'BaseDatos/conexion.php';
        ?>
    </head>
    <body class="punteroGato">

        <a name="arriba"></a>
        <!--logo-->
        <div class="logo">
            <a class="navbar-brand punteroGato" href="index.php">
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

            <div class="collapse navbar-collapse punteroGato" id="navbarNavDropdown">
                <div class="container-fluid">
                    <ul class="navbar-nav me-auto my-2 my-lg-0 nav-fill" style="--bs-scroll-height: 100px;">
                            <a class="nav-link" href="index.php">Inicio</a>
                        <li class="nav-item">
                            <a class="nav-link" href="QueEsColitas.php">¿Qué es COLITAS?</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle active" href="centroAdopcion.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Adopta Gatos
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="centroAdopcion.php"><p>Centro de adopción</p></a></li>
                                <li><a class="dropdown-item" href="adopcionPerros.php"><p>Perros en adopción</p></a></li>
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
                    <img src="img/gatoheader.jpg" class="d-block w-80 img-fluid" alt="Donacion">
                    <div class="carousel-caption d-none d-md-block headerColitas">
                        <h2 class="serviciosHeader">Adopta a un gatito</h2>
                    </div>
                </div>
            </div>
        </div>

        <!--TITULO QUE SE VERA SOLO EN TAMAÑO PEQUEÑO-->
        <div class="container mt-5 mb-3 d-md-none headerColitas">
            <h2>Adopta a un gatito</h2>
        </div>



        <div class="container-fluid mt-5 mb-4 punteroGato" >
            <div class="row">
                <?php 
                    //Sentencia de búsqueda SQL:
                    $sentencia = $bd -> query('SELECT mascotas.nombre nombre, id_mascota, foto_del, genero, raza.nombre raza, fechaNacimiento, tamaño, peso, esterilizado, caracter, foto_tras, id_adoptante FROM mascotas JOIN raza ON mascotas.id_raza = raza.id_raza WHERE raza.id_tipo = 1');
                    

                    //Recogemos los resultados en una variable
                    $mascotas = $sentencia -> fetchAll(PDO::FETCH_OBJ); 

                    //Mostramos una prueba de los resultados
                    foreach ($mascotas as $dato){
                ?>
                <!--TARJETA 1 -->
                <div class="col-xxl-6">
                    <div class="card tarjeta" id="<?php echo $dato->id_mascota?>">
                        <!--FRONT-->
                        <div  class="face front">
                        <h5 class="card-title"><?php echo $dato->nombre?></h5>

                            <div class="row card-body">
                                <div class="col-sm-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <img src="<?php echo $dato->foto_del?>" class="img-fluid fotoDNI" alt="fotoGato" width="110">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                        <form action=
                                        <?php 
                                            $usuarioSesion = $_SESSION["idusuario"];
                                            //Si no ha iniciado sesión lo enviamos al login
                                            if(empty($usuarioSesion)){
                                                echo "Login/login.php";
                                            //Si ha iniciado sesión le dejamos seguir
                                            }else{
                                                echo "adoptar.php";
                                            }
                                        ?>
                                        method="post"> <!--Abro form para pasar el dato [nombre] a la otra página -->
                                                <input type="hidden" name="nombreGato" value="<?php echo $dato->nombre?>"> <!--Dato que recojo, y lo oculto para que no se vea aquí -->

                                                <input type="submit" class="btn boton" value=
                                                <?php if(!empty($dato->id_adoptante)){ 
                                                        echo "ADOPTAD@"; 
                                                    }else{
                                                        echo "Adoptar";
                                                    }
                                                ?> 
                                                <?php if(!empty($dato->id_adoptante)){ echo "disabled"; } ?>> <!-- Botón -->
                                            </form> <!--Cierro el form tras el botón de enviar datos a la otra página -->
                                        </div>
                                        <div class="col-md-12">
                                            <button class="btn boton boton-voltear" type="button" data-bs-target="<?php echo $dato->id_mascota?>">Ver más</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-9 pading">
                                    <div class="row">
                                        <div class="col-sm-4"><b>GENERO</b></div>
                                        <div class="col-sm-4"><b>RAZA</b></div>
                                        <div class="col-sm-4"><b>F. NACIMIENTO</b></div>
                                    </div>
                                    <div class="row">
                                    <div class="col-sm-4"><?php echo $dato->genero?></div>
                                        <div class="col-sm-4"><?php echo $dato->raza?></div>
                                        <div class="col-sm-4"><?php echo $dato->fechaNacimiento?></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4 mt-3"><b>TAMAÑO</b></div>
                                        <div class="col-sm-4 mt-3"><b>PESO</b></div>
                                        <div class="col-sm-4 mt-3"><b>ESTERILIZADO</b></div>
                                    </div>
                                    <div class="row">
                                    <div class="col-sm-4"><?php echo $dato->tamaño?></div>
                                        <div class="col-sm-4"><?php echo $dato->peso?></div>
                                        <div class="col-sm-4"><?php echo $dato->esterilizado?></div>
                                    </div>
                                    <p class="card-text center mt-3"><b>CARACTER</b></p>
                                    <p><?php echo $dato->caracter?></p>
                                </div>
                            </div>
                        </div>
                        <!--BACK-->
                        <div class="face back">
                            <div class="row">
                                <div class="col-md-12">
                                <img src="<?php echo $dato->foto_tras?>" class="img-fluid" alt="fotoGatoTras">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php 
                    } 
                ?>
            </div>
        </div>


        <footer class="punteroGato">
            <button type="button" class="btn" data-toggle="tooltip" data-placement="right" title="Subir">
                <a href="#arriba">
                    <img src="img/logo.png" width="150" height="150">
                </a>
            </button>
            <br>
            <div class="row">
                <div class="col-md-4 punteroGato">
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