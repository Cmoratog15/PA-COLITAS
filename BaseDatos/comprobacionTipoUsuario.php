<?php
    // //Conexión Base de Datos
    include 'conexion.php';

    //Comprobación tipo Usuario

        //Comprobamos que los datos no vengan vacios:
        if (empty($_POST['usuario']) || empty($_POST['contraseña'])){
            echo "<h2>Hay datos que vienen vacíos.</h2>";
            exit();
        }

        //Recogemos los datos obtenidos en las variables:
        $usuario = $_POST['usuario'];
        $contrasena = $_POST['contraseña'];


        //Sentencia de búsqueda SQL:
        $usuariosBD = $bd -> query("SELECT * FROM usuarios");

        //Recogemos los resultados en una variable
        $datosUsuarioBD = $usuariosBD -> fetchAll(PDO::FETCH_OBJ);

        $entrar = false;
        $tipoUsuario = 0;


        //Inicio de sesion
        foreach ($datosUsuarioBD as $datosBD){
            if($usuario == $datosBD->usuario && $contrasena == $datosBD->contraseña){
                //El usuario y la contraseña son correctas e inicia sesion
                $entrar = true;
                $tipoUsuario = $datosBD->id_usuario;
                $nombreUsuario = $datosBD->nombres;
//-----------------------------------------------

// Comienzo de la sesión
session_start();
// Guardar datos de sesión
$_SESSION["usuario"] = $usuario;
$_SESSION["contraseña"] = $contrasena;
$_SESSION["idusuario"] = $tipoUsuario;

//-----------------------------------------------
        break;
            }
        }
        
        // Tipo de usuario:
        if($tipoUsuario == 1){ //ADMIN - VA A ALTA ANIMALES
        ?>
            <form id="datosColabora" action="../Colabora.php" method="post">
                <input type="hidden" id="admin" value="<?php echo $tipoUsuario?>" name="admin">
                <input type="submit" value="Submit">
            </form>

            <script>
                document.getElementById("datosColabora").submit();
            </script>
        <?php
        }else if($tipoUsuario > 1){ //USUARIO - VA A INDEX
        ?>
            <form id="pasarDatos" action="../Index.php" method="post">
                <input type="hidden" id="idusuario" value="<?php echo $tipoUsuario?>" name="idusuario">
                <input type="submit" value="Submit">
            </form>

            <script>
                document.getElementById("pasarDatos").submit();
            </script>
            
            <?php
        }elseif ($entrar == false) { //ERROR - VUELVE AL LOGIN
            header("Location: ../Login/login.php?error=incorrecto");
            exit();
            echo "error";
        }
?>