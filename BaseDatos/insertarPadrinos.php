<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Insertar Padrinos</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/logo.png">
    <!--Bootstraps CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <link href="estiloBD.css" rel="stylesheet">

</head>
<body>
<?php
    //Pasos para insertar a una persona que APADRINA
    //1 - Comprobamos que los datos no vengan vacios:
    if (empty($_POST['nombreAp']) || empty($_POST['apellidosAp']) || empty($_POST['correoAp']) || empty($_POST['telefonoAp']) || empty($_POST['direccAp']) || empty($_POST['CPAp']) || empty($_POST['poblacionAp']) || empty($_POST['provinciaAp']) || empty($_POST['NIFAp']) || empty($_POST['importeAp']) || empty($_POST['IBANAp'])){
        echo "<h2>Hay datos que vienen vacíos. Debe rellenar todos los datos para realizar el alta</h2>";
        exit(); //Esto finaliza la lectura del archivo php
    }

    //2 - Conectamos con la Base de Datos:
    include 'conexion.php';

    //3 - Recogemos los datos obtenidos en las variables:
    $idusuarioP = $_POST['idusuarioAp'];
    $nombreP = $_POST['nombreAp'];
    $apellidosP = $_POST['apellidosAp'];
    $correoP = $_POST['correoAp'];
    $telefonoP = $_POST['telefonoAp'];
    $direccP = $_POST['direccAp'];
    $CPP = $_POST['CPAp'];
    $poblacionP = $_POST['poblacionAp'];
    $provinciaP = $_POST['provinciaAp'];
    $NIFP = $_POST['NIFAp'];
    $importeP = $_POST['importeAp'];
    $IBANP = $_POST['IBANAp'];
    $periodicidadP = $_POST['PeriodicidadAp'];
    $privacidadP = isset ($_POST['politicaAp']); //isset() devolverá false si prueba una variable que ha sido definida como null.
    $protectora =1;

    //4 - Preparamos la instrucción de INSERT con la Base de Datos y los parámetros necesarios:
    $SentenciaPadrinos = $bd ->prepare("INSERT INTO padrinos (id_usuario, importe, periocidad) VALUES (?,?,?);");

    //Donde tenemos las ? debemos pasar los datos de nuestras variables:
    $Padrinos = $SentenciaPadrinos -> execute([$idusuarioP, $importeP, $periodicidadP]);

?>
    <div class="container">
    <?php 
        //Comprobamos si el resultado es correcto:
        if($Padrinos === true){
            if($privacidadP == "true"){
                echo "<p>El usuario ha aceptado la politica de privacidad</p>";
            }else{
                echo "<p>El usuario no ha querido aceptar la politica de privacidad</p>";
            }

            echo "<h2>La persona se ha insertado en la Base de Datos</h2>";
        }else{
            echo "<h2>Error al insertar a la persona en la Base de Datos</h2>";
        }
    ?>
        <!--BOTON PARA VOLVER-->
        <div class="mt-3 mb-1 d-grid gap-4 d-md-flex justify-content-md-center">
            <a class="btn botonVolver" href="../index.php">Volver al Inicio</a>
        </div>
</body>
</html>