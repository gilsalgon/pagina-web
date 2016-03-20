
<?php include('configuracion.php'); ?>
<!DOCTYPE html> <!-- HTML5 -->
<html lang="es"> <!-- Idioma -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Ampersand PC Soluciones</title>
	<!-- Latest compiled and minified CSS -->
	<link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.6/paper/bootstrap.min.css" rel="stylesheet" integrity="sha384-2mX2PSpkRSXLQzmNzH3gwK6srb06+OfbDlYjbog8LQuALYJjuQ3+Yzy2JIWNV9rW" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo $enlace_base; ?>estatico/css/cover.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo $enlace_base; ?>estatico/css/estilo.css">
</head>
<body>
   <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand"><a href="<?php echo $enlace_base; ?>">Ampersand Pc</a></h3>
              <nav>
                <ul class="nav masthead-nav">
                  <li class="active"><a href="<?php echo $enlace_base; ?>"><i class="fa fa-home"></i> Inicio</a></li>
                  <li><a href="<?php echo $enlace_base; ?>cotizar.php"><i class="fa fa-briefcase"></i> Cotizar</a></li>
                  <li><a href="#"><i class="fa fa-users"></i> Quienes Somos</a></li>
                  <li><a href="#"><i class="fa fa-envelope"></i> Contacto</a></li>
                </ul>
              </nav>
            </div>
          </div>

          <div class="inner cover">
            <h1 class="cover-heading">Soporte T&eacute;cnico.</h1>
            <p class="lead">Soluciones a su medida.</p>
            <p class="lead">
              <a href="<?php echo $enlace_base; ?>contacto" class="btn btn-lg btn-danger">Contacteme</a>
            </p>
          </div>

          <div class="mastfoot">
            <div class="inner">
              <p>&copy; <?php echo date('Y'); ?> <a href="http://getbootstrap.com">Ampersand PC Soluciones</a>, diseñado por <a href="">Gilbert</a>.</p>
            </div>
          </div>

        </div>

      </div>

    </div>

    <!-- Bootstrap core JavaScript
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>
