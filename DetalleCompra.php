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
	          			<li class="active"><a href="index.html"><span>PANTALLA PRINCIPAL</span></a></li>
			            <li class="active"><a href="ConsultaPagos.php"><span>IR ATRAS</span></a></li>
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

								session_start();
								
								if (isset($_GET['Id']))
								{
									$_SESSION['ID'] = $_GET['Id'];
								}	
								$Buscar=$_SESSION['ID'];
								$Consulta=$obj->DetallePago($Buscar);
	 						?>

							<table border="1" align="center" id="tabla2">
			
								<h1 align="center">COMPRAS REALIZADAS</h1>
								<tr >
									<td>COMPRADOR</td>
									<td>EMAIL</td>
									<td>TLF</td>
									<td>DIRECCION</td>
									<td>CURRENCY</td>
									<td>VALOR</td>
									<td>IVA</td>
									<td>REFERNCIA</td>
									<td>FECHA EXP.</td>
									<td>BROWSER</td>	
								</tr>
								<?php foreach ($Consulta as $key): ?>
									<tr>
										<td><?php echo $key['Nombre']; ?></td>
										<td><?php echo $key['Email']; ?></td>
										<td><?php echo $key['Telefono']; ?></td>
										<td><?php echo $key['Direccion']; ?></td>
										<td><?php echo $key['Currency']; ?></td>
										<td><?php echo $key['Valor']; ?></td>
										<td><?php echo $key['IVA']; ?></td>
										<td><?php echo $key['Referencia']; ?></td>
										<td><?php echo $key['FechaExp']; ?></td>
										<td><?php echo $key['AgenteNav']; ?></td>
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