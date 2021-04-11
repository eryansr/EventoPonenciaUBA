<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <title>Evento</title>
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/styles2.css" rel="stylesheet">
  <script src="js/Chart.js"></script>

</head>
<body>

  <nav class="navbar navbar-dark bg-dark navbar-expand-md fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php"><img class="imgnavegar" src="imagenes/logo.png" alt="Logo"></a> <button class="navbar-toggler" data-target="#navbarResponsive" data-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link active" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="formulario.php">Formulario</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Iniciar Sesión</a>
          </li> 
        </ul>
      </div>
    </div>
  </nav>
  <div class="container" style="padding-top: 200px;">
    <div class="row">
         <canvas id="pie-chart" width="600" height="450"></canvas>
                        <script type="text/javascript">
                          var chart = new Chart(document.getElementById("pie-chart"), {
                                  type: 'pie',
                                  data: {
                                    labels: ["Regulares", "Nuevos"],
                                    datasets: [{
                                      label: "Population (millions)",
                                      backgroundColor: ["#eb8d5e", "#1e2147"],
                                      data: [33,12]
                                    }]
                                  },
                                  options: {
                                    title: {
                                      display: true,
                                      text: 'Estadísticas de Nuevos / Regulares'
                                    }
                                  }
                              });
                        </script>
     
    </div>  
  </div>





<!--- Scripts Utilizados -->
<script src="js/jquery-3.3.1.min.js"></script> 
<script src="bootstrap/js/bootstrap.min.js"></script>
 

</body>
</html>
