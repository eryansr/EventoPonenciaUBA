<?php session_start();

require 'admin/config.php';
require 'functions.php';

$errores = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST'){ // 
    $usuario = $_POST['usuario']; // almacena usuario
    $password = $_POST['password']; // almacena contraseña
    
    $conexion = conexion($bd_config); // conexion a BD
    $statement = $conexion->prepare("SELECT * FROM usuarios WHERE usuario = :usuario AND password = :password"); // obtiene todos los datos donde usuario y contraseña sean coincidentes  
    $statement->execute([
        ':usuario' => $usuario,
        ':password' => $password
    ]); // ejecuta query con los parametros de usuario y contraseña 
    $resultado = $statement->fetch(); // almacena valores obtenidos del query
    
    if ($resultado !== false) {
        $_SESSION['usuario'] = $usuario; //crea variable global de la sesion con el usuario
        header('Location: '.RUTA.'validate.php'); // redireccion a validacion de rol
    } else {
        $errores .= '<li class="error">Tu usuario y/o contraseña son incorrectos.</li>'; // error de login
    }
}

require 'vistas/login.view.php';


?>