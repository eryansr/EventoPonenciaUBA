<?php session_start();

    require 'admin/config.php';
    require 'functions.php';

    // comprobar sesion

    if (isset($_SESSION['usuario'])) { // si existe sesión valida tipo_usuario
        
        // validar datos por privilegios
        $conexion = conexion($bd_config); // conexion a BD
        $usuario = iniciarSesion('usuarios', $conexion); // funcion iniciar sesión, retorna tipo_usuario

        if ($usuario['tipo_usuario'] == 'administrador') {
            header('Location: '.RUTA.'lista.php'); // redirige a lista de asistencia si rol es admin
        } else {
            header ('Location: '.RUTA.'login.php'); // por defecto 
        }

    } else {
        header('Location: '.RUTA.'login.php'); // si no existe una sesión retorna a login
    }

?>