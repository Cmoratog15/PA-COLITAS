<?php
// Continuamos la sesión
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Insertar Adoptantes</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/logo.png">
    <!--Bootstraps CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <link href="estiloBD.css" rel="stylesheet">

</head>
<body>
<?php
    //Pasos para insertar a una persona ADOPTANTE
    //1 - Comprobamos que los datos no vengan vacios:
    if (empty($_POST['nombreA']) || empty($_POST['apellidosA']) || empty($_POST['correoA']) || empty($_POST['telefonoA']) || empty($_POST['direccionA']) || empty($_POST['CPA']) || empty($_POST['poblacionA']) || empty($_POST['provinciaA']) || empty($_POST['NIFA']) || empty($_POST['mascotaA']) || empty($_POST['IBANA'])){
        echo "<h2>Hay datos que vienen vacíos. Debe rellenar todos los datos para realizar el alta</h2>";
        exit(); //Esto finaliza la lectura del archivo php
    }

    //2 - Conectamos con la Base de Datos:
    include 'conexion.php';

    //3 - Recogemos los datos obtenidos en las variables:
    $idusuario = $_POST['idusuario'];
    $nombre = $_POST['nombreA'];
    $apellidos = $_POST['apellidosA'];
    $correo = $_POST['correoA'];
    $telefono = $_POST['telefonoA'];
    $direcc = $_POST['direccionA'];
    $CP = $_POST['CPA'];
    $poblacion = $_POST['poblacionA'];
    $provincia = $_POST['provinciaA'];
    $NIF = $_POST['NIFA'];
    $mascota = $_POST['mascotaA'];
    $IBAN = $_POST['IBANA'];
    $privacidad = isset ($_POST['politicaPrivacidad']); //isset() devolverá false si prueba una variable que ha sido definida como null.

    //4 - Preparamos la instrucción de INSERT con la Base de Datos y los parámetros necesarios:
    $comprobacion = $bd -> query("SELECT * FROM adoptantes");
                    
    //Recogemos los resultados en una variable
    $comprobarAdoptante = $comprobacion -> fetchAll(PDO::FETCH_OBJ); 

    //Mostramos una prueba de los resultados
    foreach ($comprobarAdoptante as $dato){
        //Si el usuario insertado está en la base de datos cogemos el idAdoptante
        if($idusuario == $dato->id_usuario){ 
            $busquedaIdAdoptante = $bd -> query("SELECT * FROM adoptantes WHERE id_usuario = $idusuario");
            $BuscidAdoptante = $busquedaIdAdoptante -> fetchAll(PDO::FETCH_OBJ);
            foreach ($BuscidAdoptante as $valor){
                $idAdoptante = $valor->id_adoptante;
            }
            break;
            
        }else{
            //Si el usuario insertado no está en la base de datos lo introducimos:
            $sentencia = $bd ->prepare("INSERT INTO adoptantes (id_usuario) VALUES (?);");
            $insertAdopt = $sentencia -> execute([$idusuario]);

            //una vez insertado el usuario sacamos su id_adoptante
            $busquedaIdAdoptante = $bd -> query("SELECT * FROM adoptantes WHERE id_usuario = $idusuario");
            $BuscidAdoptante = $busquedaIdAdoptante -> fetchAll(PDO::FETCH_OBJ);
            foreach ($BuscidAdoptante as $valor){
                $idAdoptante = $valor->id_adoptante;
            }
            break;
        }
    }
    $sentencia2 = $bd ->prepare("UPDATE mascotas SET id_adoptante = ? WHERE nombre = ?");
    $resultado = $sentencia2 -> execute([$idAdoptante, $mascota]);

        
?>
    <div class="container">
    <?php 
        // Comprobamos si el resultado es correcto:
        if($resultado === true){
            if($privacidad == "true"){
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
        <div class="mt-3 mb-1 d-grid gap-4 d-md-flex justify-content-md-end">
            <a class="btn botonVolver" href="../index.php">Volver al Inicio</a>
        </div>
    </div>

</body>
</html>