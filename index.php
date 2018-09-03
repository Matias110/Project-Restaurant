<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Restaurante</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cardo" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery-3.3.1.min.js"></script>
</head>
<body>
	<!-- Sección del contenido principal -->
	<section id="wrapper">
		<header>
			<img src="img/logo.png" alt="Logo del Restaurante">
			<nav>
				<ul>
					<li><a href="#">HOME</a></li>
					<li><a href="#">CARTA</a></li>
					<li><a href="#">PROMOCIONES</a></li>
					<li><a href="#">CONTÁCTANOS</a></li>
				</ul>
			</nav>
		</header>

		<section id="main">
			<h1>MENU DEL DÍA</h1>
			<?php 
             
             $platos = array (
              "carne.jpg",
              "ensaladas.jpg",
              "pasta.jpg",
              "pechuga.jpg",
              "pizza.jpg",
              "tarta.jpg",
              "picada.jpg"

             );

             $precios = array (
              "410 PESOS",
              "22O PESOS",
              "270 PESOS",
              "230 PESOS",
              "290 PESOS",
              "270 PESOS",
              "450 PESOS"

             );

             /*
              * http://php.net/manual/es/function.date.php
              */
        
            $diaSemana = date('w');

            $platoDia = $platos[$diaSemana];

            $precioDia = $precios[$diaSemana];

			?>

			<img class="centrar" src="img/<?php echo $platoDia ?>" alt="Plato del Día">
             
            <p class="precio"><?php echo $precioDia ?></p>

			<div class="service" id="servicios"></div>

			<script>

				$(document).ready(function(){
                   
                   $.getJSON('servicios.json', function(datos){

                   	for (var i in datos.prestaciones){

                   		var tiposServicios = datos.prestaciones[i].descripcion;

                   		$('#servicios').append(' / ' + tiposServicios + ' / ');

                   	}
                   });
				});

			</script>
		</section>

		<footer>
			<p>&copy;2018 | Todos los derechos reservados</p>
		</footer>

	</section>
</body>
</html>