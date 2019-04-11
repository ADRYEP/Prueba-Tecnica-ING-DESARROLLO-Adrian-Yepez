<?php

//DATOS USUARIO(COMPRADOR)
	$nombre=$_POST['Nombre'];
	$mail=$_POST['mail'];
	$tlf=$_POST['tlf'];
	$direccion=$_POST['direccion'];
// DATOS PAYMENT
	$currency=$_POST['currency'];
	$valor=$_POST['valor'];
	$referencia=$_POST['referencia'];
	$fechaexp=$_POST['fechaexp'];
	$IVA = $valor * 16 / 100;
	$BROWSER = $_POST['agente'];

	require_once "Clase_Principal.php";

	$obj = new Clase_Principal();
		
		$result1 = $obj->insertarComprador($nombre,$mail,$tlf,$direccion);

		if ($result1==TRUE) {
			echo "<script>location.href='#'</script>";
			echo "Exito";
		}

		$result2 = $obj->insertarPayment($currency,$valor,$IVA,$referencia,$fechaexp,$BROWSER);

		if ($result2==TRUE) {
			echo "Payment insertado";
		}
?>
