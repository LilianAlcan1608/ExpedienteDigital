<?php

    session_start();

    if (!isset ($_SESSION['usuario'])){
        echo ' 
            <script>
                alert("Por favor debes iniciar sesión");
                window.location = "../index.php";
            </script>
        ';
        //header("location: index.php");
        session_destroy();
        die();
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Bienvenido - CONALEP 3</title>
    <link rel="stylesheet" href="../LOGIN_CONALEP/css2/desing.css" > 
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
    <nav>
        <input type="checkbox" id="check">
        <label for ="check" class="checkbtn"> 
        <i class ="fa fa-bars"></i>
        </label>
        <img src="../Login_Conalep/imgs/LG.jpg" style="width: 50px;">
        <label class ="logo"> CONALEP PUEBLA III </label>
        <ul>
            <li> <a class ="active" href = "bienvenida.php"> Página principal </a> </li>
            <li> <a href = "reportes.html"> Reportes  </a> </li>
            <li> <a href = "asistencia.html"> Asistencia </a> </li>
            <li> <a href = "avisos.html"> Avisos </a> </li>
            <li> <a href = "contacto.html"> Contacto </a> </li>            
    </nav>
    
    
    
    <section>
    <h1>Inicio</h1>
   
    <a href = "php/cerrar_sesion.php"> Cerrar sesión </a>
    </section>    
    <!--custom js file-->

    
    <script> src="jss/script.js"</script>

</body>
</html>