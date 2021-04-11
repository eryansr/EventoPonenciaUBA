<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<title>Evento</title>
	<link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/styles2.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<link rel="stylesheet" href="css/font-awesome.min.css">
    <meta charset="utf-8">
</head>
<body>

	<nav class="navbar navbar-dark bg-dark navbar-expand-md fixed-top">
		<div class="container-fluid">
			<a class="navbar-brand" href="index.php"><img class="imgnavegar" src="imagenes/logo.png" alt="Logo"></a> <button class="navbar-toggler" data-target="#navbarResponsive" data-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span></button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="index.php">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" href="formulario.php">Formulario</a>
                    </li>
                    <li class="nav-item">
						<a class="nav-link" href="login.php">Iniciar Sesión</a>
                    </li>	
				</ul>
			</div>
		</div>
	</nav>
	
	<div class="container">
		<div class="row justify-content-center text-center">
			<div class="col-sm-12">
				<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="ordenes">
                    <br>
                    <br>
                    <br>
                    <h1>Formulario de Asistencia</h1>
                    <br>

                    <div class="form-group">
                        <input type="text" name="nombre" placeholder="Nombre" class="form-control">
                    </div>

                    <div class="form-group">
                        <input type="text" name="apellido1" placeholder="Primer Apellido" class="form-control">
                    </div>
                    
                    <div class="form-group">
                        <input type="text" name="apellido2" placeholder="Segundo Apellido" class="form-control">
                    </div>
                    
                    <div class="form-group">
                        <input type="text" name="cedula" placeholder="Número de Cédula" class="form-control">
                    </div>
                    
                    <div class="form-group">
                        <input type="text" name="direccion" placeholder="Dirección" class="form-control">
                    </div>

                    <div class="form-group">
                        <input type="text" name="telefono" placeholder="Teléfono" class="form-control">
                    </div>
                    
                    <div class="form-group">
                        <input type="text" name="email" placeholder="Correo Electrónico" class="form-control">
                    </div>

                    <ul class="error">
                        <?php if (!empty($errores)): ?>
                            <?php echo $errores; ?>
                        <?php endif; ?>
                        <?php if (!empty($exito)): ?>
                            <?php echo $exito; ?>
                        <?php endif; ?>
                    </ul>
                    <button type="submit" name="submit" class="btn btn-success">Registrarse</button>
                                        
                </form>
                
			</div>
		</div>
	</div>
    <br>
    <br>
	<!--- Pié de Página -->
	<footer>
		<div class="container">
			<div class="row text-center py-5">
				<div class="col-md-6">
					<img src="imagenes/logo.png" alt="logo">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt quidem facere aspernatur nulla, consequatur quaerat reiciendis, ex dolore optio fugit. Itaque veritatis dolore esse, facere ipsum tempora modi sit possimus.</p>
				</div>
				<div class="col-md-6">
                     <!--Aquí footer info de integrantes-->
				</div>
			</div>
		</div>
	</footer>


<!--- Scripts Utilizados -->
<script src="js/jquery-3.3.1.min.js"></script> 
<script src="bootstrap/js/bootstrap.min.js"></script>


</body>
</html>