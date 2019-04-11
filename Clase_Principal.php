<?php
	require_once "conexion.php";

	
	class Clase_Principal extends Conectar
	{
		public function __construct()
		{

			parent::__construct();
		}
/////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////FUNCIONES USUARIO///////////////////////////////////////////////////////
/////////////////////////////
		public function insertarComprador($nombre,$mail,$tlf,$direccion){

			if (($result = $this->_db->query("INSERT INTO `comprador`(`Nombre`, `Email`, `Telefono`, `Direccion`) VALUES ('$nombre','$mail','$tlf','$direccion')"))==FALSE) {

				echo $mail;
				echo $nombre;
				echo $tlf;
				echo $direccion;
				print("Error en la insercion");
				return FALSE;
			}
			return TRUE;
		}

///////////////////////////////////FUNCIONES PAYMENT////////////////////////////////////////////////////////

/////////////////////////////
		public function insertarPayment($currency,$valor,$IVA,$referencia,$fechaexp,$BROWSER){

			if (($result = $this->_db->query("INSERT INTO `payment`(`Currency`, `Valor`, `IVA`, `Referencia`, `FechaExp`,`AgenteNav`) VALUES ('$currency','$valor','$IVA','$referencia','$fechaexp','$BROWSER')"))==FALSE) {
				return FALSE;
			}
			return TRUE;
		}

///////////////////////////////FUNCIONES PAGOS////////////////////////////////////////////////////////////

/////////////////////////////
		public function ConsultarPago(){

			$result = $this->_db->query("SELECT comprador.Nombre, comprador.IdComprador, payment.idPayment, payment.Referencia, compra.Estatus FROM compra INNER JOIN comprador ON comprador.IdComprador = compra.IdComprador INNER JOIN payment ON compra.idPayment = payment.idPayment");
			$TotRegistros = mysqli_num_rows($result);

			if ($TotRegistros > 0) {
				
				$Pag_Tam = 5;

				$pagina= FALSE;

				if (isset($_GET['pagina'])) 
					$pagina=$_GET['pagina'];
			
					if (!$pagina) {
						$Inic=0;
						$pagina=1;
					}
					else
						$Inic = (($pagina - 1) * $Pag_Tam);


					$Pag_Tot=ceil($TotRegistros / $Pag_Tam);
				
					$consulta = $this->_db->query("SELECT comprador.Nombre, comprador.IdComprador, payment.idPayment, payment.Referencia, compra.Estatus, compra.IdCompra FROM compra INNER JOIN comprador ON comprador.IdComprador = compra.IdComprador INNER JOIN payment ON compra.idPayment = payment.idPayment LIMIT ".$Inic."," . $Pag_Tam);
					$Consul = $consulta->fetch_all(MYSQLI_ASSOC);			
				}	

				echo "<table align='center'>";
				echo "<tr>";
				echo "<td>";
				for ($i=1; $i <=$Pag_Tot ; $i++)
				echo " <a href='?pagina=".$i." '> " .$i. "</a>  ";
				echo "</td>";
				echo "</tr>";
				echo "</table>";
	

			return $Consul;
		}

//////////////////////////////////////
	public function DetallePago($Buscar){
		$result = $this->_db->query("SELECT comprador.*, payment.* FROM compra INNER JOIN comprador ON comprador.IdComprador = compra.IdCompra INNER JOIN payment ON payment.idPayment = compra.idPayment WHERE compra.IdCompra like $Buscar");
		$Consul = $result->fetch_all(MYSQLI_ASSOC);		
				return $Consul;
	}		
		

}




?>