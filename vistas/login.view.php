<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inicio de Sesión</title>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body class="bg-image">
    <div class="container">
        
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
            <h1 class="title">Iniciar Sesión</h1>
            <br>
            <div class="input-group">
                <i class="fa fa-user-o icons" aria-hidden="false"></i>
                <input type="text" name="usuario" placeholder="Usuario" class="form-control">
            </div>
            
             <div class="input-group">
                <i class="fa fa-lock icons" aria-hidden="false"></i>
                <input type="password" name="password" placeholder="Contraseña" class="form-control">
            </div>
            
            <ul class="error">
                <?php if (!empty($errores)): ?>
                    <?php echo $errores; ?>
                <?php endif; ?>
            </ul>
                         
            <button type="submit" name="submit" class="btn btn-flat-green">Ingresar</button>
            <br>
            <br>
            <a href="<?php echo RUTA.'index.php'?>" class="login-link">Volver al Inicio</a>
            
        </form>
    </div>
</body>
</html>