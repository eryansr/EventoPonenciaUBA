<?php 

    require_once "../admin/crud.php";

    $id_asist=$_POST['id_asist'];

    echo Crud::eliminarAsistente($id_asist); // invoca metodo de crud.php para eliminar datos
   
?>