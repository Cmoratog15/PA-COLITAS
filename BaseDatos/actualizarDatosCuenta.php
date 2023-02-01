<?php session_start();?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Insertar Adoptantes</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/logo.png">
    <!--Bootstraps CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--CSS-->
    <link href="estiloBD.css" rel="stylesheet">

</head>
<body>
<?php
    //Comprobamos que los datos no vengan vacios:
    if (empty($_POST['usuarioAct']) || empty($_POST['contraseñaAct']) || empty($_POST['nombreAct']) || empty($_POST['apellidosAct']) || empty($_POST['NIFAct']) || empty($_POST['telefonoAct']) || empty($_POST['correoAct']) || empty($_POST['direccAct']) || empty($_POST['CPAct']) || empty($_POST['poblacionAct']) || empty($_POST['provinciaAct']) || empty($_POST['IBANAct'])){
        echo "<h2>Hay datos que vienen vacíos. Debe rellenar todos los datos para realizar el alta</h2>";
        exit(); 
    }
?>

<?php 
    //Conectamos con la Base de Datos:
    include 'conexion.php';

    //Recogemos los datos obtenidos en las variables:
    $idUsuario = $_POST['idUsuario'];
    $usuarioAct = $_POST['usuarioAct'];
    $contraseñaAct = $_POST['contraseñaAct'];
    $nombreAct = $_POST['nombreAct'];
    $apellidosAct = $_POST['apellidosAct'];
    $NIFAct = $_POST['NIFAct'];
    $telefonoAct = $_POST['telefonoAct'];
    $correoAct = $_POST['correoAct'];
    $direccAct = $_POST['direccAct'];
    $CPAct = $_POST['CPAct'];
    $poblacionAct = $_POST['poblacionAct'];
    $provinciaAct = $_POST['provinciaAct'];
    $IBANAct = $_POST['IBANAct'];



    //Preparamos la instrucción de INSERT con la Base de Datos y los parámetros necesarios:
    $prepararActualizacion = $bd ->prepare("UPDATE usuarios SET usuario = ?, contraseña = ?, nif = ?, nombres = ?, apellidos = ?, correo = ?, telefono = ?, direccion = ?, cp = ?, poblacion = ?, provincia = ?, iban = ? WHERE id_usuario = ?;");

    //Donde tenemos las ? debemos pasar los datos de nuestras variables:
    $actualizarUsuarios = $prepararActualizacion -> execute([$usuarioAct, $contraseñaAct, $NIFAct, $nombreAct, $apellidosAct, $correoAct,$telefonoAct, $direccAct, $CPAct, $poblacionAct, $provinciaAct, $IBANAct, $idUsuario]);

?>
    <div class="container">
    <?php 
        //Comprobamos que se ha realizado la actualización:
        if ($actualizarUsuarios === true){
            echo "<h2>Los datos se han actualizado correctamente</h2>";
        }else{
            echo "<h2> Error al actualizar los datos del código $idUsuario. Compruebe los datos introducidos.</h2>";
        }
    ?>
    </div>
    <!--BOTON PARA VOLVER-->
    <div class="mt-3 mb-1 d-grid gap-4 d-md-flex justify-content-md-center">
        <a class="btn botonVolver" href="../index.php">Volver al Inicio</a>
    </div>

</body>
</html>
