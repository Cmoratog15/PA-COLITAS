<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Insertar Socios</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/logo.png">
    <!--Bootstraps CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <link href="estiloBD.css" rel="stylesheet">

</head>
<body>
<?php
    //Pasos para insertar SOCIOS
    //1 - Comprobamos que los datos no vengan vacios:
    if (empty($_POST['nombreS']) || empty($_POST['apellidosS']) || empty($_POST['correoS']) || empty($_POST['telefonoS']) || empty($_POST['direccS']) || empty($_POST['CPS']) || empty($_POST['poblacionS']) || empty($_POST['provinciaS']) || empty($_POST['NIFS']) || empty($_POST['importeS']) || empty($_POST['IBANS'])){
        echo "<h2>Hay datos que vienen vacíos. Debe rellenar todos los datos para realizar el alta</h2>";
        exit(); //Esto finaliza la lectura del archivo php
    }

    //2 - Conectamos con la Base de Datos:
    include 'conexion.php';

    //3 - Recogemos los datos obtenidos en las variables:
    $idusuarioS = $_POST['idusuario'];
    $nombreS = $_POST['nombreS'];
    $apellidosS = $_POST['apellidosS'];
    $correoS = $_POST['correoS'];
    $telefonoS = $_POST['telefonoS'];
    $direccS = $_POST['direccS'];
    $CPS = $_POST['CPS'];
    $poblacionS = $_POST['poblacionS'];
    $provinciaS = $_POST['provinciaS'];
    $NIFS = $_POST['NIFS'];
    $importeS = $_POST['importeS'];
    $IBANS = $_POST['IBANS'];
    $periodicidadS = $_POST['PeriodicidadS'];
    $privacidadS = isset ($_POST['politicaS']); //isset() devolverá false si prueba una variable que ha sido definida como null.
    $protectora = 1;

    //4 - Preparamos la instrucción de INSERT con la Base de Datos y los parámetros necesarios:
    $SentenciaSocios = $bd ->prepare("INSERT INTO socios (importe,periocidad,id_usuario) VALUES (?,?,?);");

    //Donde tenemos las ? debemos pasar los datos de nuestras variables:
    $Socios = $SentenciaSocios -> execute([$importeS,$periodicidadS,$idusuarioS]);
?>
    <div class="container">
    <?php 
        //Comprobamos si el resultado es correcto:
        if($Socios === true){
            if($privacidadS == "true"){
                echo "<p>El usuario ha aceptado la politica de privacidad</p>";
            }else{
                echo "<p>El usuario no ha querido aceptar la politica de privacidad</p>";
            }

            echo "<h2>La persona se ha insertado en la Base de Datos</h2>";
        }else{
            echo "<h2>Error al insertar a la persona en la Base de Datos</h2>";
        }
    ?>
    </div>
        <!--BOTON PARA VOLVER-->
        <div class="mt-3 mb-1 d-grid gap-4 d-md-flex justify-content-md-center">
            <a class="btn botonVolver" href="../index.php">Volver al Inicio</a>
        </div>
</body>
</html>