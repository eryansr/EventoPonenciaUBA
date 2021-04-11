<?php

    require 'admin/config.php';
    require 'functions.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $nombre = ($_POST['nombre']);
        $apellido1 = ($_POST['apellido1']);
        $apellido2 = ($_POST['apellido2']);
        $cedula = ($_POST['cedula']);
        $direccion = ($_POST['direccion']);
        $telefono = ($_POST['telefono']);
        $email = ($_POST['email']);
        
        $errores = '';
        $exito = '';
   
    
        // validar textos

        if(empty($nombre) || empty($apellido1) || empty($apellido2) || empty($cedula) || empty($direccion) || empty($telefono) || empty($email)) { 
            
            // valida si existen campos vacíos
            $errores .= '<li class="error">Por favor rellene todos los campos</li>'; 
            
        } else {
            
            // validar si ya la cedula está en 2 ponencias
            
            $conexion = conexion($bd_config);
            $statement = $conexion->prepare('SELECT * FROM asistentes WHERE cedula = :cedula LIMIT 2'); //prepara la sentencia
            $statement->execute([
            ':cedula' => $cedula // ejecuta sentencia anterior con los parametros definidos, en este caso el id de usuario que está en la sesión
            ]);
            
            $resultado = $statement->fetch(); // obtiene los resultados de la sentencia y lo almacena en variable
            
            if ($resultado != false) { // si la variable es falsa significa que el usuario no ingresó sus datos personales
            
            $errores .= '<li class="error"> Solo puede asistir a 2 ponencias.</li>'; 
            }     
        }
        
        if ($errores == '') { // si no existen errores
            
            $conexion = conexion($bd_config); // conexion a BD
            $statement = $conexion->prepare('INSERT INTO asistentes (id_asist, nombre, apellido1, apellido2, cedula, direccion, telefono, email) 
            VALUES (null, :nombre, :apellido1, :apellido2, :cedula, :direccion, :telefono, :email)');  //prepara instancia del query

            $statement->execute([
                ':nombre' => $nombre, 
                ':apellido1' => $apellido1,
                ':apellido2' => $apellido2,
                ':cedula' => $cedula,
                ':direccion' => $direccion,
                ':telefono' => $telefono,
                ':email' => $email
            ]);  // ejecuta el query con los parámetros establecidos

            $errores .= '<li class="exito"> Los datos han sido ingresado Exitosamente.</li>'; 
        }
    } 

require 'vistas/formulario.view.php';

?>