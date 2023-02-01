<?php
// Continuamos la sesión
session_start();
$_SESSION['idusuario'];
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Mi Cuenta</title>
        <link rel="shortcut icon" type="image/x-icon" href="img/logo.png">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--Bootstraps CSS-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <!--CSS-->
        <link href="estiloLogin.css" rel="stylesheet">

        <?php include '../BaseDatos/conexion.php' ?>

    </head>
<body class="text-center">
    <div class="container mostrarDatos">
    <a class="navbar-brand" href="../index.php" title="Inicio">
        <img class="mb-3" src="../img/logo.png" alt="logo" width="200" height="200">
    </a>
        <h1 class="mb-3">Mis datos</h1>
        <?php 
            //Sentencia de búsqueda SQL:
            $usuarioSesion = $_SESSION["idusuario"];
            $busquedaDatos = $bd -> query("SELECT * FROM usuarios WHERE id_usuario = $usuarioSesion;");

            //Recogemos los resultados en una variable
            $datosUsuario = $busquedaDatos -> fetchAll(PDO::FETCH_OBJ); 

            //Mostramos una prueba de los resultados
            foreach ($datosUsuario as $dato){
        ?>
        
        <form action="modificarDatosCuenta.php" method="post">
            <div class="row align-items-end">
                <!--ID OCULTO-->
                <input type="hidden" id="idusuario" value="<?php echo $idusuario?>" name="idusuario">
                <!--CAMPO USUARIO-->
                <div class="col-md-6 mb-3">
                    <label for="inputusuario" class="form-label">Usuario</label>
                    <input type="text" class="form-control" id="inputusuario" value="<?php echo $dato->usuario?>" name="usuarioReg" readonly>
                </div>
                <!--CAMPO CONTRASEÑA-->
                <div class="col-md-6 mb-3">
                    <label for="Password" class="form-label">Contraseña</label>
                    <div class="input-group">
                        <input id="Password" type="Password" Class="form-control" value="<?php echo $dato->contraseña?>" readonly>
                        <div class="input-group-append">
                            <button id="show_password" class="btn botonOculto botonvista" type="button" onclick="mostrarPassword()"> <span class="fa fa-eye-slash icon"></span> </button>
                        </div>
                    </div>
                </div>
                <!--CAMPO NOMBRE-->
                <div class="col-md-4 mb-3">
                    <label for="inputnombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="inputnombre" name="nombreReg" value="<?php echo $dato->nombres?>" readonly>
                </div>
                <!--CAMPO APELLIDOS-->
                <div class="col-md-4 mb-3">
                    <label for="inputapellidos" class="form-label">Apellidos</label>
                    <input type="text" class="form-control" id="inputapellidos" name="apellidosReg" value="<?php echo $dato->apellidos?>" readonly>
                </div>
                <!--CAMPO NIF-->
                <div class="col-md-4 mb-3">
                    <label for="inputNIF" class="form-label">NIF</label>
                    <input type="text" class="form-control" id="inputNIF" name="NIFReg" value="<?php echo $dato->nif?>" readonly>
                </div>
                <!--CAMPO TELEFONO-->
                <div class="col-md-6 mb-3">
                    <label for="inputtelefono" class="form-label">Telefono</label>
                    <input type="tel" class="form-control" id="inputtelefono" name="telefonoReg" value="<?php echo $dato->telefono?>" readonly>
                </div>
                <!--CAMPO CORREO-->
                <div class="col-md-6 mb-3">
                    <label for="inputcorreo" class="form-label">Correo</label>
                    <input type="email" class="form-control" id="inputcorreo" name="correoReg" value="<?php echo $dato->correo?>" readonly>
                </div>
                <!--CAMPO DIRECCION-->
                <div class="col-md-12 mb-3">
                    <label for="inputdireccion" class="form-label">Direccion</label>
                    <input type="text" class="form-control" id="inputAinputdireccionddress" name="direccReg" value="<?php echo $dato->direccion?>" readonly>
                </div>
                <!--CAMPO CP-->
                <div class="col-md-4 mb-3">
                    <label for="inputCP" class="form-label">CP</label>
                    <input type="text" class="form-control" id="inputCP" name="CPReg" value="<?php echo $dato->cp?>" readonly>
                </div>
                <!--CAMPO POBLACION-->
                <div class="col-md-4 mb-3">
                    <label for="inputPoblacion" class="form-label">Poblacion</label>
                    <input type="text" class="form-control" id="inputPoblacion" name="poblacionReg" value="<?php echo $dato->poblacion?>" readonly>
                </div>
                <!--CAMPO PROVINCIA-->
                <div class="col-md-4 mb-3">
                    <label for="inputProvincia" class="form-label">Provincia</label>
                    <input type="text" class="form-control" id="inputProvincia" name="provinciaReg" value="<?php echo $dato->provincia?>" readonly>
                </div>
                <!--CAMPO IBAN-->
                <div class="col-md-12 mb-3">
                    <label for="inputIBAN" class="form-label">IBAN</label>
                    <input type="text" class="form-control" id="inputIBAN" name="IBANReg" value="<?php echo $dato->iban?>" readonly>
                </div>
            </div>
            <div class="mt-3 mb-1 d-grid gap-4 d-md-flex justify-content-md-end">
                <input class="btn boton botonB" type="submit" value="Modificar Datos"></a>
            </div>
            <?php } ?>
        </form>

        <!-- ADOPTANTES -->
        <h1 class="mt-5 mb-4">Mis animales adoptados</h1>
        <div class="row gap-5">
            
            <?php
            //Sentencia de búsqueda SQL:
            $busquedaAdoptantes = $bd -> query("SELECT * FROM adoptantes a JOIN usuarios u ON u.id_usuario = a.id_usuario WHERE a.id_usuario = $usuarioSesion");
            
            //Recogemos los resultados en una variable
            $datosAdopt = $busquedaAdoptantes -> fetchAll(PDO::FETCH_OBJ); 
            
            //Mostramos una prueba de los resultados
            foreach ($datosAdopt as $datoA){
                $idAdoptate = $datoA->id_adoptante;
                $idusuario = $datoA->id_usuario;
                
                //BUSCO LA MASCOTA
                //Sentencia de búsqueda SQL:
                $busquedaMascotasA = $bd -> query("SELECT * FROM mascotas m JOIN adoptantes a ON m.id_adoptante = a.id_adoptante WHERE m.id_adoptante = $idAdoptate");
                
                //Recogemos los resultados en una variable
                $datosMascotasA = $busquedaMascotasA -> fetchAll(PDO::FETCH_OBJ); 
                
                //Mostramos una prueba de los resultados
                foreach ($datosMascotasA as $datoMA){
                    ?>

            <div class="col-md-3 ">
                <div class="card miCuentaMascotas" style="width: 200px;">
                    <img src="../<?php echo $datoMA->foto_del?>" class="card-img-top" alt="mascota">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $datoMA->nombre?></h5>
                    </div>
                </div>
            </div>
    <?php 
                }
                break;
            } 

            $busquedaAdoptantes = $bd -> query("SELECT * FROM adoptantes a JOIN usuarios u ON u.id_usuario = a.id_usuario");
            
            //Recogemos los resultados en una variable
            $datosAdopt = $busquedaAdoptantes -> fetchAll(PDO::FETCH_OBJ); 
            
            //Mostramos una prueba de los resultados
            foreach ($datosAdopt as $datoA){
                $idusuario = $datoA->id_usuario;
                if($_SESSION['idusuario'] != $idusuario){
                echo "<h5>No tiene mascotas en adoptadas</h5>";
                }
                break;
            }
    ?>
        </div>

        <?php 

    //SOCIOS:


        //Sentencia de búsqueda SQL:
        $busquedaSocios = $bd -> query("SELECT * FROM socios s JOIN usuarios u ON u.id_usuario = s.id_usuario WHERE s.id_usuario = $usuarioSesion");

        //Recogemos los resultados en una variable
        $datosSocios = $busquedaSocios -> fetchAll(PDO::FETCH_OBJ); 

        //Mostramos una prueba de los resultados
        foreach ($datosSocios as $datoS){
            if($datoS->id_usuario == $usuarioSesion){
        ?>

        <h1 class="mt-5 mb-4">Aportación Socio</h1>
        <div class="row">
            <div class="col-md-6">
                <h3>IMPORTE:</h3>
                <div class="input-group mb-3">
                    <input type="text" class="form-control text-center" value="<?php echo $datoS->importe?>" readonly>
                    <span class="input-group-text">€</span>
                </div>
            </div>
            <div class="col-md-6">
                <h3>PERIODICIDAD:</h3>
                <input type="text" class="form-control text-center" value="<?php echo $datoS->periocidad?>" readonly>
            </div>
        </div>
        
        

        <?php }} ?>

        <?php 

    //PADRINOS:


        //Sentencia de búsqueda SQL:
        $busquedaPadrinos = $bd -> query("SELECT * FROM padrinos p JOIN usuarios u ON u.id_usuario = p.id_usuario WHERE p.id_usuario = $usuarioSesion");

        //Recogemos los resultados en una variable
        $datosPadrinos = $busquedaPadrinos -> fetchAll(PDO::FETCH_OBJ); 

        //Mostramos una prueba de los resultados
        foreach ($datosPadrinos as $datoP){
            if($datoP->id_usuario == $usuarioSesion){
        ?>

        <h1 class="mt-5 mb-4">Aportación Padrino</h1>
        <div class="row">
            <div class="col-md-6">
                <h3>IMPORTE:</h3>
                <div class="input-group mb-3">
                    <input type="text" class="form-control text-center" value="<?php echo $datoP->importe?>" readonly>
                    <span class="input-group-text">€</span>
                </div>
            </div>
            <div class="col-md-6">
                <h3>PERIODICIDAD:</h3>
                <input type="text" class="form-control text-center" value="<?php echo $datoP->periocidad?>" readonly>
            </div>
        </div>
        <?php }} ?>
        
    </div>

                
        <!--Bootstraps JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!--JavaScript-->
        <script src="../script.js"></script>
</body>
</html>