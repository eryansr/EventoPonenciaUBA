<?php 

    require 'admin/config.php';
    require 'functions.php';

    session_start();

    session_destroy(); // cierra sesión
    header('Location: '.RUTA.'login.php'); // retorna a login.php

?>