<?php 

function conexion($bd_config){ //conexion con la base de datos
    
    try{
        $conexion = new PDO('mysql:host=localhost;dbname='.$bd_config['db_name'],$bd_config['user'],$bd_config['pass']); 
        return $conexion; 
    } catch (PDOException $e) {
        return false; 
    }
}

function iniciarSesion($table, $conexion) {
    $statement = $conexion->prepare("SELECT * FROM $table WHERE usuario = :usuario"); // selecciona todos los datos donde los usuarios sean coincidentes
    $statement->execute([
        ':usuario' => $_SESSION['usuario']
    ]); //ejecuta query con el paramentro del usuario de la sesión
    return $statement->fetch(PDO::FETCH_ASSOC); // retorna array con los datos coincidentes
}

?>

