<?php session_start();

    require 'admin/config.php';
    require 'functions.php';

    // comprobar sesion

    if (!isset($_SESSION['usuario'])) { 
        header('Location: '.RUTA.'login.php'); // retorna a login si no existe sesión
    }
    
    $conexion = conexion($bd_config);
    $user = iniciarSesion('usuarios', $conexion); // funcion iniciarSesion retorna tipo_usuario

    if ($user['tipo_usuario'] == 'administrador') { 
        require 'vistas/lista.view.php'; // si rol es administrador, muestra web del listado de asistentes
    } else {
        header('Location: '.RUTA.'validate.php'); // retorna a las validaciones de sesion
    }  

?>