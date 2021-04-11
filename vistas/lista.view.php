<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/styles2.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<link rel="stylesheet" href="css/font-awesome.min.css">
    <meta charset="utf-8">
    <title>Panel de Usuario</title>
</head>
<body class="bg-image">
    <nav class="navbar navbar-dark bg-dark navbar-expand-md fixed-top">
		<div class="container-fluid">
			<a class="navbar-brand" href="index.html"><img src="imagenes/logo.png" alt="logo"></a> <button class="navbar-toggler" data-target="#navbarResponsive" data-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span></button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link active" href="<?php echo RUTA.'lista.php'?>">Listado de Asistentes</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo RUTA.'close.php'?>">Cerrar Sesión</a>
					</li>
				</ul>
			</div>
		</div>
	    </nav>
    <div class="container">    
		<div class="row">	
			<div class="col-sm-12">
                <br>
                <br>
                <br>
                <br>
                <h1 class="title">Listado de Asistentes</h1>
                <br>
                <br>
                <div class="card text-left">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Asistentes</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="row">
                                <div class="col-sm-12">
                                    <div id="tablaDatos">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
			</div>
		</div>
	</div>
          
    <script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="js/sweetalert.min.js"></script>
	<script src="js/crud.js"></script>
       
    <script type="text/javascript">
		Asistente();
	</script>
</body>
</html>