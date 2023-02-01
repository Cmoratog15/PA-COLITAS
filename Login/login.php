<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Login</title>
        <link rel="shortcut icon" type="image/x-icon" href="img/logo.png">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--Bootstraps CSS-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <!--CSS-->
        <link href="estiloLogin.css" rel="stylesheet">
        
        <?php include '../BaseDatos/conexion.php'?>
    </head>
<body class="text-center">

    <div class="formularioInicio w-100 m-auto">
        <form action="../BaseDatos/comprobacionTipoUsuario.php" method="post" class="needs-validation" novalidate>
            <a class="navbar-brand" href="../index.php" title="Inicio">
                <img class="mb-3" src="../img/logo.png" alt="logo" width="300" height="300">
            </a>
            <h1 class="mb-3">Inicia Sesión</h1>

            <div class="form-floating">
                <input type="text" class="form-control" id="usuario" name="usuario"  placeholder="Usuario" required>
                <label for="usuario">Usuario</label>
                <div class="invalid-feedback">
                    Usuario inválido
                </div>
            </div>

            <div class="input-group mb-3">
                <input type="Password" class="form-control" id="Password" name="contraseña" placeholder="Contraseña" aria-describedby="ojo" required>
                <button id="ojo" class="btn botonOculto botonvista" type="button" onclick="mostrarPassword()"> 
                    <span class="fa fa-eye-slash icon"></span> 
                </button>
                <div class="invalid-feedback">
                        Contraseña inválida
                </div>
            </div>
            <p>¿No tienes una cuenta? <b><a href="registroNuevoUsuario.php">Regístrate</a></b></p>
            
            <button class="w-100 btn btn-lg boton" type="submit">Iniciar Sesión</button>
        </form>
        <p class="mt-5 mb-3 text-muted">&copy; Protectora de Animales COLITAS</p>
    </div>
        <!--Bootstraps JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!--JavaScript-->
        <script src="../script.js"></script>
</body>
</html>