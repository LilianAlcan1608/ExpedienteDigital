<?php

     include 'conexion_be.php';       


    $nombre_completo = $_POST['nombre_completo'];
    $correo = $_POST['correo'];
    $usuario = $_POST ['usuario'];
    $contrasena = $_POST ['contrasena'];
    /*ENCRIPTADO DE CONTRASEÑA
    $contrasena = hash('sha512',$contrasena);*/

    $query = "INSERT INTO usuarios(nombre_completo, correo, usuario, contrasena)
              VALUES ('$nombre_completo', '$correo', '$usuario', '$contrasena')";
    
    /*Verificar que el correo no se repita en bd*/

    $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo'");

    if (mysqli_num_rows($verificar_correo) > 0){
        echo '
            <script> 
                alert ("Este correo ya está registrado, intenta otro diferente");
                window.location = "../STYLES";
            </script>
        ';
        exit();
    }

    /*Verificar que el nombre de usuario no se repita en bd*/
    
    $verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$usuario'");

    if (mysqli_num_rows($verificar_usuario) > 0){
        echo '
            <script> 
                alert ("Este usuario ya está registrado, intenta otro diferente");
                window.location = "../STYLES";
            </script>
        ';
        exit();
    }

    $ejecutar = mysqli_query($conexion, $query);


    if ($ejecutar) {
        echo '
            <script>
                alert ("Usuario registrado exitosamente");
                window.location = "../STYLES";
            </script>    
        ';
    }
    else {
        echo'
        <script>
            alert ("Inténtelo más tarde, usuario no almacenado");
            window.location = "../STYLES";
        </script>
       '; 

    }


    mysqli_close($conexion);

?>
