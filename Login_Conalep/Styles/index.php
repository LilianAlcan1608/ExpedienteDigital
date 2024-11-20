<?php

    session_start();

    if(!isset($_SESSION['usuario'])){
        //header("location: bienvenida.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Login y Register - CONALEP3 </title>
    <link rel="stylesheet" href="../STYLES/css/estilos.css">
</head>
<body> 

    <main> 

        <div class = "contenedor__general">

            <div class="caja__trasera">
                <div class="cajatrasera-login">
                    <h3> ¿Ya tienes cuenta? </h3>
                    <p> Inicia sesión</p>
                    <button id= "btn__iniciar-sesion"> Iniciar sesión </button>
                </div>
                <div class="cajatrasera-register">
                    <h3> ¿Aún no tienes cuenta? </h3>
                    <p> Registrate para poder acceder </p>
                    <button id= "btn__registrarse"> Registrarse </button>
                </div>
            </div>

            <!--Formulario Login y register-->
            <div class="contenedor__login-register">
                <!--Login-->
                <form action="../php/login_usuario_be.php" method = "POST" class="formulario__login">
                    <h2> Iniciar sesión </h2>
                    <input type="text" placeholder="Correo electronico" name = "correo">
                    <input type="password" placeholder="Contraseña" name = "contrasena">
                    <button> Entrar </button>
                </form>

                <form action="../php/registro_usuario_be.php" method = "POST" class="formulario__register">
                    <h2>Registrarse <h2>
                    <input type="text" placeholder="Nombre completo" name = "nombre_completo">
                    <input type="text" placeholder="Correo electronico" name = "correo">
                    <input type="text" placeholder="Usuario" name = "usuario">
                    <input type="password" placeholder="Contraseña" name = "contrasena">
                    <button>Registrarse</button>




                </form>

            </div>
        </div>

    </main>

    <script src="../Styles/js/script.js"> </script>

</body>
</html>