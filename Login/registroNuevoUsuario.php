<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Registro Nuevo Usuario</title>
        <link rel="shortcut icon" type="image/x-icon" href="img/logo.png">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--Bootstraps CSS-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!--CSS-->
        <link href="estiloLogin.css" rel="stylesheet">

        <?php include '../BaseDatos/conexion.php' ?>
    </head>

<body>
    <div class="formularioRegistro m-auto">
        <form class="needs-validation" action="../BaseDatos/insertarNuevoUsuario.php" method="post" novalidate>
            <!--logo-->
            <a class="navbar-brand" href="../index.php" title="Inicio">    
                <img class="mb-3" src="../img/logo.png" alt="logo" width="170" height="170">
            </a>
            <h1 class="mb-3 text-center">Registro de Nuevo Usuario</h1>

                <div class="row">
                    <!--CAMPO USUARIO-->
                    <div class="col-md-6">
                        <label for="inputusuario" class="form-label">Usuario</label>
                        <input type="text" class="form-control" id="inputusuario" name="usuarioReg" required>
                        <div class="invalid-feedback">Debe insertar un nombre de usuario</div>
                    </div>
                    <!--CAMPO CONTRASEÑA-->
                    <div class="col-md-6">
                        <label for="inputcontraseña" class="form-label">Contraseña</label>
                        <input type="password" pattern=".{4,}" class="form-control" id="inputcontraseña" name="contraseñaReg" required>
                        <div class="invalid-feedback">Debe insertar una contraseña</div>
                    </div>
                    <!--CAMPO NOMBRE-->
                    <div class="col-md-4">
                        <label for="inputnombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="inputnombre" name="nombreReg" required>
                        <div class="invalid-feedback">Debe insertar su nombre</div>
                    </div>
                    <!--CAMPO APELLIDOS-->
                    <div class="col-md-4">
                        <label for="inputapellidos" class="form-label">Apellidos</label>
                        <input type="text" class="form-control" id="inputapellidos" name="apellidosReg"  required>
                        <div class="invalid-feedback">Debe insertar sus apellidos</div>
                    </div>
                    <!--CAMPO NIF-->
                    <div class="col-md-4">
                        <label for="inputNIF" class="form-label">NIF</label>
                        <input type="text" class="form-control" id="inputNIF" name="NIFReg"  required>
                        <div class="invalid-feedback">Debe insertar su NIF</div>
                    </div>
                    <!--CAMPO TELEFONO-->
                    <div class="col-md-6">
                        <label for="inputtelefono" class="form-label">Telefono</label>
                        <input type="tel" class="form-control" id="inputtelefono" name="telefonoReg"  required>
                        <div class="invalid-feedback">Debe insertar su teléfono</div>

                    </div>
                    <!--CAMPO CORREO-->
                    <div class="col-md-6">
                        <label for="inputcorreo" class="form-label">Correo</label>
                        <input type="email" class="form-control" id="inputcorreo" name="correoReg"  required>
                        <div class="invalid-feedback">Debe insertar su correo</div>

                    </div>
                    <!--CAMPO DIRECCION-->
                    <div class="col-md-12">
                        <label for="inputdireccion" class="form-label">Direccion</label>
                        <input type="text" class="form-control" id="inputAinputdireccionddress" name="direccReg"  required>
                        <div class="invalid-feedback">Debe insertar su dirección</div>

                    </div>
                    <!--CAMPO CP-->
                    <div class="col-md-4">
                        <label for="inputCP" class="form-label">CP</label>
                        <input type="text" class="form-control" id="inputCP" name="CPReg"  required>
                        <div class="invalid-feedback">Debe insertar su CP</div>

                    </div>
                    <!--CAMPO POBLACION-->
                    <div class="col-md-4">
                        <label for="inputPoblacion" class="form-label">Poblacion</label>
                        <input type="text" class="form-control" id="inputPoblacion" name="poblacionReg"  required>
                        <div class="invalid-feedback">Debe insertar su población</div>
                    </div>
                    <!--CAMPO PROVINCIA-->
                    <div class="col-md-4">
                        <label for="inputProvincia" class="form-label">Provincia</label>
                        <input type="text" class="form-control" id="inputProvincia" name="provinciaReg"  required>
                        <div class="invalid-feedback">Debe insertar su provincia</div>
                    </div>
                    <!--CAMPO IBAN-->
                    <div class="col-md-12">
                        <label for="inputIBAN" class="form-label">IBAN</label>
                        <input type="text" class="form-control" id="inputIBAN" name="IBANReg" placeholder="ESXX XXXX XXXX XXXX XXXX"  required>
                    </div>
                    <div class="invalid-feedback">Debe insertar su IBAN</div>
                </div>
                <div class="mt-4 mb-4 d-grid gap-4 d-md-flex justify-content-md-end">
                    <input class="btn boton botonB" type="submit" value="Enviar">
                    <input class="btn btn-outline-danger botonB" type="reset" value="Borrar">
                </div>
        </form>
    </div>



        
        <!--Bootstraps JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <!--JavaScript-->
        <script src="../script.js"></script>
</body>
</html>