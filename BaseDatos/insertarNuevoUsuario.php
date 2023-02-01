<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Insertar Nuevo Usuario</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/logo.png">
    <!--Bootstraps CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--CSS-->
    <link href="estiloBD.css" rel="stylesheet">

</head>
<body>
    <?php
        //Comprobamos que los datos no vengan vacios:
        if (empty($_POST['usuarioReg']) || empty($_POST['contraseñaReg']) || empty($_POST['nombreReg']) || empty($_POST['apellidosReg']) || empty($_POST['NIFReg']) || empty($_POST['telefonoReg']) || empty($_POST['correoReg']) || empty($_POST['direccReg']) || empty($_POST['CPReg']) || empty($_POST['poblacionReg']) || empty($_POST['provinciaReg']) || empty($_POST['IBANReg'])){
            echo "<h2>Hay datos que vienen vacíos. Debe rellenar todos los datos para realizar el alta</h2>";
            exit(); 
        }

        //Conectamos con la Base de Datos:
        include 'conexion.php';

        //Recogemos los datos obtenidos en las variables:
        $usuarioReg = $_POST['usuarioReg'];
        $contraseñaReg = $_POST['contraseñaReg'];
        $nombreReg = $_POST['nombreReg'];
        $apellidosReg = $_POST['apellidosReg'];
        $NIFReg = $_POST['NIFReg'];
        $telefonoReg = $_POST['telefonoReg'];
        $correoReg = $_POST['correoReg'];
        $direccReg = $_POST['direccReg'];
        $CPReg = $_POST['CPReg'];
        $poblacionReg = $_POST['poblacionReg'];
        $provinciaReg = $_POST['provinciaReg'];
        $IBANReg = $_POST['IBANReg'];
        $protectora = 1;
        //Preparamos la instrucción de INSERT con la Base de Datos y los parámetros necesarios:
        $prepararUsuarios = $bd ->prepare("INSERT INTO usuarios (usuario, contraseña, nif, nombres, apellidos, correo, telefono, direccion, cp, poblacion, provincia, iban, id_protectora) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?);");

        //Donde tenemos las ? debemos pasar los datos de nuestras variables:
        $usuarios = $prepararUsuarios -> execute([$usuarioReg, $contraseñaReg, $NIFReg, $nombreReg, $apellidosReg, $correoReg,$telefonoReg, $direccReg, $CPReg, $poblacionReg, $provinciaReg, $IBANReg, $protectora]);

    ?>
    <div class="container">
    <?php 
        //Comprobamos si el resultado es correcto:
        if($usuarios === true){
            echo "<h2>El usuario se ha insertado en la Base de Datos</h2>";
            header("Location: ../Login/login.php");
        }else{
            echo "<h2>Error al insertar al usuario en la Base de Datos</h2>";
            // header("Location: ../Login/registroNuevoUsuario.php");
        }
    ?>
    </div>
        <!--BOTON PARA VOLVER-->
        <div class="mt-3 mb-1 d-grid gap-4 d-md-flex justify-content-md-end">
            <a class="btn botonVolver" href="../Login/registroNuevoUsuario.php">Volver</a>
        </div>

</body>
</html>