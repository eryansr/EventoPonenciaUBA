<?php
    
    require_once "Conexion.php";
    
    class Crud extends Conexion{
        
        public function mostrarAsistente(){
            $sql="SELECT id_asist,
                         nombre,
                         apellido1,
                         apellido2,
                         cedula,
                         direccion,
                         telefono,
                         email                         
                FROM asistentes"; // consulta todos los campos de la tabla asistentes
            $statement = Conexion::conectar()->prepare($sql);
            $statement->execute();
            return $statement->fetchAll(); // retorna array con todos los datos de la tabla clientes
            $statement->close();
        }
        
        public static function eliminarAsistente($id_asist) {
            $sql = "DELETE FROM asistentes WHERE id_asist = :id_asist"; // elimina datos coincidentes con su id
            $statement=Conexion::conectar()->prepare($sql);
            $statement->bindParam(":id_asist", $id_asist, PDO::PARAM_INT); 
            return $statement->execute();
            $statement->close();
        }
        
    }

?>