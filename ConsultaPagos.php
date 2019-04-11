<!DOCTYPE html>
<html class="no-js">
<head>
	<meta charset="utf-8">
	<title></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Simple Line Icons -->
	<link rel="stylesheet" href="css/simple-line-icons.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<link rel="stylesheet" id="theme-switch"  href="css/style.css">
</head>

<body>
	<header role="banner" id="fh5co-header">
		<div class="container">
			<nav class="navbar navbar-default">
	        	<div class="navbar-header">
	        		<a class="navbar-brand" href="https://www.placetopay.com/web/home" style="background-image: url(images/logo2.jpg);"></a> 
	        	</div>
	        	<div id="navbar" class="navbar-collapse collapse">
	          		<ul class="nav navbar-nav navbar-right">
	          			<li class="active"><a href="RealizarPago1"><span>REALIZAR PAGO</span></a></li>
			            <li class="active"><a href="index.html"><span>IR ATRAS</span></a></li>
	          		</ul>
	        	</div>
		    </nav>

	  	</div>
	</header>

	<section id="fh5co-home" data-stellar-background-ratio="0.5">
		<div class="gradient"></div>
		<div class="container">
			<div class="text-wrap">
				<div class="text-inner">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">

							<?php 

								require_once "Clase_Principal.php";
								$obj = new Clase_Principal();
								$Consulta = $obj->ConsultarPago();	
							?>

							<table border="2" align="center" id="tabla2">
			
								<h1 align="center">COMPRAS REALIZADAS</h1>
								<tr >
									<td>COMPRADOR</td>
									<td>REFERNCIA</td>
									<td>DETALLE</td>
									<td>ESTATUS</td>	
								</tr>
								<?php foreach ($Consulta as $key): ?>
									<tr>
										<td><?php echo $key['Nombre']; ?></td>
										<td><?php echo $key['Referencia']; ?></td>
										<td><?php echo "<a href='DetalleCompra.php?Id=".$key['IdCompra']." 'title='Expandir'> <img src='images/expandir.png' width='40'> </a>" ?></td>
										<td><?php echo $key['Estatus']; ?></td>
									</tr>
								<?php endforeach ?>
							</table><br>

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</body>
</html>