<?php
// Continuamos la sesión
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Modificar Datos Cuenta</title>
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
        <img class="mb-3" src="../img/logo.png" alt="logo" width="200" height="200">
        <h1 class="mb-3">Modificar datos</h1>
        <?php 
            //Sentencia de búsqueda SQL:
            $idusuario = $_SESSION["idusuario"];
            $busquedaDatos = $bd -> query("SELECT * FROM usuarios WHERE id_usuario = $idusuario;");

            //Recogemos los resultados en una variable
            $datosUsuario = $busquedaDatos -> fetchAll(PDO::FETCH_OBJ); 

            //Mostramos una prueba de los resultados
            foreach ($datosUsuario as $dato){
        ?>
        
        <form action="../BaseDatos/actualizarDatosCuenta.php" method="post">
            <div class="row align-items-end">
                <!--CAMPO ID OCULTO-->
                <input type="hidden" name="idUsuario" value = "<?php echo $dato->id_usuario?>">
                <!--CAMPO USUARIO-->
                <div class="col-md-6 mb-3">
                    <label for="inputusuario" class="form-label">Usuario</label>
                    <input type="text" class="form-control" id="inputusuario" value="<?php echo $dato->usuario?>" name="usuarioAct" required>
                </div>
                <!--CAMPO CONTRASEÑA-->
                <div class="col-md-6 mb-3">
                    <label for="Password" class="form-label">Contraseña</label>
                    <div class="input-group">
                        <input ID="Password" type="Password" Class="form-control" value="<?php echo $dato->contraseña?>" name="contraseñaAct" required>
                        <div class="input-group-append">
                            <button id="show_password" class="btn botonOculto botonvista" type="button" onclick="mostrarPassword()"> <span class="fa fa-eye-slash icon"></span> </button>
                        </div>
                    </div>
                </div>
                <!--CAMPO NOMBRE-->
                <div class="col-md-4 mb-3">
                    <label for="inputnombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="inputnombre" name="nombreAct" value="<?php echo $dato->nombres?>" required>
                </div>
                <!--CAMPO APELLIDOS-->
                <div class="col-md-4 mb-3">
                    <label for="inputapellidos" class="form-label">Apellidos</label>
                    <input type="text" class="form-control" id="inputapellidos" name="apellidosAct" value="<?php echo $dato->apellidos?>" required>
                </div>
                <!--CAMPO NIF-->
                <div class="col-md-4 mb-3">
                    <label for="inputNIF" class="form-label">NIF</label>
                    <input type="text" class="form-control" id="inputNIF" name="NIFAct" value="<?php echo $dato->nif?>" required>
                </div>
                <!--CAMPO TELEFONO-->
                <div class="col-md-6 mb-3">
                    <label for="inputtelefono" class="form-label">Telefono</label>
                    <input type="tel" class="form-control" id="inputtelefono" name="telefonoAct" value="<?php echo $dato->telefono?>" required>
                </div>
                <!--CAMPO CORREO-->
                <div class="col-md-6 mb-3">
                    <label for="inputcorreo" class="form-label">Correo</label>
                    <input type="email" class="form-control" id="inputcorreo" name="correoAct" value="<?php echo $dato->correo?>" required>
                </div>
                <!--CAMPO DIRECCION-->
                <div class="col-md-12 mb-3">
                    <label for="inputdireccion" class="form-label">Direccion</label>
                    <input type="text" class="form-control" id="inputAinputdireccionddress" name="direccAct" value="<?php echo $dato->direccion?>" required>
                </div>
                <!--CAMPO CP-->
                <div class="col-md-4 mb-3">
                    <label for="inputCP" class="form-label">CP</label>
                    <input type="text" class="form-control" id="inputCP" name="CPAct" value="<?php echo $dato->cp?>" required>
                </div>
                <!--CAMPO POBLACION-->
                <div class="col-md-4 mb-3">
                    <label for="inputPoblacion" class="form-label">Poblacion</label>
                    <input type="text" class="form-control" id="inputPoblacion" name="poblacionAct" value="<?php echo $dato->poblacion?>" required>
                </div>
                <!--CAMPO PROVINCIA-->
                <div class="col-md-4 mb-3">
                    <label for="inputProvincia" class="form-label">Provincia</label>
                    <input type="text" class="form-control" id="inputProvincia" name="provinciaAct" value="<?php echo $dato->provincia?>" required>
                </div>
                <!--CAMPO IBAN-->
                <div class="col-md-12 mb-3">
                    <label for="inputIBAN" class="form-label">IBAN</label>
                    <input type="text" class="form-control" id="inputIBAN" name="IBANAct" placeholder="ESXX XXXX XXXX XXXX XXXX" value="<?php echo $dato->iban?>" required>
                </div>
            </div>
            <div class="mt-3 mb-1 d-grid gap-4 d-md-flex justify-content-md-end">
                <input class="btn boton botonB" type="submit" value="Modificar">
                <a class="btn botonVolver" href="../index.php">Volver al Inicio</a>
            </div>
            <?php } ?>
        </form>
    </div>

                
        <!--Bootstraps JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!--JavaScript-->
        <script src="../script.js"></script>
</body>
</html>