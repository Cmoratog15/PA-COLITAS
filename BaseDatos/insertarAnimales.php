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
//Pasos para insertar una mascota:

    //1 - Comprobamos que los datos no vengan vacios:
    if (empty($_POST['nombreAlta']) || empty($_POST['generoAlta']) || empty($_POST['razaAlta']) || empty($_POST['fechaNacAlta']) || empty($_POST['tamañoAlta']) || empty($_POST['pesoAlta']) || empty($_POST['esterilizadoAlta']) || empty($_POST['caracterAlta']) || empty($_POST['tipoAnimalAlta']) || empty($_POST['fotoDelAlta']) || empty($_POST['fotoTrasAlta'])){
        echo "<h2>Hay datos que vienen vacíos. Debe rellenar todos los datos para realizar el alta</h2>";
        exit(); //Esto finaliza la lectura del archivo php
    }

    //2 - Conectamos con la Base de Datos:
    include 'conexion.php';

    //3 - Recogemos los datos obtenidos en las variables:
    $nombreAnimal = $_POST['nombreAlta'];
    $generoAnimal = $_POST['generoAlta'];
    $razaAnimal = $_POST['razaAlta'];
    $fechaNacAnimal = $_POST['fechaNacAlta'];
    $tamañoAnimal = $_POST['tamañoAlta'];
    $pesoAnimal = $_POST['pesoAlta'];
    $esterilizadoAnimal = $_POST['esterilizadoAlta'];
    $caracterAnimal = $_POST['caracterAlta'];
    $tipoAnimal = $_POST['tipoAnimalAlta'];
    $fotoDelAnimal = "img/animales/" . $_POST['fotoDelAlta'];
    $fotoTrasAnimal = "img/animales/" . $_POST['fotoTrasAlta'];

    //4 - Preparamos la instrucción de INSERT con la Base de Datos y los parámetros necesarios:
    $sentencia = $bd ->prepare("INSERT INTO mascotas (nombre, foto_del, genero, id_raza, fechaNacimiento, tamaño, peso, esterilizado, caracter, foto_tras, id_protectora) VALUES (?,?,?,?,?,?,?,?,?,?,?);");


    //5- Busco el idRaza y si esa raza no existe en la base de datos la incluyo
        $busquedaRaza = $bd -> query('SELECT id_raza, nombre FROM raza');

        //Recogemos los resultados en una variable
        $raza = $busquedaRaza -> fetchAll(PDO::FETCH_OBJ); 

        //Mostramos los resultados
        $existe = false;
        
        foreach ($raza as $valores) {
            //Si existe...
            if ($valores->nombre == $razaAnimal) {
                $existe = true;
                //Saco el resultado y lo incluyo en la base de datos
                $resultado = $sentencia -> execute([$nombreAnimal, $fotoDelAnimal,$generoAnimal,$valores->id_raza,$fechaNacAnimal,$tamañoAnimal,$pesoAnimal,$esterilizadoAnimal,$caracterAnimal, $fotoTrasAnimal, 1]);
                break;
            }
        }
        //Si no existe...
        if (!$existe) {
            //Inserto la nueva raza
            if (!$existe) {
                $query = "INSERT INTO raza (nombre, id_tipo) VALUES (?,?)";
                $listaraza = $bd->prepare($query);
                $razaA = $listaraza -> execute([$razaAnimal,$tipoAnimal]);
            }
            //Buscamos la raza insertada
            $busquedaRazaNueva = $bd -> query('SELECT id_raza, nombre FROM raza');
            //Recogemos los resultados en una variable
            $razaNueva = $busquedaRazaNueva -> fetchAll(PDO::FETCH_OBJ);
            //Saco el resultado y lo incluyo en la base de datos
            foreach ($razaNueva as $valor) {
                if ($valor->nombre == $razaAnimal) {
                    $existe = true;
                    $resultado = $sentencia -> execute([$nombreAnimal, $fotoDelAnimal,$generoAnimal,$valores->id_raza,$fechaNacAnimal,$tamañoAnimal,$pesoAnimal,$esterilizadoAnimal,$caracterAnimal, $fotoTrasAnimal, 1]);
                    break;
                }
            }
        }
?>
    <div class="container">
    <?php 
        //Comprobamos si el resultado es correcto:
        if($resultado === true){
            echo "<h2>El animal se ha insertado en la Base de Datos</h2>";
        }else{
            echo "<h2>Error al insertar al animal en la Base de Datos</h2>";
        }
    ?>
    </div>

        <!--BOTON PARA VOLVER-->
        <div class="mt-3 mb-1 d-grid gap-4 d-md-flex justify-content-md-center">
            <a class="btn botonVolver" href="../index.php">Volver al Inicio</a>
        </div>
</body>
</html>